<aside class="right-side">                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sistema de Fichas Medicas Electronicas
            <small>Actualizar FCE</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Editar FCE</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Actualizar FCE</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form role="form">
                    <!-- text input -->
                     <div class="form-group">
                        <div class="form-group">
                        <label>ID del docuemnto</label>
                        <input type="text" class="form-control" placeholder="Id del documento a editar" />
                    </div>
                    <div class="form-group">
                        <label>Paciente</label>
                        <input type="text" class="form-control" placeholder="Nombre o Id De Paciente"/>
                        <p class="help-block">Si el paciente no existe en el sistema, debe ingresarlo desde la seccion pacientes > agregar paciente.</p>
                        <textarea class="form-control" rows="3" placeholder="Breve Descripcion"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Vacunas</label>
                        <input type="text" class="form-control" placeholder="Vacunas" />
                    </div>
                    <div class="form-group">
                        <label>Alergias</label>
                        <input type="text" class="form-control" placeholder="Alergias" />
                    </div>
                    <div class="form-group">
                        <label>Medicamentos</label>
                        <input type="text" class="form-control" placeholder="Medicamentos" />
                    </div>
                    <div class="form-group">
                        <label>Enfermedades</label>
                        <input type="text" class="form-control" placeholder="Enfermedades" />
                    </div>
                    <div class="form-group">
                        <label>Accidentes</label>
                        <input type="text" class="form-control" placeholder="Accidentes" />
                    </div>
                    <div class="form-group">
                        <label>Operaciones</label>
                        <input type="text" class="form-control" placeholder="Operaciones" />
                    </div>    
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Observaciones</label>
                        <textarea class="form-control" rows="3" placeholder="Breve Descripcion"></textarea>
                    </div>
                    
                </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Actualizar FCE</button>
                <button type="submit" class="btn btn-primary">Cancelar</button>
            </div>  
        </div>               

    </section><!-- /.content -->
</aside><!-- /.right-side -->