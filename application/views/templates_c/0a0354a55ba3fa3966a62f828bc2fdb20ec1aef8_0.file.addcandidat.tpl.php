<?php
/* Smarty version 3.1.40, created on 2023-05-23 19:12:37
  from '/home/amen/public_html/sygis-ipm/assets/js/pscript/inscription/candidat/addcandidat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_646d1025648dd1_41613064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a0354a55ba3fa3966a62f828bc2fdb20ec1aef8' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/assets/js/pscript/inscription/candidat/addcandidat.tpl',
      1 => 1654470252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646d1025648dd1_41613064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['pagescript']->value)) && $_smarty_tpl->tpl_vars['pagescript']->value === 'addcandidat') {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_758448853646d10256472d7_85231017', "script");
?>

<?php }
}
/* {block "script"} */
class Block_758448853646d10256472d7_85231017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_758448853646d10256472d7_85231017',
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
