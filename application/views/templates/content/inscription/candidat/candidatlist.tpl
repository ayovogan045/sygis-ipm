<div class="clearfix"> 
    <div class="pull-right tableTools-container">
        <a href="submit" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Expoter en format CSV">
            <i class="ace-icon fa fa-file-o bigger-110 orange"></i>
            {$exportcsvlabel}
        </a>      
        <a href="reset" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Expoter en format EXCEL">
            <i class="ace-icon fa fa-file-excel-o bigger-110 green"></i>
            {$exportexcellabel}
        </a>
        <a href="reset" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Expoter en format PDF">
            <i class="ace-icon fa fa-file-pdf-o bigger-110 red"></i>
            {$exportpdflabel}
        </a>
    </div>
</div>
<div class="table-header">
    {$listlabel}
</div>

<!-- div.table-responsive -->

<!-- div.dataTables_borderWrap -->
<div>
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>{$num}</th>
                <th class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace" />
                        <span class="lbl"></span>
                    </label>
                </th>
                <th>{$lastnamelabel}</th>
                <th>{$firstnamelabel}</th>
                <th>{$genderlabel}</th>
                <th>{$phonelabel}</th>
                <th>{$emaillabel}</th>
                <th>{$adresslabel}</th>
                <th>{$actionlabel}</th>
            </tr>
        </thead>

        <tbody>
            {$index = 1}
            {foreach from=$candidatdatalist  item=data}
                <tr>
                    <td>{$index}</td>
                    <td class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </td>
                    <td>{$data->getPerson_info()->getLast_name()}</td>
                    <td>{$data->getPerson_info()->getFirst_name()}</td>
                    <td>{$data->getPerson_info()->getGender()}</td>
                    <td>{$data->getPerson_info()->getPhone()}</td>
                    <td>{$data->getPerson_info()->getMail()}</td>
                    <td>{$data->getPerson_info()->getAdress()}</td>
                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">
                            <a  class="blue tooltip-info " data-rel="tooltip" title="{$viewlabel}" href="#">
                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                            </a>

                            <a id="edit-confirm" class="green tooltip-success" data-rel="tooltip" title="{$editlabel}"
                               href="#" 
                               onclick="edit_alert('{$root_url}/{$candidateditedlink}/{$data->encryptionId($data->getId())}', '{$root_url}/{$candidat}', '{$data->__toString()}');">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                            </a>

                            <a id="delete-confirm" class="red tooltip-error" data-rel="tooltip" title="{$deletelabel}" href="#" 
                               onclick="delete_alert('{$root_url}/{$candidatdeletedlink}/{$data->encryptionId($data->getId())}', '{$root_url}/{$candidat}', '{$data->__toString()}');">
                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                            </a>
                        </div>

                        <div class="hidden-md hidden-lg">
                            <div class="inline pos-rel">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                    <li>
                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="{$viewlabel}">
                                            <span class="blue">
                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="{$editlabel}">
                                            <span class="green">
                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="{$deletelabel}">
                                            <span class="red">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                {$index = $index+1 }
            {/foreach}
        </tbody>
    </table>
</div>