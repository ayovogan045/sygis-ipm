<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$academicyearformname}" action="{$root_url}/{$addacademicyear}" method="POST">
        <div class="row">
            <div class="form-group col-sm-4 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$academicyearwording}"> 
                    <span>{$academicyearwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$academicyearwordingid}" name="{$academicyearwording}"  value="{$academicyearwordingvalue}" placeholder="{$academicyearwordingdesc}" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-4 required">
                <label class="col-sm-5 control-label no-padding-right" for="{$academicyearcode}"> 
                    <span>{$academicyearcodelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-7">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$academicyearcodeid}" name="{$academicyearcode}"  value="{$academicyearcodevalue}" placeholder="{$academicyearcodedesc}" required="true" />
                </div>
            </div>

            <div class="col-sm-4 yescheckbox required">
                 <label class="col-sm-5 control-label no-padding-right" for="{$academicyearactivated}"> 
                    <span>{$academicyearactivatedlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="{$academicyearactivated}" class="ace ace-switch ace-switch-5" type="checkbox" />
                    <span class="lbl"></span>
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