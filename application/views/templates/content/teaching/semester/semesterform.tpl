<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$semesterformname}" action="{$root_url}/{$addsemester}" method="POST">
        <div class="row">
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$semestershortwording}"> 
                    <span>{$semestershortwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$semestershortwordingid}" name="{$semestershortwording}" value="{$semestershortwordingvalue}" placeholder="{$semestershortwordingdesc}" required="true" />
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$semestermediumwording}"> 
                    <span>{$semestermediumwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$semestermediumwordingid}" name="{$semestermediumwording}" value="{$semestermediumwordingvalue}" placeholder="{$semestermediumwordingdesc}" required="true" />
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$semesterlongwording}"> 
                    <span>{$semesterlongwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$semesterlongwordingid}" name="{$semesterlongwording}" value="{$semesterlongwordingvalue}" placeholder="{$semesterlongwordingdesc}" required="true" />
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$semesteracademicyear}"> 
                    <span>{$semesteracademicyearlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="{$semesteracademicyear}" data-placeholder="{$semesteracademicyeardesc}" required="true">
                        {if !isset($academicyearselected) || ($academicyearselected === "")}
                            <option value="" class="nothing"> </option>
                            {if $academicyear_datalist != NULL}
                                {foreach from=$academicyear_datalist item=data}
                                    <option value="{$data->getId()}">{$data->__toString()}</option>
                                {/foreach}
                            {/if}
                        {else}
                            {if isset($academicyearselected) && ($academicyearselected != "")}
                                <option value="{$academicyearselected->getId()}">{$academicyearselected->__toString()}</option>
                            {/if}
                            {if $academicyear_datalist != NULL}
                                {foreach from=$academicyear_datalist item=data}
                                    {if $academicyearselected->getId() != $data->getId()}
                                        <option value="{$data->getId()}">{$data->__toString()}</option>
                                    {/if}
                                {/foreach}
                            {/if}
                        {/if}
                    </select>
                </div>
                <div class="col-sm-12 hr hr-16 hr-dotted"></div> 
            </div> 
            <div class="col-sm-12 yescheckbox required">
                <label class="col-sm-5 control-label no-padding-right" for="{$semesteractivated}"> 
                    <span>{$semesteractivatedlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="{$semesteractivated}" class="ace ace-switch ace-switch-5" type="checkbox" />
                    <span class="lbl"></span>
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