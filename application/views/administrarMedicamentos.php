<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">
<div class="row">
    <div id="breadcrumb" class="col-md-12">
            <ol class="breadcrumb">
                    <li><a href="<?=$url_base;?>index">Inicio</a></li>
                    <li><a href="<?=$url_base;?>administrarMedicamentos/index">Registrar nuevo Medicamento</a></li>                    
            </ol>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12">
            <div class="box">
                    <div class="box-header">
                            <div class="box-name">
                                    <i class="fa fa-search"></i>
                                    <span>Registrar un nuevo Medicamento</span>
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
                            <h4 class="page-header">Formulario de Registro de Tratamientos</h4>
                             <?= form_open('administrarMedicamentos/recibirdatos')?>
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
                            <form class="form-horizontal">
                                    <div class="form-group">
                                            <label class="col-sm-5 control-label">Identificacion del Tratamiento</label>
                                            <div class="col-sm-4">
                                                    <?=form_input($id)?>                                                       
                                            </div>
                                            <label class="col-sm-5 control-label">Nombre del Tratamiento</label>
                                            <div class="col-sm-4">
                                                <?=form_input($nombre)?>   
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-sm-5 control-label">Sistema donde se espera mejora</label>
                                            <div class="col-sm-4">
                                                    <?=form_input($sistema)?>   
                                            </div>
                                            <label class="col-sm-5 control-label">Indicaciones / Descripción</label>
                                            <div class="col-sm-4">
                                                    <?=form_input($descripcion)?>   
                                            </div>
                                    </div>
                                
                                <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2">
                                              <?= form_submit('btotratamiento','Añadir Tratamiento', $attributes)?>                       
                                        </div>
                                        <div class="col-sm-2">
                                               <?= form_submit('btotratamiento','Editar Tratamiento', $attributes)?>  
                                        </div> 
                                        <div class="col-sm-2">
                                                <?= form_submit('btotratamiento','Quitar Tratamiento', $attributes)?>
                                        </div>
                                    <div class="col-sm-2">
                                                <?= form_submit('btotratamiento','Cancekar', $attributes)?>
                                        </div>
                                </div>  
                                <div class="clearfix"></div>    
                            </form>
                    </div>
                </div>
        </div>
    </div>
</div>

