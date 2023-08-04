{extends file="template.tpl"}
{assign var="content" value="content"}
{assign var="pagescript" value="mention"}
{assign var="pagestyle" value="mention"}
{assign var="pagetitle" value="mention"}
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
                            {include file="content/basedata/schoolparam/mention/mentionform.tpl"}
                        <!-- Table -->
                            {include file="content/basedata/schoolparam/mention/mentionlist.tpl"}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}