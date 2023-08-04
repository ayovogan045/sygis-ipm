<?php
/* Smarty version 3.1.40, created on 2022-07-29 19:41:37
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/teaching/semester/semesterlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62e437f19414b6_89844999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f039b1deabcbbbdf8ce8598b8a5ba3b777fc2358' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/teaching/semester/semesterlist.tpl',
      1 => 1654470611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e437f19414b6_89844999 (Smarty_Internal_Template $_smarty_tpl) {
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
                <th><?php echo $_smarty_tpl->tpl_vars['semestershortwordinglabel']->value;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['semestermediumwordinglabel']->value;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['semesterlongwordinglabel']->value;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['semesteracademicyearlabel']->value;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['semesteractivatedlabel']->value;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['actionlabel']->value;?>
</th>
            </tr>
        </thead>

        <tbody>
            <?php $_smarty_tpl->_assignInScope('index', 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['semester_datalist']->value, 'data');
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
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value->getShort_wording();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value->getMedium_wording();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value->getLong_wording();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value->getAcademicyear();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value->getState();?>
</td>
                    <td>
                        <div class="hidden-sm hidden-xs action-buttons">
                            <?php if ($_smarty_tpl->tpl_vars['data']->value->getState() == 'Non') {?>
                                <a id="activate-confirm" class="green tooltip-success" data-rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['activatedlabel']->value;?>
" href="#" 
                                   onclick="activate_alert('<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['semesteractivatedlink']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value->encryptionId($_smarty_tpl->tpl_vars['data']->value->getId());?>
', '<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['semester']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['data']->value->__toString();?>
');">
                                    <i class="ace-icon fa fa-unlock bigger-150"></i>
                                </a>
                            <?php } else { ?> 
                                <a id="desactivate-confirm" class="red tooltip-error" data-rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['desactivatedlabel']->value;?>
" href="#" 
                                   onclick="desactivate_alert('<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['semesterdesactivatedlink']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value->encryptionId($_smarty_tpl->tpl_vars['data']->value->getId());?>
', '<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['semester']->value;?>
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
                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['viewlabel']->value;?>
">
                                            <span class="blue">
                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['editlabel']->value;?>
">
                                            <span class="green">
                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['deletelabel']->value;?>
">
                                            <span class="red">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
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
