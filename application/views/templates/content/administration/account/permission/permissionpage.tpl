{extends file="template.tpl"}
{assign var="content" value="content"}
{assign var="pagescript" value="permission"}
{assign var="pagestyle" value="permission"}
{assign var="pagetitle" value="permission"}
{block name="content"}
    <div class="main-content">
        <div class="main-content-inner">
            {include file="skeleton/breadcrumb.tpl"}
            <div class="page-content">
                {include file="skeleton/setting.tpl"}
                {include file="skeleton/header.tpl"}
                    {include file="skeleton/alert.tpl"}
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Table -->
                            {include file="content/administration/account/permission/permissionlist.tpl"}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}