<?php
/* Smarty version 3.1.40, created on 2022-07-29 19:28:54
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/administration/academicyear/academicyearlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62e434f64f72e7_95028098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6d591f27861d009f06fe3d2923e0a2860ec6430' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/administration/academicyear/academicyearlist.tpl',
      1 => 1654470614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e434f64f72e7_95028098 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="clearfix"> 
    <div class="pull-right tableTools-container">
        <a href="submit" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Expoter en format CSV">
            <i class="ace-icon fa fa-file-o bigger-110 orange"></i>
            <?php echo $_smarty_tpl->tpl_vars['exportcsvlabel']->value;?>

        </a>      
        <a href="reset" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Expoter en format EXCEL">
            <i class="ace-icon fa fa-file-excel-o bigger-110 green"></i>
            <?php echo $_smarty_tpl->tpl_vars['exportexcellabel']->value;?>

        </a>
        <a href="reset" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Expoter en format PDF">
            <i class="ace-icon fa fa-file-pdf-o bigger-110 red"></i>
            <?php echo $_smarty_tpl->tpl_vars['exportpdflabel']->value;?>

        </a>
    </div>
</div>
<div class="table-header">
    <?php echo $_smarty_tpl->tpl_vars['listlabel']->value;?>

</div>

<!-- div.table-responsive -->

<!-- div.dataTables_borderWrap -->
<div>
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</th>
                <th class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace" />
                        <span class="lbl"></span>
                    </label>
                </th>
                <th><?php echo $_smarty_tpl->tpl_vars['academicyearwordinglabel']->value;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['academicyearcodelabel']->value;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['academicyearactivatedlabel']->value;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['actionlabel']->value;?>
</th>
            </tr>
        </thead>

        <tbody>
            <?php $_smarty_tpl->_assignInScope('index', 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['academicyeardatalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</td>
                    <td class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value->getWording();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value->getCode();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value->getState();?>
</td>
                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">
                            <?php if ($_smarty_tpl->tpl_vars['data']->value->getState() == 'Non') {?>
                                <a id="activate-confirm" class="green tooltip-success" data-rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['activatedlabel']->value;?>
"
                                   href="#" 
                                   onclick="activate_alert('<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['academicyearactivatedlink']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value->encryptionId($_smarty_tpl->tpl_vars['data']->value->getId());?>
', '<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['academicyear']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['data']->value->__toString();?>
');">
                                    <i class="ace-icon fa fa-unlock bigger-150"></i>
                                </a>
                            <?php } else { ?> 
                                <a id="desactivate-confirm" class="red tooltip-error" data-rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['desactivatedlabel']->value;?>
" href="#" 
                                   onclick="desactivate_alert('<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['academicyeardesactivatedlink']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value->encryptionId($_smarty_tpl->tpl_vars['data']->value->getId());?>
', '<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['academicyear']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['data']->value->__toString();?>
');">
                                    <i class="ace-icon fa fa-lock bigger-150"></i>
                                </a>
                            <?php }?>
                        </div>

                        <div class="hidden-md hidden-lg">
                            <div class="inline pos-rel">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">

                                    <li>
                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['activatetlabel']->value;?>
">
                                            <span class="green">
                                                <i class="ace-icon fa fa-lock-open bigger-120"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['desactivatetlabel']->value;?>
">
                                            <span class="red">
                                                <i class="ace-icon fa fa-lock bigger-120"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['index']->value+1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div><?php }
}
