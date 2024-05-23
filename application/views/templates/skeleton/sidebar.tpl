{block name="sidebar"}
    <div id="sidebar" class="sidebar responsive ace-save-state">
        {block name="script"}
            <script type="text/javascript">
                try {
                    ace.settings.loadState('sidebar')
                } catch (e) {
                }
            </script>
        {/block}
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
            <li class="{if isset($pagetitle) && ($pagetitle == "dashboard")} {$active} {/if}">
                <a href="{$root_url}/{$dashboard}">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Tableau de bord </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="{if isset($pagetitle) && (($pagetitle == "country") || ($pagetitle == "city") || ($pagetitle == "group") 
                            || ($pagetitle == "level") || ($pagetitle == "grade") || ($pagetitle == "classunit")
                            || ($pagetitle == "mention") || ($pagetitle == "school") || ($pagetitle == "speciality")
                            || ($pagetitle == "classroom") || ($pagetitle == "feetype"))} {$activeopen} {/if}">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-database"></i>
                    <span class="menu-text">
                        Données de base
                    </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{if isset($pagetitle) && (($pagetitle == "country") || ($pagetitle == "city"))} {$activeopen} {/if}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Localité
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                            <li class="{if isset($pagetitle) && ($pagetitle == "country")} {$active} {/if}">
                                <a href="{$root_url}/{$country}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Pays
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{if isset($pagetitle) && ($pagetitle == "city")} {$active} {/if}">
                                <a href="{$root_url}/{$city}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Ville
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>
                    <li class="{if isset($pagetitle) && (($pagetitle == "feetype") || ($pagetitle == "evaluationtype"))} {$activeopen} {/if}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Paramètres
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">

                            <li class="{if isset($pagetitle) && ($pagetitle == "feetype")} {$active} {/if}">
                                <a href="{$root_url}/{$feetype}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Type de frais
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{if isset($pagetitle) && ($pagetitle == "fee")} {$active} {/if}">
                                <a href="{$root_url}/{$fee}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Frais
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{if isset($pagetitle) && ($pagetitle == "evaluationtype")} {$active} {/if}">
                                <a href="{$root_url}/{$evaluationtype}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Type d'Evaluation
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{if isset($pagetitle) && (($pagetitle == "group") || ($pagetitle == "level") 
                                    || ($pagetitle == "grade") || ($pagetitle == "mention") || ($pagetitle == "speciality") 
                                    || ($pagetitle == "classunit") || ($pagetitle == "classroom") || ($pagetitle == "school"))} {$activeopen} {/if}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Accadémie
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="{if isset($pagetitle) && ($pagetitle == "group")} {$active} {/if}">
                                <a href="{$root_url}/{$group}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Groupe
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{if isset($pagetitle) && ($pagetitle == "level")} {$active} {/if}">
                                <a href="{$root_url}/{$level}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Niveau scolaire
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{if isset($pagetitle) && ($pagetitle == "grade")} {$active} {/if}">
                                <a href="{$root_url}/{$grade}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Programme
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{if isset($pagetitle) && ($pagetitle == "mention")} {$active} {/if}">
                                <a href="{$root_url}/{$mention}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mention
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{if isset($pagetitle) && ($pagetitle == "speciality")} {$active} {/if}">
                                <a href="{$root_url}/{$speciality}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Spécialité
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{if isset($pagetitle) && ($pagetitle == "classroom")} {$active} {/if}">
                                <a href="{$root_url}/{$classroom}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Salle de cours
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{if isset($pagetitle) && ($pagetitle == "classunit")} {$active} {/if}">
                                <a href="{$root_url}/{$classunit}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Classe
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{if isset($pagetitle) && ($pagescript == "school")} {$active} {/if}">
                                <a href="{$root_url}/{$school}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Ecole de provenance
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="{if isset($pagetitle) && (($pagetitle == "academicyear") || ($pagetitle == "permission") 
                            || ($pagetitle == "rolelist")  || ($pagetitle == "addrole") 
                            || ($pagetitle == "userlist")  || ($pagetitle == "adduser"))}{$activeopen} {/if}">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-wrench"></i>
                    <span class="menu-text">
                        Administration
                    </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{if isset($pagetitle) && ($pagetitle == "academicyear")} {$active} {/if}">
                        <a href="{$root_url}/{$academicyear}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Année scolaire
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="{if isset($pagetitle) && (($pagetitle == "permission") 
                               || ($pagetitle == "rolelist")  || ($pagetitle == "addrole") 
                               || ($pagetitle == "userlist")  || ($pagetitle == "adduser") 
                               || ($pagetitle == "fee"))} {$activeopen} {/if}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Compte
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="{if isset($pagetitle) && ($pagetitle == "permission")} {$active} {/if}">
                                <a href="{$root_url}/{$permission}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Permission
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{if isset($pagetitle) && ($pagetitle == "rolelist")} {$active} {/if}">
                                <a href="{$root_url}/{$role}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Rôle
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{if isset($pagetitle) && ($pagetitle == "userlist")} {$active} {/if}">
                                <a href="{$root_url}/{$user}">
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

            <li class="{if isset($pagetitle) && (($pagetitle == "candidat") || ($pagetitle == "registrationlist"))}
                {$activeopen} {/if}">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-registered"></i>
                        <span>
                            Inscription
                        </span>
                        
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="{if isset($pagetitle) && ($pagetitle == "candidat")} {$active} {/if}">
                            <a href="{$root_url}/{$candidat}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Candidat
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="{if isset($pagetitle) && ($pagetitle == "registrationlist")} {$active} {/if}">
                            <a href="{$root_url}/{$registration}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Validation des inscrits
                            </a>

                            <b class="arrow"></b>
                        </li>

                        {*     <li class="">
                        <a href="#" class="">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Inscription accademique
                        </a>

                        <b class="arrow"></b>
                        </li>*}

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

                <li class="{if isset($pagetitle) && (($pagetitle == "lessonunittype")  
                            || ($pagetitle == "lessonunit") || ($pagetitle == "semester") || ($pagetitle == "lessonplaning") 
                            || ($pagetitle == "timetable") || ($pagetitle == "calllist"))} {$activeopen} {/if}">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Enseignement
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="{if isset($pagetitle) && ($pagescript == "lessonunittype")} {$active} {/if}">
                            <a href="{$root_url}/{$lessonunittype}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Catégorie UE
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="{if isset($pagetitle) && ($pagescript == "lessonunit")} {$active} {/if}">
                            <a href="{$root_url}/{$lessonunit}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Unité d'Enseignement
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="{if isset($pagetitle) && ($pagetitle == "semester")} {$active} {/if}">
                            <a href="{$root_url}/{$semester}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Semestre
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="{if isset($pagetitle) && ($pagetitle == "lessonplaning")} {$active} {/if}">
                            <a href="{$root_url}/{$lessonplaning}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Programmation de cours
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="{if isset($pagetitle) && ($pagetitle == "timetable")} {$active} {/if}">
                            <a href="{$root_url}/{$timetable}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Emploi du temps
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="{if isset($pagetitle) && ($pagetitle == "calllist")} {$active} {/if}">
                            <a href="{$root_url}/{$calllist}">
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

                <li class="{if isset($pagetitle) && (($pagetitle == "studyfees") 
                        || ($pagetitle == "inscriptionfees")  || ($pagetitle == "schoolfees"))}{$activeopen} {/if}">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-cc-mastercard"></i>
                        <span class="menu-text">
                            Recouvrement
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="{if isset($pagetitle) && ($pagetitle == "studyfees")} {$active} {/if}">
                            <a href="{$root_url}/{$studyfees}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Frais d'étude de dossier
                            </a>
                                
                            <b class="arrow"></b>
                        </li>
                        <li class="{if isset($pagetitle) && ($pagetitle == "inscriptionfees")} {$active} {/if}">
                            <a href="{$root_url}/{$inscriptionfees}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Frais d'incription
                            </a>
                                
                            <b class="arrow"></b>
                        </li>
                        <li class="{if isset($pagetitle) && ($pagetitle == "schoolfees")} {$active} {/if}">
                            <a href="{$root_url}/{$schoolfees}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Frais de scolarité
                            </a>
                                
                            <b class="arrow"></b>
                        </li>
                        <li class="{if isset($pagetitle) && ($pagetitle == "academicyear")} {$active} {/if}">
                            <a href="{$root_url}/{$academicyear}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Bon de Paiement
                            </a>
                                
                            <b class="arrow"></b>
                        </li>
                        <li class="{if isset($pagetitle) && ($pagetitle == "academicyear")} {$active} {/if}">
                            <a href="{$root_url}/{$academicyear}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Régularisation des inscrits
                            </a>
                                
                            <b class="arrow"></b>
                        </li>
                        <li class="{if isset($pagetitle) && ($pagetitle == "academicyear")} {$active} {/if}">
                            <a href="{$root_url}/{$academicyear}">
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

                    {* <ul class="submenu">
                    <li class="">
                    <a href="#" class="">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Nouveau recru
                    </a>
    
                    <b class="arrow"></b>
                    </li>
    
                    <li class="">
                    <a href="#" class="">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Personnel
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
                    Bulletin de paie
                    </a>
    
                    <b class="arrow"></b>
                    </li>
    
                    <li class="">
                    <a href="#" class="">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Attestation de travail
                    </a>
    
                    <b class="arrow"></b>
                    </li>
                    </ul>*}
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

                    {* <ul class="submenu">
                    <li class="">
                    <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Paiment
                    <b class="arrow fa fa-angle-down"></b>
                    </a>
    
                    <b class="arrow"></b>
    
                    <ul class="submenu">
                    <li class="">
                    <a href="top-menu.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Frais d'inscription
                    </a>
    
                    <b class="arrow"></b>
                    </li>
    
                    <li class="">
                    <a href="two-menu-1.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Frais scolaire
                    </a>
    
                    <b class="arrow"></b>
                    </li>
    
                    <li class="">
                    <a href="two-menu-2.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Frais d'assurance
                    </a>
                    <b class="arrow"></b>
                    </li>
    
                    <li class="">
                    <a href="two-menu-2.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Autres frais
                    </a>
                    <b class="arrow"></b>
                    </li>
                    </ul>
                    </li>
    
                    <li class="">
                    <a href="#" class="">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Paiement salaire
                    </a>
    
                    <b class="arrow"></b>
                    </li>
    
                    <li class="">
                    <a href="#" class="">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Autres dépenses
                    </a>
    
                    <b class="arrow"></b>
                    </li>
    
                    </ul>*}
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
        {/block}