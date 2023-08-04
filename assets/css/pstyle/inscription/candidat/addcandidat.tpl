{if isset($pagestyle) && $pagestyle === 'addcandidat'}
    {*    <link rel="stylesheet" href="{$assets_url}/css/bootstrap2.min.css" />*}
    <link rel="stylesheet" href="{$assets_url}/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="{$assets_url}/css/chosen.min.css" />
    <style>

        .file {
            visibility: hidden;
            position: absolute;
        }
        @media (min-width: 768px){ 
            .form-horizontal .control-label {
                text-align: left;
                margin-bottom: 0;
                padding-top: 7px;
            }}
        label {
            font-weight: 400;
            font-size: 13px;
        }
        input[type=file] {
            display: none;
        }
    </style>
{/if}
