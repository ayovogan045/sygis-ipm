<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal addusertab" role="form" name="{$candidatformname}" action="{$root_url}/{$addcandidat}" method="POST" enctype="multipart/form-data">

        <div class="row">
            <div class="col-sm-3 panel-title panel-default">
                <fieldset class="fieldset fi">
                    <legend class="">Etat civile</legend>
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
                            <select class="chosen-select form-control" id="form-field-select-3" name="{$gender}" data-placeholder="{$genderdesc}" required="true">
                                {if !isset($genderselected) || ($genderselected === "")}
                                    <option value="" class="nothing"> </option>
                                    {if $gender_datalist != NULL}
                                        {foreach from=$gender_datalist item=data}
                                            <option value="{$data->getId()}">{$data->__toString()}</option>
                                        {/foreach}
                                    {/if}
                                {else}
                                    {if isset($genderselected) && ($genderselected != "")}
                                        <option value="{$genderselected->getId()}">{$genderselected->__toString()}</option>
                                    {/if}
                                    {if $gender_datalist != NULL}
                                        {foreach from=$gender_datalist item=data}
                                            {if $genderselected->getId() != $data->getId()}
                                                <option value="{$data->getId()}">{$data->__toString()}</option>
                                            {/if}
                                        {/foreach}
                                    {/if}
                                {/if}
                            </select>
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
                            <select class="chosen-select form-control" id="form-field-select-3" name="{$birthcity}" data-placeholder="{$birthcitydesc}" required="true">
                                {if !isset($birthcityselected) || ($birthcityselected === "")}
                                    <option value="" class="nothing"> </option>
                                    {if $birthcity_datalist != NULL}
                                        {foreach from=$birthcity_datalist item=data}
                                            <option value="{$data->getId()}">{$data->__toString()}</option>
                                        {/foreach}
                                    {/if}
                                {else}
                                    {if isset($birthcityselected) && ($birthcityselected != "")}
                                        <option value="{$birthcityselected->getId()}">{$birthcityselected->__toString()}</option>
                                    {/if}
                                    {if $birthcity_datalist != NULL}
                                        {foreach from=$birthcity_datalist item=data}
                                            {if $birthcityselected->getId() != $data->getId()}
                                                <option value="{$data->getId()}">{$data->__toString()}</option>
                                            {/if}
                                        {/foreach}
                                    {/if}
                                {/if}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$nationality}"> 
                            <span>{$nationalitylabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <select class="chosen-select form-control" id="form-field-select-3" name="{$nationality}" data-placeholder="{$nationalitydesc}" required="true">
                                {if !isset($nationalityselected) || ($nationalityselected === "")}
                                    <option value="" class="nothing"> </option>
                                    {if $nationality_datalist != NULL}
                                        {foreach from=$nationality_datalist item=data}
                                            <option value="{$data->getId()}">{$data->getNationality()}</option>
                                        {/foreach}
                                    {/if}
                                {else}
                                    {if isset($nationalityselected) && ($nationalityselected != "")}
                                        <option value="{$nationalityselected->getId()}">{$nationalityselected->getNationality()}</option>
                                    {/if}
                                    {if $nationality_datalist != NULL}
                                        {foreach from=$nationality_datalist item=data}
                                            {if $nationalityselected->getId() != $data->getId()}
                                                <option value="{$data->getId()}">{$data->getNationality()}</option>
                                            {/if}
                                        {/foreach}
                                    {/if}
                                {/if}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                </fieldset> 
            </div>
               {*               <div class="col-sm-3 panel-title panel-default">
                <fieldset class="fieldset fi">
                    <legend class="">Etat civile</legend>
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
                            <select class="chosen-select form-control" id="form-field-select-3" name="{$gender}" data-placeholder="{$genderdesc}" required="true">
                                {if !isset($genderselected) || ($genderselected === "")}
                                    <option value="" class="nothing"> </option>
                                    {if $gender_datalist != NULL}
                                        {foreach from=$gender_datalist item=data}
                                            <option value="{$data->getId()}">{$data->__toString()}</option>
                                        {/foreach}
                                    {/if}
                                {else}
                                    {if isset($genderselected) && ($genderselected != "")}
                                        <option value="{$genderselected->getId()}">{$genderselected->__toString()}</option>
                                    {/if}
                                    {if $gender_datalist != NULL}
                                        {foreach from=$gender_datalist item=data}
                                            {if $genderselected->getId() != $data->getId()}
                                                <option value="{$data->getId()}">{$data->__toString()}</option>
                                            {/if}
                                        {/foreach}
                                    {/if}
                                {/if}
                            </select>
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
                            <select class="chosen-select form-control" id="form-field-select-3" name="{$birthcity}" data-placeholder="{$birthcitydesc}" required="true">
                                {if !isset($birthcityselected) || ($birthcityselected === "")}
                                    <option value="" class="nothing"> </option>
                                    {if $birthcity_datalist != NULL}
                                        {foreach from=$birthcity_datalist item=data}
                                            <option value="{$data->getId()}">{$data->__toString()}</option>
                                        {/foreach}
                                    {/if}
                                {else}
                                    {if isset($birthcityselected) && ($birthcityselected != "")}
                                        <option value="{$birthcityselected->getId()}">{$birthcityselected->__toString()}</option>
                                    {/if}
                                    {if $birthcity_datalist != NULL}
                                        {foreach from=$birthcity_datalist item=data}
                                            {if $birthcityselected->getId() != $data->getId()}
                                                <option value="{$data->getId()}">{$data->__toString()}</option>
                                            {/if}
                                        {/foreach}
                                    {/if}
                                {/if}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$nationality}"> 
                            <span>{$nationalitylabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <select class="chosen-select form-control" id="form-field-select-3" name="{$nationality}" data-placeholder="{$nationalitydesc}" required="true">
                                {if !isset($nationalityselected) || ($nationalityselected === "")}
                                    <option value="" class="nothing"> </option>
                                    {if $nationality_datalist != NULL}
                                        {foreach from=$nationality_datalist item=data}
                                            <option value="{$data->getId()}">{$data->getNationality()}</option>
                                        {/foreach}
                                    {/if}
                                {else}
                                    {if isset($nationalityselected) && ($nationalityselected != "")}
                                        <option value="{$nationalityselected->getId()}">{$nationalityselected->getNationality()}</option>
                                    {/if}
                                    {if $nationality_datalist != NULL}
                                        {foreach from=$nationality_datalist item=data}
                                            {if $nationalityselected->getId() != $data->getId()}
                                                <option value="{$data->getId()}">{$data->getNationality()}</option>
                                            {/if}
                                        {/foreach}
                                    {/if}
                                {/if}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                </fieldset> 
            </div>*}
            <div class="col-sm-3 panel-title panel-default">
                <fieldset class="fieldset fi">
                    <legend class="">Information de contact</legend>
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
                        <label class="col-sm-4 control-label no-padding-right" for="{$email}"> 
                            <span>{$emaillabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$emailid}" name="{$email}"  value="{$emailvalue}" placeholder="{$emaildesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$guardianname}"> 
                            <span>{$guardiannamelabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$guardiannameid}" name="{$guardianname}"  value="{$guardiannamevalue}" placeholder="{$guardiannamedesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$guardianphone}"> 
                            <span>{$guardianphonelabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$guardianphoneid}" name="{$guardianphone}"  value="{$guardianphonevalue}" placeholder="{$guardianphonedesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$guardianmail}"> 
                            <span>{$guardianmaillabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$guardianmailid}" name="{$guardianmail}"  value="{$guardianmailvalue}" placeholder="{$guardianmaildesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                </fieldset>         
            </div>

            <div class="col-sm-3 panel-title panel-default">
                <fieldset class="fieldset fi">
                    <legend class="">Autres informations</legend>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$bloodgroup}"> 
                            <span>{$bloodgrouplabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>
                            <div class="col-sm-8">
                            <select class="chosen-select form-control" id="form-field-select-3" name="{$bloodgroup}" data-placeholder="{$bloodgroupdesc}" required="true">
                                {if !isset($bloodgroupselected) || ($bloodgroupselected === "")}
                                    <option value="" class="nothing"> </option>
                                    {if $bloodgroup_datalist != NULL}
                                        {foreach from=$bloodgroup_datalist item=data}
                                            <option value="{$data}">{$data}</option>
                                        {/foreach}
                                    {/if}
                                {else}
                                    {if isset($bloodgroupselected) && ($bloodgroupselected != "")}
                                        <option value="{$bloodgroupselected}">{$bloodgroupselected}</option>
                                    {/if}
                                    {if $bloodgroup_datalist != NULL}
                                        {foreach from=$school_datalist item=data}
                                            {if $bloodgroupselected->getId() != $data->getId()}
                                                <option value="{$data->getId()}">{$data->__toString()}</option>
                                            {/if}
                                        {/foreach}
                                    {/if}
                                {/if}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$oldschool}"> 
                            <span>{$oldschoollabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <select class="chosen-select form-control" id="form-field-select-3" name="{$oldschool}" data-placeholder="{$oldschooldesc}" required="true">
                                {if !isset($oldschoolselected) || ($oldschoolselected === "")}
                                    <option value="" class="nothing"> </option>
                                    {if $school_datalist != NULL}
                                        {foreach from=$school_datalist item=data}
                                            <option value="{$data->getId()}">{$data->__toString()}</option>
                                        {/foreach}
                                    {/if}
                                {else}
                                    {if isset($oldschoolselected) && ($oldschoolselected != "")}
                                        <option value="{$oldschoolselected->getId()}">{$oldschoolselected->__toString()}</option>
                                    {/if}
                                    {if $school_datalist != NULL}
                                        {foreach from=$school_datalist item=data}
                                            {if $oldschoolselected->getId() != $data->getId()}
                                                <option value="{$data->getId()}">{$data->__toString()}</option>
                                            {/if}
                                        {/foreach}
                                    {/if}
                                {/if}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$picture}"> 
                            <span>{$picturelabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div id="msg" class="col-sm-8">
                            <input type="file" id="{$pictureid}" name="{$picture}" class="file" accept="image/png, image/jpg, image/jpeg">
                            <div class="form-group">
                                <input class="col-xs-12 col-sm-12" type="text" id="{$picturefile}" name="{$picture}"  value="{$picturevalue}" disabled placeholder="{$picturedesc}" required="true" />
                                {*<input type="text" class="form-control" disabled placeholder="Upload File" id="file">*}                               
                                 <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                                <div class="col-sm-12">
                                    <img src="{$base_pictures_url}/user.png" id="preview" class="img-thumbnail">
                                </div>
                                 <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                                <div class="input-group-append">
                                    <button type="button" class="browse btn btn-primary btn-sm col-sm-12">
                                        <i class="ace-icon fa fa-download bigger-110"></i>
                                        {$downloadlabel}
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
                {$savelabel}
            </button>      
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                {$cancellabel}
            </button>
        </div>
    </form>
</fieldset>