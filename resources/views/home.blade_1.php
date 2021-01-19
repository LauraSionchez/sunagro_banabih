@extends('layouts.default')
@section('content')

<div class="c-sidebar c-sidebar-light c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        IMG
    </div>
    <ul class="c-sidebar-nav ps ps--active-y">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="#">
                TITLE
            </a>
        </li>


        <li class="c-sidebar-nav-title">Menu</li>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                <use xlink:href="img/free.svg#cil-puzzle"></use>
                </svg> Base
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/3.2.0/dark/base/breadcrumb.html"> Breadcrumb</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/3.2.0/dark/base/cards.html"> Cards</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/3.2.0/dark/base/carousel.html"> Carousel</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/3.2.0/dark/base/collapse.html"> Collapse</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="https://coreui.io/demo/3.2.0/dark/base/jumbotron.html"> Jumbotron</a></li>

            </ul>
        </li>

        <li class="c-sidebar-nav-divider"></li>

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button>
</div>
<div class="c-sidebar c-sidebar-lg c-sidebar-light c-sidebar-right c-sidebar-overlaid" id="aside">
    <button class="c-sidebar-close c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-show" responsive="true">
        <svg class="c-icon">
        <use xlink:href="free.svg#cil-x"></use>
        </svg>
    </button>
    <ul class="nav nav-tabs nav-underline nav-underline-primary" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                <svg class="c-icon">
                <use xlink:href="free.svg#cil-list"></use>
                </svg></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                <svg class="c-icon">
                <use xlink:href="free.svg#cil-speech"></use>
                </svg></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                <svg class="c-icon">
                <use xlink:href="free.svg#cil-settings"></use>
                </svg></a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase c-small">Today</div>
                <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                    <div class="c-avatar float-right"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/7.jpg" alt="user@email.com"></div>
                    <div>Meeting with <strong>Lucas</strong></div><small class="text-muted mr-3">
                        <svg class="c-icon">
                        <use xlink:href="free.svg#cil-calendar"></use>
                        </svg>&nbsp; 1 - 3pm</small><small class="text-muted">
                        <svg class="c-icon">
                        <use xlink:href="free.svg#cil-location-pin"></use>
                        </svg>&nbsp; Palo Alto, CA</small>
                </div>
                <div class="list-group-item list-group-item-accent-info">
                    <div class="c-avatar float-right"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/4.jpg" alt="user@email.com"></div>
                    <div>Skype with <strong>Megan</strong></div><small class="text-muted mr-3">
                        <svg class="c-icon">
                        <use xlink:href="free.svg#cil-calendar"></use>
                        </svg>&nbsp; 4 - 5pm</small><small class="text-muted">
                        <svg class="c-icon">
                        <use xlink:href="free.svg#cil-skype"></use>
                        </svg>&nbsp; On-line</small>
                </div>
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase c-small">Tomorrow</div>
                <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                    <div>New UI Project - <strong>deadline</strong></div><small class="text-muted mr-3">
                        <svg class="c-icon">
                        <use xlink:href="free.svg#cil-calendar"></use>
                        </svg>&nbsp; 10 - 11pm</small><small class="text-muted">
                        <svg class="c-icon">
                        <use xlink:href="free.svg#cil-home"></use>
                        </svg>&nbsp; creativeLabs HQ</small>
                    <div class="c-avatars-stack mt-2">
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/2.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/3.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/4.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/5.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/6.jpg" alt="user@email.com"></div>
                    </div>
                </div>
                <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                    <div><strong>#10 Startups.Garden</strong> Meetup</div><small class="text-muted mr-3">
                        <svg class="c-icon">
                        <use xlink:href="free.svg#cil-calendar"></use>
                        </svg>&nbsp; 1 - 3pm</small><small class="text-muted">
                        <svg class="c-icon">
                        <use xlink:href="free.svg#cil-location-pin"></use>
                        </svg>&nbsp; Palo Alto, CA</small>
                </div>
                <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                    <div><strong>Team meeting</strong></div><small class="text-muted mr-3">
                        <svg class="c-icon">
                        <use xlink:href="free.svg#cil-calendar"></use>
                        </svg>&nbsp; 4 - 6pm</small><small class="text-muted">
                        <svg class="c-icon">
                        <use xlink:href="free.svg#cil-home"></use>
                        </svg>&nbsp; creativeLabs HQ</small>
                    <div class="c-avatars-stack mt-2">
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/2.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/3.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/4.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/5.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/6.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/7.jpg" alt="user@email.com"></div>
                        <div class="c-avatar c-avatar-xs"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/8.jpg" alt="user@email.com"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane p-3" id="messages" role="tabpanel">
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 mr-3 float-left">
                    <div class="c-avatar"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-muted">Lukasz Holeczek</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
        </div>
        <div class="tab-pane p-3" id="settings" role="tabpanel">
            <h6>Settings</h6>
            <div class="c-aside-options">
                <div class="clearfix mt-4"><small><b>Option 1</b></small>
                    <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                        <input class="c-switch-input" type="checkbox" checked="checked"><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
                <div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
            </div>
            <div class="c-aside-options">
                <div class="clearfix mt-3"><small><b>Option 2</b></small>
                    <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                        <input class="c-switch-input" type="checkbox"><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
                <div><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
            </div>
            <div class="c-aside-options">
                <div class="clearfix mt-3"><small><b>Option 3</b></small>
                    <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                        <input class="c-switch-input" type="checkbox"><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
            </div>
            <div class="c-aside-options">
                <div class="clearfix mt-3"><small><b>Option 4</b></small>
                    <label class="c-switch c-switch-label c-switch-pill c-switch-success c-switch-sm float-right">
                        <input class="c-switch-input" type="checkbox" checked="checked"><span class="c-switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
            </div>
            <hr>
            <h6>System Utilization</h6>
            <div class="text-uppercase mb-1 mt-4"><small><b>CPU Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">348 Processes. 1/4 Cores.</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>Memory Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">11444GB/16384MB</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>SSD 1 Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">243GB/256GB</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>SSD 2 Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">25GB/256GB</small>
        </div>
    </div>
</div>
<div class="c-wrapper">
    <header class="c-header c-header-light c-header-fixed">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
            <svg class="c-icon c-icon-lg">
            <use xlink:href="free.svg#cil-menu"></use>
            </svg>
        </button><a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="coreui-pro.svg#full"></use>
            </svg></a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
            <svg class="c-icon c-icon-lg">
            <use xlink:href="free.svg#cil-menu"></use>
            </svg>
        </button>
        <ul class="c-header-nav d-md-down-none">
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
        </ul>
        <ul class="c-header-nav mfs-auto">
            <li class="c-header-nav-item px-3 c-d-legacy-none">
                <button class="c-class-toggler c-header-nav-btn" type="button" id="header-tooltip" data-target="body" data-class="c-dark-theme" data-toggle="c-tooltip" data-placement="bottom" title="Toggle Light/Dark Mode">
                    <svg class="c-icon c-d-dark-none">
                    <use xlink:href="free.svg#cil-moon"></use>
                    </svg>
                    <svg class="c-icon c-d-default-none">
                    <use xlink:href="free.svg#cil-sun"></use>
                    </svg>
                </button>
            </li>
        </ul>
        <ul class="c-header-nav">
            <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                    <use xlink:href="free.svg#cil-bell"></use>
                    </svg><span class="badge badge-pill badge-danger">5</span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                    <div class="dropdown-header bg-light"><strong>You have 5 notifications</strong></div><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-success">
                        <use xlink:href="free.svg#cil-user-follow"></use>
                        </svg> New user registered</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-danger">
                        <use xlink:href="free.svg#cil-user-unfollow"></use>
                        </svg> User deleted</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-info">
                        <use xlink:href="free.svg#cil-chart"></use>
                        </svg> Sales report is ready</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-success">
                        <use xlink:href="free.svg#cil-basket"></use>
                        </svg> New client</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-warning">
                        <use xlink:href="free.svg#cil-speedometer"></use>
                        </svg> Server overloaded</a>
                    <div class="dropdown-header bg-light"><strong>Server</strong></div><a class="dropdown-item d-block" href="#">
                        <div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div><span class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </span><small class="text-muted">348 Processes. 1/4 Cores.</small>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div><span class="progress progress-xs">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </span><small class="text-muted">11444GB/16384MB</small>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div><span class="progress progress-xs">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </span><small class="text-muted">243GB/256GB</small>
                    </a>
                </div>
            </li>
            <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                    <use xlink:href="free.svg#cil-list-rich"></use>
                    </svg><span class="badge badge-pill badge-warning">15</span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                    <div class="dropdown-header bg-light"><strong>You have 5 pending tasks</strong></div><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">Upgrade NPM &amp; Bower<span class="float-right"><strong>0%</strong></span></div><span class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </span>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">ReactJS Version<span class="float-right"><strong>25%</strong></span></div><span class="progress progress-xs">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </span>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">VueJS Version<span class="float-right"><strong>50%</strong></span></div><span class="progress progress-xs">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </span>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">Add new layouts<span class="float-right"><strong>75%</strong></span></div><span class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </span>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">Angular 8 Version<span class="float-right"><strong>100%</strong></span></div><span class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </span>
                    </a><a class="dropdown-item text-center border-top" href="#"><strong>View all tasks</strong></a>
                </div>
            </li>
            <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                    <use xlink:href="free.svg#cil-envelope-open"></use>
                    </svg><span class="badge badge-pill badge-info">7</span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                    <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div><a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mfe-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">Just now</small></div>
                            <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important message</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mfe-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/6.jpg" alt="user@email.com"><span class="c-avatar-status bg-warning"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">5 minutes ago</small></div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mfe-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/5.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mfe-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/4.jpg" alt="user@email.com"><span class="c-avatar-status bg-info"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">4:03 PM</small></div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a><a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
                </div>
            </li>
            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="c-avatar"><img class="c-avatar-img" src="CoreUI%20Pro%20Bootstrap%20Admin%20Template_files/6.jpg" alt="user@email.com"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right pt-0">
                    <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                        <use xlink:href="free.svg#cil-bell"></use>
                        </svg> Updates<span class="badge badge-info mfs-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                        <use xlink:href="free.svg#cil-envelope-open"></use>
                        </svg> Messages<span class="badge badge-success mfs-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                        <use xlink:href="free.svg#cil-task"></use>
                        </svg> Tasks<span class="badge badge-danger mfs-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                        <use xlink:href="free.svg#cil-comment-square"></use>
                        </svg> Comments<span class="badge badge-warning mfs-auto">42</span></a>
                    <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                        <use xlink:href="free.svg#cil-user"></use>
                        </svg> Profile</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                        <use xlink:href="free.svg#cil-settings"></use>
                        </svg> Settings</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                        <use xlink:href="free.svg#cil-credit-card"></use>
                        </svg> Payments<span class="badge badge-secondary mfs-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                        <use xlink:href="free.svg#cil-file"></use>
                        </svg> Projects<span class="badge badge-primary mfs-auto">42</span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                        <use xlink:href="free.svg#cil-lock-locked"></use>
                        </svg> Lock Account</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                        <use xlink:href="free.svg#cil-account-logout"></use>
                        </svg> Logout</a>
                </div>
            </li>
            <button class="c-header-toggler c-class-toggler mfe-md-3" type="button" data-target="#aside" data-class="c-sidebar-show">
                <svg class="c-icon c-icon-lg">
                <use xlink:href="free.svg#cil-applications-settings"></use>
                </svg>
            </button>
        </ul>
        <div class="c-subheader justify-content-between px-3">

            <ol class="breadcrumb border-0 m-0 px-0 px-md-3">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Dashboard</li>

            </ol>
            <div class="c-subheader-nav d-md-down-none mfe-2"><a class="c-subheader-nav-link" href="#">
                    <svg class="c-icon">
                    <use xlink:href="free.svg#cil-speech"></use>
                    </svg></a><a class="c-subheader-nav-link" href="#">
                    <svg class="c-icon">
                    <use xlink:href="free.svg#cil-graph"></use>
                    </svg> &nbsp;Dashboard</a><a class="c-subheader-nav-link" href="#">
                    <svg class="c-icon">
                    <use xlink:href="free.svg#cil-settings"></use>
                    </svg> &nbsp;Settings</a></div>
        </div>
    </header>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><strong>Credit Card</strong> <small>Form</small></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input class="form-control" id="name" type="text" placeholder="Enter your name" value="xgxfghsfghg">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="ccnumber">Credit Card Number</label>
                                                <input class="form-control" id="ccnumber" type="text" placeholder="0000 0000 0000 0000">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label for="ccmonth">Month</label>
                                            <select class="form-control" id="ccmonth">
                                                <option selected="selected">1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="ccyear">Year</label>
                                            <select class="form-control" id="ccyear">
                                                <option selected="selected">2014</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                                <option>2024</option>
                                                <option>2025</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cvv">CVV/CVC</label>
                                                <input class="form-control" id="cvv" type="text" placeholder="123">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><strong>Company</strong> <small>Form</small></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input class="form-control" id="company" type="text" placeholder="Enter your company name" value="hdfghdfghh">
                                    </div>
                                    <div class="form-group">
                                        <label for="vat">VAT</label>
                                        <input class="form-control" id="vat" type="text" placeholder="PL1234567890">
                                    </div>
                                    <div class="form-group">
                                        <label for="street">Street</label>
                                        <input class="form-control" id="street" type="text" placeholder="Enter street name">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-8">
                                            <label for="city">City</label>
                                            <input class="form-control" id="city" type="text" placeholder="Enter your city">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="postal-code">Postal Code</label>
                                            <input class="form-control" id="postal-code" type="text" placeholder="Postal Code">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <input class="form-control" id="country" type="text" placeholder="Country name">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header"><strong>Basic Form</strong> Elements</div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Static</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">Username</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="text-input">Text Input</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="text-input" type="text" name="text-input" placeholder="Text"><span class="help-block">This is a help text</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="email-input">Email Input</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="email-input" type="email" name="email-input" placeholder="Enter Email" autocomplete="email"><span class="help-block">Please enter your email</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="password-input">Password</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="password-input" type="password" name="password-input" placeholder="Password" autocomplete="new-password"><span class="help-block">Please enter a complex password</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="date-input">Date Input</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date"><span class="help-block">Please enter a valid date</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="disabled-input">Disabled Input</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="disabled-input" type="text" name="disabled-input" placeholder="Disabled" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="textarea-input">Textarea</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="textarea-input" name="textarea-input" rows="9" placeholder="Content.."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="select1">Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="select1" name="select1">
                                                    <option value="0" selected="selected">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="select2">Select Large</label>
                                            <div class="col-md-9">
                                                <select class="form-control form-control-lg" id="select2" name="select2">
                                                    <option value="0" selected="selected">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="select3">Select Small</label>
                                            <div class="col-md-9">
                                                <select class="form-control form-control-sm" id="select3" name="select3">
                                                    <option value="0" selected="selected">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="disabledSelect">Disabled Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="disabledSelect" disabled="disabled">
                                                    <option value="0" selected="selected">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="multiple-select">Multiple select</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="multiple-select" name="multiple-select" size="5" multiple="multiple">
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                    <option value="4">Option #4</option>
                                                    <option value="5">Option #5</option>
                                                    <option value="6">Option #6</option>
                                                    <option value="7">Option #7</option>
                                                    <option value="8">Option #8</option>
                                                    <option value="9">Option #9</option>
                                                    <option value="10">Option #10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Radios</label>
                                            <div class="col-md-9 col-form-label">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="radio1" type="radio" value="radio1" name="radios">
                                                    <label class="form-check-label" for="radio1">Option 1</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="radio2" type="radio" value="radio2" name="radios">
                                                    <label class="form-check-label" for="radio2">Option 2</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="radio3" type="radio" value="radio2" name="radios">
                                                    <label class="form-check-label" for="radio3">Option 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Inline Radios</label>
                                            <div class="col-md-9 col-form-label">
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" id="inline-radio1" type="radio" value="option1" name="inline-radios">
                                                    <label class="form-check-label" for="inline-radio1">One</label>
                                                </div>
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" id="inline-radio2" type="radio" value="option2" name="inline-radios">
                                                    <label class="form-check-label" for="inline-radio2">Two</label>
                                                </div>
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" id="inline-radio3" type="radio" value="option3" name="inline-radios">
                                                    <label class="form-check-label" for="inline-radio3">Three</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Checkboxes</label>
                                            <div class="col-md-9 col-form-label">
                                                <div class="form-check checkbox">
                                                    <input class="form-check-input" id="check1" type="checkbox" value="">
                                                    <label class="form-check-label" for="check1">Option 1</label>
                                                </div>
                                                <div class="form-check checkbox">
                                                    <input class="form-check-input" id="check2" type="checkbox" value="">
                                                    <label class="form-check-label" for="check2">Option 2</label>
                                                </div>
                                                <div class="form-check checkbox">
                                                    <input class="form-check-input" id="check3" type="checkbox" value="">
                                                    <label class="form-check-label" for="check3">Option 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Inline Checkboxes</label>
                                            <div class="col-md-9 col-form-label">
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" id="inline-checkbox1" type="checkbox" value="check1">
                                                    <label class="form-check-label" for="inline-checkbox1">One</label>
                                                </div>
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" id="inline-checkbox2" type="checkbox" value="check2">
                                                    <label class="form-check-label" for="inline-checkbox2">Two</label>
                                                </div>
                                                <div class="form-check form-check-inline mr-1">
                                                    <input class="form-check-input" id="inline-checkbox3" type="checkbox" value="check3">
                                                    <label class="form-check-label" for="inline-checkbox3">Three</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-input">File input</label>
                                            <div class="col-md-9">
                                                <input id="file-input" type="file" name="file-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-multiple-input">Multiple File input</label>
                                            <div class="col-md-9">
                                                <input id="file-multiple-input" type="file" name="file-multiple-input" multiple="">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header"><strong>Inline</strong> Form</div>
                                <div class="card-body">
                                    <form class="form-inline" action="" method="post">
                                        <div class="form-group">
                                            <label class="mr-1" for="exampleInputName2">Name</label>
                                            <input class="form-control" id="exampleInputName2" type="text" placeholder="Jane Doe" autocomplete="name">
                                        </div>
                                        <div class="form-group">
                                            <label class="mx-1" for="exampleInputEmail2">Email</label>
                                            <input class="form-control" id="exampleInputEmail2" type="email" placeholder="jane.doe@example.com" autocomplete="email">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header"><strong>Horizontal</strong> Form</div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-email">Email</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="hf-email" type="email" name="hf-email" placeholder="Enter Email.." autocomplete="email"><span class="help-block">Please enter your email</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="hf-password">Password</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="hf-password" type="password" name="hf-password" placeholder="Enter Password.." autocomplete="current-password"><span class="help-block">Please enter your password</span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header"><strong>Normal</strong> Form</div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="nf-email">Email</label>
                                            <input class="form-control" id="nf-email" type="email" name="nf-email" placeholder="Enter Email.." autocomplete="email"><span class="help-block">Please enter your email</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="nf-password">Password</label>
                                            <input class="form-control" id="nf-password" type="password" name="nf-password" placeholder="Enter Password.." autocomplete="current-password"><span class="help-block">Please enter your password</span>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Input <strong>Grid</strong></div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <input class="form-control" type="text" placeholder=".col-sm-3">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" placeholder=".col-sm-4">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" placeholder=".col-sm-5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" placeholder=".col-sm-6">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-7">
                                                <input class="form-control" type="text" placeholder=".col-sm-7">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" placeholder=".col-sm-8">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder=".col-sm-9">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder=".col-sm-10">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-11">
                                                <input class="form-control" type="text" placeholder=".col-sm-11">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" placeholder=".col-sm-12">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit"> Login</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Input <strong>Sizes</strong></div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label" for="input-small">Small Input</label>
                                            <div class="col-sm-6">
                                                <input class="form-control form-control-sm" id="input-small" type="text" name="input-small" placeholder=".form-control-sm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label" for="input-normal">Normal Input</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="input-normal" type="text" name="input-normal" placeholder="Normal">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label" for="input-large">Large Input</label>
                                            <div class="col-sm-6">
                                                <input class="form-control form-control-lg" id="input-large" type="text" name="input-large" placeholder=".form-control-lg">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><strong>Validation states</strong> Form</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-col-form-label" for="inputSuccess1">Input with success</label>
                                        <input class="form-control is-valid" id="inputSuccess1" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-col-form-label" for="inputError1">Input with error</label>
                                        <input class="form-control is-invalid" id="inputError1" type="text">
                                        <div class="invalid-feedback">Please provide a valid informations.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header"><strong>Validation</strong> <code>was-validated</code></div>
                                <div class="card-body was-validated">
                                    <div class="form-group">
                                        <label class="form-col-form-label" for="inputSuccess2">Input with success</label>
                                        <input class="form-control is-valid" id="inputSuccess2" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-col-form-label" for="inputError2">Input required</label>
                                        <input class="form-control is-invalid" id="inputError2" type="text" required="">
                                        <div class="invalid-feedback">Please provide a valid informations.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header"><strong>Icon/Text</strong> Groups</div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">
                                                            <svg class="c-icon">
                                                            <use xlink:href="free.svg#cil-user"></use>
                                                            </svg></span></div>
                                                    <input class="form-control" id="input1-group1" type="text" name="input1-group1" placeholder="Username" autocomplete="username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input class="form-control" id="input2-group1" type="email" name="input2-group1" placeholder="Email" autocomplete="email">
                                                    <div class="input-group-append"><span class="input-group-text">
                                                            <svg class="c-icon">
                                                            <use xlink:href="free.svg#cil-envelope-open"></use>
                                                            </svg></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">
                                                            <svg class="c-icon">
                                                            <use xlink:href="free.svg#cil-euro"></use>
                                                            </svg></span></div>
                                                    <input class="form-control" id="input3-group1" type="text" name="input3-group1" placeholder="..">
                                                    <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header"><strong>Buttons</strong> Groups</div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group"><span class="input-group-prepend">
                                                        <button class="btn btn-primary" type="button">
                                                            <svg class="c-icon">
                                                            <use xlink:href="free.svg#cil-magnifying-glass"></use>
                                                            </svg> Search
                                                        </button></span>
                                                    <input class="form-control" id="input1-group2" type="text" name="input1-group2" placeholder="Username" autocomplete="username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input class="form-control" id="input2-group2" type="email" name="input2-group2" placeholder="Email" autocomplete="email"><span class="input-group-append">
                                                        <button class="btn btn-primary" type="button">Submit</button></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group"><span class="input-group-prepend">
                                                        <button class="btn btn-primary" type="button">
                                                            <svg class="c-icon">
                                                            <use xlink:href="free.svg#cil-facebook"></use>
                                                            </svg>
                                                        </button></span>
                                                    <input class="form-control" id="input3-group2" type="text" name="input3-group2" placeholder="Search"><span class="input-group-append">
                                                        <button class="btn btn-primary" type="button">
                                                            <svg class="c-icon">
                                                            <use xlink:href="free.svg#cil-twitter"></use>
                                                            </svg>
                                                        </button></span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header"><strong>Dropdowns</strong> Groups</div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button>
                                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <input class="form-control" id="input1-group3" type="text" name="input1-group3" placeholder="Username" autocomplete="username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input class="form-control" id="input2-group3" type="email" name="input2-group3" placeholder="Email" autocomplete="email">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-primary" type="button">Action</button>
                                                        <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown"><span class="caret"></span></button>
                                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <input class="form-control" id="input3-group3" type="text" name="input3-group3" placeholder="..">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider" role="separator"></div><a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-success" type="submit"> Submit</button>
                                    <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Use the grid for big devices! <small><code>.col-lg-*</code> <code> .col-md-*</code> <code> .col-sm-*</code></small></div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder=".col-md-8">
                                            </div>
                                            <div class="col-md-4">
                                                <input class="form-control" type="text" placeholder=".col-md-4">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" placeholder=".col-md-7">
                                            </div>
                                            <div class="col-md-5">
                                                <input class="form-control" type="text" placeholder=".col-md-5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" placeholder=".col-md-6">
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" placeholder=".col-md-6">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-5">
                                                <input class="form-control" type="text" placeholder=".col-md-5">
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" placeholder=".col-md-7">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <input class="form-control" type="text" placeholder=".col-md-4">
                                            </div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder=".col-md-8">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit">Action</button>
                                    <button class="btn btn-sm btn-danger" type="button">Action</button>
                                    <button class="btn btn-sm btn-warning" type="button">Action</button>
                                    <button class="btn btn-sm btn-info" type="button">Action</button>
                                    <button class="btn btn-sm btn-success" type="button">Action</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Input Grid for small devices! <small><code>.col-*</code></small></div>
                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post">
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <input class="form-control" type="text" placeholder=".col-4">
                                            </div>
                                            <div class="col-8">
                                                <input class="form-control" type="text" placeholder=".col-8">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-5">
                                                <input class="form-control" type="text" placeholder=".col-5">
                                            </div>
                                            <div class="col-7">
                                                <input class="form-control" type="text" placeholder=".col-7">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <input class="form-control" type="text" placeholder=".col-6">
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="text" placeholder=".col-6">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-7">
                                                <input class="form-control" type="text" placeholder=".col-5">
                                            </div>
                                            <div class="col-5">
                                                <input class="form-control" type="text" placeholder=".col-5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-8">
                                                <input class="form-control" type="text" placeholder=".col-8">
                                            </div>
                                            <div class="col-4">
                                                <input class="form-control" type="text" placeholder=".col-4">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit">Action</button>
                                    <button class="btn btn-sm btn-danger" type="button">Action</button>
                                    <button class="btn btn-sm btn-warning" type="button">Action</button>
                                    <button class="btn btn-sm btn-info" type="button">Action</button>
                                    <button class="btn btn-sm btn-success" type="button">Action</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">Example Form</div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Username</span></div>
                                                <input class="form-control" id="username3" type="text" name="username3" autocomplete="username">
                                                <div class="input-group-append"><span class="input-group-text">
                                                        <svg class="c-icon">
                                                        <use xlink:href="free.svg#cil-user"></use>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Email</span></div>
                                                <input class="form-control" id="email3" type="email" name="email3" autocomplete="email">
                                                <div class="input-group-append"><span class="input-group-text">
                                                        <svg class="c-icon">
                                                        <use xlink:href="free.svg#cil-envelope-open"></use>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Password</span></div>
                                                <input class="form-control" id="password3" type="password" name="password3" autocomplete="new-password">
                                                <div class="input-group-append"><span class="input-group-text">
                                                        <svg class="c-icon">
                                                        <use xlink:href="free.svg#cil-lock-locked"></use>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">Example Form</div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" id="username2" type="text" name="username2" placeholder="Username" autocomplete="username">
                                                <div class="input-group-append"><span class="input-group-text">
                                                        <svg class="c-icon">
                                                        <use xlink:href="free.svg#cil-user"></use>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" id="email2" type="email" name="email2" placeholder="Email" autocomplete="email">
                                                <div class="input-group-append"><span class="input-group-text">
                                                        <svg class="c-icon">
                                                        <use xlink:href="free.svg#cil-envelope-open"></use>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" id="password2" type="password" name="password2" placeholder="Password" autocomplete="new-password">
                                                <div class="input-group-append"><span class="input-group-text">
                                                        <svg class="c-icon">
                                                        <use xlink:href="free.svg#cil-lock-locked"></use>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <button class="btn btn-sm btn-secondary" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">Example Form</div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">
                                                        <svg class="c-icon">
                                                        <use xlink:href="free.svg#cil-user"></use>
                                                        </svg></span></div>
                                                <input class="form-control" id="username" type="text" name="username" placeholder="Username" autocomplete="username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">
                                                        <svg class="c-icon">
                                                        <use xlink:href="free.svg#cil-envelope-open"></use>
                                                        </svg></span></div>
                                                <input class="form-control" id="email" type="email" name="email" placeholder="Email" autocomplete="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">
                                                        <svg class="c-icon">
                                                        <use xlink:href="free.svg#cil-lock-locked"></use>
                                                        </svg></span></div>
                                                <input class="form-control" id="password" type="password" name="password" placeholder="Password" autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <button class="btn btn-sm btn-success" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Form Elements</div>
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-form-label" for="prependedInput">Prepended text</label>
                                            <div class="controls">
                                                <div class="input-prepend input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                                                    <input class="form-control" id="prependedInput" size="16" type="text">
                                                </div>
                                                <p class="help-block">Here's some help text</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="appendedInput">Appended text</label>
                                            <div class="controls">
                                                <div class="input-group">
                                                    <input class="form-control" id="appendedInput" size="16" type="text">
                                                    <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                                </div><span class="help-block">Here's more help text</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="appendedPrependedInput">Append and prepend</label>
                                            <div class="controls">
                                                <div class="input-prepend input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                    <input class="form-control" id="appendedPrependedInput" size="16" type="text">
                                                    <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="appendedInputButton">Append with button</label>
                                            <div class="controls">
                                                <div class="input-group">
                                                    <input class="form-control" id="appendedInputButton" size="16" type="text"><span class="input-group-append">
                                                        <button class="btn btn-secondary" type="button">Go!</button></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label" for="appendedInputButtons">Two-button append</label>
                                            <div class="controls">
                                                <div class="input-group">
                                                    <input class="form-control" id="appendedInputButtons" size="16" type="text"><span class="input-group-append">
                                                        <button class="btn btn-secondary" type="button">Search</button>
                                                        <button class="btn btn-secondary" type="button">Options</button></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button class="btn btn-primary" type="submit">Save changes</button>
                                            <button class="btn btn-secondary" type="button">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </main>
    </div>
    <footer class="c-footer">
        <div><a href="https://coreui.io/">CoreUI</a> © 2020 creativeLabs.</div>
        <div class="mfs-auto">Powered by&nbsp;<a href="https://coreui.io/pro/">CoreUI Pro</a></div>
    </footer>
</div>



@stop