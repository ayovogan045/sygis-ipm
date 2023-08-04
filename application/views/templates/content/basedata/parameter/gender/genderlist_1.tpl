{block name="content"}
    <div class="table-responsive">
        <table id="example" class="table table-bordred table-striped table-condensed">
            <thead>
                <tr role="row" class="alert-heading">
                    <th><input type="checkbox" id="checkall" /></th>
                    <th class="">{$num}</th>
                    <th class="sorting_asc" aria-sort="ascending" aria-label="Name: activate to sort column descending">
                        {$genderlongwordinglabel}
                        <span class="fa fa-caret-down float-right" title="Toggle dropdown menu"></span>
                    </th>
                    <th class="">
                        {$gendermediumwordinglabel}
                        <span class="fa fa-caret-down float-right" title="Toggle dropdown menu"></span>
                    </th>
                    <th class="">
                        {$gendershortwordinglabel}
                        <span class="fa fa-caret-down float-right" title="Toggle dropdown menu"></span>
                    </th>
                    <th class="">{$actionlabel}</th>
                </tr>
            </thead>
            <tbody>
                {$index = 1}
                {foreach from=$genderdatalist item=data}
                    <tr role="row">
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>{$index}</td>
                        <td>{$data->getLong_wording()}</td>
                        <td>{$data->getMedium_wording()}</td>
                        <td>{$data->getShort_wording()}</td>
                        <td>
                            <p data-placement="top" data-toggle="tooltip" title="">
                                <a href="#" onclick="updateAlert('{$base_url}{$gendereditedlink}/{$data->getId()}', '{$gender}', '{$data->__toString()}');" class="btn btn-primary btn-sm" title="modifier" aria-label="Edit">
                                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>
                                </a>
                                <a href="#" onclick="deleteAlert('{$base_url}{$genderdeletedlink}/{$data->getId()}', '{$gender}', '{$data->__toString()}');" class="btn btn-danger btn-sm" title="supprimer" aria-label="Delete" >
                                    <i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
                                </a>
                            </p>
                        </td>
                    </tr>
                    {$index = $index+1 }
                {/foreach}
            </tbody>
        </table>
    </div>
{/block}