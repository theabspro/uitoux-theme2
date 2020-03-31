<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="">
                    <img class="img-responsive" alt="uitouxsolutions.com" src="{{ URL::asset('public/img/logo.svg') }}"/>
                </a>
                <div class="navbar-toggle-btn">
                    <button type="button" id="toggle-btn" class="navbar-toggle navbar-toggle-icon" data-target="#mobile-navbar-collapse-1">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="notify-btn">
                    <a href="#"  onclick="_pcq.push(['triggerOptIn']);">
                        <i class="ion-android-notifications-none"></i>
                    </a>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @if(Entrust::can('dashoboard'))
                    <li>
                        <a href="#!" class="">
                            <span class="dashboard-menu-icon"></span>
                            Dashboard
                        </a>
                    </li>
                    @endif
                    <li>
                        <a  href="{{route('authedAngularPage')}}/#!/role-pkg/role/list">Roles</a>
                    </li>

                    <li>
                        <a href="{{route('authedAngularPage')}}/#!/project-pkg/project/list" class="filter">
                            <span class="project-menu-icon"></span>
                            Projects
                        </a>
                    </li>

                    @if(Entrust::can('projects1'))
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="task-menu-icon"></span>
                            Tasks
                        </a>
                        <ul class="dropdown-menu">
                                <li>
                                    <a href=''>
                                        Pending
                                    </a>
                                </li>
                                <li>
                                    <a href=''>
                                        Completed
                                    </a>
                                </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="task-menu-icon"></span>
                            My Tasks
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href=''>
                                    Pending
                                </a>
                            </li>
                            <li>
                                <a href=''>
                                    Completed
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href=''  role="button">
                            <span class="task-menu-icon"></span>
                            Tickets
                        </a>
                    </li>
                    <li>
                        <a href="" class="filter">
                            <span class="calendar-menu-icon"></span>
                            Calendar
                        </a>
                    </li>
                    <li>
                        <a href="#" class="filter">
                            <span class="asset-menu-icon"></span>
                            Assets
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="hr-menu-icon"></span>
                            HR
                        </a>
                        <ul class="dropdown-menu divider-menu">
                            <li>
                                <a href=''>
                                    Punches
                                </a>
                            </li>
                            <li><a href=''>Breaks</a></li>
                            <li><a href=''>Leaves</a></li>
                            <li><a href=''>Employees</a></li>
                            <li><a href="#">Interviews</a></li>
                            <li><a href=''>Work Logs</a></li>
                            <li>
                                <a href=''>
                                    Current Work Status
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown " id="masters" >
                        <a href="#"    class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="masters-menu-icon"></span>
                            Masters
                        </a>
                        <ul class="dropdown-menu divider-menu">
                            @if(Entrust::can('users'))
                                <li><a href="" class="filter">Users</a></li>
                            @endif
                            <li><a href="">Roles</a></li>
                            <li><a href="" class="filter">Employees</a></li>
                            <li><a href="">Desigantions</a></li>
                            <li><a href="">Ticket Types</a></li>
                            <li><a href="">Companies</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>


                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown setting-menu">
                        <a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <img class="img-responsive" alt="Menu" src="{{ URL::asset('public/img/content/menu-icon.png') }}">
                        </a>
                        <ul class="dropdown-menu">
                            @if(Entrust::can('To Dos'))
                            <li>
                                <a href="{{route('listToDo')}}" class="filter">To Dos</a>
                            </li>
                            @endif
                            <li><a href="#" data-toggle="modal" class="apply-leave"  data-target="#leave_modal">Apply Leave</a></li>
                            <li>
                                <a href="#" data-toggle="modal" class="current-status"  data-target="#current_status_modal">
                                    Update Current Status
                                    <p style="color:green;"></p>
                                </a>
                            </li>

                            <li><a href="{{url('/logout')}}">Task Request</a></li>
                        </ul>
                    </li>
                    <li class="dropdown profile">
                        <a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <img class="img-responsive profile-pic" alt="TVS" src="{{ Auth::user()->profile_image_url }}">
                            <div class="login-info">
                                <span class="login-name">{{Auth::user()->name}}</span>
                                <?php
$user_role = Auth::user()->roles->pluck('name');
?>
                                <span class="login-roll">{{$user_role[0]}} </span>
                            </div>
                            <i class="ion-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="btn-file" >My Profile</a></li>
                            <li><a href="{{url('/logout')}}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <!-- Mobile Menu -->
            <div class="custom-navbar-collapse-drop"></div>
            <div class="custom-navbar-collapse text-center" id="mobile-navbar-collapse-1">
                <div class="custom-navbar-collapse-block">
                    <div class="profile-block text-center">
                        <!--img class="img-responsive profile-pic" alt="TVS" src="{{ URL::asset('public/img/profile-thumb.jpg') }}"-->
                        <a href="" class="">
                            <img class="img-responsive profile-pic" alt="TVS" src="{{ Auth::user()->profile_image_url }}">
                            <span class="login-name">{{Auth::user()->name}}</span>
                            <?php
$user_role = Auth::user()->roles->pluck('name');
?>
                            <span class="login-roll">{{$user_role[0]}}</span>
                        </a>
                    </div><!-- Profile -->
                    <ul class="nav navbar-nav">
                        @if(Entrust::can('projects'))
                        <li>
                            <a href="" class="filter">Projects</a>
                        </li>
                        @endif

                        @if(Entrust::can('tasks'))
                        <li class="dropdown tasks " id="task" >
                            <a href="#"    class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tasks <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                    <li><a href=''>Pending</a></li>
                                    <li><a href=''>Completed</a></li>
                            </ul>
                        </li>
                        @endif

                        @if(Entrust::can('Team Tasks'))
                        <li class="dropdown tasks " id="task" >
                            <a href="#"    class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Tasks<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href='{{route("taskListTM",["type"=>"pending"])}}'>Pending</a></li>
                                <li><a href='{{route("taskListTM",["type" => "completed"])}}'>Completed</a></li>
                            </ul>
                        </li>
                        @endif

                        @if(Entrust::can('Client Tasks'))
                        <li class="dropdown tasks " id="task" >
                            <a href="#"    class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tickets<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href='{{route("taskListCLI",["type"=>"pending"])}}'>Pending</a></li>
                                <li><a href='{{route("taskListCLI",["type" => "completed"])}}'>Completed</a></li>
                            </ul>
                        </li>
                        @endif

                        <li>
                            <a href="" class="filter">Calendar</a>
                        </li>

                        @if(Entrust::can('Gallery'))
                        <li class="hide">
                            <a href="" class="filter">Gallery</a>
                        </li>
                        @endif

                        <li>
                            <a href="" class="filter">Assets</a>
                        </li>

                        @if(Entrust::can('HR'))
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HR <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href=''>Punches</a></li>
                                <li><a href=''>Breaks</a></li>
                                <li><a href=''>Leaves</a></li>
                                <li><a href=''>Employees</a></li>
                                <li><a href='#'>Interviews</a></li>
                                <li><a href=''>Work Logs</a></li>
                            </ul>
                        </li>
                        @endif

                        @if(Entrust::can('masters'))
                        <li class="dropdown masters " id="masters" >
                            <a href="#"    class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Masters <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu divider-menu">
                                @if(Entrust::can('users'))
                                    <li><a href="{{route('listUser')}}" class="filter">Users</a></li>
                                @endif
                                <li><a href="{{route('listRole')}}">Roles</a></li>
                                <li><a href="{{route('listEmployee')}}" class="filter">Employees</a></li>
                                <li><a href="{{route('listDesignation')}}">Desigantions</a></li>
                                <li><a href="{{route('listTickettype')}}">Ticket Types</a></li>
                                <li><a href="{{route('listCompanyDetail')}}">Companies</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Entrust::can('To Dos'))
                        <li>
                            <a href="{{route('listToDo')}}" class="filter">To Dos</a>
                        </li>
                        @endif
                        <li><a href="#" data-toggle="modal" class="apply-leave"  data-target="#leave_modal">Apply Leave</a></li>

                        <li>
                            <a href="#" data-toggle="modal" class="current-status"  data-target="#current_status_modal">
                                Update Current Status
                                <p style="color:green;"></p>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <button type="button" class="btn btn-primary" data-target="#work_log_modal" data-toggle="modal">
                                    Punch Out Task
                                </button>
                            </a>
                        </li>
                    </ul>
                </div><!-- Collapse Block -->
                <div class="bottom-fixed">
                    <a href="{{url('/logout')}}" class="btn btn-primary btn-rnd" role="button" aria-haspopup="true" aria-expanded="false">Logout</a>
                </div><!-- Bottom Fixed -->
            </div><!-- Mobile Navbar Collapse -->
        </div><!-- Container Fluid -->
    </nav>
</header><!-- Header -->
