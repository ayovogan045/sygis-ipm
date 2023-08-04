{if isset($pagescript) && $pagescript === 'semester'}
        {block name="script"}
            <!-- page specific plugin scripts for form-->
            <!--[if lte IE 8]>
                              <script src="{$assets_url}/js/excanvas.min.js"></script>
                            <![endif]-->
            <script src="{$assets_url}/js/jquery-ui.custom.min.js"></script>
            <script src="{$assets_url}/js/jquery.ui.touch-punch.min.js"></script>
            <script src="{$assets_url}/js/chosen.jquery.min.js"></script>
            <script src="{$assets_url}/js/autosize.min.js"></script>

            <!-- page specific plugin scripts for table-->
            <script src="{$assets_url}/js/jquery.dataTables.min.js"></script>
            <script src="{$assets_url}/js/jquery.dataTables.bootstrap.min.js"></script>
            <script src="{$assets_url}/js/dataTables.buttons.min.js"></script>
            <script src="{$assets_url}/js/buttons.flash.min.js"></script>
            <script src="{$assets_url}/js/buttons.html5.min.js"></script>
            <script src="{$assets_url}/js/buttons.print.min.js"></script>
            <script src="{$assets_url}/js/buttons.colVis.min.js"></script>
            <script src="{$assets_url}/js/dataTables.select.min.js"></script>
            <script src="{$assets_url}/js/bootbox.js"></script>

            <!-- ace scripts -->
            <script src="{$assets_url}/js/ace-elements.min.js"></script>
            <script src="{$assets_url}/js/ace.min.js"></script>

            <!-- inline scripts related to this page for form-->
            <script type="text/javascript">
                jQuery(function ($) {

                    if (!ace.vars['touch']) {
                        $('.chosen-select').chosen({
                            allow_single_deselect: true
                        });
                        //resize the chosen on window resize
                        $(window)
                                .off('resize.chosen')
                                .on('resize.chosen', function () {
                                    $('.chosen-select').each(function () {
                                        var $this = $(this);
                                        $this.next().css({
                                            'width': $this.parent().width()
                                        });
                                    })
                                }).trigger('resize.chosen');
                        //resize chosen on sidebar collapse/expand
                        $(document).on('settings.ace.chosen', function (e, event_name, event_val) {
                            if (event_name != 'sidebar_collapsed')
                                return;
                            $('.chosen-select').each(function () {
                                var $this = $(this);
                                $this.next().css({
                                    'width': $this.parent().width()
                                });
                            })
                        });
                        $('#chosen-multiple-style .btn').on('click', function (e) {
                            var target = $(this).find('input[type=radio]');
                            var which = parseInt(target.val());
                            if (which == 2)
                                $('#form-field-select-4').addClass('tag-input-style');
                            else
                                $('#form-field-select-4').removeClass('tag-input-style');
                        });
                    }
                });
            </script>

            <!-- inline scripts related to this page for table -->
            <script type="text/javascript">
                jQuery(function ($) {
                    //initiate dataTables plugin
                    var myTable =
                            $('#dynamic-table')
                            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                            .DataTable({

                                bAutoWidth: false,
                                "aoColumns": [
                                    {
                                        "bSortable": false
                                    },
                                    null, null, null, null, null, null,
                                    {
                                        "bSortable": false
                                    }
                                ],
                                "aaSorting": [],

                                pagingType: "simple_numbers",
                                lengthMenu: [5, 10, 15, 20, 25],
                                pageLength: 5,
                                //"bProcessing": true,
                                //"bServerSide": true,
                                //"sAjaxSource": "http://127.0.0.1/table.php"	,

                                //,
                                //"sScrollY": "200px",
                                //"bPaginate": false,

                                //"sScrollX": "100%",
                                //"sScrollXInner": "120%",
                                //"bScrollCollapse": true,
                                //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                                //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                                //"iDisplayLength": 50

                                select: {
                                    style: 'multi'
                                },

                                "language": {
                                    processing: "Traitement en cours...",
                                    search: "Rechercher&nbsp;:",
                                    lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
                                    info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                                    infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                                    infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                                    infoPostFix: "",
                                    loadingRecords: "Chargement en cours...",
                                    zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                                    emptyTable: "Aucune donnée disponible dans le tableau",
                                    paginate: {
                                        first: "Premier",
                                        previous: "Pr&eacute;c&eacute;dent",
                                        next: "Suivant",
                                        last: "Dernier"
                                    },
                                    aria: {
                                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                                    }
                                }

                            });

                    $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                    new $.fn.dataTable.Buttons(myTable, {
                        buttons: [
                            {
                                "extend": "colvis",
                                "text": "<i class='fa fa-search bigger-110 blue'></i> <span class=''>Afficher/cacher colonnes</span>",
                                "className": "btn btn-white btn-sm",
                                columns: ':not(:first):not(:last)'
                            },
                            {
                                "extend": "copy",
                                "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class=''>Copier</span>",
                                "className": "btn btn-white btn-sm"
                            }
                        ]
                    });
                    myTable.buttons().container().appendTo($('.tableTools-container'));
                    //style the message box
                    var defaultCopyAction = myTable.button(1).action();
                    myTable.button(1).action(function (e, dt, button, config) {
                        defaultCopyAction(e, dt, button, config);
                        $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                    });
                    var defaultColvisAction = myTable.button(0).action();
                    myTable.button(0).action(function (e, dt, button, config) {

                        defaultColvisAction(e, dt, button, config);
                        if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                            $('.dt-button-collection')
                                    .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                                    .find('a').attr('href', '#').wrap("<li />")
                        }
                        $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
                    });
                    ////

                    setTimeout(function () {
                        $($('.tableTools-container')).find('a.dt-button').each(function () {
                            var div = $(this).find(' > div').first();
                            if (div.length == 1)
                                div.tooltip({
                                    container: 'body', title: div.parent().text()
                                });
                            else
                                $(this).tooltip({
                                    container: 'body', title: $(this).text()
                                });
                        });
                    }, 500);
                    myTable.on('select', function (e, dt, type, index) {
                        if (type === 'row') {
                            $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                        }
                    });
                    myTable.on('deselect', function (e, dt, type, index) {
                        if (type === 'row') {
                            $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                        }
                    });
                    /////////////////////////////////
                    //table checkboxes
                    $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                    //select/deselect all rows according to table header checkbox
                    $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function () {
                        var th_checked = this.checked; //checkbox inside "TH" table header

                        $('#dynamic-table').find('tbody > tr').each(function () {
                            var row = this;
                            if (th_checked)
                                myTable.row(row).select();
                            else
                                myTable.row(row).deselect();
                        });
                    });
                    //select/deselect a row when the checkbox is checked/unchecked
                    $('#dynamic-table').on('click', 'td input[type=checkbox]', function () {
                        var row = $(this).closest('tr').get(0);
                        if (this.checked)
                            myTable.row(row).deselect();
                        else
                            myTable.row(row).select();
                    });
                    $(document).on('click', '#dynamic-table .dropdown-toggle', function (e) {
                        e.stopImmediatePropagation();
                        e.stopPropagation();
                        e.preventDefault();
                    });
                    /********************************/
                    //add tooltip for small view action buttons in dropdown menu
                    $('[data-rel="tooltip"]').tooltip({
                        placement: tooltip_placement
                    });

                    //tooltip placement on right or left
                    function tooltip_placement(context, source) {
                        var $source = $(source);
                        var $parent = $source.closest('table');
                        var off1 = $parent.offset();
                        var w1 = $parent.width();
                        var off2 = $source.offset();
                        //var w2 = $source.width();

                        if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                            return 'top';
                        return 'top';
                    }

                    $(function () {
                        $('[data-toggle="tooltip"]').tooltip()
                    });

                });
            </script> 
        {/block}
    {/if}