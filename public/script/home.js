var HomeManager = function () {

    var p = function () {

        $('#relatorio').click(function(){
            var users_ids  = $('#users').map(function() {return $(this).val(); }).get();
            var mai = $('#anio_inicial').find('option').filter(':selected').val()+'-'+$('#mes_inicial').find('option').filter(':selected').val();
            var maf = $('#anio_final').find('option').filter(':selected').val()+'-'+$('#mes_final').find('option').filter(':selected').val();
            if(users_ids.length > 0){
                $('#content').load( "relatorio",{mai:mai, maf:maf, users_ids:users_ids} ,function(){

                });
            }
        });

        $('#grafico').click(function(){
            var users_ids  = $('#users').map(function() {return $(this).val(); }).get();
            var mai = $('#anio_inicial').find('option').filter(':selected').val()+'-'+$('#mes_inicial').find('option').filter(':selected').val();
            var maf = $('#anio_final').find('option').filter(':selected').val()+'-'+$('#mes_final').find('option').filter(':selected').val();
            if(users_ids.length > 0){

                $.get( "grafico",{mai:mai, maf:maf, users_ids:users_ids} ,function(response, status, xhr){
                    var meses   = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
                    var texto   = 'Perfonmance Comercial';

                    var mes_i   =  parseInt($('#mes_inicial').find('option').filter(':selected').val());
                    var mes_f   =  parseInt($('#mes_final').find('option').filter(':selected').val());
                    var desde   = meses[mes_i-1]+' de '+ $('#anio_inicial').find('option').filter(':selected').val();
                    var hasta   = meses[mes_f-1]+' de '+ $('#anio_final').find('option').filter(':selected').val();
                    texto       += desde+' hasta '+hasta;
                    var data = response.data;
                    var meses = response.meses;
                    var chart = {
                        type: 'spline',
                        name: 'Costo Medio',
                        data: response.line,
                        marker: {lineWidth: 2, lineColor: Highcharts.getOptions().colors[3], fillColor: 'white'},

                    };

                    // var chart = {
                    //     plotBackgroundColor: null,
                    //     plotBorderWidth: null,
                    //     plotShadow: false,
                    // };
                    data.push(chart);
                    data.chart = chart;

                    $("#content").highcharts({
                        title: {text: texto},
                        xAxis: {categories: meses },
                        tooltip: {
                            formatter: function() {
                                return 'El valor para <b>' + this.x + '</b> es de <b>' + this.y.number_format(2, 3, '.', ',') + '</b>, en la serie de '+ this.series.name;
                            }
                        },
                        plotOptions: {
                            column: {
                                dataLabels: {
                                    enabled: true,
                                    crop: false,
                                    overflow: 'none',
                                    color: '#FF0000',
                                    //backgroundColor: '#CCCCCC',
                                    borderWidth: '1',
                                    align: 'center',
                                    x: 0,
                                    y: 0,
                                    rotation: 0,
                                    formatter: function() {
                                        return this.y.number_format(2, 3, '.', ',');
                                    }
                                }
                            }
                        },
                        yAxis: {
                            title:
                            {
                                text: "Salarios"
                            },
                            labels: {
                                formatter: function () {
                                    return this.value.number_format(0, 3, '.', ',') ;
                                }
                            }
                        },
                        labels: {
                            items: [{
                                html: '',
                                style: {
                                    left: '50px',
                                    top: '18px',
                                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                                }
                            }],
                        },
                        series: data,
                        credits: {
                            enabled: false
                        },
                    });
                }, 'json');
}
});

$('#pizza').click(function(){
    var users_ids  = $('#users').map(function() {return $(this).val(); }).get();
    var mai = $('#anio_inicial').find('option').filter(':selected').val()+'-'+$('#mes_inicial').find('option').filter(':selected').val();
    var maf = $('#anio_final').find('option').filter(':selected').val()+'-'+$('#mes_final').find('option').filter(':selected').val();
    if(users_ids.length > 0){
        $.get("pizza",{mai:mai, maf:maf, users_ids:users_ids} ,function(response, status, xhr){


            var meses   = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
            var mes_i   =  parseInt($('#mes_inicial').find('option').filter(':selected').val());
            var mes_f   =  parseInt($('#mes_final').find('option').filter(':selected').val());
            var desde   = meses[mes_i-1]+' de '+ $('#anio_inicial').find('option').filter(':selected').val();
            var hasta   = meses[mes_f-1]+' de '+ $('#anio_final').find('option').filter(':selected').val();
            texto       = desde+' hasta '+hasta;

            var chart = {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
            };

            var title = {
                text: texto
            };
            var tooltip = {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            };
            var plotOptions = {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,

                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        },
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ '<span style="color:#FF0000">'+this.percentage.format(2) +'%</span>';
                        }
                    },
                    showInLegend: true
                }
            };
            var data = response;
            var series= [{
                type: 'pie',
                name: 'Browser share',
                data: data

            }];

            var credits = {enabled: false}

            var json = {};
            json.chart = chart;
            json.title = title;
            json.tooltip = tooltip;
            json.series = series;
            json.plotOptions = plotOptions;
            json.credits = credits;
            $('#content').highcharts(json);
        }, 'json');
    }
});

$("#users").multiSelect(), $("#users").multiSelect({
    selectableOptgroup: !0
});
};

return {
    init: function () {
        jQuery().DataTable && (p());
    }
};
}();
App.isAngularJsApp() === !1 && jQuery(document).ready(function () {
    HomeManager.init();
});

Number.prototype.format = function(n, x) {
    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
    num = this.toFixed(Math.max(0, ~~n))
    return num.replace(new RegExp(re, 'g'), '$&,');
};

Number.prototype.number_format = function(n, x, s, c) {
    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
    num = this.toFixed(Math.max(0, ~~n));

    return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
};

Number.prototype.formatmoney = function(c, d, t){
    var n = this,
    c = isNaN(c = Math.abs(c)) ? 2 : c,
    d = d == undefined ? "." : d,
    t = t == undefined ? "," : t,
    s = n < 0 ? "-" : "",
    i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
    j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};