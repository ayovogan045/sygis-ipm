<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>SYGIS-IPM@{$pagetitle|default:'SYGIS-IPM'}</title>
        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->      
        <link rel="stylesheet" href="{$assets_url}/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{$assets_url}/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        {block name="pagestyle"}
            {include file="$PSTYLEPATH/pagestyle.tpl"}
        {/block}

        <!-- text fonts -->
        <link rel="stylesheet" href="{$assets_url}/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="{$assets_url}/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!-- custom styles -->
{*        <link rel="stylesheet" href="{$assets_url}/css/custom.min.css"/>*}

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="{$assets_url}/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="{$assets_url}/css/ace-skins.min.css" />
        <link rel="stylesheet" href="{$assets_url}/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="{$assets_url}/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        {block name="script"}
            <script src="{$assets_url}/js/ace-extra.min.js"></script>
        {/block}

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="{$assets_url}/js/html5shiv.min.js"></script>
        <script src="{$assets_url}/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="no-skin">
        {*nav*}
        {block name="navbar"}
            {include file="skeleton/navbar.tpl"}
        {/block}
        {*container*}
        <div class="main-container ace-save-state" id="main-container">
            {block name="script"}
                <script type="text/javascript">
                    try {
                        ace.settings.loadState('main-container')
                    } catch (e) {
                    }
                </script>
            {/block}           
            {*sidebar*}
            {block name="sidebar"}
                {include file="skeleton/sidebar.tpl"}
            {/block}
            {*content*}
            {if isset($content) && $content === 'content'}
            {block name="content"}{/block}
        {/if}
        {*footer*}
    {block name="footer"}{/block}
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div>

{block name="script"}
    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="{$assets_url}/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="{$assets_url}/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
                    if ('ontouchstart' in document.documentElement)
                        document.write("<script src='{$assets_url}/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="{$assets_url}/js/bootstrap.min.js"></script>

{/block}
{block name="pagescript"}
    {include file="$PSCRIPTPATH/pagescript.tpl"}
{/block}
{block name="script"}
    <script src="{$assets_url}/js/control.alert.min.js"></script>
{/block}
</body>
</html>