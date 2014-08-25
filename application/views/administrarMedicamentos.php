<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Registrar Medicamento
                        <small>Registro de Medicamentos en Linea</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Registrar Medicamentos</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="form-group">
                        <?= form_open('administrarMedicamentos/recibirdatos')?>
                        <?php 
                            $attributes = 'class= "btn btn-info btn-flat"';
                            $id = array(
                                    'name'=> 'Id',
                                    'placeholder'=>'Ingrese el Código del Medicamento',
                                    'size' => '90',
                                    'class' => 'form-control'

                                );
                            $nombre = array(
                                    'name'=> 'Nombre',
                                    'placeholder'=> 'Ingrese el nombre del Medicamento',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $componente = array(
                                    'name'=> 'Componente',
                                    'placeholder'=>'Ingrese el Componente Activo del Medicamento',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $laboratorio = array(
                                    'name'=> 'Laboratorio',
                                    'placeholder'=>'Ingrese el Laboratorio del medicamento',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $descripcion = array(
                                    'name'=> 'Descripcion',
                                    'placeholder'=>'Ingrese una descripcion de los usos medicos del medicamento',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );                            
                        ?>
                    </div>
                    <div class="form-group">
                        <?= form_label('Id Medicamento ', 'id') ?>
                        <?=form_input($id)?>  
                    </div>
                     <div class="form-group">
                        <?= form_label('Nombre Medicamento ', 'nombre') ?>
                        <?=form_input($nombre)?>  
                    </div>
                    <div class="form-group">
                        <?= form_label('Componente Activo Medicamento ', 'componente') ?>
                        <?=form_input($componente)?>  
                    </div>
                    <div class="form-group">
                        <?= form_label('Laboratorio', 'laboratorio')?>
                        <?=form_input($laboratorio)?> 
                    </div>
                    <div class="form-group">
                        <?= form_label('Descripcion de Usos Médicos ', 'descripcion') ?>
                        <?=form_input($descripcion)?>  
                    </div>
                    <br /> 
                    <div class="box-footer">
                        <?= form_submit('btomedicamento','Añadir Medicamento', $attributes)?>
                        <?= form_submit('btomedicamento','Editar Medicamento', $attributes)?>
                        <?= form_submit('btomedicamento','Quitar Medicamento', $attributes)?>
                        <?= form_submit('btomedicamento','Cancelar', $attributes)?>                       
                        <?= form_close()?>                 
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->