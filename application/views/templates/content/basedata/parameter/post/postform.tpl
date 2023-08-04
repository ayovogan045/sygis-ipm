{block name="content"}
    <fieldset class="fieldset">
        <legend class="">{$addnewlabel}</legend>
        <form name="{$postformname}" class="form-horizontal" action="{$base_url}{$addpost}" method="POST">
            <div class="form-group form-group-sm row required">
                <label class="control-label col-4 col-form-label requiredField big" for="{$postwording}">
                    <span>{$postwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="{$postwording}" class="form-control" type="text" id="wording" value="{$postwordingvalue}" placeholder="{$postwordingdesc}" required="true">
                </div>
            </div>

            <div class="form-group form-group-sm row required">
                <label class="control-label col-4 col-form-label requiredField big" for="{$postcode}">
                    <span>{$postcodelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="{$postcode}" class="form-control" type="text" id="idcode" value="{$postcodevalue}" placeholder="{$postcodedesc}" required="true">
                </div>
            </div>

             <div class="form-group form-group-sm row required">
                <label class="control-label col-4 col-form-label requiredField big" for="{$postdescription}">
                    <span>{$postdescriptionlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <textarea name="{$postdescription}" class="form-control" type="text" id="shortwording" placeholder="{$postdescriptiondesc}" required="true" rows="3">{$postdescriptionvalue}</textarea>
                </div>
            </div>

            <div class="float-right">
                <button type="submit" class="btn btn-success btn-sm ">{$savelabel}</button>      
                <button type="reset" class="btn btn-danger btn-sm">{$cancellabel}</button>
            </div>
        </form>
    </fieldset> 
{/block}