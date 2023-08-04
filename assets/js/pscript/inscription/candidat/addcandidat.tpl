{if isset($pagescript) && $pagescript === 'addcandidat'}
    {block name="script"}
        <!-- page specific plugin scripts for form-->
        <!--[if lte IE 8]>
                          <script src="{$assets_url}/js/excanvas.min.js"></script>
                        <![endif]-->
        <script src="{$assets_url}/js/jquery-ui.bootstrap.min.js"></script>
        <script src="{$assets_url}/js/jquery-ui.custom.min.js"></script>
        <script src="{$assets_url}/js/jquery.ui.touch-punch.min.js"></script>
        <script src="{$assets_url}/js/chosen.jquery.min.js"></script>
        <script src="{$assets_url}/js/autosize.min.js"></script>

        <!-- page specific plugin scripts for table-->
        <script src="{$assets_url}/js/bootbox.js"></script>

        <!-- ace scripts -->
        <script src="{$assets_url}/js/ace-elements.min.js"></script>
        <script src="{$assets_url}/js/ace.min.js"></script>

        <!-- inline scripts related to this page for form-->
        <script type="text/javascript">
            jQuery(function ($) {

                $(document).on("click", ".browse", function () {
                    var file = $(this).parents().find(".file");
                    file.trigger("click");
                });
                $('input[type="file"]').change(function (e) {
                    var fileName = e.target.files[0].name;
                    $("#file").val(fileName);

                    var reader = new FileReader();
                    reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("preview").src = e.target.result;
                    };
                    // read the image file as a data URL.
                    reader.readAsDataURL(this.files[0]);
                });

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
    {/block}
{/if}