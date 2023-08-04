<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$mentionformname}" action="{$root_url}/{$addmention}" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$mentionwording}"> 
                    <span>{$mentionwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$mentionwordingid}" name="{$mentionwording}" value="{$mentionwordingvalue}" placeholder="{$mentionwordingdesc}" required="true" />
                </div>
            </div>
                
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$mentioncode}"> 
                    <span>{$mentioncodelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$mentioncodeid}" name="{$mentioncode}" value="{$mentioncodevalue}" placeholder="{$mentioncodedesc}" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$mentiongrade}"> 
                    <span>{$mentiongradelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="{$mentiongrade}" data-placeholder="{$mentiongradedesc}" required="true">
                        {if !isset($gradeselected) || ($gradeselected === "")}
                            <option value="" class="nothing"> </option>
                            {if $grade_datalist != NULL}
                                {foreach from=$grade_datalist item=data}
                                    <option value="{$data->getId()}">{$data->__toString()}</option>
                                {/foreach}
                            {/if}
                        {else}
                            {if isset($gradeselected) && ($gradeselected != "")}
                                <option value="{$gradeselected->getId()}">{$gradeselected->__toString()}</option>
                            {/if}
                            {if $grade_datalist != NULL}
                                {foreach from=$grade_datalist item=data}
                                    {if $gradeselected->getId() != $data->getId()}
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
