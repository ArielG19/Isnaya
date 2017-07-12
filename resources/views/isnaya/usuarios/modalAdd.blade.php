<div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content mod-yellow">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span> 
                </button>
                <h4 class="modal-title" id="myModalLabel">Agregar Usuario</h4>
            </div>
            <div class="modal-body">
                {{--creamos un alert--}}
                <div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">
                    <strong id="error"></strong>
                </div> 
                {!!Form::open(['id'=>'form'])!!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                <div class="form-group">
                    <!--Nombramos las cajas de texto igual que los campos de la bd-->
                    {!!form::label('Nombres:')!!}
                    {!!form::text('nombre',null,['id'=>'addNombre','class'=>'form-control','placeholder'=>'Escriba los nombres'])!!}
                </div>
                <div class="form-group">
                    <!--Nombramos las cajas de texto igual que los campos de la bd-->
                    {!!form::label('Cargo:')!!}
                    {!!form::text('cargo',null,['id'=>'addCargo','class'=>'form-control','placeholder'=>'Escriba un cargo'])!!}
                </div>

                <div class="form-group">
                    {!!form::label('Email:')!!}
                    {!!form::text('email',null,['id'=>'addEmail','class'=>'form-control','placeholder'=>'Escriba el email'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('Contraseña:')!!}
                    {!!Form::password('password',['id'=>'addPassword','class' => 'form-control','placeholder'=> '*******','required'])!!}
                </div>

                <div class="form-group">
                    {!!Form::label('Tipo')!!}
                    {!!Form::select('type',[''=>'Seleccione un tipo','admin'=>'administrador','usuario'=>'Usuario'],null,['id'=>'addTipo','class'=>'form-control'])!!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                {!!link_to('#',$title ='Guardar',$attributes= ['id'=>'guardarUsuario','class'=>'btn btn-primary btn-cian'],$secure = null)!!}
            </div>      
        </div>
    </div>
</div>