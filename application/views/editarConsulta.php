<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Sistema de Consultas
                        <small>Actualizar Consulta</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Actualizar Datos</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Editar Consulta</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <form role="form">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Id del docuemnto</label>
                                <input type="text" class="form-control" placeholder="64136433846" disabled/>
                            </div>
                            <div class="form-group">
                                <label>Rut</label>
                                <br>
                                <label>Si el rut no esta en el sistema, debe ingresar al nuevo paciente</label>
                                <input type="text" class="form-control" placeholder=""/>
                            </div>
                            <div class="form-group">
                                <label>Primer Nombre</label>
                                <input type="text" class="form-control" placeholder="Primer Nombre" disabled/>
                            </div>
                            <div class="form-group">
                                <label>Primer Apellido</label>
                                <input type="text" class="form-control" placeholder="Primer Apelldo" disabled/>
                            </div>
                            <div class="form-group">
                                <label>Motivo de la Consulta</label>
                                <input type="text" class="form-control" placeholder="Ingrese motivo" />
                            </div>
                            <div class="form-group">
                                <label>Peso (Kg)</label>
                                <input type="text" class="form-control" placeholder="Peso en kilos" />
                            </div> 
                            <div class="form-group">
                                <label>Estatura (cm)</label>
                                <input type="text" class="form-control" placeholder="Estatura en Cms" />
                            </div>     
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Enfermedad actual</label>
                                <textarea class="form-control" rows="3" placeholder="Breve Descripcion"></textarea>
                            </div>
                            <!-- radio -->
                            <div class="form-group"> 
                                Posee Habitos (tabaquismo, alcoholismo, drogas)
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                        Si
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        No
                                    </label>
                                </div>                                            
                            </div>
                            <div class="form-group">
                                <label>Intervenciones Quirurgicas</label>
                                <input type="text" class="form-control" placeholder="Indique acciones pertinentes"/>
                            </div>
                            <div class="form-group">
                                <label>Reposo Indicado</label>
                                <input type="text" class="form-control" placeholder="Reposo indicado"/>
                            </div>
                            <div class="form-group">
                                <label>Medicamentos</label>
                                <input type="text" class="form-control" placeholder="Medicamentos indicados"/>
                                <p class="help-block">Puede añadir medicamentos en la seccion administrar datos y asi utilizarlos posteriormente. Esto no reemplaza la receta medica.</p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Adjuntar Archivo</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Utilice éste campo para adjuntar documentos digitales relevantes a la consulta médica que se está efectuando. Dichos documentos pueden ser radiografías, resultados de laboratorio, etc.</p>
                            </div>
                            <div class="form-group">
                                <label>Posible Diagnostico</label>
                                <p class="help-block">Puede ingresar un nuevo diagnostico en la seccion administrar datos y asi utilizarlos posteriormente. Si no lo desea, registre un diagnostico como texto.</p>
                                <input type="text" class="form-control" placeholder="Diagnostico" />
                            </div> 
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Tratamiento</label>
                                <p class="help-block">Puede ingresar un nuevo tratamiento en la seccion administrar datos y asi utilizarlos posteriormente. Si no lo desea, registre un diagnostico como texto.</p>
                                <textarea class="form-control" rows="3" placeholder="Breve Descripcion"></textarea>
                            </div>
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <label>Proximo Control</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                </div><!-- /.input group -->
                            </div><!-- /.form group -->
                        </form>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Editar Consulta Medica</button>
                        <button type="submit" class="btn btn-primary">Cancelar</button>
                    </div>  
                </div>                                 
                </section><!-- /.content -->
            </aside><!-- /.right-side -->