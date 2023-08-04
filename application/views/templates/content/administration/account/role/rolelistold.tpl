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
{*                <th class="sorting_disabled" sorted="false">{$num}</th>*}
                <th class="sorting_disabled center" sorted="false">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace" />
                        <span class="lbl"></span>
                    </label>
                </th>
{*                <th class="sorting_disabled" sorted="false">{$detailslabel}</th>*}
                <th>{$rolewordinglabel}</th>
                <th>{$roledescriptionlabel}</th>
                <th>{$permissionslabel}</th>
                <th>{$actionlabel}</th>
            </tr>
        </thead>

        <tbody>
            {$index = 1}
            {foreach from=$roledatalist item=data}
                <tr>
{*                    <td>{$index}</td>*}

                    <td class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </td>
                    {*<td class="">
                        <div class="action-buttons">
                            <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                <i class="ace-icon fa fa-angle-double-down"></i>
                                <span class="sr-only">{$detailslabel}</span>
                            </a>
                        </div>
                    </td>*}
                    <td>{$data->getWording()}</td>
                    <td>{$data->getDescription()}</td>
                    <td>
{*                        {foreach from=$data->getPermissions() item=data}*}
                        <div class="">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="">
                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Username </div>
                                            <div class="profile-info-value">
                                                <span>alexdoe</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Location </div>

                                            <div class="profile-info-value">
                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                <span>Netherlands, Amsterdam</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Age </div>

                                            <div class="profile-info-value">
                                                <span>38</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Joined </div>

                                            <div class="profile-info-value">
                                                <span>2010/06/20</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Last Online </div>

                                            <div class="profile-info-value">
                                                <span>3 hours ago</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> About Me </div>

                                            <div class="profile-info-value">
                                                <span>Bio</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="last">
                        <div class="hidden-sm hidden-xs action-buttons">
                            {*<a  class="blue tooltip-info " data-rel="tooltip" title="{$viewlabel}" href="#">
                            <i class="ace-icon fa fa-search-plus bigger-130"></i>
                            </a>*}
                            <a id="edit-confirm" class="orange tooltip-warning" data-rel="tooltip" title="{$editlabel}"
                               href="#" 
                               onclick="edit_alert('{$root_url}/{$roleeditedlink}/{$data->encryptionId()}', '{$root_url}/{$role}', '{$data->__toString()}');">
                                <i class="ace-icon fa fa-pencil bigger-150"></i>
                            </a>
                            {*                            {if $data->getActiveyear() == 'Non'}*}
                            <a id="activate-confirm" class="green tooltip-success" data-rel="tooltip" title="{$activatedlabel}"
                               href="#" 
                               onclick="edit_alert('{$root_url}/{$roleactivatedlink}/{$data->encryptionId()}', '{$root_url}/{$role}', '{$data->__toString()}');">
                                <i class="ace-icon fa fa-unlock bigger-150"></i>
                            </a>
                            {*{else} 
                            <a id="desactivate-confirm" class="red tooltip-error" data-rel="tooltip" title="{$desactivatedlabel}" href="#" 
                            onclick="delete_alert('{$root_url}/{$roledesactivatedlink}/{$data->encryptionId()}', '{$root_url}/{$prospectyear}', '{$data->__toString()}');">
                            <i class="ace-icon fa fa-lock bigger-150"></i>
                            </a>
                            {/if}*}
                        </div>

                        <div class="hidden-md hidden-lg">
                            <div class="inline pos-rel">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                    {*<li>
                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="{$viewlabel}">
                                    <span class="blue">
                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                    </span>
                                    </a>
                                    </li>*}

                                    <li>
                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="{$activatetlabel}">
                                            <span class="green">
                                                <i class="ace-icon fa fa-lock-open bigger-120"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="{$desactivatetlabel}">
                                            <span class="red">
                                                <i class="ace-icon fa fa-lock bigger-120"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                    {*<div>
                    <ul>
                    <li>{$data->getWording()}</li>
                    <li>{$data->getDescription()}</li>
                    </ul> 
                    </div>*}
                </tr>
                <tr class="hidden">
                    <td colspan="8">
                        <div class="table-detail">
                            <div class="row">
                                <div class="col-xs-12 col-sm-2">
                                    <div class="text-center">
                                        <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                        <br />
                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                            <div class="inline position-relative">
                                                <a class="user-title-label" href="#">
                                                    <i class="ace-icon fa fa-circle light-green"></i>
                                                    &nbsp;
                                                    <span class="white">Alex M. Doe</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-7">
                                    <div class="space visible-xs"></div>

                                    <div class="profile-user-info profile-user-info-striped">
                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Username </div>

                                            <div class="profile-info-value">
                                                <span>alexdoe</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Location </div>

                                            <div class="profile-info-value">
                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                <span>Netherlands, Amsterdam</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Age </div>

                                            <div class="profile-info-value">
                                                <span>38</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Joined </div>

                                            <div class="profile-info-value">
                                                <span>2010/06/20</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Last Online </div>

                                            <div class="profile-info-value">
                                                <span>3 hours ago</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> About Me </div>

                                            <div class="profile-info-value">
                                                <span>Bio</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="hidden">

                    </td>
                    <td class="hidden">

                    </td>
                    <td class="hidden">

                    </td>
                    <td class="hidden">

                    </td>
                </tr>
                {$index = $index+1 }
            {/foreach}
        </tbody>
    </table>
</div>