{block name="content"}
    <fieldset class="fieldset">
        <legend class="">{$addnewlabel}</legend>
        <form name="{$genderformname}" class="form-horizontal" action="{$base_url}{$addgender}" method="POST">
            <div class="form-group form-group-sm row required">
                <label class="control-label col-4 col-form-label requiredField big" for="{$genderlongwording}">
                    <span>{$genderlongwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="{$genderlongwording}" class="form-control" type="text" id="wording" value="{$genderlongwordingvalue}" placeholder="{$genderlongwordingdesc}" required="true">
                </div>
            </div>
            <div class="form-group form-group-sm row required">
                <label class="control-label col-4 col-form-label requiredField big" for="{$gendermediumwording}">
                    <span>{$gendermediumwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="{$gendermediumwording}" class="form-control" type="text" id="wording" value="{$gendermediumwordingvalue}" placeholder="{$gendermediumwordingdesc}" required="true">
                </div>
            </div>
            <div class="form-group form-group-sm row required">
                <label class="control-label col-4 col-form-label requiredField big" for="{$gendershortwording}">
                    <span>{$gendershortwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="{$gendershortwording}" class="form-control" type="text" id="wording" value="{$gendershortwordingvalue}" placeholder="{$gendershortwordingdesc}" required="true">
                </div>

            </div>

            <div class="float-right">
                <button type="submit" class="btn btn-success btn-sm ">{$savelabel}</button>      
                <button type="reset" class="btn btn-danger btn-sm">{$cancellabel}</button>
            </div>
        </form>
    </fieldset> 
{/block}