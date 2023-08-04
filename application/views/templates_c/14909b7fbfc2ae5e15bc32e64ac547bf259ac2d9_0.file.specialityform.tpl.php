<?php
/* Smarty version 3.1.40, created on 2022-07-09 21:00:57
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/schoolparam/speciality/specialityform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62c9ec8961b578_00695372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14909b7fbfc2ae5e15bc32e64ac547bf259ac2d9' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/schoolparam/speciality/specialityform.tpl',
      1 => 1657399404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c9ec8961b578_00695372 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['specialityformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addspeciality']->value;?>
" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['specialitywording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['specialitywordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['specialitywordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['specialitywording']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['specialitywordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['specialitywordingdesc']->value;?>
" required="true" />
                </div>
            </div>
                
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['specialitycode']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['specialitycodelabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['specialitycodeid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['specialitycode']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['specialitycodevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['specialitycodedesc']->value;?>
" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['specialitymention']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['specialitymentionlabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="<?php echo $_smarty_tpl->tpl_vars['specialitymention']->value;?>
" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['specialitymentiondesc']->value;?>
" required="true">
                        <?php if (!(isset($_smarty_tpl->tpl_vars['mentionselected']->value)) || ($_smarty_tpl->tpl_vars['mentionselected']->value === '')) {?>
                            <option value="" class="nothing"> </option>
                            <?php if ($_smarty_tpl->tpl_vars['mention_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mention_datalist']->value, 'data');
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
                            <?php if ((isset($_smarty_tpl->tpl_vars['mentionselected']->value)) && ($_smarty_tpl->tpl_vars['mentionselected']->value != '')) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['mentionselected']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['mentionselected']->value->__toString();?>
</option>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['mention_datalist']->value != NULL) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mention_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['mentionselected']->value->getId() != $_smarty_tpl->tpl_vars['data']->value->getId()) {?>
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
