<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$feetypeformname}" action="{$root_url}/{$addfeetype}" method="POST">
        <div class="row">
            <div class="form-group col-sm-3 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$feetypewording}"> 
                    <span>{$feetypewordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$feetypewordingid}" name="{$feetypewording}"  value="{$feetypewordingvalue}" placeholder="{$feetypewordingdesc}" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-3 required">
                <label class="col-sm-5 control-label no-padding-right" for="{$feetypecode}"> 
                    <span>{$feetypecodelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-7">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$feetypecodeid}" name="{$feetypecode}"  value="{$feetypecodevalue}" placeholder="{$feetypecodedesc}" required="true" />
                </div>
            </div>

            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$feetypedescription}"> 
                    <span>{$feetypedescriptionlabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <textarea class="form-control" id="{$feetypedescriptionid}" name="{$feetypedescription}" placeholder="{$feetypedescriptiondesc}" required="true">{$feetypedescriptionvalue}</textarea>
                </div>
            </div>
        </div>

        <div class="clearfix form-fees">
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