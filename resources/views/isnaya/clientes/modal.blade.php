<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content mod-yellow">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span> 
                </button>
                <h4 class="modal-title" id="myModalLabel">Actualizar Clientes</h4>
            </div>
            <div class="modal-body">
                {{--creamos un alert--}}
                <div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">
                    <strong id="error"></strong>
                </div>
                {{--cremos el formulario con un id para usar ajax--}}
                {!!Form::open(['id'=>'form'])!!}
                    <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
                    <input type="hidden" id="id">
                <div class="form-group">
                    <!--Nombramos las cajas de texto igual que los campos de la bd-->
                    {!!form::label('Nombres:')!!}
                        {!!form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Escriba los nombres'])!!}
                    {!!Form::close()!!}
                </div>
                <div class="form-group">
                     <!--Nombramos las cajas de texto igual que los campos de la bd-->
                    {!!form::label('Apellidos:')!!}
                        {!!form::text('apellido',null,['id'=>'apellido','class'=>'form-control','placeholder'=>'Escriba los apellidos'])!!}
                    {!!Form::close()!!}
                </div>
                <div class="form-group">
                     <!--Nombramos las cajas de texto igual que los campos de la bd-->
                    {!!form::label('Telefono:')!!}
                        {!!form::text('telefono',null,['id'=>'telefono','class'=>'form-control','placeholder'=>'Escriba el Telefono'])!!}
                    {!!Form::close()!!}
                </div>
                <div class="form-group">
                     <!--Nombramos las cajas de texto igual que los campos de la bd-->
                    {!!form::label('Email:')!!}
                        {!!form::text('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Escriba el email'])!!}
                    {!!Form::close()!!}
                </div>
                <div class="form-group">
                     <!--Nombramos las cajas de texto igual que los campos de la bd-->
                    {!!form::label('Fax:')!!}
                        {!!form::text('fax',null,['id'=>'fax','class'=>'form-control','placeholder'=>'Escriba el fax'])!!}
                    {!!Form::close()!!}
                </div>
            </div>
            <div class="modal-footer">
                {!!link_to('#',$title ='actualizar',$attributes= ['id'=>'actualizarCliente','class'=>'btn btn-primary btn-cian'],$secure = null)!!}
            </div>      
        </div>
    </div>
</div>