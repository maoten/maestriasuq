@extends('layouts.app')

@section('title', 'Registro de usuario')

@section('content')
                                        <div class="container">
                                        <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                        <div class="panel panel-default">
                                        <div class="panel-heading text-center">Registro de usuario</div>
                                        <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/registrar') }}">
                                        {!! csrf_field() !!}
                                        
                                        <div class="form-group">
                                        <label class="col-md-4 control-label">Nombre</label>
                                        
                                        <div class="col-md-6">
                                        <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="nombre" value="{{ old('name') }}" placeholder="Leonardo Correa">

                                        </div>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label class="col-md-4 control-label">Cédula</label>
                                        
                                        <div class="col-md-6">
                                        <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                                        <input type="text" class="form-control" name="cedula" value="{{ old('cedula') }}" placeholder="1098626573">
  
                                        </div>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label class="col-md-4 control-label">Correo electrónico</label>
                                        
                                        <div class="col-md-6">
                                        <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="lcorrea@uniquindio.edu.co">
                                        
                                        </div>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label class="col-md-4 control-label">Teléfono</label>
                                        
                                        <div class="col-md-6">
                                        <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" placeholder="3007645231">

                                        </div>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label class="col-md-4 control-label">Profesión</label>
                                        
                                        <div class="col-md-6">
                                        <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-star-empty"></i></span>
                                        <input type="text" class="form-control" name="profesion" value="{{ old('profesion') }}" placeholder="Ingeniero de sistemas y computación">

                                        </div>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label class="col-md-4 control-label">Universidad</label>
                                        
                                        <div class="col-md-6">
                                        <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                                        <input type="text" class="form-control" name="universidad" value="{{ old('universidad') }}" placeholder="Universidad del Quindío">
                                        
                                        </div>
                                        </div>
                                        </div>
                                        
                                        <!-- se requiere un generador de contraseñas aleatorias, luego cuando el usuario
                                        ingrese el mismo cambiara su contraseña -->
                                        
                                        <div class="form-group">
                                        <label class="col-md-4 control-label">Contraseña</label>
                                        
                                        <div class="col-md-6">
                                        <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" name="password" placeholder="*******">
                                        
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-success">
                                        </i>Registrar
                                        </button>
                                        </div>
                                        </div>
                                        </form>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
@endsection