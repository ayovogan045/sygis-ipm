<?php
/* Smarty version 3.1.40, created on 2022-06-14 15:31:45
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/locality/country/countrypage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62a8a9e15184d0_91841220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '265230545c06358ce6b442d9394ca7287000c20b' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/locality/country/countrypage.tpl',
      1 => 1654470619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:skeleton/breadcrumb.tpl' => 1,
    'file:skeleton/setting.tpl' => 1,
    'file:skeleton/header.tpl' => 1,
    'file:skeleton/alert.tpl' => 1,
    'file:content/basedata/locality/country/countryform.tpl' => 1,
    'file:content/basedata/locality/country/countrylist.tpl' => 1,
  ),
),false)) {
function content_62a8a9e15184d0_91841220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('content', "content");
$_smarty_tpl->_assignInScope('pagescript', "country");
$_smarty_tpl->_assignInScope('pagestyle', "country");
$_smarty_tpl->_assignInScope('pagetitle', "country");
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30930273662a8a9e1516097_27405861', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_30930273662a8a9e1516097_27405861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_30930273662a8a9e1516097_27405861',
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
                            <?php $_smarty_tpl->_subTemplateRender("file:content/basedata/locality/country/countryform.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <!-- Table -->
                            <?php $_smarty_tpl->_subTemplateRender("file:content/basedata/locality/country/countrylist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
