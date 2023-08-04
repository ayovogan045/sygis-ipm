<?php
/* Smarty version 3.1.40, created on 2023-05-24 08:09:07
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/inscription/registration/registrationformpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_646dc6231eef70_16846590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10a334403d5c791abc187306905f22e07f273fed' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/inscription/registration/registrationformpage.tpl',
      1 => 1684850832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:skeleton/breadcrumb.tpl' => 1,
    'file:skeleton/setting.tpl' => 1,
    'file:skeleton/header.tpl' => 1,
    'file:skeleton/alert.tpl' => 1,
    'file:content/inscription/registration/registrationform.tpl' => 1,
  ),
),false)) {
function content_646dc6231eef70_16846590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('content', "content");
$_smarty_tpl->_assignInScope('pagescript', "addregistration");
$_smarty_tpl->_assignInScope('pagestyle', "addregistration");
$_smarty_tpl->_assignInScope('pagetitle', "addregistration");
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1436217607646dc6231e62a3_10716456', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block "content"} */
class Block_1436217607646dc6231e62a3_10716456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1436217607646dc6231e62a3_10716456',
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
                            <?php $_smarty_tpl->_subTemplateRender("file:content/inscription/registration/registrationform.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
