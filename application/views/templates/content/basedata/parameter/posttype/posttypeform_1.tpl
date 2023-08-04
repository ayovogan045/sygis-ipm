{block name="content"}
    <fieldset class="fieldset">
        <legend class="">{$addnewlabel}</legend>
        <form name="{$posttypeformname}" class="form-horizontal" action="{$base_url}{$addposttype}" method="POST">
            <div class="form-group form-group-sm row required">
                <label class="control-label col-4 col-form-label requiredField big" for="{$posttypewording}">
                    <span>{$posttypewordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="{$posttypewording}" class="form-control" type="text" id="wording" value="{$posttypewordingvalue}" placeholder="{$posttypewordingdesc}" required="true">
                </div>
            </div>

            <div class="form-group form-group-sm row required">
                <label class="control-label col-4 col-form-label requiredField big" for="{$posttypecode}">
                    <span>{$posttypecodelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="{$posttypecode}" class="form-control" type="text" id="idcode" value="{$posttypecodevalue}" placeholder="{$posttypecodedesc}" required="true">
                </div>
            </div>

             <div class="form-group form-group-sm row required">
                <label class="control-label col-4 col-form-label requiredField big" for="{$posttypedescription}">
                    <span>{$posttypedescriptionlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <textarea name="{$posttypedescription}" class="form-control" type="text" id="shortwording" placeholder="{$posttypedescriptiondesc}" required="true" rows="3">{$posttypedescriptionvalue}</textarea>
                </div>
            </div>

            <div class="float-right">
                <button type="submit" class="btn btn-success btn-sm ">{$savelabel}</button>      
                <button type="reset" class="btn btn-danger btn-sm">{$cancellabel}</button>
            </div>
        </form>
    </fieldset> 
{/block}