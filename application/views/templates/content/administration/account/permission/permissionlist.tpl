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
                <th>{$permissionwordinglabel}</th>
                <th>{$permissiondescriptionlabel}</th>
            </tr>
        </thead>

        <tbody>
            {$index = 1}
            {foreach from=$permissiondatalist item=data}
                <tr>
                    <td>{$index}</td>
                    <td class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </td>
                    <td>{$data->getWording()}</td>
                    <td>{$data->getDescription()}</td>
                </tr>
                {$index = $index+1 }
            {/foreach}
        </tbody>
    </table>
</div>