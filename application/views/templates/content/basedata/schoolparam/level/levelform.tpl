<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$levelformname}" action="{$root_url}/{$addlevel}" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$levelwording}"> 
                    <span>{$levelwordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$levelwordingid}" name="{$levelwording}"  value="{$levelwordingvalue}" placeholder="{$levelwordingdesc}" required="true" />
                </div>
            </div>
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$levelcode}"> 
                    <span>{$levelcodelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$levelcodeid}" name="{$levelcode}"  value="{$levelcodevalue}" placeholder="{$levelcodedesc}" required="true" />
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
        </div>
    </form>
</fieldset>