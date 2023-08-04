<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$gradeformname}" action="{$root_url}/{$addgrade}" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$gradewording}"> 
                    <span>{$gradewordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$gradewordingid}" name="{$gradewording}" value="{$gradewordingvalue}" placeholder="{$gradewordingdesc}" required="true" />
                </div>
            </div>
                
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$gradecode}"> 
                    <span>{$gradecodelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$gradecodeid}" name="{$gradecode}" value="{$gradecodevalue}" placeholder="{$gradecodedesc}" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$gradelevel}"> 
                    <span>{$gradelevellabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="{$gradelevel}" data-placeholder="{$gradeleveldesc}" required="true">
                        {if !isset($levelselected) || ($levelselected === "")}
                            <option value="" class="nothing"> </option>
                            {if $level_datalist != NULL}
                                {foreach from=$level_datalist item=data}
                                    <option value="{$data->getId()}">{$data->__toString()}</option>
                                {/foreach}
                            {/if}
                        {else}
                            {if isset($levelselected) && ($levelselected != "")}
                                <option value="{$levelselected->getId()}">{$levelselected->__toString()}</option>
                            {/if}
                            {if $level_datalist != NULL}
                                {foreach from=$level_datalist item=data}
                                    {if $levelselected->getId() != $data->getId()}
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
