<?php
/* Smarty version 3.1.40, created on 2022-07-29 19:40:03
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/administration/account/user/userformpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62e43793657884_95541728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83e75e96d3c7d37a2787b1d911e266adcf305ec8' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/administration/account/user/userformpage.tpl',
      1 => 1654470613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:skeleton/breadcrumb.tpl' => 1,
    'file:skeleton/setting.tpl' => 1,
    'file:skeleton/header.tpl' => 1,
    'file:skeleton/alert.tpl' => 1,
    'file:content/administration/account/user/userform.tpl' => 1,
  ),
),false)) {
function content_62e43793657884_95541728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('content', "content");
$_smarty_tpl->_assignInScope('pagescript', "adduser");
$_smarty_tpl->_assignInScope('pagestyle', "adduser");
$_smarty_tpl->_assignInScope('pagetitle', "adduser");
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78630843362e43793655295_87476565', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_78630843362e43793655295_87476565 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_78630843362e43793655295_87476565',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="main-content">
        <div class="main-content-inner">
            <?php $_smarty_tpl->_subTemplateRender("file:skeleton/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="page-content">
                <?php $_smarty_tpl->_subTemplateRender("file:skeleton/setting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_smarty_tpl->_subTemplateRender("file:skeleton/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:skeleton/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <div class="row">
                    <div class="col-xs-12">
                        <!-- formulaire -->
                            <?php $_smarty_tpl->_subTemplateRender("file:content/administration/account/user/userform.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
