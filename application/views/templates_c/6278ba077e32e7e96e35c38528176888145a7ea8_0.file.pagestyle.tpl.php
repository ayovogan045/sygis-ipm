<?php
/* Smarty version 3.1.40, created on 2023-05-30 12:52:04
  from '/home/amen/public_html/sygis-ipm/assets/css/pstyle/pagestyle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6475f174e5d4d0_14711196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6278ba077e32e7e96e35c38528176888145a7ea8' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/assets/css/pstyle/pagestyle.tpl',
      1 => 1685446271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6475f174e5d4d0_14711196 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13598854976475f174e554e4_83068432', "pagestyle");
}
/* {block "pagestyle"} */
class Block_13598854976475f174e554e4_83068432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagestyle' => 
  array (
    0 => 'Block_13598854976475f174e554e4_83068432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <!-- common -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
    <!-- dashboard -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/dashboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
    <!-- basedata-->
    <!-- locality -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/basedata/locality/country.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/basedata/locality/city.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
     <!-- school parameter -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/basedata/schoolparam/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/basedata/schoolparam/level.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/basedata/schoolparam/grade.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/basedata/schoolparam/mention.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/basedata/schoolparam/speciality.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/basedata/schoolparam/classunit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/basedata/schoolparam/classroom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/basedata/schoolparam/school.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
     <!-- parameter -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/basedata/parameter/feetype.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/basedata/parameter/fee.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
     <!-- inscription parameter -->
     <!-- candidat parameter -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/inscription/candidat/candidatlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/inscription/candidat/addcandidat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
     <!-- registration parameter -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/inscription/registration/registrationlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/inscription/registration/addregistration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
    <!-- administration -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/administration/academicyear.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/administration/account/permission.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/administration/account/role/rolelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/administration/account/role/addrole.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/administration/account/users/userlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/administration/account/users/adduser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
    <!-- teaching -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/teaching/semester.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/teaching/lessonunittype.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/teaching/lessonunitmention.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/teaching/lessonunit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    
    <!-- recovery -->
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['PSTYLEPATH']->value)."/recovery/studyfees.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  
<?php
}
}
/* {/block "pagestyle"} */
}
