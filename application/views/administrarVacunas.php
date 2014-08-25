<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Registrar Vacunas
                        <small>Registro de Vacunas en Linea</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Registrar Vacunas</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="form-group">
                        <?= form_open('administrarVacunas/recibirdatos')?>
                        <?php 
                            $attributes = 'class= "btn btn-primary"';
                            $id = array(
                                    'name'=> 'Id',
                                    'placeholder'=>'Ingrese el Código del Vacuna',
                                    'size' => '90',
                                    'class' => 'form-control'

                                );
                            $nombre = array(
                                    'name'=> 'Nombre',
                                    'placeholder'=> 'Ingrese el nombre del Vacuna',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $zona = array(
                                    'name'=> 'Zona',
                                    'placeholder'=>'Ingrese la zona de aplicación',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $efectos = array(
                                    'name'=> 'Efectos',
                                    'placeholder'=>'Ingrese los efectos esperados',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );                            
                        ?>
                    </div>
                    <div class="form-group">
                        <?= form_label('Id Vacuna ', 'id') ?>
                        <?=form_input($id)?>  
                    </div>
                     <div class="form-group">
                        <?= form_label('Nombre Vacuna ', 'nombre') ?>
                        <?=form_input($nombre)?>  
                    </div>
                    <div class="form-group">
                        <?= form_label('Zona de Aplicación', 'zona') ?>
                        <?=form_input($zona)?>  
                    </div>
                    <div class="form-group">
                        <?= form_label('Efectos esperados ', 'efectos') ?>
                        <?=form_input($efectos)?>  
                    </div>
                    <br /> 
                    <div class="box-footer">
                        <?= form_submit('btovacunas','Añadir Vacuna', $attributes)?>
                        <?= form_submit('btovacunas','Editar Vacuna', $attributes)?>
                        <?= form_submit('btovacunas','Quitar Vacuna', $attributes)?>
                        <?= form_submit('btovacunas','Cancelar', $attributes)?>                       
                        <?= form_close()?>                
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->