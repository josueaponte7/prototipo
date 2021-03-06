var TableDatatablesManaged = function () {
    var e = function () {
        var e = $("#tmodulo");
        e.DataTable({
            "language": {
                "url": public_url('js/es.json')
            },
            pagingType: "bootstrap_full_number",
            iDisplayLength: 5,
            iDisplayStart: 0,
            bStateSave: true,
            lengthMenu: [[5, 15, 20, -1], [5, 15, 20, "All"]],
            pageLength: 5,
            // pagingType: "bootstrap_full_number",
            columnDefs: [
            {orderable: false, targets: [0, 1]},
            {searchable: false, targets: [0, 1]},
            {className: "dt-right"}
            ],
            order: [[1, "desc"]],
            aoColumns: [
            {"sWidth": "4%",},
            {"sWidth": "4%",},
            {"sWidth": "40%"},
            {"sWidth": "4%"},
            {"sWidth": "4%"},
            {"sWidth": "70%"},
            {"sWidth": "4%"},
            {"sWidth": "10%"}

            ],
            //"processing": true,
            //"serverSide": true,
            //"ajax": base_url("seguridad/CModulo/tabla_ajax")
        });

        e.find('tbody').on('click', 'tr', function () {
            var $this  = $(this);
            var id     = $this.data('id');
            var ids    = e.row($this.closest('tr')).id();
            var row    = e.row('#' + id).node();
            var first  = $this.attr('class').split(' ')[0];
            row_action = $this.closest('tr').index();
        });

        e.find(".group-checkable").change(function () {
            var e = jQuery(this).attr("data-set"),
            t = jQuery(this).is(":checked");
            jQuery(e).each(function () {
                t ? ($(this).prop("checked", !0), $(this).parents("tr").addClass("active")) : ($(this).prop("checked", !1), $(this).parents("tr").removeClass("active"))
            });
        }), e.on("change", "tbody tr .checkboxes", function () {
            $(this).parents("tr").toggleClass("active");
        });
    };

    var p = function () {
        var e = $("#tperfil");
        var p = e.DataTable({
            "language": {
                "url": public_url('js/es.json')
            },
            pagingType: "bootstrap_full_number",
            iDisplayLength: 5,
            iDisplayStart: 0,
            bStateSave: true,
            lengthMenu: [[5, 15, 20, -1], [5, 15, 20, "All"]],
            pageLength: 5,
            columnDefs: [
                {orderable: false, targets: [0, 1]},
                {searchable: false, targets: [0, 1]},
                {className: "dt-right"}
            ],
            order: [[2, "desc"]],

            aoColumns: [
                {"sWidth": "4%",},
                {"sWidth": "4%",},
                {"sWidth": "90%"},
                {"sWidth": "4%"}
            ],

            // "processing": true,
            // "serverSide": true,
            // "ajax": base_url("/seguridad/perfil/tabla_ajax")
        });

        e.find('tbody tr').on('click', 'td:gt(0)', function () {
            var $this  = $(this);
            var id     = $this.closest('tr').data('id');
            var ids    = p.row($this.closest('tr')).id();
            var row    = p.row('#' + id).node();
            row_action = $this.closest('tr').index();
            $.buscar('/seguridad/perfil/buscar',{id:id},'', function(data, textStatus, xhr) {
                $.typeData(data)
                $('#guardar').attr('disabled', true);
            });

        });

        e.find(".group-checkable").change(function () {
            var e = jQuery(this).attr("data-set"),
            t = jQuery(this).is(":checked");
            jQuery(e).each(function () {
                t ? ($(this).prop("checked", !0), $(this).parents("tr").addClass("active")) : ($(this).prop("checked", !1), $(this).parents("tr").removeClass("active"))
            });
        }), e.on("change", "tbody tr .checkboxes", function () {
            $(this).parents("tr").toggleClass("active");
        });
    };


    return {
        init: function () {
            jQuery().DataTable && (e(), p());
        }
    };
}();
App.isAngularJsApp() === !1 && jQuery(document).ready(function () {
    TableDatatablesManaged.init();
});