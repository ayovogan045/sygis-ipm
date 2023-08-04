<?php
/* Smarty version 3.1.40, created on 2022-06-14 08:16:08
  from '/home/amen/public_html/sygis-ipm/assets/js/pscript/inscription/addcandidat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62a843c804b1f9_11370529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d12acc4e4131b69234585fdf65c35f1c73a3e19' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/assets/js/pscript/inscription/addcandidat.tpl',
      1 => 1654470252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a843c804b1f9_11370529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['pagescript']->value)) && $_smarty_tpl->tpl_vars['pagescript']->value === 'addcandidat') {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192110508662a843c8049475_80492441', "script");
?>

<?php }
}
/* {block "script"} */
class Block_192110508662a843c8049475_80492441 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_192110508662a843c8049475_80492441',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- page specific plugin scripts for form-->
        <!--[if lte IE 8]>
                          <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/excanvas.min.js"><?php echo '</script'; ?>
>
                        <![endif]-->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/jquery-ui.bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/jquery-ui.custom.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/jquery.ui.touch-punch.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/chosen.jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/autosize.min.js"><?php echo '</script'; ?>
>

        <!-- page specific plugin scripts for table-->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/bootbox.js"><?php echo '</script'; ?>
>

        <!-- ace scripts -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/ace-elements.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/ace.min.js"><?php echo '</script'; ?>
>

        <!-- inline scripts related to this page for form-->
        <?php echo '<script'; ?>
 type="text/javascript">
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
        <?php echo '</script'; ?>
>
    <?php
}
}
/* {/block "script"} */
}
