<header>
    <nav id="nav" class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" id="toggle-btn" class="navbar-toggle navbar-toggle-icon collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
               <a class="navbar-brand" href=""><img class="img-responsive" src="{{asset('public/themes/'.$theme.'/img/logo.svg')}}"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active">
                        <a href="">
                            Dashboard
                        </a>
                    </li>
                    <li class="dropdown down-arrow master_link">
                        <i class="fas fa-angle-down"></i>
                         <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Masters
                        </a>
                        <ul class="dropdown-menu divider-menu">
                            <li>
                                <a href="">
                                    Companies
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Roles
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Roles
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Financial Years
                                </a>
                            </li>

                            <li class="dropdown normal-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Virtual Account Master
                                </a>
                                <ul class="dropdown-menu subdropdown-menu">
                                    <li>
                                        <a href="">
                                            Virtual Codes 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Virtual Codes 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Virtual Codes 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Virtual Codes 1
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="">
                                    Breakup Master
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="app dropdown normal-dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <img class="img-responsive" src="{{asset('public/themes/'.$theme.'/img/content/app.svg')}}"/>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="">
                                    <i class="icon ion-md-pulse"></i>
                                    Activity
                                </a>
                            </li>
                            <li>
                                <a href="/#!/configurations">
                                    <i class="icon ion-md-settings"></i>
                                    Configurations
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="select-biz">
                        <a href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-label">Business</span>
                            <span class="manu-label-value">AL</span>
                        </a>
                    </li>
                    <li class="select-biz dropdown normal-dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-label">Business</span>
                            <span class="manu-label-value">M&M</span>
                            <i class="down-arrow fas fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="card-inner" href="">
                                    AL
                                </a>
                            </li>
                            <li>
                                <a class="card-inner" href="">
                                    M&M
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="profile dropdown normal-dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>
                                Abdul
                                <small>Project Manager</small>
                            </span>
                            <img class="img-responsive" alt="User Avatar" src="{{ asset('public/themes/'.$theme.'/img/default_tvs_logo.png') }}"/>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="">
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header><!-- Header -->
