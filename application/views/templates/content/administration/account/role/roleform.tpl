<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$roleformname}" action="{$root_url}/{$addrole}" method="POST">
        <div class="row">
            <div class="col-sm-4 panel-title panel-default">
                <fieldset class="fieldset fi">
                    <legend class="">Informations générales</legend>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$rolewording}"> 
                            <span>{$rolewordinglabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-12" type="text" id="{$rolewordingid}" name="{$rolewording}"  value="{$rolewordingvalue}" placeholder="{$rolewordingdesc}" required="true" />
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    <div class="form-group col-sm-12 required">
                        <label class="col-sm-4 control-label no-padding-right" for="{$roledescription}"> 
                            <span>{$roledescriptionlabel}</span>
                            <span class="asteriskField text-danger">*</span>
                        </label>

                        <div class="col-sm-8">
                            <textarea class="form-control" id="{$roledescriptionid}" name="{$roledescription}" placeholder="{$roledescriptiondesc}" required="true">{$roledescriptionvalue}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-12 hr hr-16 hr-dotted"></div>
                    {*<div class="col-sm-12 yescheckbox required">
                    <label class="col-sm-5 control-label no-padding-right" for="{$roleactivated}"> 
                    <span>{$roleactivatedlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                    </label>
                    <div class="col-sm-7">
                    <input name="{$roleactivated}" class="ace ace-switch ace-switch-5" type="checkbox" />
                    <span class="lbl"></span>
                    </div>
                    </div> *}
                </fieldset>         
            </div>
            <div class="col-sm-8 required">
                <fieldset class="fieldset">
                    <legend class="">{$permissionslabel}</legend>
                    {*<label class="col-sm-12 control-label no-padding-right" for="{$permissions}"> 
                    <span>{$permissionslabel}</span>
                    <span class="asteriskField text-danger">*</span>
                    </label>*}
                    {*                selected="selected"<label class="col-sm-3 control-label no-padding-top" for="duallist"> Dual listbox </label>*}

                    <div class="col-sm-12">
                        <select multiple="multiple" size="10" name="permissionselectedlist[]" id="duallist">
                            {foreach from=$permissiondatalist item=data}
                                <option value="{$data->getId()}">
                                    {$data->getDescription()}
                                </option>
                            {/foreach}
                            {*{if count($permissionsForRole) != 0 }
                                {foreach from=$permissionsForRole item=permission}
                                    <option value="{$permission->getId()}" selected="selected">{$permission->getDescription()}</option>
                                {/foreach}
                            {/if}*}

                        </select>
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