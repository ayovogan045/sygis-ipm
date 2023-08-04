<?php
/* Smarty version 3.1.40, created on 2022-07-29 19:41:12
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/teaching/lessonunit/lessonunitpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62e437d8caf139_06074353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2f5eeadfc93cf0fd2b4656a9ca5a0e28916b128' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/teaching/lessonunit/lessonunitpage.tpl',
      1 => 1654470611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:skeleton/breadcrumb.tpl' => 1,
    'file:skeleton/setting.tpl' => 1,
    'file:skeleton/header.tpl' => 1,
    'file:skeleton/alert.tpl' => 1,
    'file:content/teaching/lessonunit/lessonunitform.tpl' => 1,
    'file:content/teaching/lessonunit/lessonunitlist.tpl' => 1,
  ),
),false)) {
function content_62e437d8caf139_06074353 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('content', "content");
$_smarty_tpl->_assignInScope('pagescript', "lessonunit");
$_smarty_tpl->_assignInScope('pagestyle', "lessonunit");
$_smarty_tpl->_assignInScope('pagetitle', "lessonunit");
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69796047362e437d8cacc11_90887299', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_69796047362e437d8cacc11_90887299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_69796047362e437d8cacc11_90887299',
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
                            <?php $_smarty_tpl->_subTemplateRender("file:content/teaching/lessonunit/lessonunitform.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <!-- Table -->
                            <?php $_smarty_tpl->_subTemplateRender("file:content/teaching/lessonunit/lessonunitlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
