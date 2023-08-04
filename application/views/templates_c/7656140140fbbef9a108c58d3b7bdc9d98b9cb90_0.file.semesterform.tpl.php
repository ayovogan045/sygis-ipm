<?php
/* Smarty version 3.1.40, created on 2022-07-29 19:41:37
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/teaching/semester/semesterform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62e437f1933991_14450468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7656140140fbbef9a108c58d3b7bdc9d98b9cb90' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/teaching/semester/semesterform.tpl',
      1 => 1654470611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e437f1933991_14450468 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['semesterformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addsemester']->value;?>
" method="POST">
        <div class="row">
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['semestershortwording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['semestershortwordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['semestershortwordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['semestershortwording']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['semestershortwordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['semestershortwordingdesc']->value;?>
" required="true" />
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['semestermediumwording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['semestermediumwordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['semestermediumwordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['semestermediumwording']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['semestermediumwordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['semestermediumwordingdesc']->value;?>
" required="true" />
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['semesterlongwording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['semesterlongwordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['semesterlongwordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['semesterlongwording']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['semesterlongwordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['semesterlongwordingdesc']->value;?>
" required="true" />
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['semesteracademicyear']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['semesteracademicyearlabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="<?php echo $_smarty_tpl->tpl_vars['semesteracademicyear']->value;?>
" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['semesteracademicyeardesc']->value;?>
" required="true">
                        <?php if (!(isset($_smarty_tpl->tpl_vars['academicyearselected']->value)) || ($_smarty_tpl->tpl_vars['academicyearselected']->value === '')) {?>
                            <option value="" class="nothing"> </option>
                            <?php if ($_smarty_tpl->tpl_vars['academicyear_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['academicyear_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->__toString();?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        <?php } else { ?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['academicyearselected']->value)) && ($_smarty_tpl->tpl_vars['academicyearselected']->value != '')) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['academicyearselected']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['academicyearselected']->value->__toString();?>
</option>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['academicyear_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['academicyear_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['academicyearselected']->value->getId() != $_smarty_tpl->tpl_vars['data']->value->getId()) {?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->__toString();?>
</option>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        <?php }?>
                    </select>
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div> 
            </div> 
            <div class="col-sm-12 yescheckbox required">
                <label class="col-sm-5 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['semesteractivated']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['semesteractivatedlabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="<?php echo $_smarty_tpl->tpl_vars['semesteractivated']->value;?>
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
