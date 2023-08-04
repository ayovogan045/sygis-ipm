<?php
/* Smarty version 3.1.40, created on 2023-05-24 18:45:25
  from '/home/amen/public_html/sygis-ipm/assets/js/pscript/inscription/registration/addregistration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_646e5b45766a78_73952239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '882f7feb6da417f1d94ab500e02e3ea202101478' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/assets/js/pscript/inscription/registration/addregistration.tpl',
      1 => 1684953867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646e5b45766a78_73952239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['pagescript']->value)) && $_smarty_tpl->tpl_vars['pagescript']->value === 'addregistration') {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1743367239646e5b45762fb3_60825967', "script");
?>

<?php }
}
/* {block "script"} */
class Block_1743367239646e5b45762fb3_60825967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1743367239646e5b45762fb3_60825967',
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
/js/jquery.bootstrap-duallistbox.min.js"><?php echo '</script'; ?>
>
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

                var candidatselectedlist = $('select[name="candidatselectedlist[]"]').bootstrapDualListbox(
                        {
                            infoTextFiltered: '<span class="label label-purple label-lg">Filtré</span>',
                            filterTextClear: 'Afficher tout',
                            filterPlaceHolder: 'Filtrer',
                            infoText: 'Tous les éléments <?php echo 0;?>
',
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
        <?php echo '</script'; ?>
>
    <?php
}
}
/* {/block "script"} */
}
