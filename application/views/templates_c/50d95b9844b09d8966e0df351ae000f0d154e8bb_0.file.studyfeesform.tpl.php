<?php
/* Smarty version 3.1.40, created on 2023-05-30 14:03:43
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/recovery/studyfees/studyfeesform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6476023fdac485_79375284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50d95b9844b09d8966e0df351ae000f0d154e8bb' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/recovery/studyfees/studyfeesform.tpl',
      1 => 1685455419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6476023fdac485_79375284 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['studyfeesformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addstudyfees']->value;?>
" method="POST">
        <div class="row">

            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['candidat']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['candidatlabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="<?php echo $_smarty_tpl->tpl_vars['candidat']->value;?>
" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['candidatdesc']->value;?>
" required="true">
                        <?php if (!(isset($_smarty_tpl->tpl_vars['candidatselected']->value)) || ($_smarty_tpl->tpl_vars['candidatselected']->value === '')) {?>
                            <option value="" class="nothing"> </option>
                            <?php if ($_smarty_tpl->tpl_vars['candidat_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['candidat_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->getPerson_info();?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        <?php } else { ?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['candidatselected']->value)) && ($_smarty_tpl->tpl_vars['candidatselected']->value != '')) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['feeselected']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['candidatselected']->value->__toString();?>
</option>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['candidat_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['candidat_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['candidatselected']->value->getId() != $_smarty_tpl->tpl_vars['data']->value->getId()) {?>
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
                    
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['fee']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['feelabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="<?php echo $_smarty_tpl->tpl_vars['fee']->value;?>
" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['feedesc']->value;?>
" required="true">
                        <?php if (!(isset($_smarty_tpl->tpl_vars['feeselected']->value)) || ($_smarty_tpl->tpl_vars['feeselected']->value === '')) {?>
                            <option value="" class="nothing"> </option>
                            <?php if ($_smarty_tpl->tpl_vars['fee_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fee_datalist']->value, 'data');
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
                            <?php if ((isset($_smarty_tpl->tpl_vars['feeselected']->value)) && ($_smarty_tpl->tpl_vars['feeselected']->value != '')) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['feeselected']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['feeselected']->value->__toString();?>
</option>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['fee_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fee_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['feeselected']->value->getId() != $_smarty_tpl->tpl_vars['data']->value->getId()) {?>
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
