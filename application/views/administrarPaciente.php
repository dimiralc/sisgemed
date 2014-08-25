<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Pacientes
                        <small>Eliminar Pacietne</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=$url_base;?>index"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Eliminar Paciente</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="input-group input-group-sm">
                        <?= form_open('administrarPacientes/buscarPaciente')?>
                        <?php
                            $attributes = 'class="btn btn-info btn-flat"';                            
                            $buscar = array(
                                    'name'=> 'Rut',
                                    'placeholder'=>'Ingrese el Rut del paciente que desea eliminar, sin puntos ni guion',
                                    'size' => '80',
                                    'class' => 'form-control'
                                );                          
                        ?>
                        <span class="input-group-btn">
                            <?= form_input($buscar)?>  
                            <?= form_submit('btoPaciente','Buscar Rut', $attributes)?>
                        </span>
                    </div>
                    <br>
                   
                    <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Datos del Paciente</h3>
                                </div>
                                <div class="box-body">
                                    <?php
                                     
                                    if($pacientes){
                                        foreach ($pacientes -> result() as $paciente){ ?>
                                    <div class="col-xs-2">
                                            <small>Rut</small>
                                        </div>
                                        <div class="col-xs-2">
                                            <small>Nombre</small>
                                        </div>
                                        <div class="col-xs-2">
                                            <small>Paterno</small>
                                        </div>
                                        <div class="col-xs-2">
                                            <small>Materno</small>
                                        </div>
                                        <div class="col-xs-3">
                                            <small>Preexistencias</small>
                                        </div>
                                    <br>
                                    <div class="row">  
                                        <div class="col-xs-2">
                                            <input type="text" class="form-control" name="infoRut"  value="<?php echo $paciente->rut;?>">
                                        </div>
                                        <div class="col-xs-2">
                                            <input type="text" class="form-control" placeholder="<?php echo $paciente->nombre;?>" disabled="true">
                                            
                                        </div>
                                        <div class="col-xs-2">
                                           
                                            <input type="text" class="form-control" placeholder="<?php echo $paciente->paterno;?>" disabled="true">                                            
                                        </div>
                                        <div class="col-xs-2">
                                           
                                            <input type="text" class="form-control" placeholder="<?php echo $paciente->materno;?>" disabled="true">                                            
                                        </div>
                                        <div class="col-xs-3">
                                            
                                            <input type="text" class="form-control" placeholder="<?php echo $paciente->enfermedades;?>" disabled="true">                                            
                                        </div>
                                    </div>
                                        <?php }
                                        }else{
                                            echo '
                        <div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <b>Advertencia</b> Se dispone a eliminar un paciente del sistema. Esta informacion
                        es irrecuperable desde su sesión, y solo podra solicitar a los administradores del sistema
                        la recuperacion de dicha información, o bien, ingresar los datos del paciente nuevamente.
                        </div>';
                                        } ?>
                                    
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <?= form_submit('btoPaciente','Eliminar Paciente', $attributes)?>
                            <?= form_submit('btoPaciente','Cancelar', $attributes)?>
                            <?= form_close()?>
                </section>
            </aside>