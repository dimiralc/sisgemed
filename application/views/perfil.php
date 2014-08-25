<aside class="right-side">                
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>Peril <small>Usuario Registrado</small></h1>
    <ol class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Perfil</li>
    </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Hola, Usuario Registrado</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <form role="form">
                <!-- text input -->
                <div class="form-group">
                    <label>Rut</label>
                    <input type="text" class="form-control" placeholder="17.270.747-5" disabled />
                </div>
                <div class="form-group">
                    <label>Primer Nombre</label>
                    <input type="text" class="form-control" placeholder="Hernan" />
                </div>
                 <div class="form-group">
                    <label>Segundo Nombre</label>
                    <input type="text" class="form-control" placeholder="Alonso" />
                </div>
                <div class="form-group">
                    <label>Primer Apellido</label>
                    <input type="text" class="form-control" placeholder="Diaz" />
                </div>
                <div class="form-group">
                    <label>Segundo Apellido</label>
                    <input type="text" class="form-control" placeholder="Alcantara" />
                </div>
                <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" class="form-control" placeholder="123-4568" />
                </div>    
                <!-- textarea -->
                <div class="form-group">
                    <label>Direccion</label>
                    <textarea class="form-control" rows="3" placeholder="Breve Descripcion"></textarea>
                </div>
                <div class="form-group">
                    <label>Correo ELectronico</label>
                    <input type="text" class="form-control" placeholder="u.registrado@sisgemed.cl" />
                </div> 
                <div class="form-group">
                    <label>Contraseña Actual</label>
                    <input type="password" class="form-control" placeholder="contraseña actual" />
                </div>
                <div class="form-group">
                    <label>Contraseña Nueva</label>
                    <input type="password" class="form-control" placeholder="nueva contraseña"/>
                </div>
                <!-- radio -->
                <div class="form-group"> 
                    Genero
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          masculino
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            femenino
                        </label>
                    </div>                                            
                </div>

                <!-- select -->
                <div class="form-group">
                    <label>Pais</label>
                    <select class="form-control">
                        <option selected>Chile</option>
                        <option>Peru</option>
                        <option>Colombia</option>
                        <option>España</option>
                        <option>Costa Rica</option>
                    </select>
                </div>                                        
            </form>
        </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="submit" class="btn btn-primary">Cancelar</button>
            </div>                            
    </section><!-- /.content -->
</aside><!-- /.right-side -->
