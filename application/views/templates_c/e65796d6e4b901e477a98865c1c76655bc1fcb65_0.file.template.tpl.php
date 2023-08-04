<?php
/* Smarty version 3.1.40, created on 2022-06-14 08:16:07
  from '/home/amen/public_html/sygis-ipm/application/views/templates/template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62a843c7e4db83_39969290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e65796d6e4b901e477a98865c1c76655bc1fcb65' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/template.tpl',
      1 => 1654470609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:skeleton/navbar.tpl' => 1,
    'file:skeleton/sidebar.tpl' => 1,
  ),
),false)) {
function content_62a843c7e4db83_39969290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>SYGIS-IPM@<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagetitle']->value)===null||$tmp==='' ? 'SYGIS-IPM' : $tmp);?>
</title>
        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->      
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41490034862a843c7e09d88_09598388', "pagestyle");
?>


        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!-- custom styles -->

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157212153462a843c7e14c15_85398161', "script");
?>


        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/html5shiv.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>
    <body class="no-skin">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86845608462a843c7e196e7_92964852', "navbar");
?>

                <div class="main-container ace-save-state" id="main-container">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44816886962a843c7e1e053_28509556', "script");
?>
           
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81416892162a843c7e21c48_13364041', "sidebar");
?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['content']->value)) && $_smarty_tpl->tpl_vars['content']->value === 'content') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90689428062a843c7e42ce7_41996860', "content");
?>

        <?php }?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197661428862a843c7e46657_48172197', "footer");
?>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117235746362a843c7e47930_86384876', "script");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190797463962a843c7e4a121_61230482', "pagescript");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173413173662a843c7e4c205_05393449', "script");
?>

</body>
</html><?php }
/* {block "pagestyle"} */
class Block_41490034862a843c7e09d88_09598388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagestyle' => 
  array (
    0 => 'Block_41490034862a843c7e09d88_09598388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/pagestyle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php
}
}
/* {/block "pagestyle"} */
/* {block "script"} */
class Block_157212153462a843c7e14c15_85398161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_157212153462a843c7e14c15_85398161',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/ace-extra.min.js"><?php echo '</script'; ?>
>
        <?php
}
}
/* {/block "script"} */
/* {block "navbar"} */
class Block_86845608462a843c7e196e7_92964852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_86845608462a843c7e196e7_92964852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:skeleton/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "navbar"} */
/* {block "script"} */
class Block_44816886962a843c7e1e053_28509556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_44816886962a843c7e1e053_28509556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo '<script'; ?>
 type="text/javascript">
                    try {
                        ace.settings.loadState('main-container')
                    } catch (e) {
                    }
                <?php echo '</script'; ?>
>
            <?php
}
}
/* {/block "script"} */
/* {block "sidebar"} */
class Block_81416892162a843c7e21c48_13364041 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_81416892162a843c7e21c48_13364041',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:skeleton/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block "sidebar"} */
/* {block "content"} */
class Block_90689428062a843c7e42ce7_41996860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_90689428062a843c7e42ce7_41996860',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_197661428862a843c7e46657_48172197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_197661428862a843c7e46657_48172197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "footer"} */
/* {block "script"} */
class Block_117235746362a843c7e47930_86384876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_117235746362a843c7e47930_86384876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>

    <!-- <![endif]-->

    <!--[if IE]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
<![endif]-->
    <?php echo '<script'; ?>
 type="text/javascript">
                    if ('ontouchstart' in document.documentElement)
                        document.write("<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
/* {block "pagescript"} */
class Block_190797463962a843c7e4a121_61230482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagescript' => 
  array (
    0 => 'Block_190797463962a843c7e4a121_61230482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/pagescript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "pagescript"} */
/* {block "script"} */
class Block_173413173662a843c7e4c205_05393449 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_173413173662a843c7e4c205_05393449',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/js/control.alert.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
