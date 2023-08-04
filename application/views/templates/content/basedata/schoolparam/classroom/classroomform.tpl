<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$classroomformname}" action="{$root_url}/{$addclassroom}" method="POST">
        <div class="row">
            
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$classroomclassunit}"> 
                    <span>{$classroomclassunitlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="{$classroomclassunit}" data-placeholder="{$classroomclassunitdesc}" required="true">
                        {if !isset($classunitselected) || ($classunitselected === "")}
                            <option value="" class="nothing"> </option>
                            {if $classunit_datalist != NULL}
                                {foreach from=$classunit_datalist item=data}
                                    <option value="{$data->getId()}">{$data->__toString()}</option>
                                {/foreach}
                            {/if}
                        {else}
                            {if isset($classunitselected) && ($classunitselected != "")}
                                <option value="{$classunitselected->getId()}">{$classunitselected->__toString()}</option>
                            {/if}
                            {if $classunit_datalist != NULL}
                                {foreach from=$classunit_datalist item=data}
                                    {if $classunitselected->getId() != $data->getId()}
                                        <option value="{$data->getId()}">{$data->__toString()}</option>
                                    {/if}
                                {/foreach}
                            {/if}
                        {/if}
                    </select>
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$classroomgroup}"> 
                    <span>{$classroomgrouplabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="{$classroomgroup}" data-placeholder="{$classroomgroupdesc}" required="true">
                        {if !isset($groupselected) || ($groupselected === "")}
                            <option value="" class="nothing"> </option>
                            {if $group_datalist != NULL}
                                {foreach from=$group_datalist item=data}
                                    <option value="{$data->getId()}">{$data->__toString()}</option>
                                {/foreach}
                            {/if}
                        {else}
                            {if isset($groupselected) && ($groupselected != "")}
                                <option value="{$groupselected->getId()}">{$groupselected->__toString()}</option>
                            {/if}
                            {if $group_datalist != NULL}
                                {foreach from=$group_datalist item=data}
                                    {if $groupselected->getId() != $data->getId()}
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