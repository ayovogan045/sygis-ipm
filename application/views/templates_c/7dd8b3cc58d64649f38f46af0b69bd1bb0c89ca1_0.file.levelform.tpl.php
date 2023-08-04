<?php
/* Smarty version 3.1.40, created on 2022-06-14 16:06:40
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/schoolparam/level/levelform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62a8b210e81d14_54213161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dd8b3cc58d64649f38f46af0b69bd1bb0c89ca1' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/schoolparam/level/levelform.tpl',
      1 => 1654470618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a8b210e81d14_54213161 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['levelformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addlevel']->value;?>
" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['levelwording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['levelwordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['levelwordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['levelwording']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['levelwordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['levelwordingdesc']->value;?>
" required="true" />
                </div>
            </div>
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['levelcode']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['levelcodelabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['levelcodeid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['levelcode']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['levelcodevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['levelcodedesc']->value;?>
" required="true" />
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
        </div>
    </form>
</fieldset><?php }
}
