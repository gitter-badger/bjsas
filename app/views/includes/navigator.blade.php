<div class="navbar navbar-fixed-top topnavbar-blue">
    <div class="navbar-inner">
        <div class="navbar-container">
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        BJS MotoShop
                    </small>
                </a>
            </div>

            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class=" dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                <i class="icon fa fa-warning"></i>
                            </a>
                        </li>
                        <li>
                            <a class="wave in dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                <i class="icon fa fa-envelope"></i>
                                <span class="badge">3</span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" title="Tasks" href="#">
                                <i class="icon fa fa-tasks"></i>
                                <span class="badge">4</span>
                            </a>
                        </li>
                        <li>
                            <a class="login-area dropdown-toggle avatar" data-toggle="dropdown">
                                <img src="bjsAssets/images/xanderdwyl.jpeg">
                                <span class="profile hidden-xs">Alexjander Bacalso</span>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="visible-xs text-center"><a>Alexjander Bacalso</a></li>
                                <li class="email"><a>{{ Auth::user()->email_address }}</a></li>
                                <!--Avatar Area-->
                                <li>
                                    <div class="avatar-area">
                                        <img src="bjsAssets/images/xanderdwyl.jpeg" class="avatar">
                                        <span class="caption">Change Photo</span>
                                    </div>
                                </li>
                                <!--Avatar Area-->
                                <li class="dropdown-footer">
                                    <a href="#" class="pull-left">Setting</a>
                                    <a href="auth/logout" class="pull-right">Sign Out</a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

