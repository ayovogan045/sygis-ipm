<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$lessonunittypeformname}" action="{$root_url}/{$addlessonunittype}" method="POST">
        <div class="row">
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$lessonunittypewording}"> 
                    <span>{$lessonunittypewordinglabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$lessonunittypewordingid}" name="{$lessonunittypewording}"  value="{$lessonunittypewordingvalue}" placeholder="{$lessonunittypewordingdesc}" required="true" />
                </div>
            </div>
            <div class="form-group col-sm-6 required">
                <label class="col-sm-4 control-label no-padding-right" for="{$lessonunittypecode}"> 
                    <span>{$lessonunittypecodelabel}</span>
                    <span class="asteriskField text-danger">*</span>
                </label>

                <div class="col-sm-8">
                    <input class="col-xs-12 col-sm-12" type="text" id="{$lessonunittypecodeid}" name="{$lessonunittypecode}"  value="{$lessonunittypecodevalue}" placeholder="{$lessonunittypecodedesc}" required="true" />
                </div>
            </div>
        </div><div class="row">
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