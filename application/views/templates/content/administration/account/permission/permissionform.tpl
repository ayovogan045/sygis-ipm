<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$prospectyearformname}" action="{$root_url}/{$addprospectyear}" method="POST">
        <div class="row">
            <div class="form-group col-sm-4 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$prospectyearwording}"> 
                    <span>{$prospectyearwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$prospectyearwordingid}" name="{$prospectyearwording}"  value="{$prospectyearwordingvalue}" placeholder="{$prospectyearwordingdesc}" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-4 required">
                <label class="col-sm-5 control-label no-padding-right" for="{$prospectyearcode}"> 
                    <span>{$prospectyearcodelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-7">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$prospectyearcodeid}" name="{$prospectyearcode}"  value="{$prospectyearcodevalue}" placeholder="{$prospectyearcodedesc}" required="true" />
                </div>
            </div>

            <div class="col-sm-4 yescheckbox required">
                 <label class="col-sm-5 control-label no-padding-right" for="{$prospectyearactivated}"> 
                    <span>{$prospectyearactivatedlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>
                <div class="col-sm-7">
                    <input name="{$prospectyearactivated}" class="ace ace-switch ace-switch-5" type="checkbox" />
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