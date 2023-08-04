<?php
/* Smarty version 3.1.40, created on 2023-05-30 12:52:04
  from '/home/amen/public_html/sygis-ipm/assets/js/pscript/pagescript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6475f174e76f10_81011049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c0e9cba25347e5acc38101ca92c61eb3957ffe4' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/assets/js/pscript/pagescript.tpl',
      1 => 1685446124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6475f174e76f10_81011049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13913188356475f174e6f674_47406477', "pagescript");
}
/* {block "pagescript"} */
class Block_13913188356475f174e6f674_47406477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagescript' => 
  array (
    0 => 'Block_13913188356475f174e6f674_47406477',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- common -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
    <!-- dashboard -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/dashboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
    <!-- database -->
    <!-- locality -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/basedata/locality/country.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/basedata/locality/city.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
    <!-- parameter -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/basedata/parameter/feetype.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/basedata/parameter/fee.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
    <!-- school parameter -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/basedata/schoolparam/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/basedata/schoolparam/level.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/basedata/schoolparam/grade.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/basedata/schoolparam/mention.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/basedata/schoolparam/speciality.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/basedata/schoolparam/classunit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/basedata/schoolparam/classroom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/basedata/schoolparam/school.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
    <!-- inscription parameter -->
     <!-- candidat parameter -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/inscription/candidat/candidatlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/inscription/candidat/addcandidat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
     <!-- registration parameter -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/inscription/registration/registrationlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/inscription/registration/addregistration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
    <!-- administration -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/administration/academicyear.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/administration/account/permission.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/administration/account/role/addrole.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/administration/account/role/rolelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/administration/account/users/adduser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/administration/account/users/userlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
    <!-- teaching -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/teaching/semester.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/teaching/lessonunittype.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/teaching/lessonunitmention.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/teaching/lessonunit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
    <!-- recovery -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSCRIPTPATH']->value)."/recovery/studyfees.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
   
<?php
}
}
/* {/block "pagescript"} */
}
