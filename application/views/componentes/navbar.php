<header class="navbar">
    <div class="container-fluid expanded-panel">
        <div class="row">
            <div id="logo" class="col-xs-12 col-sm-2">
                    <a href="index.html">SISGEMED</a>
            </div>
            <div id="top-panel" class="col-xs-12 col-sm-10">
                <div class="row">
                    <div class="col-xs-8 col-sm-4">
                            <a href="#" class="show-sidebar">
                              <i class="fa fa-bars"></i>
                            </a>
                            <div id="search">
                                    <input type="text" placeholder="Buscar Pacientes"/>
                                    <i class="fa fa-search"></i>
                            </div>
                    </div>
                    <div class="col-xs-4 col-sm-8 top-panel-right">
                        <ul class="nav navbar-nav pull-right panel-menu">
                            <li class="hidden-xs">
                                <a href="index.html" class="modal-link">
                                        <i class="fa fa-bell"></i>
                                        <span class="badge">7</span>
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a class="ajax-link" href="<?=$url_base;?>ajax/calendar.html">
                                        <i class="fa fa-calendar"></i>
                                        <span class="badge">7</span>
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a href="<?=$url_base;?>ajax/page_messages.html" class="ajax-link">
                                        <i class="fa fa-envelope"></i>
                                        <span class="badge">7</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                                    <div class="avatar">
                                            <img src="<?=$url_base;?>img/avatar.jpg" class="img-rounded" alt="avatar" />
                                    </div>
                                    <i class="fa fa-angle-down pull-right"></i>
                                    <div class="user-mini pull-right">
                                            <span class="welcome">Welcome,</span>
                                            <span>Jane Devoops</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                                <i class="fa fa-user"></i>
                                                <span>Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=$url_base;?>ajax/page_messages.html" class="ajax-link">
                                                <i class="fa fa-envelope"></i>
                                                <span>Messages</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=$url_base;?>ajax/gallery_simple.html" class="ajax-link">
                                                <i class="fa fa-picture-o"></i>
                                                <span>Albums</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=$url_base;?>ajax/calendar.html" class="ajax-link">
                                                <i class="fa fa-tasks"></i>
                                                <span>Tasks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                <i class="fa fa-cog"></i>
                                                <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                <i class="fa fa-power-off"></i>
                                                <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>