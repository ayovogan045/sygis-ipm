<fieldset class="fieldset">
    <legend class="table-header">{$addnewlabel}</legend>
    <form class="form-horizontal" role="form" name="{$registrationformname}" action="{$root_url}/{$addregistration}" method="POST">
        <div class="row">
            <div class="col-sm-12 panel-title panel-default required">
                <fieldset class="fieldset">
                    <legend class="">{$candidatslabel}</legend>

                    <div class="col-sm-12">
                        <select multiple="multiple" size="10" name="inscriptionselectedlist[]" id="duallist">
                            {foreach from=$inscriptiondatalist item=data}
                                <option value="{$data->getId()}">
                                    {$data->getCandidat()->getPerson_info()}
                                </option>
                            {/foreach}
                            {if count($registrationdatalist) != 0 }
                                {foreach from=$registrationdatalist item=registration}
                                    <option value="{$registration->getId()}" selected="selected">
                                        {$registration->getInscription()->getCandidat()->getPerson_info()}
                                    </option>
                                {/foreach}
                            {/if}

                        </select>
                    </div>
                </fieldset>
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