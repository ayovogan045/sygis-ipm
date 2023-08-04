<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$specialityformname}" action="{$root_url}/{$addspeciality}" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$specialitywording}"> 
                    <span>{$specialitywordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$specialitywordingid}" name="{$specialitywording}" value="{$specialitywordingvalue}" placeholder="{$specialitywordingdesc}" required="true" />
                </div>
            </div>
                
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$specialitycode}"> 
                    <span>{$specialitycodelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$specialitycodeid}" name="{$specialitycode}" value="{$specialitycodevalue}" placeholder="{$specialitycodedesc}" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$specialitymention}"> 
                    <span>{$specialitymentionlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="{$specialitymention}" data-placeholder="{$specialitymentiondesc}" required="true">
                        {if !isset($mentionselected) || ($mentionselected === "")}
                            <option value="" class="nothing"> </option>
                            {if $mention_datalist != NULL}
                                {foreach from=$mention_datalist item=data}
                                    <option value="{$data->getId()}">{$data->__toString()}</option>
                                {/foreach}
                            {/if}
                        {else}
                            {if isset($mentionselected) && ($mentionselected != "")}
                                <option value="{$mentionselected->getId()}">{$mentionselected->__toString()}</option>
                            {/if}
                            {if $mention_datalist != NULL}
                                {foreach from=$mention_datalist item=data}
                                    {if $mentionselected->getId() != $data->getId()}
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
