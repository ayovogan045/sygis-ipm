{if isset($pagescript) && $pagescript === 'addregistration'}
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
        <script src="{$assets_url}/js/jquery.bootstrap-duallistbox.min.js"></script>
        <script src="{$assets_url}/js/bootbox.js"></script>

        <!-- ace scripts -->
        <script src="{$assets_url}/js/ace-elements.min.js"></script>
        <script src="{$assets_url}/js/ace.min.js"></script>

        <!-- inline scripts related to this page for form-->
        <script type="text/javascript">
            jQuery(function ($) {

                var candidatselectedlist = $('select[name="candidatselectedlist[]"]').bootstrapDualListbox(
                        {
                            infoTextFiltered: '<span class="label label-purple label-lg">Filtré</span>',
                            filterTextClear: 'Afficher tout',
                            filterPlaceHolder: 'Filtrer',
                            infoText: 'Tous les éléments {0}',
                            infoTextEmpty: 'Liste vide'

                        });
                var container1 = permissionselectedlist.bootstrapDualListbox('getContainer');
                container1.find('.btn').addClass('btn-white btn-info btn-bold');

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

                //in ajax mode, remove remaining elements before leaving page
                $(document).one('ajaxloadstart.page', function (e) {
                    $('[class*=select2]').remove();
                    $('select[name="permissionselectedlist[]"]').bootstrapDualListbox('destroy');
                    $('.rating').raty('destroy');
                    $('.multiselect').multiselect('destroy');
                });

            });
        </script>
    {/block}
{/if}