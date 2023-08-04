<?php
/* Smarty version 3.1.40, created on 2023-05-28 10:31:56
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/parameter/feetype/feetypeform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_64732d9c78d6b9_08148369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f301ffae1ec463eafa665ebde5c3220a19808da' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/parameter/feetype/feetypeform.tpl',
      1 => 1654470616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64732d9c78d6b9_08148369 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['feetypeformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addfeetype']->value;?>
" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['feetypewording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['feetypewordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['feetypewordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['feetypewording']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['feetypewordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['feetypewordingdesc']->value;?>
" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-5 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['feetypecode']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['feetypecodelabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-7">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['feetypecodeid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['feetypecode']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['feetypecodevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['feetypecodedesc']->value;?>
" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['feetypedescription']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['feetypedescriptionlabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <textarea class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['feetypedescriptionid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['feetypedescription']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['feetypedescriptiondesc']->value;?>
" required="true"><?php echo $_smarty_tpl->tpl_vars['feetypedescriptionvalue']->value;?>
</textarea>
                </div>
            </div>
        </div>

        <div class="clearfix form-fees">
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
