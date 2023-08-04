<?php
/* Smarty version 3.1.40, created on 2022-06-14 15:31:35
  from '/home/amen/public_html/sygis-ipm/application/views/templates/content/administration/account/role/rolelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62a8a9d7448fe4_47419988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48fbb0c71fc487d2385997d2bcba15f8a97549bb' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/content/administration/account/role/rolelist.tpl',
      1 => 1654470613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a8a9d7448fe4_47419988 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <th class="sorting_disabled center" sorted="false">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace" />
                        <span class="lbl"></span>
                    </label>
                </th>
                                <th ><?php echo $_smarty_tpl->tpl_vars['rolewordinglabel']->value;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['roledescriptionlabel']->value;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['permissionslabel']->value;?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['actionlabel']->value;?>
</th>
            </tr>
        </thead>

        <tbody>
            <?php $_smarty_tpl->_assignInScope('index', 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roledatalist']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                <tr>
                    
                    <td class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value->getWording();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value->getDescription();?>
</td>
                    <td>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value->getRole_Permissions(), 'rolePermission');
$_smarty_tpl->tpl_vars['rolePermission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rolePermission']->value) {
$_smarty_tpl->tpl_vars['rolePermission']->do_else = false;
?>
                             
                                                    <span><i class="ace-icon fa fa-check-circle smaller-150 blue"></i>
                                                      <?php echo $_smarty_tpl->tpl_vars['rolePermission']->value->getPermission()->getWording();?>
   
                                                    </span>
                                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </td>
                    <td class="last">
                        <div class="hidden-sm hidden-xs action-buttons">
                                                        <a id="edit-confirm" class="orange tooltip-warning" data-rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['editlabel']->value;?>
"
                               href="#" 
                               onclick="edit_alert('<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['roleeditedlink']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value->encryptionId();?>
', '<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['data']->value->__toString();?>
');">
                                <i class="ace-icon fa fa-pencil bigger-150"></i>
                            </a>
                                                                                                            </div>

                        <div class="hidden-md hidden-lg">
                            <div class="inline pos-rel">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                    
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
