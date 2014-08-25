  <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Registrar Tratamientos
                        <small>Registro de Tratamientos en Linea</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Registrar Tratamientos</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="form-group">
                        <?= form_open('administrarTratamientos/recibirdatos')?>
                        <?php 
                            $attributes = 'class= "btn btn-primary"';
                            $id = array(
                                    'name'=> 'Id',
                                    'placeholder'=>'Ingrese el Código del Tratamiento',
                                    'size' => '90',
                                    'class' => 'form-control'

                                );
                            $nombre = array(
                                    'name'=> 'Nombre',
                                    'placeholder'=> 'Ingrese el nombre del Tratamiento',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $sistema = array(
                                    'name'=> 'Sistema',
                                    'placeholder'=>'Ingrese el Sistema donde se esperan mejoras',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $descripcion = array(
                                    'name'=> 'Descripcion',
                                    'placeholder'=>'Ingrese una descripcion del tratamiento',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );                            
                        ?>
                    </div>
                    <div class="form-group">
                        <?= form_label('Id Tratamiento ', 'id') ?>
                        <?=form_input($id)?>  
                    </div>
                     <div class="form-group">
                        <?= form_label('Nombre Tratemiento ', 'nombre') ?>
                        <?=form_input($nombre)?>  
                    </div>
                    <div class="form-group">
                        <?= form_label('Sistema tratado', 'sistema') ?>
                        <?=form_input($sistema)?>  
                    </div>
                    <div class="form-group">
                        <?= form_label('Descripcion del Tratamiento ', 'descripcion') ?>
                        <?=form_input($descripcion)?>  
                    </div>
                    <br /> 
                    <div class="box-footer">
                        <?= form_submit('btotratamiento','Añadir Tratamiento', $attributes)?>
                        <?= form_submit('btotratamiento','Editar Tratamiento', $attributes)?>
                        <?= form_submit('btotratamiento','Quitar Tratamiento', $attributes)?>
                        <?= form_submit('btotratamiento','Cancelar', $attributes)?>                       
                        <?= form_close()?>   
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->