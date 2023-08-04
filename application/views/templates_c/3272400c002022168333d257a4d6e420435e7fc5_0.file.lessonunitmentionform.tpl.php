<?php
/* Smarty version 3.1.40, created on 2022-07-29 19:40:47
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/teaching/lessonunitmention/lessonunitmentionform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62e437bf4d02a5_62450807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3272400c002022168333d257a4d6e420435e7fc5' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/teaching/lessonunitmention/lessonunitmentionform.tpl',
      1 => 1654470611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e437bf4d02a5_62450807 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['lessonunitmentionformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addlessonunitmention']->value;?>
" method="POST">
        <div class="row">
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['lessonunitmentionwording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['lessonunitmentionwordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['lessonunitmentionwordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['lessonunitmentionwording']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['lessonunitmentionwordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lessonunitmentionwordingdesc']->value;?>
" required="true" />
                </div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['lessonunitmentioncode']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['lessonunitmentioncodelabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['lessonunitmentioncodeid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['lessonunitmentioncode']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['lessonunitmentioncodevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lessonunitmentioncodedesc']->value;?>
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
