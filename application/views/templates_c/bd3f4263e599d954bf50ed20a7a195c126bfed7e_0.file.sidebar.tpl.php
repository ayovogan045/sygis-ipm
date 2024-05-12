<?php
/* Smarty version 3.1.40, created on 2023-10-08 20:24:17
  from '/home/amen/public_html/sygis-ipm/application/views/templates/skeleton/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_65230ff114b608_98985902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd3f4263e599d954bf50ed20a7a195c126bfed7e' => 
    array (
      0 => '/home/amen/public_html/sygis-ipm/application/views/templates/skeleton/sidebar.tpl',
      1 => 1696796653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65230ff114b608_98985902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20422266265230ff1115645_18153501', "sidebar");
}
/* {block "script"} */
class Block_22759741765230ff1115ef9_02002595 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo '<script'; ?>
 type="text/javascript">
                try {
                    ace.settings.loadState('sidebar')
                } catch (e) {
                }
            <?php echo '</script'; ?>
>
        <?php
}
}
/* {/block "script"} */
/* {block "sidebar"} */
class Block_20422266265230ff1115645_18153501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_20422266265230ff1115645_18153501',
  ),
  'script' => 
  array (
    0 => 'Block_22759741765230ff1115ef9_02002595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="sidebar" class="sidebar responsive ace-save-state">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22759741765230ff1115ef9_02002595', "script", $this->tplIndex);
?>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "dashboard")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>
">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Tableau de bord </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && (($_smarty_tpl->tpl_vars['pagetitle']->value == "country") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "city") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "group") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "level") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "grade") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "classunit") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "mention") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "school") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "speciality") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "classroom") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "feetype"))) {?> <?php echo $_smarty_tpl->tpl_vars['activeopen']->value;?>
 <?php }?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-database"></i>
                    <span class="menu-text">
                        Données de base
                    </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && (($_smarty_tpl->tpl_vars['pagetitle']->value == "country") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "city"))) {?> <?php echo $_smarty_tpl->tpl_vars['activeopen']->value;?>
 <?php }?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Localité
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "country")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Pays
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "city")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Ville
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>
                    <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && (($_smarty_tpl->tpl_vars['pagetitle']->value == "feetype") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "evaluationtype"))) {?> <?php echo $_smarty_tpl->tpl_vars['activeopen']->value;?>
 <?php }?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Paramètres
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "feetype")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['feetype']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Type de frais
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "fee")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['fee']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Frais
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "evaluationtype")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['evaluationtype']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Type d'Evaluation
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && (($_smarty_tpl->tpl_vars['pagetitle']->value == "group") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "level") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "grade") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "mention") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "speciality") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "classunit") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "classroom") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "school"))) {?> <?php echo $_smarty_tpl->tpl_vars['activeopen']->value;?>
 <?php }?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Accadémie
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "group")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Groupe
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "level")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Niveau scolaire
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "grade")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Programme
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "mention")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mention']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mention
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "speciality")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['speciality']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Spécialité
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "classroom")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['classroom']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Salle de cours
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "classunit")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['classunit']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Classe
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagescript']->value == "school")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['school']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Ecole de provenance
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && (($_smarty_tpl->tpl_vars['pagetitle']->value == "academicyear") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "permission") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "rolelist") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "addrole") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "userlist") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "adduser"))) {
echo $_smarty_tpl->tpl_vars['activeopen']->value;?>
 <?php }?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-wrench"></i>
                    <span class="menu-text">
                        Administration
                    </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "academicyear")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['academicyear']->value;?>
">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Année scolaire
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && (($_smarty_tpl->tpl_vars['pagetitle']->value == "permission") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "rolelist") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "addrole") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "userlist") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "adduser") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "fee"))) {?> <?php echo $_smarty_tpl->tpl_vars['activeopen']->value;?>
 <?php }?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Compte
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "permission")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['permission']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Permission
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "rolelist")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Rôle
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "userlist")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Utilisateur
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Modalité de paiement
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="top-menu.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Modalité en block
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="two-menu-1.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Modalité par tranche
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="two-menu-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Modalité libre
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="two-menu-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Subvention
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && (($_smarty_tpl->tpl_vars['pagetitle']->value == "candidat") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "registrationlist"))) {?>
                <?php echo $_smarty_tpl->tpl_vars['activeopen']->value;?>
 <?php }?>">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-registered"></i>
                        <span>
                            Inscription
                        </span>
                        
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "candidat")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['candidat']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Candidat
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "registrationlist")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['registration']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Validation des inscrits
                            </a>

                            <b class="arrow"></b>
                        </li>

                        
                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Inscription dans les cours
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Bilan par apprenant
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Attestation d'inscription
                            </a>

                            <b class="arrow"></b>
                        </li>

                    </ul>
                </li>

                <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && (($_smarty_tpl->tpl_vars['pagetitle']->value == "lessonunittype") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "lessonunitmention") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "lessonunit") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "semester") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "lessonplaning") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "timetable") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "calllist"))) {?> <?php echo $_smarty_tpl->tpl_vars['activeopen']->value;?>
 <?php }?>">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Enseignement
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagescript']->value == "lessonunittype")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lessonunittype']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Catégorie UE
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagescript']->value == "lessonunitmention")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lessonunitmention']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Mention UE
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagescript']->value == "lessonunit")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lessonunit']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Unité d'Enseignement
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "semester")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['semester']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Semestre
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "lessonplaning")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lessonplaning']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Programmation de cours
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "timetable")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['timetable']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Emploi du temps
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "calllist")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['calllist']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Liste d'appel
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-graduation-cap"></i>
                        <span class="menu-text">
                            Evaluation
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Saisie de notes
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Vérification de notes
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Validation de notes
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Délibération
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Proccès verbal
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Relevé de notes
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Liste d'émargement
                            </a>

                            <b class="arrow"></b>
                        </li>

                    </ul>
                </li>

                <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && (($_smarty_tpl->tpl_vars['pagetitle']->value == "studyfees") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "inscriptionfees") || ($_smarty_tpl->tpl_vars['pagetitle']->value == "schoolfees"))) {
echo $_smarty_tpl->tpl_vars['activeopen']->value;?>
 <?php }?>">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-cc-mastercard"></i>
                        <span class="menu-text">
                            Recouvrement
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "studyfees")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['studyfees']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Frais d'étude de dossier
                            </a>
                                
                            <b class="arrow"></b>
                        </li>
                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "inscriptionfees")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['inscriptionfees']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Frais d'incription
                            </a>
                                
                            <b class="arrow"></b>
                        </li>
                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "schoolfees")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['schoolfees']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Frais de scolarité
                            </a>
                                
                            <b class="arrow"></b>
                        </li>
                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "academicyear")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['academicyear']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Bon de Paiement
                            </a>
                                
                            <b class="arrow"></b>
                        </li>
                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "academicyear")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['academicyear']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Régularisation des inscrits
                            </a>
                                
                            <b class="arrow"></b>
                        </li>
                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['pagetitle']->value)) && ($_smarty_tpl->tpl_vars['pagetitle']->value == "academicyear")) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 <?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['academicyear']->value;?>
">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Etat des paiement
                            </a>
                                
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text">
                            GRH
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                                    </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-briefcase"></i>
                        <span class="menu-text">
                            Caisse
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                                    </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-pie-chart"></i>
                        <span class="menu-text">
                            Statistique
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Liste d'appel
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Proccès verbaux 
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Attribution de poste
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Salaire
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#">
                        <i class="menu-icon fa fa-download"></i>
                        <span class="menu-text"> Sauvegarde </span>
                    </a>

                    <b class="arrow"></b>
                </li>

            </ul><!-- /.nav-list -->

            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>
        </div>
        <?php
}
}
/* {/block "sidebar"} */
}
