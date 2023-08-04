<?php
/* Smarty version 3.1.40, created on 2022-06-14 16:07:17
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/schoolparam/school/schoolform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62a8b235c77d08_96074355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '670895f8f1a4c1190f75bbfc95b58bf18af1e975' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/schoolparam/school/schoolform.tpl',
      1 => 1654470617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a8b235c77d08_96074355 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['schoolformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addschool']->value;?>
" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['schoolwording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['schoolwordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['schoolwordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['schoolwording']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['schoolwordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['schoolwordingdesc']->value;?>
" required="true" />
                </div>
            </div>
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['schoolcode']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['schoolcodelabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['schoolcodeid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['schoolcode']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['schoolcodevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['schoolcodedesc']->value;?>
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
