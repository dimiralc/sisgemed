<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Calendario
                        <small>Calendario de Eventos</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Calendario</li>
                    </ol>
                </section>

                              
                <!-- Content Header (Page header) -->
                
                <!-- Main content -->
                <section class="content">


                    <div class="row">
                        <div class="col-md-3">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h4 class="box-title">Desplaza los elementos hacia el calendario</h4>
                                </div>
                                <div class="box-body">
                                    <!-- the events -->
                                    <div id='external-events'>                                        
                                        <div class='external-event bg-green'>Consulta Paciente</div>
                                        <div class='external-event bg-red'>Actualizacion de Ficha</div>
                                        <div class='external-event bg-aqua'>Administracion de Medicamentos</div>
                                        <div class='external-event bg-yellow'>Actualizacion de Datos</div>
                                        <div class='external-event bg-navy'>Eliminacion de Paciente</div>
                                        <p>
                                            <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>Quitar tarea despues de seleccionarla</label>
                                        </p>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Crear Evento</h3>
                                </div>
                                <div class="box-body">
                                    <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                        <button type="button" id="color-chooser-btn" class="btn btn-danger btn-block btn-sm dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>
                                        <ul class="dropdown-menu" id="color-chooser">
                                            <li><a class="text-green" href="#"><i class="fa fa-square"></i> Verde</a></li>
                                            <li><a class="text-blue" href="#"><i class="fa fa-square"></i> Azul</a></li>                                            
                                            <li><a class="text-navy" href="#"><i class="fa fa-square"></i> Cyan</a></li>                                            
                                            <li><a class="text-yellow" href="#"><i class="fa fa-square"></i> Amarillo</a></li>
                                            <li><a class="text-orange" href="#"><i class="fa fa-square"></i> Naranja</a></li>
                                            <li><a class="text-aqua" href="#"><i class="fa fa-square"></i> Aqua</a></li>
                                            <li><a class="text-red" href="#"><i class="fa fa-square"></i> Rojo</a></li>
                                            <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i> Fucsia</a></li>
                                            <li><a class="text-purple" href="#"><i class="fa fa-square"></i> Morado</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="input-group">                                          
                                        <input id="new-event" type="text" class="form-control" placeholder="Titulo del evento">
                                        <div class="input-group-btn">
                                            <button id="add-new-event" type="button" class="btn btn-default btn-flat">Añadir</button>
                                        </div><!-- /btn-group -->
                                    </div><!-- /input-group -->
                                </div>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-9">
                            <div class="box box-primary">                                
                                <div class="box-body no-padding">
                                    <!-- THE CALENDAR -->
                                    <div id="calendar"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
                        </div><!-- /.col -->    
                    </div><!-- /.row --> 
                </section><!-- /.content -->
            </aside><!-- /.right-side -->   