@include('layouts/app')
@include('layouts/nav')


<div class="register">

    <div class="panel panel-default">
        <div class="panel-heading">Listar Usuarios</div>
        <div class="panel-body">


            <table class="table table-responsive">
                <thead>
                <tr>
                    <th> Nombre</th>
                    <th> Email</th>
                    <th> Edad</th>
                    <th> Altura</th>
                    <th> Peso</th>
                    <th> Acciones</th>
                </tr>
                </thead>
                <tbody>

                    @foreach($users as $user)
                        <tr>
                            <th> {{ $user->name }} </th>
                            <th> {{ $user->email }} </th>
                            <th> {{ $user->edad }} </th>
                            <th> {{ $user->altura }} </th>
                            <th> {{ $user->peso }} </th>
                            <th>
                            <a href="{{ route('admin.user.destroy',$user->id) }}" class="btn btn-danger"
                               onclick="return confirm('¿Seguro desea eliminarlo?')">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>
                            <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-success">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                            </a>
                            <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-warning">
                                <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                            </th>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>





</div>