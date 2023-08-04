<?php
/* Smarty version 3.1.40, created on 2023-05-23 15:11:25
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/inscription/registration/registrationlistpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_646cd79deef2c4_71733545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54d2d0b7ac2d735e0cfca93e991830db91fa9292' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/inscription/registration/registrationlistpage.tpl',
      1 => 1684850704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:skeleton/breadcrumb.tpl' => 1,
    'file:skeleton/setting.tpl' => 1,
    'file:skeleton/header.tpl' => 1,
    'file:skeleton/alert.tpl' => 1,
    'file:content/inscription/registration/registrationlist.tpl' => 1,
  ),
),false)) {
function content_646cd79deef2c4_71733545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('content', "content");
$_smarty_tpl->_assignInScope('pagescript', "registrationlist");
$_smarty_tpl->_assignInScope('pagestyle', "registrationlist");
$_smarty_tpl->_assignInScope('pagetitle', "registrationlist");
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101045963646cd79ded1f74_63720259', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_101045963646cd79ded1f74_63720259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_101045963646cd79ded1f74_63720259',
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
                        <!-- Table -->
                            <?php $_smarty_tpl->_subTemplateRender("file:content/inscription/registration/registrationlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
