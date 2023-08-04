<?php
/* Smarty version 3.1.40, created on 2022-06-14 08:16:07
  from '/home/amen/public_html/sygis-ipm/application/views/templates/skeleton/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62a843c7f03a33_65348172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6222a276e1e07bbf2530466dbc24a911946fcb32' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/skeleton/breadcrumb.tpl',
      1 => 1654470610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a843c7f03a33_65348172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20284389362a843c7efecc0_87510696', "breadcrumb");
}
/* {block "breadcrumb"} */
class Block_20284389362a843c7efecc0_87510696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_20284389362a843c7efecc0_87510696',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['homelink']->value;?>
</a>
            </li>
            <?php if ((isset($_smarty_tpl->tpl_vars['subactivelink']->value))) {?>
                <li>
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['openlink']->value;?>
</a>
                </li>
                <li>
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['activelink']->value;?>
</a>
                </li>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['subactivelink']->value;?>
</li>
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['activelink']->value))) {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['openlink']->value))) {?>
                    <li>
                        <a href="#"><?php echo $_smarty_tpl->tpl_vars['openlink']->value;?>
</a>
                    </li>
                <?php }?>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['activelink']->value;?>
</li>
                <?php }?>
        </ul><!-- /.breadcrumb -->

        <div class="nav-search" id="nav-search">
            <ul class="breadcrumb">
                <?php if ((isset($_smarty_tpl->tpl_vars['listlink']->value))) {?>
                    <li class="addlink">
                        <a  class="bold" href="<?php echo $_smarty_tpl->tpl_vars['addnewlink']->value;?>
">
                            <i class="ace-icon fa fa-plus align-center bigger-110"></i>
                            <?php echo $_smarty_tpl->tpl_vars['addnewlinklabel']->value;?>

                        </a>
                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['listlink']->value))) {?>
                    <li class="listlink">
                        <a  href="<?php echo $_smarty_tpl->tpl_vars['listlink']->value;?>
">
                            <i class="ace-icon fa fa-list align-center bigger-110"></i>
                            <?php echo $_smarty_tpl->tpl_vars['listlinklabel']->value;?>

                        </a>
                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['userrolelink']->value))) {?>
                    <li class="userrolelink">
                        <a  href="<?php echo $_smarty_tpl->tpl_vars['userrolelink']->value;?>
">
                            <i class="ace-icon fa fa-user-plus align-center bigger-110"></i>
                            <?php echo $_smarty_tpl->tpl_vars['userrolelinklabel']->value;?>

                        </a>
                    </li>
                <?php }?>
            </ul><!-- /.breadcrumb -->
                    </div><!-- /.nav-search -->
    </div>
<?php
}
}
/* {/block "breadcrumb"} */
}
