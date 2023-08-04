{block name="breadcrumb"}
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="{$root_url}/{$dashboard}">{$homelink}</a>
            </li>
            {if isset($subactivelink)}
                <li>
                    <a href="#">{$openlink}</a>
                </li>
                <li>
                    <a href="#">{$activelink}</a>
                </li>
                <li class="active">{$subactivelink}</li>
                {elseif isset($activelink)}
                    {if isset($openlink)}
                    <li>
                        <a href="#">{$openlink}</a>
                    </li>
                {/if}
                <li class="active">{$activelink}</li>
                {/if}
        </ul><!-- /.breadcrumb -->

        <div class="nav-search" id="nav-search">
            <ul class="breadcrumb">
                {if isset($listlink)}
                    <li class="addlink">
                        <a  class="bold" href="{$addnewlink}">
                            <i class="ace-icon fa fa-plus align-center bigger-110"></i>
                            {$addnewlinklabel}
                        </a>
                    </li>
                {/if}
                {if isset($listlink)}
                    <li class="listlink">
                        <a  href="{$listlink}">
                            <i class="ace-icon fa fa-list align-center bigger-110"></i>
                            {$listlinklabel}
                        </a>
                    </li>
                {/if}
                {if isset($userrolelink)}
                    <li class="userrolelink">
                        <a  href="{$userrolelink}">
                            <i class="ace-icon fa fa-user-plus align-center bigger-110"></i>
                            {$userrolelinklabel}
                        </a>
                    </li>
                {/if}
            </ul><!-- /.breadcrumb -->
            {*<form class="form-search">
            <span class="input-icon">
            <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
            <i class="ace-icon fa fa-search nav-search-icon"></i>
            </span>
            </form>*}
        </div><!-- /.nav-search -->
    </div>
{/block}