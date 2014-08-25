<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Registrar Patologias
                        <small>Registro de Patologias en Linea</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Registrar Patologias</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <?= form_open('AdministrarEnfermedad/recibirdatos') ?>
                    <?php 
                            $attributes = 'class= "btn btn-primary"';
                            $id = array(
                                    'name'=> 'Id',
                                    'placeholder'=>'Ingrese el Código de Patología',
                                    'size' => '90',
                                    'class' => 'form-control'

                                );
                            $nombre = array(
                                    'name'=> 'Nombre',
                                    'placeholder'=> 'Ingrese el nombre la Patología',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $sistema = array(
                                    'name'=> 'Sistema',
                                    'placeholder'=>'Ingrese el Sistema afectado',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $sintomatologia = array(
                                    'name'=> 'Sintomatologia',
                                    'placeholder'=>'Ingrese los síntomas detectados',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );                              
                        ?>
                    <div class="form-group">
                        <?= form_label('Id Patología ', 'id') ?>
                        <?=form_input($id)?>  
                    </div>
                     <div class="form-group">
                        <?= form_label('Nombre Patología Detectada ', 'nombre') ?>
                        <?=form_input($nombre)?>  
                    </div>
                    <div class="form-group">
                        <?= form_label('Sistema Afectado', 'sistema') ?>
                        <?=form_input($sistema)?>  
                    </div>
                    <div class="form-group">
                        <?= form_label('Sintomatología', 'sintomatologia')?>
                        <?=form_input($sintomatologia)?> 
                    </div>
                    <br /> 
                    <div class="box-footer">
                        <?= form_submit('btopatologia','Añadir Patología', $attributes)?>
                        <?= form_submit('btopatologia','Editar Patología', $attributes)?>
                        <?= form_submit('btopatologia','Quitar Patología', $attributes)?>
                        <?= form_submit('btopatologia','Cancelar', $attributes)?>                                                                
                    </div>
                    <?= form_close()?>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->