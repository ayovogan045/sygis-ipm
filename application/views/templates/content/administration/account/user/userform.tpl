<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal addusertab" role="form" name="{$roleformname}" action="{$root_url}/{$addrole}" method="POST">

        <div class="row">
            <div class="col-sm-6 panel-title panel-default">
                <fieldset class="fieldset fi">
                    <legend class="">Informations générales</legend>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$lastname}"> 
                            <span>{$lastnamelabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$lastnameid}" name="{$lastname}"  value="{$lastnamevalue}" placeholder="{$lastnamedesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$firstname}"> 
                            <span>{$firstnamelabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$firstnameid}" name="{$firstname}"  value="{$firstnamevalue}" placeholder="{$firstnamedesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$gender}"> 
                            <span>{$genderlabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$genderid}" name="{$gender}"  value="{$gendervalue}" placeholder="{$genderdesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$birthddate}"> 
                            <span>{$birthdatelabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="date" id="{$birthdateid}" name="{$birthdate}"  value="{$birthdatevalue}" placeholder="{$birthdatedesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$birthcity}"> 
                            <span>{$birthcitylabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$birthcityid}" name="{$birthcity}"  value="{$birthcityvalue}" placeholder="{$birthcitydesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$phone}"> 
                            <span>{$phonelabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$phoneid}" name="{$phone}"  value="{$phonevalue}" placeholder="{$phonedesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$adress}"> 
                            <span>{$adresslabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$adressid}" name="{$adress}"  value="{$adressvalue}" placeholder="{$adressdesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$nationality}"> 
                            <span>{$nationalitylabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$nationalityid}" name="{$nationality}"  value="{$nationalityvalue}" placeholder="{$nationalitydesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$maritalstatus}"> 
                            <span>{$maritalstatuslabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="$maritalstatusid}" name="{$maritalstatus}"  value="{$maritalstatusvalue}" placeholder="{$maritalstatusdesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                </fieldset>         
            </div>
            <div class="col-sm-6 panel-title panel-default">
                <fieldset class="fieldset fi">
                    <legend class="">Informations supplémentaires</legend>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$login}"> 
                            <span>{$loginlabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$loginid}" name="{$login}"  value="{$loginvalue}" placeholder="{$logindesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$password}"> 
                            <span>{$passwordlabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="password" id="{$passwordid}" name="{$password}"  value="{$passwordvalue}" placeholder="{$passworddesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 yescheckbox required">
                        <label class="col-sm-5 control-label no-padding-right" for="{$useractivated}"> 
                            <span>{$useractivatedlabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>
                        <div class="col-sm-7">
                            <input name="{$useractivated}" class="ace ace-switch ace-switch-5" type="checkbox" />
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
                        <label class="col-sm-4 control-label no-padding-right" for="{$login}"> 
                            <span>{$loginlabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$loginid}" name="{$login}"  value="{$loginvalue}" placeholder="{$logindesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$password}"> 
                            <span>{$passwordlabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="password" id="{$passwordid}" name="{$password}"  value="{$passwordvalue}" placeholder="{$passworddesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 yescheckbox required">
                        <label class="col-sm-5 control-label no-padding-right" for="{$useractivated}"> 
                            <span>{$useractivatedlabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>
                        <div class="col-sm-7">
                            <input name="{$useractivated}" class="ace ace-switch ace-switch-5" type="checkbox" />
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
                {$savelabel}
            </button>      
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                {$cancellabel}
            </button>
        </div>
    </form>
</fieldset>