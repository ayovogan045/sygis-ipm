<?php
/* Smarty version 3.1.40, created on 2022-06-14 08:16:07
  from '/home/amen/public_html/sygis-ipm/application/views/templates/skeleton/alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62a843c7f115a5_04062344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9262c006518b4ac69b8404754a93f41c9cc2451' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/skeleton/alert.tpl',
      1 => 1654470610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a843c7f115a5_04062344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161713793262a843c7f0dd94_36920805', "alert");
}
/* {block "alert"} */
class Block_161713793262a843c7f0dd94_36920805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'alert' => 
  array (
    0 => 'Block_161713793262a843c7f0dd94_36920805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['info']->value)) && $_smarty_tpl->tpl_vars['info']->value != '') {?>
        <div class="alert alert-block alert-info">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <i class="ace-icon fa fa-info blue"></i>

            <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['success']->value)) && $_smarty_tpl->tpl_vars['success']->value != '') {?>
        <div class="alert alert-block alert-success">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <i class="ace-icon fa fa-check-circle green"></i>

            <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['error']->value)) && $_smarty_tpl->tpl_vars['error']->value != '') {?>
        <div class="alert alert-block alert-danger">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <i class="ace-icon fa fa-check-circle red"></i>

            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['warning']->value)) && $_smarty_tpl->tpl_vars['warning']->value != '') {?>
        <div class="alert alert-block alert-warning">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <strong class="orange bold bigger-110">
                <i class="ace-icon fa fa-warning btn-sm bigger-110 orange"></i>
                <?php echo $_smarty_tpl->tpl_vars['warning']->value;?>

            </strong>
        </div>
    <?php }
}
}
/* {/block "alert"} */
}
