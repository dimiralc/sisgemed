<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">
<div class="row">
    <div id="breadcrumb" class="col-md-12">
            <ol class="breadcrumb">
                    <li><a href="<?=$url_base;?>index">Inicio</a></li>
                    <li><a href="<?=$url_base;?>administrarPacientes/registrarPaciente">Registrar nuevo Paciente</a></li>                    
            </ol>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12">
            <div class="box">
                    <div class="box-header">
                            <div class="box-name">
                                    <i class="fa fa-search"></i>
                                    <span>Registrar un nuevo Paciente</span>
                            </div>
                            <div class="box-icons">
                                    <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="expand-link">
                                            <i class="fa fa-expand"></i>
                                    </a>
                                    <a class="close-link">
                                            <i class="fa fa-times"></i>
                                    </a>
                            </div>
                            <div class="no-move"></div>
                    </div>
                    <div class="box-content">
                            <h4 class="page-header">Formulario de Registro de Pacientes</h4>
                            <?= form_open('administrarPacientes/recibirdatos')?>
                        <?php 
                            $attributes = 'class= "btn btn-primary btn-label-left"';
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
                            <form class="form-horizontal">
                                    <div class="form-group">
                                            <label class="col-sm-2 control-label">Run del Paciente</label>
                                            <div class="col-sm-4">
                                                    <?=form_input($rut)?>                                                       
                                            </div>
                                            <label class="col-sm-2 control-label">Primer Nombre</label>
                                            <div class="col-sm-4">
                                                <?=form_input($nombre)?>   
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-sm-2 control-label">Apellido Paterno</label>
                                            <div class="col-sm-4">
                                                    <?=form_input($paterno)?>   
                                            </div>
                                            <label class="col-sm-2 control-label">Apellido Materno</label>
                                            <div class="col-sm-4">
                                                    <?=form_input($materno)?>   
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-sm-2 control-label">Teléfono</label>
                                            <div class="col-sm-4">
                                                    <?=form_input($telefono)?>   
                                            </div>
                                            <label class="col-sm-2 control-label">Dirección</label>
                                            <div class="col-sm-4">
                                                    <?=form_input($direccion)?>   
                                            </div>
                                    </div>
                                <hr>
                                    <div class="form-group">
                                        <div class="col-sm-5">
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
                                        <div class="col-sm-5">
                                            <fieldset>
                                                <legend>Género</legend>
                                                <input type="radio" name="genero" value="Masculino"> Masculino
                                                <br>  
                                                <input type="radio" name="genero" value="Femenino"> Femenino                                    
                                            </fieldset>     
                                        </div>
                                    </div> 
                                <div class="col-sm-8">
                                    <div class="form-group">
                                       <legend>Nivel de Estudios</legend>
                                       <select class="form-control" name="estudios" id="estudios">
                                           <option value="Básico">Basica</option>
                                           <option value="Medio">Media</option>
                                           <option value="Técnico Superior">Tecnico Profesional</option>
                                           <option value="Universitario">Superior</option>
                                           <option value="Postgrado">Postgrado</option>
                                       </select>
                                   </div>
                                </div>
                                <div class="col-sm-8">
                                   <div class="form-group">
                                       <legend>Enfermedades Preexistentes</legend>
                                       <select class="form-control populate placeholder" name="enfermedades"    >
                                           <option value="Alergias">Alergias</option>
                                           <option value="Enfermedades Cardiacas">E. Cardiacas</option>
                                           <option value="Enfermedades Cronicas">E. Cronicas</option>
                                           <option value="Enfermedades Congenitas">E. Congenitas</option>
                                           <option value="Enfermedades Degenerativas">E. Degenerativas</option>
                                       </select>
                                   </div> 
                                </div>  
                                
                                <div class="form-group">
                                        <div class="col-sm-offset-8 col-sm-2">
                                              <?= form_submit('btoPaciente','Añadir Paciente', $attributes)?>                        
                                        </div>
                                        <div class="col-sm-2">
                                                <?= form_submit('btoPaciente','Cancelar', $attributes)?>  
                                        </div>                                            
                                </div>  
                                <div class="clearfix"></div>    
                            </form>
                    </div>
                </div>
        </div>
    </div>
</div>

