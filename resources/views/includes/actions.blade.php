@if (Request::path() == 'home')
    <div class="btn-group">
        <a href="https://demo.fusioninvoice.com/clients" class="btn btn-default  active ">All</a>
        <a href="https://demo.fusioninvoice.com/clients?status=active" class="btn btn-default ">Active</a>
        <a href="https://demo.fusioninvoice.com/clients?status=inactive" class="btn btn-default ">Inactive</a>
    </div>
    <a href="https://demo.fusioninvoice.com/clients/create" class="btn btn-primary btn-margin-left"><i class="fa fa-plus"></i> New</a>
@elseif(Request::path() == 'clientes')
    <div class="btn-group">
        <a href="https://demo.fusioninvoice.com/clients" class="btn btn-default  active ">Todos</a>
        <a href="https://demo.fusioninvoice.com/clients?status=active" class="btn btn-default ">Activos</a>
        <a href="https://demo.fusioninvoice.com/clients?status=inactive" class="btn btn-default ">Inactivos</a>
    </div>
    <a href="{{ route('crearcliente') }}" class="btn btn-primary btn-margin-left"><i class="fa fa-plus"></i> Nuevo</a>
@elseif(Request::path() == 'clientes/crearcliente')
    <a href="{{ route('crearcliente') }}" class="btn btn-primary btn-margin-left"> Guardar</a>
@else
{{ Request::path() }}
@endif