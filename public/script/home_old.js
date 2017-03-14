Number.prototype.numbre_format = function(n, x, s, c) {
    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
        num = this.toFixed(Math.max(0, ~~n));

    return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
};
var HomeManager = function () {

    var p = function () {

        $('#relatorio').click(function(){
            var users_ids  = $('#users').map(function() {return $(this).val(); }).get();
            $.get(base_url('/relatorio'),{id:1}, function(data) {
                var datos = data.split('*')
                var ht = "";
                for (var i= 0; i < datos.length ; i++) {
                    var user = datos[i].split(';');
                    var anio = user[1].split(':');
                    ht += '<div class="table-responsive">';
                    ht += '<table class="table  table-striped table-bordered table-hover table-checkable order-column">';
                    ht += '<caption class="bg-success">'+user[0]+'</caption>';
                    ht += '<thead><tr><th class="text-center" width="20%">Período</th><th class="text-center" width="20%">Receita Líquida</th><th class="text-center" width="20%">Custo Fixo</th><th class="text-center" width="20%">Comissão</th><th class="text-center" width="20%">Lucro</th></tr></thead>'
                    ht += '<tbody>';
                    var deuda = 0;
                    for(var j = 0; j< anio.length; j++){
                        var sal = anio[j].split('@');
                        var liq = parseFloat(sal[1]);
                        ht += '<tr>';
                        ht += '<td>'+sal[0]+'</td>';
                        ht += '<td style="text-align:right">'+liq.numbre_format(2, 3, '.', ',')+'</td>';
                        ht += '<td>ggggg</td>';
                        ht += '<td>uuu</td>';
                        ht += '<td>llll</td>';
                        ht += '</tr>';
                        deuda +=parseFloat(sal[1]);

                    }

                    ht += '</tbody>';
                    ht += '<tfoot>';
                    ht += '<tr>';
                    // ht += '<th></th>';
                    ht += '<th colspan="2" style="text-align:right">'+deuda.numbre_format(2, 3, '.', ',')+'<th>';
                    ht += '</tr>';
                    ht += '</tbody>';

                }
                $('#content').load( "load-page",{id:1} ,function(){

                });
                //$('#content').append(ht);

                //$('#content').fadeIn('slow');
            });

        });
        $('#grafico').click(function(){
            alert('ffff');
        });
        $('#pizza').click(function(){
            alert('ffff');
        });

        $("#users").multiSelect(), $("#users").multiSelect({
            selectableOptgroup: !0
        })
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
