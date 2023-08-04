<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$feeformname}" action="{$root_url}/{$addfee}" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$feewording}"> 
                    <span>{$feewordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$feewordingid}" name="{$feewording}" value="{$feewordingvalue}" placeholder="{$feewordingdesc}" required="true" />
                </div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$feeamount}"> 
                    <span>{$feeamountlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <textarea class="form-control" id="{$feeamountid}" name="{$feeamount}" placeholder="{$feeamountdesc}" required="true">{$feeamountvalue}</textarea>
                </div>
            </div>
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$feetype}"> 
                    <span>{$feetypelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="{$feetype}" data-placeholder="{$feetypedesc}" required="true">
                        {if !isset($feetypeselected) || ($feetypeselected === "")}
                            <option value="" class="nothing"> </option>
                            {if $feetype_datalist != NULL}
                                {foreach from=$feetype_datalist item=data}
                                    <option value="{$data->getId()}">{$data->__toString()}</option>
                                {/foreach}
                            {/if}
                        {else}
                            {if isset($feetypeselected) && ($feetypeselected != "")}
                                <option value="{$feetypeselected->getId()}">{$feetypeselected->__toString()}</option>
                            {/if}
                            {if $feetype_datalist != NULL}
                                {foreach from=$feetype_datalist item=data}
                                    {if $feetypeselected->getId() != $data->getId()}
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