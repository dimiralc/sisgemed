<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="http://localhost/CodeIgniter/img/avatar.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Administrador del Sistema</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> En Línea</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Buscar instituciones..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="indexAdm.html">
                                <i class="fa fa-dashboard"></i> <span>Actividades</span>
                            </a>
                        </li>
                        <li>
                            <a href="PerfilAdm.html">
                                <i class="fa fa-th"></i> <span>Perfil</span></a>    
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Instituciones</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="agregarInstitucion.html"><i class="fa fa-angle-double-right"></i> Registrar instituciones </a></li>
                                <li><a href="actualizarInstitucion.html"><i class="fa fa-angle-double-right"></i> Actualizar Insitituciones</a></li>
                                <li><a href="eliminarInstitucion.html"><i class="fa fa-angle-double-right"></i> Eliminar Insitituciones</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Usuarios</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="agregarUsuario.html"><i class="fa fa-angle-double-right"></i> Registrar Usuarios</a></li>
                                <li><a href="actualizarUsuario.html"><i class="fa fa-angle-double-right"></i> Actualizar Usuario</a></li>
                                <li><a href="eliminarUsuario.html"><i class="fa fa-angle-double-right"></i> Eliminar Usuario</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendarioAdm.html">
                                <i class="fa fa-calendar"></i> <span>Calendario</span>                                
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Soporte</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a data-toggle="modal" href="#myModal1"><i class="fa fa-angle-double-right"></i> Contacto</a></li>
                                <li><a data-toggle="modal" href="#myModal"><i class="fa fa-angle-double-right"></i> Acerca de Sisgemed</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>