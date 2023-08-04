<?php
/* Smarty version 3.1.40, created on 2022-06-14 16:06:03
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/locality/city/citypage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62a8b1eb197940_00608381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d34ab2bcd20d09df63d2e0d61a6304ef22eab4c' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/locality/city/citypage.tpl',
      1 => 1654470618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:skeleton/breadcrumb.tpl' => 1,
    'file:skeleton/setting.tpl' => 1,
    'file:skeleton/header.tpl' => 1,
    'file:skeleton/alert.tpl' => 1,
    'file:content/basedata/locality/city/cityform.tpl' => 1,
    'file:content/basedata/locality/city/citylist.tpl' => 1,
  ),
),false)) {
function content_62a8b1eb197940_00608381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('content', "content");
$_smarty_tpl->_assignInScope('pagescript', "city");
$_smarty_tpl->_assignInScope('pagestyle', "city");
$_smarty_tpl->_assignInScope('pagetitle', "city");
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34393622662a8b1eb194db9_16752968', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_34393622662a8b1eb194db9_16752968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_34393622662a8b1eb194db9_16752968',
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
                            <?php $_smarty_tpl->_subTemplateRender("file:content/basedata/locality/city/cityform.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <!-- Table -->
                            <?php $_smarty_tpl->_subTemplateRender("file:content/basedata/locality/city/citylist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
