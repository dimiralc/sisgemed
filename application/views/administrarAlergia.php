<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Registrar Alergias
                        <small>Registro de Alergias en Linea</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Registrar Alergias</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <?= form_open('AdministrarAlergia/recibirdatos') ?>
                    <?php 
                            $attributes = 'class= "btn btn-primary"';
                            $id = array(
                                    'name'=> 'Id',
                                    'placeholder'=>'Ingrese el Código de Alergia',
                                    'size' => '90',
                                    'class' => 'form-control'

                                );
                            $nombre = array(
                                    'name'=> 'Nombre',
                                    'placeholder'=> 'Ingrese el nombre la Alergia',
                                    'size' => '90',
                                    'class' => 'form-control'
                                );
                            $alergeno = array(
                                    'name'=> 'Alergeno',
                                    'placeholder'=>'Ingrese el Alergeno detectado',
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
                        <?= form_label('Id Alergia ', 'id') ?>
                        <?=form_input($id)?>  
                    </div>
                     <div class="form-group">
                        <?= form_label('Nombre Alergia ', 'nombre') ?>
                        <?=form_input($nombre)?>  
                    </div>
                    <div class="form-group">
                        <?= form_label('Alérgeno Detectado', 'alergeno') ?>
                        <?=form_input($alergeno)?>  
                    </div>
                    <div class="form-group">
                        <?= form_label('Sintomatología', 'sintomatologia')?>
                        <?=form_input($sintomatologia)?> 
                    </div>
                    <br /> 
                    <div class="box-footer">
                        <?= form_submit('btoalergia','Añadir Alergia', $attributes)?>
                        <?= form_submit('btoalergia','Editar Alergia', $attributes)?>
                        <?= form_submit('btoalergia','Quitar Alergia', $attributes)?>
                        <?= form_submit('btoalergia','Cancelar', $attributes)?>                                                                
                    </div>
                    <?= form_close()?>
                </section>
            </aside>