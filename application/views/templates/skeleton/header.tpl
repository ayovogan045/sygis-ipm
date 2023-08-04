{block name="header"}
    <div class="page-header">
        <h1>
            {if isset($subactivelink)}
                {$subactivelink}
            {elseif isset($activelink)}
                {$activelink}
            {/if}
        </h1>
    </div><!-- /.page-header -->
{/block}