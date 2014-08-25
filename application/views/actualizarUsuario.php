<aside class="right-side">                
    <section class="content-header">
        <h1>
            Registro Profesionales de la Salud
            <small>Actualizar Profesional</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Actualizar Profesional</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Actualizar Profesional</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="input-group input-group-sm">
            <input type="text" class="form-control" placeholder="Ingrese el rut o id del personal a buscar">
            <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="button">Buscar</button>
            </span>
            <br>
        </div><!-- /input-group -->
            <form role="form">
                <!-- text input -->
                <div class="form-group">
                    <label>Id Profesional</label>
                    <input type="text" class="form-control" placeholder="Id Profesional" disabled/>
                </div>
                <div class="form-group">
                    <label>Primer Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" />
                </div>
                <div class="form-group">
                    <label>Segundo Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre 2" />
                </div>
                <div class="form-group">
                    <label>RUN</label>
                    <input type="text" class="form-control" placeholder="RUN" />
                </div>
                <div class="form-group">
                    <label>Telefono de contacto 1</label>
                    <input type="text" class="form-control" placeholder="Ingrese solo numeros" />
                </div>
                <div class="form-group">
                    <label>Telefono de contacto 2</label>
                    <input type="text" class="form-control" placeholder="Ingrese solo numeros" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="correo electronico" />
                </div>
                <div class="form-group">
                    <label>Especialidad</label>
                    <input type="text" class="form-control" placeholder="Ingrese especialidad" />
                </div>    
                <!-- textarea -->
                <div class="form-group">
                    <label>Direccion</label>
                    <textarea class="form-control" rows="3" placeholder="Breve Descripcion"></textarea>
                </div>
                <div class="form-group">
                    <label>Nivel de Privilegio</label>
                    <select class="form-control">
                        <option>Administrador</option>
                        <option>Privilegios de Ingreso</option>
                        <option>Privilegios de Modificacion</option>
                        <option>Privilegios de Visualizacion</option>
                        <option>Sin privilegios</option>
                    </select>
                </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Actualizar Profesional</button>
            <button type="submit" class="btn btn-primary">Cancelar</button>
        </div>  
    </div>                   
    </section>
</aside>