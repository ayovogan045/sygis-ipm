<?php
/* Smarty version 3.1.40, created on 2023-05-23 19:09:43
  from '/home/amen/public_html/sygis-ipm/assets/css/pstyle/inscription/candidat/addcandidat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_646d0f7799e5e0_66011145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc5c2c885ecff4ba27f87990321bb9c104deb601' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/assets/css/pstyle/inscription/candidat/addcandidat.tpl',
      1 => 1654470206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646d0f7799e5e0_66011145 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['pagestyle']->value)) && $_smarty_tpl->tpl_vars['pagestyle']->value === 'addcandidat') {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
/css/chosen.min.css" />
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
<?php }
}
}
