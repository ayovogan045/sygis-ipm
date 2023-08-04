<?php
/* Smarty version 3.1.40, created on 2023-05-23 13:25:50
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/administration/account/role/roleform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_646cbede85ced4_87439909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89e3c24a19d4f17f3f43f09a672ead6dd2af87af' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/administration/account/role/roleform.tpl',
      1 => 1684848346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646cbede85ced4_87439909 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['roleformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addrole']->value;?>
" method="POST">
        <div class="row">
            <div class="col-sm-4 panel-title panel-default">
                <fieldset class="fieldset fi">
                    <legend class="">Informations générales</legend>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['rolewording']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['rolewordinglabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['rolewordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['rolewording']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['rolewordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['rolewordingdesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['roledescription']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['roledescriptionlabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <textarea class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['roledescriptionid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['roledescription']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['roledescriptiondesc']->value;?>
" required="true"><?php echo $_smarty_tpl->tpl_vars['roledescriptionvalue']->value;?>
</textarea>
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                                    </fieldset>         
            </div>
            <div class="col-sm-8 required">
                <fieldset class="fieldset">
                    <legend class=""><?php echo $_smarty_tpl->tpl_vars['permissionslabel']->value;?>
</legend>
                                        
                    <div class="col-sm-12">
                        <select multiple="multiple" size="10" name="permissionselectedlist[]" id="duallist">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissiondatalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value->getId();?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['data']->value->getDescription();?>

                                </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            
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
