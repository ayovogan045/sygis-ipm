<?php
/* Smarty version 3.1.40, created on 2023-09-06 21:19:48
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/inscription/registration/registrationform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_64f8ecf49e9ae8_32704898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5fc0283fe5b2725c90d3a9fa90ee13f90207ac6' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/inscription/registration/registrationform.tpl',
      1 => 1694033232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f8ecf49e9ae8_32704898 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['registrationformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addregistration']->value;?>
" method="POST">
        <div class="row">
            <div class="col-sm-12 panel-title panel-default required">
                <fieldset class="fieldset">
                    <legend class=""><?php echo $_smarty_tpl->tpl_vars['candidatslabel']->value;?>
</legend>

                    <div class="col-sm-12">
                        <select multiple="multiple" size="10" name="inscriptionselectedlist[]" id="duallist">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inscriptiondatalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value->getId();?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['data']->value->getCandidat()->getPerson_info();?>

                                </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if (count($_smarty_tpl->tpl_vars['registrationdatalist']->value) != 0) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['registrationdatalist']->value, 'registration');
$_smarty_tpl->tpl_vars['registration']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['registration']->value) {
$_smarty_tpl->tpl_vars['registration']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['registration']->value->getId();?>
" selected="selected">
                                        <?php echo $_smarty_tpl->tpl_vars['registration']->value->getInscription()->getCandidat()->getPerson_info();?>

                                    </option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>

                        </select>
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="clearfix form-actions">
            <button type="submit" class="btn btn-primary btn-sm ">
                <i class="ace-icon fa fa-check bigger-110"></i>
                <?php echo $_smarty_tpl->tpl_vars['savelabel']->value;?>

            </button>      
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                <?php echo $_smarty_tpl->tpl_vars['cancellabel']->value;?>

            </button>
        </div>
    </form>
</fieldset><?php }
}
