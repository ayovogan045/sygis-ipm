{block name="alert"}
    {if isset($info) && $info != ''}
        <div class="alert alert-block alert-info">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <i class="ace-icon fa fa-info blue"></i>

            {$info}
        </div>
    {/if}
    {if isset($success) && $success != ''}
        <div class="alert alert-block alert-success">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <i class="ace-icon fa fa-check-circle green"></i>

            {$success}
        </div>
    {/if}
    {if isset($error) && $error != ''}
        <div class="alert alert-block alert-danger">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <i class="ace-icon fa fa-check-circle red"></i>

            {$error}
        </div>
    {/if}
    {if isset($warning) && $warning != ''}
        <div class="alert alert-block alert-warning">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <strong class="orange bold bigger-110">
                <i class="ace-icon fa fa-warning btn-sm bigger-110 orange"></i>
                {$warning}
            </strong>
        </div>
    {/if}
{/block}