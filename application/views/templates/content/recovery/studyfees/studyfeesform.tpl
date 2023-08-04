<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$studyfeesformname}" action="{$root_url}/{$addstudyfees}" method="POST">
        <div class="row">

            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$candidat}"> 
                    <span>{$candidatlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="{$candidat}" data-placeholder="{$candidatdesc}" required="true">
                        {if !isset($candidatselected) || ($candidatselected === "")}
                            <option value="" class="nothing"> </option>
                            {if $candidat_datalist != NULL}
                                {foreach from=$candidat_datalist item=data}
                                    <option value="{$data->getId()}">{$data->getPerson_info()}</option>
                                {/foreach}
                            {/if}
                        {else}
                            {if isset($candidatselected) && ($candidatselected != "")}
                                <option value="{$feeselected->getId()}">{$candidatselected->__toString()}</option>
                            {/if}
                            {if $candidat_datalist != NULL}
                                {foreach from=$candidat_datalist item=data}
                                    {if $candidatselected->getId() != $data->getId()}
                                        <option value="{$data->getId()}">{$data->__toString()}</option>
                                    {/if}
                                {/foreach}
                            {/if}
                        {/if}
                    </select>
                </div>
            </div>
                    
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$fee}"> 
                    <span>{$feelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="{$fee}" data-placeholder="{$feedesc}" required="true">
                        {if !isset($feeselected) || ($feeselected === "")}
                            <option value="" class="nothing"> </option>
                            {if $fee_datalist != NULL}
                                {foreach from=$fee_datalist item=data}
                                    <option value="{$data->getId()}">{$data->__toString()}</option>
                                {/foreach}
                            {/if}
                        {else}
                            {if isset($feeselected) && ($feeselected != "")}
                                <option value="{$feeselected->getId()}">{$feeselected->__toString()}</option>
                            {/if}
                            {if $fee_datalist != NULL}
                                {foreach from=$fee_datalist item=data}
                                    {if $feeselected->getId() != $data->getId()}
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