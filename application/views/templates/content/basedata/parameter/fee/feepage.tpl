{extends file="template.tpl"}
{assign var="content" value="content"}
{assign var="pagescript" value="fee"}
{assign var="pagestyle" value="fee"}
{assign var="pagetitle" value="fee"}
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
                            {include file="content/basedata/parameter/fee/feeform.tpl"}
                        <!-- Table -->
                            {include file="content/basedata/parameter/fee/feelist.tpl"}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}