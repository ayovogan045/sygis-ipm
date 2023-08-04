<?php
/* Smarty version 3.1.40, created on 2023-06-01 15:48:22
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/inscription/candidat/candidatform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6478bdc65a0bf1_67187565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55822bae129cf32a4cb06be1f51214279744bb76' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/inscription/candidat/candidatform.tpl',
      1 => 1685634495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6478bdc65a0bf1_67187565 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal addusertab" role="form" name="<?php echo $_smarty_tpl->tpl_vars['candidatformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addcandidat']->value;?>
" method="POST" enctype="multipart/form-data">

        <div class="row">
            <div class="col-sm-3 panel-title panel-default">
                <fieldset class="fieldset fi">
                    <legend class="">Etat civile</legend>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['lastnamelabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['lastnameid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['lastnamevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lastnamedesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['firstnamelabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['firstnameid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['firstnamevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['firstnamedesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['genderlabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <select class="chosen-select form-control" id="form-field-select-3" name="<?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['genderdesc']->value;?>
" required="true">
                                <?php if (!(isset($_smarty_tpl->tpl_vars['genderselected']->value)) || ($_smarty_tpl->tpl_vars['genderselected']->value === '')) {?>
                                    <option value="" class="nothing"> </option>
                                    <?php if ($_smarty_tpl->tpl_vars['gender_datalist']->value != NULL) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gender_datalist']->value, 'data');
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
                                    <?php if ((isset($_smarty_tpl->tpl_vars['genderselected']->value)) && ($_smarty_tpl->tpl_vars['genderselected']->value != '')) {?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['genderselected']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['genderselected']->value->__toString();?>
</option>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['gender_datalist']->value != NULL) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gender_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['genderselected']->value->getId() != $_smarty_tpl->tpl_vars['data']->value->getId()) {?>
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
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['birthddate']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['birthdatelabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="date" id="<?php echo $_smarty_tpl->tpl_vars['birthdateid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['birthdate']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['birthdatevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['birthdatedesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['birthcity']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['birthcitylabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <select class="chosen-select form-control" id="form-field-select-3" name="<?php echo $_smarty_tpl->tpl_vars['birthcity']->value;?>
" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['birthcitydesc']->value;?>
" required="true">
                                <?php if (!(isset($_smarty_tpl->tpl_vars['birthcityselected']->value)) || ($_smarty_tpl->tpl_vars['birthcityselected']->value === '')) {?>
                                    <option value="" class="nothing"> </option>
                                    <?php if ($_smarty_tpl->tpl_vars['birthcity_datalist']->value != NULL) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['birthcity_datalist']->value, 'data');
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
                                    <?php if ((isset($_smarty_tpl->tpl_vars['birthcityselected']->value)) && ($_smarty_tpl->tpl_vars['birthcityselected']->value != '')) {?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['birthcityselected']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['birthcityselected']->value->__toString();?>
</option>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['birthcity_datalist']->value != NULL) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['birthcity_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['birthcityselected']->value->getId() != $_smarty_tpl->tpl_vars['data']->value->getId()) {?>
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
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['nationality']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['nationalitylabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <select class="chosen-select form-control" id="form-field-select-3" name="<?php echo $_smarty_tpl->tpl_vars['nationality']->value;?>
" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['nationalitydesc']->value;?>
" required="true">
                                <?php if (!(isset($_smarty_tpl->tpl_vars['nationalityselected']->value)) || ($_smarty_tpl->tpl_vars['nationalityselected']->value === '')) {?>
                                    <option value="" class="nothing"> </option>
                                    <?php if ($_smarty_tpl->tpl_vars['nationality_datalist']->value != NULL) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nationality_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->getNationality();?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['nationalityselected']->value)) && ($_smarty_tpl->tpl_vars['nationalityselected']->value != '')) {?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['nationalityselected']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['nationalityselected']->value->getNationality();?>
</option>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['nationality_datalist']->value != NULL) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nationality_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['nationalityselected']->value->getId() != $_smarty_tpl->tpl_vars['data']->value->getId()) {?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->getNationality();?>
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
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                </fieldset> 
            </div>
                           <div class="col-sm-3 panel-title panel-default">
                <fieldset class="fieldset fi">
                    <legend class="">Information de contact</legend>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['phonelabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['phoneid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['phonevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['phonedesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['adresslabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['adressid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['adressvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['adressdesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['emaillabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['emailid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['emailvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['emaildesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['guardianname']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['guardiannamelabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['guardiannameid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['guardianname']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['guardiannamevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['guardiannamedesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['guardianphone']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['guardianphonelabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['guardianphoneid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['guardianphone']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['guardianphonevalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['guardianphonedesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['guardianmail']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['guardianmaillabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['guardianmailid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['guardianmail']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['guardianmailvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['guardianmaildesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                </fieldset>         
            </div>

            <div class="col-sm-3 panel-title panel-default">
                <fieldset class="fieldset fi">
                    <legend class="">Autres informations</legend>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['bloodgroup']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['bloodgrouplabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>
                            <div class="col-sm-8">
                            <select class="chosen-select form-control" id="form-field-select-3" name="<?php echo $_smarty_tpl->tpl_vars['bloodgroup']->value;?>
" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['bloodgroupdesc']->value;?>
" required="true">
                                <?php if (!(isset($_smarty_tpl->tpl_vars['bloodgroupselected']->value)) || ($_smarty_tpl->tpl_vars['bloodgroupselected']->value === '')) {?>
                                    <option value="" class="nothing"> </option>
                                    <?php if ($_smarty_tpl->tpl_vars['bloodgroup_datalist']->value != NULL) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bloodgroup_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['bloodgroupselected']->value)) && ($_smarty_tpl->tpl_vars['bloodgroupselected']->value != '')) {?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['bloodgroupselected']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['bloodgroupselected']->value;?>
</option>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['bloodgroup_datalist']->value != NULL) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['school_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['bloodgroupselected']->value->getId() != $_smarty_tpl->tpl_vars['data']->value->getId()) {?>
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
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['oldschool']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['oldschoollabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <select class="chosen-select form-control" id="form-field-select-3" name="<?php echo $_smarty_tpl->tpl_vars['oldschool']->value;?>
" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['oldschooldesc']->value;?>
" required="true">
                                <?php if (!(isset($_smarty_tpl->tpl_vars['oldschoolselected']->value)) || ($_smarty_tpl->tpl_vars['oldschoolselected']->value === '')) {?>
                                    <option value="" class="nothing"> </option>
                                    <?php if ($_smarty_tpl->tpl_vars['school_datalist']->value != NULL) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['school_datalist']->value, 'data');
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
                                    <?php if ((isset($_smarty_tpl->tpl_vars['oldschoolselected']->value)) && ($_smarty_tpl->tpl_vars['oldschoolselected']->value != '')) {?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['oldschoolselected']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['oldschoolselected']->value->__toString();?>
</option>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['school_datalist']->value != NULL) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['school_datalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['oldschoolselected']->value->getId() != $_smarty_tpl->tpl_vars['data']->value->getId()) {?>
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
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['picture']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['picturelabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div id="msg" class="col-sm-8">
                            <input type="file" id="<?php echo $_smarty_tpl->tpl_vars['pictureid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['picture']->value;?>
" class="file" accept="image/png, image/jpg, image/jpeg">
                            <div class="form-group">
                                <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['picturefile']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['picture']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['picturevalue']->value;?>
" disabled placeholder="<?php echo $_smarty_tpl->tpl_vars['picturedesc']->value;?>
" required="true" />
                                                               
                                 <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                                <div class="col-sm-12">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_pictures_url']->value;?>
/user.png" id="preview" class="img-thumbnail">
                                </div>
                                 <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                                <div class="input-group-append">
                                    <button type="button" class="browse btn btn-primary btn-sm col-sm-12">
                                        <i class="ace-icon fa fa-download bigger-110"></i>
                                        <?php echo $_smarty_tpl->tpl_vars['downloadlabel']->value;?>

                                    </button>
                                </div>
                            </div> 
                        </div>
                    </div>
                </fieldset>         
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
