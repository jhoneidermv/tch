@include('layouts/app')
@include('layouts/nav')
<div class="register">

    <div class="panel panel-primary">
        <div class="panel-heading">Editar Usuario</div>
        <div class="panel-body">

            <form class="form-horizontal" method="POST" role="form" enctype="multipart/form-data" action="{{route('admin.user.update', $user)}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">



                <div class="form-group">
                    <label class="control-label col-xs-3">Nombre:</label>
                    <div class="col-xs-7">
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre" value="{{$user->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Email:</label>
                    <div class="col-xs-7">
                        <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{$user->email}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-3">Información:</label>
                    <div class="col-xs-2">
                        <input name="edad" type="text" class="form-control" placeholder="Edad" value="{{$user->edad}}">
                    </div>
                    <div class="col-xs-2">
                        <input name="altura" type="text" class="form-control" placeholder="Altura" value="{{$user->altura}}">
                    </div>
                    <div class="col-xs-2">
                        <input name="peso" type="text" class="form-control" placeholder="Peso" value="{{$user->peso}}">
                    </div>
                </div>

                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" value="Enviar">
                        <input type="reset" class="btn btn-default" value="Limpiar">
                    </div>
                </div>
            </form>

        </div>
    </div>



</div>