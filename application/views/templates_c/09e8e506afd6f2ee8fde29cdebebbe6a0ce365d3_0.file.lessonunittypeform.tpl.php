<?php
/* Smarty version 3.1.40, created on 2022-07-29 19:40:41
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/teaching/lessonunittype/lessonunittypeform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62e437b9d08243_65515373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09e8e506afd6f2ee8fde29cdebebbe6a0ce365d3' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/teaching/lessonunittype/lessonunittypeform.tpl',
      1 => 1654470612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e437b9d08243_65515373 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['lessonunittypeformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addlessonunittype']->value;?>
" method="POST">
        <div class="row">
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['lessonunittypewording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['lessonunittypewordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['lessonunittypewordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['lessonunittypewording']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['lessonunittypewordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lessonunittypewordingdesc']->value;?>
" required="true" />
                </div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['lessonunittypecode']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['lessonunittypecodelabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['lessonunittypecodeid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['lessonunittypecode']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['lessonunittypecodevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lessonunittypecodedesc']->value;?>
" required="true" />
                </div>
            </div>
        </div><div class="row">
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
