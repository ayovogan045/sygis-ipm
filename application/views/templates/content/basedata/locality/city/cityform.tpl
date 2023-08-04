<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$cityformname}" action="{$root_url}/{$addcity}" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$citywording}"> 
                    <span>{$citywordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$citywordingid}" name="{$citywording}" value="{$citywordingvalue}" placeholder="{$citywordingdesc}" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$citycountry}"> 
                    <span>{$citycountrylabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <select class="chosen-select form-control" id="form-field-select-3" name="{$citycountry}" data-placeholder="{$citycountrydesc}" required="true">
                        {if !isset($countryselected) || ($countryselected === "")}
                            <option value="" class="nothing"> </option>
                            {if $country_datalist != NULL}
                                {foreach from=$country_datalist item=data}
                                    <option value="{$data->getId()}">{$data->__toString()}</option>
                                {/foreach}
                            {/if}
                        {else}
                            {if isset($countryselected) && ($countryselected != "")}
                                <option value="{$countryselected->getId()}">{$countryselected->__toString()}</option>
                            {/if}
                            {if $country_datalist != NULL}
                                {foreach from=$country_datalist item=data}
                                    {if $countryselected->getId() != $data->getId()}
                                        <option value="{$data->getId()}">{$data->__toString()}</option>
                                    {/if}
                                {/foreach}
                            {/if}
                        {/if}
                    </select>
                </div>
            </div>
                    
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$citydescription}"> 
                    <span>{$citydescriptionlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <textarea class="form-control" id="{$citydescriptionid}" name="{$citydescription}" placeholder="{$citydescriptiondesc}" required="true">{$citydescriptionvalue}</textarea>
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