{extends file="template.tpl"}
{assign var="content" value="content"}
{assign var="pagescript" value="adduser"}
{assign var="pagestyle" value="adduser"}
{assign var="pagetitle" value="adduser"}
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
                        <!-- formulaire -->
                            {include file="content/administration/account/user/userform.tpl"}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}