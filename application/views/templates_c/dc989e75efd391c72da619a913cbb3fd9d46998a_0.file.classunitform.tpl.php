<?php
/* Smarty version 3.1.40, created on 2022-06-14 16:07:12
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/schoolparam/classunit/classunitform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62a8b2303c4b21_97578193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc989e75efd391c72da619a913cbb3fd9d46998a' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/schoolparam/classunit/classunitform.tpl',
      1 => 1654470616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a8b2303c4b21_97578193 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['classunitformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addclassunit']->value;?>
" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['classunitwording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['classunitwordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['classunitwordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['classunitwording']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['classunitwordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['classunitwordingdesc']->value;?>
" required="true" />
                </div>
            </div>
                
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['classunitcode']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['classunitcodelabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['classunitcodeid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['classunitcode']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['classunitcodevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['classunitcodedesc']->value;?>
" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['classunitlevel']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['classunitlevellabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="<?php echo $_smarty_tpl->tpl_vars['classunitlevel']->value;?>
" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['classunitleveldesc']->value;?>
" required="true">
                        <?php if (!(isset($_smarty_tpl->tpl_vars['levelselected']->value)) || ($_smarty_tpl->tpl_vars['levelselected']->value === '')) {?>
                            <option value="" class="nothing"> </option>
                            <?php if ($_smarty_tpl->tpl_vars['level_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['level_datalist']->value, 'data');
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
                            <?php if ((isset($_smarty_tpl->tpl_vars['levelselected']->value)) && ($_smarty_tpl->tpl_vars['levelselected']->value != '')) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['levelselected']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['levelselected']->value->__toString();?>
</option>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['level_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['level_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['levelselected']->value->getId() != $_smarty_tpl->tpl_vars['data']->value->getId()) {?>
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
</fieldset>   
<?php }
}
