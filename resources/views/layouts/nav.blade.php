<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('admin.users.create')}}">Create</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('admin.users.index')}}">Listar <span class="sr-only">(current)</span></a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrar <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('admin.users.create')}}">Crear</a></li>
                        <li><a href="{{route('admin.users.create')}}">Eliminar</a></li>
                        <li><a href="{{route('admin.users.create')}}">Modificar</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="form" method="GET"
                  action="{{ route('admin.users.index') }}" aria-describedby='search'>

                    <div class="input-group busqueda">
                        <input type="text" class="form-control" placeholder="nombre o email"
                               name="criterio"
                               aria-hidden="true">
                        <span class="input-group-addon" id="search"><span
                                    class="glyphicon glyphicon-search"></span></span>
                    </div>

            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('admin.excel.getExport') }}">Descargar</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>