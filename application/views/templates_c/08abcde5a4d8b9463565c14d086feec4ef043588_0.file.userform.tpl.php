<?php
/* Smarty version 3.1.40, created on 2022-07-29 19:40:03
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/administration/account/user/userform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62e43793671939_64260172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08abcde5a4d8b9463565c14d086feec4ef043588' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/administration/account/user/userform.tpl',
      1 => 1654470613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e43793671939_64260172 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset class="fieldset">
    <legend class="table-header"><?php echo $_smarty_tpl->tpl_vars['addnewlabel']->value;?>
</legend>
    <form class="form-horizontal addusertab" role="form" name="<?php echo $_smarty_tpl->tpl_vars['roleformname']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['addrole']->value;?>
" method="POST">

        <div class="row">
            <div class="col-sm-6 panel-title panel-default">
                <fieldset class="fieldset fi">
                    <legend class="">Informations générales</legend>
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
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['genderid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['gendervalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['genderdesc']->value;?>
" required="true" />
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
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['birthcityid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['birthcity']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['birthcityvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['birthcitydesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
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
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['nationality']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['nationalitylabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['nationalityid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['nationality']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['nationalityvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['nationalitydesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['maritalstatus']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['maritalstatuslabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="$maritalstatusid}" name="<?php echo $_smarty_tpl->tpl_vars['maritalstatus']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['maritalstatusvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['maritalstatusdesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                </fieldset>         
            </div>
            <div class="col-sm-6 panel-title panel-default">
                <fieldset class="fieldset fi">
                    <legend class="">Informations supplémentaires</legend>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['loginlabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['loginid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['loginvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['logindesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['passwordlabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="password" id="<?php echo $_smarty_tpl->tpl_vars['passwordid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['passwordvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['passworddesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 yescheckbox required">
                        <label class="col-sm-5 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['useractivated']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['useractivatedlabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>
                        <div class="col-sm-7">
                            <input name="<?php echo $_smarty_tpl->tpl_vars['useractivated']->value;?>
" class="ace ace-switch ace-switch-5" type="checkbox" />
                            <span class="lbl"></span>
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                </fieldset>         
            </div>
            <div class="col-sm-6 panel-title panel-default pane">
                <fieldset class="fieldset fi">
                    <legend class="">Informations de connexion</legend>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['loginlabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="<?php echo $_smarty_tpl->tpl_vars['loginid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['loginvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['logindesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['passwordlabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="password" id="<?php echo $_smarty_tpl->tpl_vars['passwordid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['passwordvalue']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['passworddesc']->value;?>
" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 yescheckbox required">
                        <label class="col-sm-5 control-label no-padding-right" for="<?php echo $_smarty_tpl->tpl_vars['useractivated']->value;?>
"> 
                            <span><?php echo $_smarty_tpl->tpl_vars['useractivatedlabel']->value;?>
</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>
                        <div class="col-sm-7">
                            <input name="<?php echo $_smarty_tpl->tpl_vars['useractivated']->value;?>
" class="ace ace-switch ace-switch-5" type="checkbox" />
                            <span class="lbl"></span>
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
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
