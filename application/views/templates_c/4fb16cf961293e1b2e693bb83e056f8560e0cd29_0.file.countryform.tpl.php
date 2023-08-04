<?php
/* Smarty version 3.1.40, created on 2022-06-14 15:31:45
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/locality/country/countryform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62a8a9e1521954_20037897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fb16cf961293e1b2e693bb83e056f8560e0cd29' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/basedata/locality/country/countryform.tpl',
      1 => 1654470619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a8a9e1521954_20037897 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal" role="form" name="<?php echo $_smarty_tpl->tpl_vars['countryformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addcountry']->value;?>
" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['countrywording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['countrywordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['countrywordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['countrywording']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['countrywordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['countrywordingdesc']->value;?>
" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-5 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['countryshortwording']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['countryshortwordinglabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-7">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['countryshortwordingid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['countryshortwording']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['countryshortwordingvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['countryshortwordingdesc']->value;?>
" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-5 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['countrycode']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['countrycodelabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-7">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['countrycodeid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['countrycode']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['countrycodevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['countrycodedesc']->value;?>
" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-5 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['countrynationality']->value;?>
"> 
                    <span><?php echo $_smarty_tpl->tpl_vars['countrynationalitylabel']->value;?>
</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-7">
                    <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['countrynationalityid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['countrynationality']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['countrynationalityvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['countrynationalitydesc']->value;?>
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
