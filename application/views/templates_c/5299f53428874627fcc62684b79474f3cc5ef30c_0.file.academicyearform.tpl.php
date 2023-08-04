<?php
/* Smarty version 3.1.40, created on 2022-07-29 19:28:54
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/administration/academicyear/academicyearform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62e434f64e0413_22503538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5299f53428874627fcc62684b79474f3cc5ef30c' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/administration/academicyear/academicyearform.tpl',
      1 => 1654470614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e434f64e0413_22503538 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['academicyearformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addacademicyear']->value;?>
" method="POST">
        <div class="row">
            <div class="form-group col-sm-4 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['academicyearwording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['academicyearwordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['academicyearwordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['academicyearwording']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['academicyearwordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['academicyearwordingdesc']->value;?>
" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-4 required">
                <label class="col-sm-5 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['academicyearcode']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['academicyearcodelabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-7">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['academicyearcodeid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['academicyearcode']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['academicyearcodevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['academicyearcodedesc']->value;?>
" required="true" />
                </div>
            </div>

            <div class="col-sm-4 yescheckbox required">
                 <label class="col-sm-5 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['academicyearactivated']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['academicyearactivatedlabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="<?php echo $_smarty_tpl->tpl_vars['academicyearactivated']->value;?>
" class="ace ace-switch ace-switch-5" type="checkbox" />
                    <span class="lbl"></span>
                </div>
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
