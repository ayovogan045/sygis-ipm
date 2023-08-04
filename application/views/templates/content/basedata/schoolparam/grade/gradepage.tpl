{extends file="template.tpl"}
{assign var="content" value="content"}
{assign var="pagescript" value="grade"}
{assign var="pagestyle" value="grade"}
{assign var="pagetitle" value="grade"}
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
                            {include file="content/basedata/schoolparam/grade/gradeform.tpl"}
                        <!-- Table -->
                            {include file="content/basedata/schoolparam/grade/gradelist.tpl"}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}