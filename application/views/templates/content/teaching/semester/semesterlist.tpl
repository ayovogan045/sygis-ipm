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
                <th>{$semestershortwordinglabel}</th>
                <th>{$semestermediumwordinglabel}</th>
                <th>{$semesterlongwordinglabel}</th>
                <th>{$semesteracademicyearlabel}</th>
                <th>{$semesteractivatedlabel}</th>
                <th>{$actionlabel}</th>
            </tr>
        </thead>

        <tbody>
            {$index = 1}
            {foreach from=$semester_datalist item=data}
                <tr>
                    <td>{$index}</td>
                    <td class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </td>
                    <td>{$data->getShort_wording()}</td>
                    <td>{$data->getMedium_wording()}</td>
                    <td>{$data->getLong_wording()}</td>
                    <td>{$data->getAcademicyear()}</td>
                    <td>{$data->getState()}</td>
                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">
                            {if $data->getState() == 'Non'}
                                <a id="activate-confirm" class="green tooltip-success" data-rel="tooltip" title="{$activatedlabel}" href="#" 
                                   onclick="activate_alert('{$root_url}/{$semesteractivatedlink}/{$data->encryptionId($data->getId())}', '{$root_url}/{$semester}', '{$data->__toString()}');">
                                    <i class="ace-icon fa fa-unlock bigger-150"></i>
                                </a>
                            {else} 
                                <a id="desactivate-confirm" class="red tooltip-error" data-rel="tooltip" title="{$desactivatedlabel}" href="#" 
                                   onclick="desactivate_alert('{$root_url}/{$semesterdesactivatedlink}/{$data->encryptionId($data->getId())}', '{$root_url}/{$semester}', '{$data->__toString()}');">
                                    <i class="ace-icon fa fa-lock bigger-150"></i>
                                </a>
                            {/if}
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