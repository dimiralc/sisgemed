<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">
<aside class="right-side">                
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Pacientes
                    <small>Agregar Paciente</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                    <li class="active">Agregar Paciente</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Agregar Paciente</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <!-- Fromulario para agregar un paciente en el sistema -->
                        <div class="form-group">
                        <?= form_open('administrarPacientes/recibirdatos')?>
                        <?php 
                            $attributes = 'class= "btn btn-info btn-flat"';
                            $rut = array(
                                    'name'=> 'Rut',
                                    'placeholder'=>'Ingrese el rut del paciente',
                                    'size' => '90',
                                    'class' => 'form-control'

                                );
                            $nombre = array(
                                    'name'=> 'Nombre',
                                    'placeholder'=> 'Ingrese el nombre del paciente',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $paterno = array(
                                    'name'=> 'Paterno',
                                    'placeholder'=>'Ingrese el apellido paterno del paciente',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $materno = array(
                                    'name'=> 'Materno',
                                    'placeholder'=>'Ingrese el apellido materno del paciente',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $telefono = array(
                                    'name'=> 'Telefono',
                                    'placeholder'=>'Ingrese el telefono del paciente',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $direccion = array(
                                    'name'=> 'Direccion',
                                    'placeholder'=>'Ingrese la Direccion del paciente',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                        ?>
                        <!-- text input -->
                            <div class="form-group">
                                <?= form_label('Rut ', 'rut') ?>
                                <br>
                                <?=form_input($rut)?>                                
                            </div>
                            <div class="form-group">
                                <?= form_label('Nombre ', 'nombre') ?>
                                <br>
                                <?=form_input($nombre) ?>                                                              
                            </div>
                            <div class="form-group">
                                <?= form_label('Paterno ', 'paterno') ?>
                                <br>
                                <?=form_input($paterno) ?>  
                            </div>
                            <div class="form-group">
                                <?= form_label('Materno ', 'materno') ?>
                                <br>
                                <?=form_input($materno)?>                                
                            </div>
                            <div class="form-group">
                                <?= form_label('Telefono ', 'telefono') ?>
                                <br>
                                <?=form_input($telefono)?>  
                            </div>    
                            <!-- textarea -->
                            <div class="form-group">
                                <?= form_label('Direccion ', 'direccion') ?>
                                <br>
                                <?=form_input($direccion)?>  
                            </div>
                            
                            <!-- checkbox -->
                            <div class="form-group"> 
                                <fieldset>
                                    <legend>Estado Civil</legend>
                                    <input type="radio" name="ecivil" value="Soltero"> Soltero
                                    <br>  
                                    <input type="radio" name="ecivil" value="Casado"> Casado
                                    <br>
                                    <input type="radio" name="ecivil" value="Viudo"> Viudo
                                    <br>
                                    <input type="radio" name="ecivil" value="Separado"> Separado
                                </fieldset>                                        
                            </div>
                            <div class="form-group"> 
                                <fieldset>
                                    <legend>Género</legend>
                                    <input type="radio" name="genero" value="Masculino"> Masculino
                                    <br>  
                                    <input type="radio" name="genero" value="Femenino"> Femenino                                    
                                </fieldset>                                        
                            </div>                                          
                            <!-- select -->
                            <div class="form-group">
                                <label>Nivel de Estudios</label>
                                <select class="form-control" name="estudios" id="estudios">
                                    <option value="Básico">Basica</option>
                                    <option value="Medio">Media</option>
                                    <option value="Técnico Superior">Tecnico Profesional</option>
                                    <option value="Universitario">Superior</option>
                                    <option value="Postgrado">Postgrado</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Enfermedades Preexistentes</label>
                                <select class="form-control" name="enfermedades" id="enfermedades">
                                    <option value="Alergias">Alergias</option>
                                    <option value="Enfermedades Cardiacas">E. Cardiacas</option>
                                    <option value="Enfermedades Cronicas">E. Cronicas</option>
                                    <option value="Enfermedades Congenitas">E. Congenitas</option>
                                    <option value="Enfermedades Degenerativas">E. Degenerativas</option>
                                </select>
                            </div>                       
                        </div><!-- /.box-body -->
                      </div>
                    <div class="box-footer">
                        <?= form_submit('btoPaciente','Añadir Paciente', $attributes)?>
                        <?= form_submit('btoPaciente','Cancelar', $attributes)?>
                    </div>  
                    <?= form_close()?>
                </div>               

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
</div>