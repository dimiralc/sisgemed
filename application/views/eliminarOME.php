<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Orden Medica
                        <small>Eliminar Orden Medica</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Eliminar Paciente</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- search form -->
                   <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Ingrese el numero de la orden medica">
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-flat" type="button">Buscar</button>
                        </span>
                    </div><!-- /input-group -->
                    <br>
                    <div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <b>Advertencia</b> Se dispone a eliminar una orden medica del sistema. Esta informacion es irrecuperable
                        y solo podra restaurarse manualmente volviendo a registrar la orden en el sisitema.
                    </div>
                    <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Datos de la orden médica</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <input type="text" class="form-control" placeholder="ID Orden Medica: 2168469413">
                                        </div>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" placeholder="Paciente Asociado: Diego Alonso Correa Alvarez">
                                        </div>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" placeholder="Fecha Emision: 24/04/2014">
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <button type="submit" class="btn btn-primary">Eliminar Orden medica</button>
                            <button type="submit" class="btn btn-primary">Cancelar</button>
                            
                </section><!-- /.content -->
            </aside><!-- /.right-side -->