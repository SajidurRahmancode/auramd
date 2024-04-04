<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/dist/images/logoo.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="meow">
        <title>Dashboard</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="auramd" class="w-6" src="dist/dist/images/logoo.png">
                </a>
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <div class="scrollable">
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
                <ul class="scrollable__content py-2">
                    <li>
                        <a href="javascript:;.html" class="menu menu--active">
                            <div class="menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="menu__title"> Dashboard <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
                        </a>
                        <ul class="menu__sub-open">
                            <li>
                                <a href="admin.php" class="menu menu--active">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 1 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                   
                    
                    <li>
                        <a href="graph.php" class="menu">
                            <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="menu__title"> Graph </div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="side-menu-light-chat.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="message-square"></i> </div>
                            <div class="menu__title"> Chat </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-post.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="menu__title"> Post </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-calendar.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="calendar"></i> </div>
                            <div class="menu__title"> Calendar </div>
                        </a>
                    </li>
                    <li class="menu__devider my-6"></li>
                    
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="users"></i> </div>
                            <div class="menu__title"> Users <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="users-layout.php" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Layout 1 </div>
                                </a>
                            </li>
                          
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="trello"></i> </div>
                            <div class="menu__title"> Profile <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-profile-overview-1.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="layout"></i> </div>
                            <div class="menu__title"> Pages <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Wizards <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Blog <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-blog-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            
                            
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> FAQ <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-faq-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                 
                                </ul>
                            </li>
                            
                            
                            <li>
                                <a href="main-light-error-page.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Error Page </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-update-profile.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Update profile </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-change-password.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Change Password </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu__devider my-6"></li>
                    <li>
                        
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Table <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-regular-table.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Regular Table</div>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                               
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-modal.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Modal</div>
                                        </a>
                                    </li>
                                    
                                    
                                </ul>
                            </li>
                            
                            
                           
                            
                            
                            
                            
                            
                            
                        </ul>
                    </li>
                    <li>
                        
                        <ul class="">
                            
                            
                            <li>
                                <a href="side-menu-light-file-upload.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> File Upload </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Wysiwyg Editor <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-classic.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Classic</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-inline.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Inline</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-balloon.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Balloon</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Balloon Block</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-document.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Document</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-validation.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Validation </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="menu__title"> Widgets <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-chart.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Chart </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-slider.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Slider </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-image-zoom.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Image Zoom </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="" class="w-6" src="dist/dist/images/logoo.png">
                    <span class="hidden xl:block text-white text-lg ml-3"> auramd </span> 
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="javascript:;.html" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                                <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open">
                            <li>
                                <a href="admin.php" class="side-menu side-menu--active">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            
                            
                           
                        </ul>
                    </li>
                    <li>
                        
                        <ul class="">
                            <li>
                                <a href="admin.php" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Side Menu </div>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        
                    </li>
                           
                            <li>
                               
                                
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="graph.php" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="side-menu__title"> Graph </div>
                        </a>
                    </li>
                    
                    
                    <li>
                        <a href="side-menu-light-chat.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="message-square"></i> </div>
                            <div class="side-menu__title"> Chat </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-post.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="side-menu__title"> Post </div>
                        </a>
                    </li>
                    
                    
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                            <div class="side-menu__title">
                                Users 
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="users-layout.php" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Layout 1 </div>
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="trello"></i> </div>
                            <div class="side-menu__title">
                                Profile 
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-profile-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="layout"></i> </div>
                            <div class="side-menu__title">
                                Pages 
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Wizards 
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-wizard-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Blog 
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-blog-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                            
                            
                           
                            
                            <li>
                                <a href="main-light-error-page.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Error Page </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-update-profile.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Update profile </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-change-password.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Change Password </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Table 
                                        <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-regular-table.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="side-menu__title">Regular Table</div>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-tab.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Tab </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-accordion.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Accordion </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-button.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Button </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-alert.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Alert </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-progress-bar.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Progress Bar </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="side-menu-light-dropdown.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Dropdown </div>
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="sidebar"></i> </div>
                            <div class="side-menu__title">
                                Forms 
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-regular-form.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Regular Form </div>
                                </a>
                            </li>
                            
                            
                            <li>
                                <a href="side-menu-light-file-upload.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> File Upload </div>
                                </a>
                            </li>
                            <li>
                                
                                
                            </li>
                            <li>
                                <a href="side-menu-light-validation.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Validation </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="side-menu__title">
                                Widgets 
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-chart.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Chart </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-slider.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Slider </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-image-zoom.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Image Zoom </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Application</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x relative mr-3 sm:mr-6">
                        <div class="search hidden sm:block">
                            <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                            <i data-lucide="search" class="search__icon dark:text-slate-500"></i> 
                        </div>
                        <a class="notification sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
                        <div class="search-result">
                            <div class="search-result__content">
                                <div class="search-result__content__title">Pages</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center">
                                        <div class="ml-3">Mail Settings</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                                        <div class="ml-3">Users & Permissions</div>
                                    </a>
                                    
                                </div>
                                <div class="search-result__content__title">Users</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="auramd" class="rounded-full" src="dist/images/profile-7.jpg">
                                        </div>
                                        <div class="ml-3">Kevin Spacey</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">kevinspacey@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="auramd" class="rounded-full" src="dist/images/profile-2.jpg">
                                        </div>
                                        <div class="ml-3">Johnny Depp</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="auramd" class="rounded-full" src="dist/images/profile-5.jpg">
                                        </div>
                                        <div class="ml-3">Johnny Depp</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="auramd" class="rounded-full" src="dist/images/profile-9.jpg">
                                        </div>
                                        <div class="ml-3">Morgan Freeman</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">morganfreeman@left4code.com</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Products</div>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="auramd" class="rounded-full" src="dist/images/preview-9.jpg">
                                    </div>
                                    <div class="ml-3">Oppo Find X2 Pro</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="auramd" class="rounded-full" src="dist/images/preview-1.jpg">
                                    </div>
                                    <div class="ml-3">Nikon Z6</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="auramd" class="rounded-full" src="dist/images/preview-2.jpg">
                                    </div>
                                    <div class="ml-3">Sony Master Series A9G</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="auramd" class="rounded-full" src="dist/images/preview-8.jpg">
                                    </div>
                                    <div class="ml-3">Dell XPS 13</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END: Search -->
                    <!-- BEGIN: Notifications -->
                    <div class="intro-x dropdown mr-auto sm:mr-6">
                        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
                        <div class="notification-content pt-2 dropdown-menu">
                            <div class="notification-content__box dropdown-content">
                                <div class="notification-content__title">Notifications</div>
                                <div class="cursor-pointer relative flex items-center ">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="auramd" class="rounded-full" src="dist/images/profile-7.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="auramd" class="rounded-full" src="dist/images/profile-2.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="auramd" class="rounded-full" src="dist/images/profile-5.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="auramd" class="rounded-full" src="dist/images/profile-9.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Morgan Freeman</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="auramd" class="rounded-full" src="dist/images/profile-1.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a> 
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">03:20 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                            <img alt="auramd" src="dist/images/profile-5.jpg">
                        </div>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content bg-primary text-white">
                                <li class="p-2">
                                    <div class="font-medium">Kevin Spacey</div>
                                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Software Engineer</div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider border-white/[0.08]">
                                </li>
                                <li>
                                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider border-white/[0.08]">
                                </li>
                                <li>
                                    <a href="logout.php" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 2xl:col-span-9">
                        <div class="grid grid-cols-12 gap-6">
                            <!-- BEGIN: General Report -->
                            <div class="col-span-12 mt-8">
                                <div class="intro-y flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        General Report
                                    </h2>
                                    <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                                </div>
                                <div class="grid grid-cols-12 gap-6 mt-5">
                                  
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i data-lucide="credit-card" class="report-box__icon text-pending"></i> 
                                                    <div class="ml-auto">
                                                        <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="2% Lower than last month"> 2% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i> </div>
                                                    </div>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
                                                <div class="text-base text-slate-500 mt-1">New Posts</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i data-lucide="monitor" class="report-box__icon text-warning"></i> 
                                                    <div class="ml-auto">
                                                        <div class="report-box__indicator bg-success tooltip cursor-pointer" title="12% Higher than last month"> 12% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                                    </div>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
                                                <div class="text-base text-slate-500 mt-1">Total contributors</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                        <div class="report-box zoom-in">
                                            <div class="box p-5">
                                                <div class="flex">
                                                    <i data-lucide="user" class="report-box__icon text-success"></i> 
                                                    <div class="ml-auto">
                                                        <div class="report-box__indicator bg-success tooltip cursor-pointer" title="22% Higher than last month"> 22% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                                    </div>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6">152.040</div>
                                                <div class="text-base text-slate-500 mt-1">Unique Visitor</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: General Report -->
                            <!-- BEGIN: Total Donated For Co2 Reduction -->
                            <div class="col-span-12 lg:col-span-6 mt-8">
                                <div class="intro-y block sm:flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Total Donated For Co2 Reduction
                                    </h2>
                                    <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                                        <i data-lucide="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i> 
                                        <input type="text" class="datepicker form-control sm:w-56 box pl-10">
                                    </div>
                                </div>
                                <div class="intro-y box p-5 mt-12 sm:mt-5">
                                    <div class="flex flex-col md:flex-row md:items-center">
                                        <div class="flex">
                                            <div>
                                                <div class="text-primary dark:text-slate-300 text-lg xl:text-xl font-medium">$15,000</div>
                                                <div class="mt-0.5 text-slate-500">This Month</div>
                                            </div>
                                            <div class="w-px h-12 border border-r border-dashed border-slate-200 dark:border-darkmode-300 mx-4 xl:mx-5"></div>
                                            <div>
                                                <div class="text-slate-500 text-lg xl:text-xl font-medium">$10,000</div>
                                                <div class="mt-0.5 text-slate-500">Last Month</div>
                                            </div>
                                        </div>
                                        <div class="dropdown md:ml-auto mt-5 md:mt-0">
                                            <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false" data-tw-toggle="dropdown"> Filter by Category <i data-lucide="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                                            <div class="dropdown-menu w-40">
                                                <ul class="dropdown-content overflow-y-auto h-32">
                                                    <li><a href="" class="dropdown-item">PC & Laptop</a></li>
                                                    <li><a href="" class="dropdown-item">Smartphone</a></li>
                                                    <li><a href="" class="dropdown-item">Electronic</a></li>
                                                    <li><a href="" class="dropdown-item">Photography</a></li>
                                                    <li><a href="" class="dropdown-item">Sport</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-chart">
                                        <div class="h-[275px]">
                                            <canvas id="report-line-chart" class="mt-6 -mb-6"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Total Donated For Co2 Reduction -->
                            <!-- BEGIN: Weekly Top Seller -->
                            <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                                <div class="intro-y flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        weekly Top Contributors                                    </h2>
                                    <a href="" class="ml-auto text-primary truncate">Show More</a> 
                                </div>
                                <div class="intro-y box p-5 mt-5">
                                    <div class="mt-3">
                                        <div class="h-[213px]">
                                            <canvas id="report-pie-chart"></canvas>
                                        </div>
                                    </div>
                                    <div class="w-52 sm:w-auto mx-auto mt-8">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                            <span class="truncate">17 - 30 Years old</span> <span class="font-medium ml-auto">62%</span> 
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                            <span class="truncate">31 - 50 Years old</span> <span class="font-medium ml-auto">33%</span> 
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                            <span class="truncate">>= 50 Years old</span> <span class="font-medium ml-auto">10%</span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Weekly Top Seller -->
                            <!-- BEGIN: Total Donated For Co2 Reduction -->
                            <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                                <div class="intro-y flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Total Donated For Co2 Reduction
                                    </h2>
                                    <a href="" class="ml-auto text-primary truncate">Show More</a> 
                                </div>
                                <div class="intro-y box p-5 mt-5">
                                    <div class="mt-3">
                                        <div class="h-[213px]">
                                            <canvas id="report-donut-chart"></canvas>
                                        </div>
                                    </div>
                                    <div class="w-52 sm:w-auto mx-auto mt-8">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                            <span class="truncate">17 - 30 Years old</span> <span class="font-medium ml-auto">62%</span> 
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                            <span class="truncate">31 - 50 Years old</span> <span class="font-medium ml-auto">33%</span> 
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                            <span class="truncate">>= 50 Years old</span> <span class="font-medium ml-auto">10%</span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Total Donated For Co2 Reduction -->
                           
                            
                        </div>
                    </div>
                    <div class="col-span-12 2xl:col-span-3">
                        <div class="2xl:border-l -mb-10 pb-10">
                            <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                                
                                
                                <!-- BEGIN: Important Notes -->
                                <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-3">
                                    <div class="intro-x flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-auto">
                                            Important Notes
                                        </h2>
                                        <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"> <i data-lucide="chevron-left" class="w-4 h-4"></i> </button>
                                        <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"> <i data-lucide="chevron-right" class="w-4 h-4"></i> </button>
                                    </div>
                                    <div class="mt-5 intro-x">
                                        <div class="box zoom-in">
                                            <div class="tiny-slider" id="important-notes">
                                                <div class="p-5">
                                                    <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                                    <div class="text-slate-400 mt-1">20 Hours ago</div>
                                                    <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                                    <div class="font-medium flex mt-5">
                                                        <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                                        <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                                    </div>
                                                </div>
                                                <div class="p-5">
                                                    <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                                    <div class="text-slate-400 mt-1">20 Hours ago</div>
                                                    <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                                    <div class="font-medium flex mt-5">
                                                        <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                                        <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                                    </div>
                                                </div>
                                                <div class="p-5">
                                                    <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                                    <div class="text-slate-400 mt-1">20 Hours ago</div>
                                                    <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                                    <div class="font-medium flex mt-5">
                                                        <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                                        <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Important Notes -->
                                <!-- BEGIN: Schedules -->
                                <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                                    <div class="intro-x flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-5">
                                            Schedules
                                        </h2>
                                        <a href="" class="ml-auto text-primary truncate flex items-center"> <i data-lucide="plus" class="w-4 h-4 mr-1"></i> Add New Schedules </a>
                                    </div>
                                    <div class="mt-5">
                                        <div class="intro-x box">
                                            <div class="p-5">
                                                <div class="flex">
                                                    <i data-lucide="chevron-left" class="w-5 h-5 text-slate-500"></i> 
                                                    <div class="font-medium text-base mx-auto">April</div>
                                                    <i data-lucide="chevron-right" class="w-5 h-5 text-slate-500"></i> 
                                                </div>
                                                <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                                    <div class="font-medium">Su</div>
                                                    <div class="font-medium">Mo</div>
                                                    <div class="font-medium">Tu</div>
                                                    <div class="font-medium">We</div>
                                                    <div class="font-medium">Th</div>
                                                    <div class="font-medium">Fr</div>
                                                    <div class="font-medium">Sa</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">29</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">30</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">31</div>
                                                    <div class="py-0.5 rounded relative">1</div>
                                                    <div class="py-0.5 rounded relative">2</div>
                                                    <div class="py-0.5 rounded relative">3</div>
                                                    <div class="py-0.5 rounded relative">4</div>
                                                    <div class="py-0.5 rounded relative">5</div>
                                                    <div class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">6</div>
                                                    <div class="py-0.5 rounded relative">7</div>
                                                    <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                                                    <div class="py-0.5 rounded relative">9</div>
                                                    <div class="py-0.5 rounded relative">10</div>
                                                    <div class="py-0.5 rounded relative">11</div>
                                                    <div class="py-0.5 rounded relative">12</div>
                                                    <div class="py-0.5 rounded relative">13</div>
                                                    <div class="py-0.5 rounded relative">14</div>
                                                    <div class="py-0.5 rounded relative">15</div>
                                                    <div class="py-0.5 rounded relative">16</div>
                                                    <div class="py-0.5 rounded relative">17</div>
                                                    <div class="py-0.5 rounded relative">18</div>
                                                    <div class="py-0.5 rounded relative">19</div>
                                                    <div class="py-0.5 rounded relative">20</div>
                                                    <div class="py-0.5 rounded relative">21</div>
                                                    <div class="py-0.5 rounded relative">22</div>
                                                    <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">23</div>
                                                    <div class="py-0.5 rounded relative">24</div>
                                                    <div class="py-0.5 rounded relative">25</div>
                                                    <div class="py-0.5 rounded relative">26</div>
                                                    <div class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">27</div>
                                                    <div class="py-0.5 rounded relative">28</div>
                                                    <div class="py-0.5 rounded relative">29</div>
                                                    <div class="py-0.5 rounded relative">30</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">1</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">2</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">3</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">4</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">5</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">6</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">7</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">8</div>
                                                    <div class="py-0.5 rounded relative text-slate-500">9</div>
                                                </div>
                                            </div>
                                            <div class="border-t border-slate-200/60 p-5">
                                                <div class="flex items-center">
                                                    <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                                    <span class="truncate">UI/UX Workshop</span> <span class="font-medium xl:ml-auto">23th</span> 
                                                </div>
                                                <div class="flex items-center mt-4">
                                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                                    <span class="truncate">VueJs Frontend Development</span> <span class="font-medium xl:ml-auto">10th</span> 
                                                </div>
                                                <div class="flex items-center mt-4">
                                                    <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                                    <span class="truncate">Laravel Rest API</span> <span class="font-medium xl:ml-auto">31th</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Schedules -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
        
        
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>