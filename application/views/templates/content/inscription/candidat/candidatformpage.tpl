{extends file="template.tpl"}
{assign var="content" value="content"}
{assign var="pagescript" value="addcandidat"}
{assign var="pagestyle" value="addcandidat"}
{assign var="pagetitle" value="addcandidat"}
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
                            {include file="content/inscription/candidat/candidatform.tpl"}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}