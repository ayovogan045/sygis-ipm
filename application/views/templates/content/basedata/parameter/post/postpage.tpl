{extends file="index.tpl"}
{assign var="nav" value="nav"}
{assign var="content" value="content"}
{include file="nav/navbar.tpl"}
{block name="container"}
    <div class="row">
        <!-- formulaire -->
        <div class="col-md-4">
            {include file="utils/parameter/post/postform.tpl"}
        </div>
        <!-- Table -->
        <div id="example_wrapper" class="col-md-8 dataTables_wrapper panel-heading"> 
            {include file="utils/parameter/post/postlist.tpl"}
        </div>
    </div>
{/block}