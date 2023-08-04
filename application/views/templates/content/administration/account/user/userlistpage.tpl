{extends file="template.tpl"}
{assign var="content" value="content"}
{assign var="pagescript" value="userlist"}
{assign var="pagestyle" value="userlist"}
{assign var="pagetitle" value="userlist"}
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
                            {include file="content/administration/account/user/userlist.tpl"}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}