<?php
/* Smarty version 3.1.40, created on 2022-06-14 08:16:07
  from '/home/amen/public_html/sygis-ipm/assets/css/pstyle/administration/account/users/adduser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62a843c7ebe685_28160225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73ece07f151cd537093cbc072617697f22f361a1' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/assets/css/pstyle/administration/account/users/adduser.tpl',
      1 => 1654470205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a843c7ebe685_28160225 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['pagestyle']->value)) && $_smarty_tpl->tpl_vars['pagestyle']->value === 'adduser') {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/css/bootstrap-duallistbox.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/css/chosen.min.css" />
<?php }?>
<style>
    .addusertab .row {
        margin-left: 0px;
        margin-right: 0px;
    }
    li.addlink a, li.listlink a, li.userrolelink a{
        font-weight: 600;
    }
</style>
<?php }
}
