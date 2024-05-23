<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$lessonunitformname}" action="{$root_url}/{$addlessonunit}" method="POST">
        <div class="row">
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$codeue}"> 
                    <span>{$codeuelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$codeueid}" name="{$codeue}" value="{$codeuevalue}" placeholder="{$codeuedesc}" required="true" />
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$lessonunitmediumwording}"> 
                    <span>{$lessonunitmediumwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$lessonunitmediumwordingid}" name="{$lessonunitmediumwording}" value="{$lessonunitmediumwordingvalue}" placeholder="{$lessonunitmediumwordingdesc}" required="true" />
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$lessonunitlongwording}"> 
                    <span>{$lessonunitlongwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$lessonunitlongwordingid}" name="{$lessonunitlongwording}" value="{$lessonunitlongwordingvalue}" placeholder="{$lessonunitlongwordingdesc}" required="true" />
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$lessonunittype}"> 
                    <span>{$lessonunittypelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="{$lessonunittype}" data-placeholder="{$lessonunittypedesc}" required="true">
                        {if !isset($lessonunittypeselected) || ($lessonunittypeselected === "")}
                            <option value="" class="nothing"> </option>
                            {if $lessonunittype_datalist != NULL}
                                {foreach from=$lessonunittype_datalist item=data}
                                    <option value="{$data->getId()}">{$data->__toString()}</option>
                                {/foreach}
                            {/if}
                        {else}
                            {if isset($lessonunittypeselected) && ($lessonunittypeselected != "")}
                                <option value="{$lessonunittypeselected->getId()}">{$lessonunittypeselected->__toString()}</option>
                            {/if}
                            {if $lessonunittype_datalist != NULL}
                                {foreach from=$lessonunittype_datalist item=data}
                                    {if $lessonunittypeselected->getId() != $data->getId()}
                                        <option value="{$data->getId()}">{$data->__toString()}</option>
                                    {/if}
                                {/foreach}
                            {/if}
                        {/if}
                    </select>
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div> 
            </div> 
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$lessonunitspeciality}"> 
                    <span>{$lessonunitspecialitylabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="{$lessonunitspeciality}" data-placeholder="{$lessonunitspecialitydesc}" required="true">
                        {if !isset($lessonunitspecialityselected) || ($lessonunitspecialityselected === "")}
                            <option value="" class="nothing"> </option>
                            {if $lessonunitspeciality_datalist != NULL}
                                {foreach from=$lessonunitspeciality_datalist item=data}
                                    <option value="{$data->getId()}">{$data->__toString()}</option>
                                {/foreach}
                            {/if}
                        {else}
                            {if isset($lessonunitspecialityselected) && ($lessonunitspecialityselected != "")}
                                <option value="{$lessonunitspecialityselected->getId()}">{$lessonunitspecialityselected->__toString()}</option>
                            {/if}
                            {if $lessonunitspeciality_datalist != NULL}
                                {foreach from=$lessonunitspeciality_datalist item=data}
                                    {if $lessonunitspecialityselected->getId() != $data->getId()}
                                        <option value="{$data->getId()}">{$data->__toString()}</option>
                                    {/if}
                                {/foreach}
                            {/if}
                        {/if}
                    </select>
                </div>
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