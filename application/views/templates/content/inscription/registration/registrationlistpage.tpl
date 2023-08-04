{extends file="template.tpl"}
{assign var="content" value="content"}
{assign var="pagescript" value="registrationlist"}
{assign var="pagestyle" value="registrationlist"}
{assign var="pagetitle" value="registrationlist"}
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
                            {include file="content/inscription/registration/registrationlist.tpl"}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}