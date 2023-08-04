{extends file="template.tpl"}
{assign var="content" value="content"}
{assign var="pagescript" value="school"}
{assign var="pagestyle" value="school"}
{assign var="pagetitle" value="school"}
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
                            {include file="content/basedata/schoolparam/school/schoolform.tpl"}
                        <!-- Table -->
                            {include file="content/basedata/schoolparam/school/schoollist.tpl"}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}