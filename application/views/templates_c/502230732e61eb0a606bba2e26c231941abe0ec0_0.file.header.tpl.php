<?php
/* Smarty version 3.1.40, created on 2022-06-14 08:16:07
  from '/home/amen/public_html/sygis-ipm/application/views/templates/skeleton/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62a843c7f0b883_01787835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '502230732e61eb0a606bba2e26c231941abe0ec0' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/skeleton/header.tpl',
      1 => 1654470610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a843c7f0b883_01787835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119567515962a843c7f09ff2_25261852', "header");
}
/* {block "header"} */
class Block_119567515962a843c7f09ff2_25261852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_119567515962a843c7f09ff2_25261852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page-header">
        <h1>
            <?php if ((isset($_smarty_tpl->tpl_vars['subactivelink']->value))) {?>
                <?php echo $_smarty_tpl->tpl_vars['subactivelink']->value;?>

            <?php } elseif ((isset($_smarty_tpl->tpl_vars['activelink']->value))) {?>
                <?php echo $_smarty_tpl->tpl_vars['activelink']->value;?>

            <?php }?>
        </h1>
    </div><!-- /.page-header -->
<?php
}
}
/* {/block "header"} */
}
