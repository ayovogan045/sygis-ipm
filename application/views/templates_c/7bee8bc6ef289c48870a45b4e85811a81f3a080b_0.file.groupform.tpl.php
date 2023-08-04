<?php
/* Smarty version 3.1.40, created on 2022-06-29 16:44:00
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/schoolparam/group/groupform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62bc8150b82666_91040688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bee8bc6ef289c48870a45b4e85811a81f3a080b' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/schoolparam/group/groupform.tpl',
      1 => 1656521036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bc8150b82666_91040688 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['groupformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addgroup']->value;?>
" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['groupwording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['groupwordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['groupwordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['groupwording']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['groupwordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['groupwordingdesc']->value;?>
" required="true" />
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
</fieldset>

<?php }
}
