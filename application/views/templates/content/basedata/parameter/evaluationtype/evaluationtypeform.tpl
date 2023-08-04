{block name="content"}
    <fieldset class="fieldset">
        <legend class="">{$addnewlabel}</legend>
        <form name="{$evaluationtypeformname}" class="form-horizontal" action="{$base_url}{$addevaluationtype}" method="POST">
            <div class="form-group form-group-sm row required">
                <label class="control-label col-4 col-form-label requiredField big" for="{$evaluationtypewording}">
                    <span>{$evaluationtypewordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="{$evaluationtypewording}" class="form-control" type="text" id="wording" value="{$evaluationtypewordingvalue}" placeholder="{$evaluationtypewordingdesc}" required="true">
                </div>
            </div>

            <div class="form-group form-group-sm row required">
                <label class="control-label col-4 col-form-label requiredField big" for="{$evaluationtypecode}">
                    <span>{$evaluationtypecodelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="{$evaluationtypecode}" class="form-control" type="text" id="idcode" value="{$evaluationtypecodevalue}" placeholder="{$evaluationtypecodedesc}" required="true">
                </div>
            </div>

            <div class="form-group form-group-sm row required">
                <label class="control-label col-4 col-form-label requiredField big" for="{$evaluationtypedescription}">
                    <span>{$evaluationtypedescriptionlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <textarea name="{$evaluationtypedescription}" class="form-control" type="text" id="shortwording" placeholder="{$evaluationtypedescriptiondesc}" required="true" rows="3">{$evaluationtypedescriptionvalue}</textarea>
                </div>
            </div>

            <div class="float-right">
                <button type="submit" class="btn btn-success btn-sm ">{$savelabel}</button>      
                <button type="reset" class="btn btn-danger btn-sm">{$cancellabel}</button>
            </div>
        </form>
    </fieldset> 
{/block}