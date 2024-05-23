<?php
/* Smarty version 3.1.40, created on 2024-05-23 03:00:08
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/teaching/lessonunit/lessonunitform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_664eb138505bb7_82322552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd7f1e52248079305f5075c3aa062580c1ac5ec7' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/teaching/lessonunit/lessonunitform.tpl',
      1 => 1716416828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664eb138505bb7_82322552 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['lessonunitformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addlessonunit']->value;?>
" method="POST">
        <div class="row">
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['codeue']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['codeuelabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['codeueid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['codeue']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['codeuevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['codeuedesc']->value;?>
" required="true" />
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['lessonunitmediumwording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['lessonunitmediumwordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['lessonunitmediumwordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['lessonunitmediumwording']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['lessonunitmediumwordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lessonunitmediumwordingdesc']->value;?>
" required="true" />
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['lessonunitlongwording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['lessonunitlongwordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['lessonunitlongwordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['lessonunitlongwording']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['lessonunitlongwordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lessonunitlongwordingdesc']->value;?>
" required="true" />
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['lessonunittype']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['lessonunittypelabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="<?php echo $_smarty_tpl->tpl_vars['lessonunittype']->value;?>
" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['lessonunittypedesc']->value;?>
" required="true">
                        <?php if (!(isset($_smarty_tpl->tpl_vars['lessonunittypeselected']->value)) || ($_smarty_tpl->tpl_vars['lessonunittypeselected']->value === '')) {?>
                            <option value="" class="nothing"> </option>
                            <?php if ($_smarty_tpl->tpl_vars['lessonunittype_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lessonunittype_datalist']->value, 'data');
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
                            <?php if ((isset($_smarty_tpl->tpl_vars['lessonunittypeselected']->value)) && ($_smarty_tpl->tpl_vars['lessonunittypeselected']->value != '')) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['lessonunittypeselected']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['lessonunittypeselected']->value->__toString();?>
</option>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['lessonunittype_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lessonunittype_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['lessonunittypeselected']->value->getId() != $_smarty_tpl->tpl_vars['data']->value->getId()) {?>
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
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['lessonunitspeciality']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['lessonunitspecialitylabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="<?php echo $_smarty_tpl->tpl_vars['lessonunitspeciality']->value;?>
" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['lessonunitspecialitydesc']->value;?>
" required="true">
                        <?php if (!(isset($_smarty_tpl->tpl_vars['lessonunitspecialityselected']->value)) || ($_smarty_tpl->tpl_vars['lessonunitspecialityselected']->value === '')) {?>
                            <option value="" class="nothing"> </option>
                            <?php if ($_smarty_tpl->tpl_vars['lessonunitspeciality_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lessonunitspeciality_datalist']->value, 'data');
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
                            <?php if ((isset($_smarty_tpl->tpl_vars['lessonunitspecialityselected']->value)) && ($_smarty_tpl->tpl_vars['lessonunitspecialityselected']->value != '')) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['lessonunitspecialityselected']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['lessonunitspecialityselected']->value->__toString();?>
</option>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['lessonunitspeciality_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lessonunitspeciality_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['lessonunitspecialityselected']->value->getId() != $_smarty_tpl->tpl_vars['data']->value->getId()) {?>
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
