<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$countryformname}" action="{$root_url}/{$addcountry}" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$countrywording}"> 
                    <span>{$countrywordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$countrywordingid}" name="{$countrywording}"  value="{$countrywordingvalue}" placeholder="{$countrywordingdesc}" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-5 control-label no-padding-right" for="{$countryshortwording}"> 
                    <span>{$countryshortwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-7">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$countryshortwordingid}" name="{$countryshortwording}"  value="{$countryshortwordingvalue}" placeholder="{$countryshortwordingdesc}" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-5 control-label no-padding-right" for="{$countrycode}"> 
                    <span>{$countrycodelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-7">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$countrycodeid}" name="{$countrycode}"  value="{$countrycodevalue}" placeholder="{$countrycodedesc}" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-5 control-label no-padding-right" for="{$countrynationality}"> 
                    <span>{$countrynationalitylabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-7">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$countrynationalityid}" name="{$countrynationality}"  value="{$countrynationalityvalue}" placeholder="{$countrynationalitydesc}" required="true" />
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
            
            