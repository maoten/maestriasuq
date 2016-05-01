@extends('layouts.app')

@section('title', 'Edición de propuesta')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-heading text-center">Registro de propuesta</div>
                    <div class="panel-body">


                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ route('estudiante.propuesta.update', [$propuesta]) }}"
                              enctype="multipart/form-data">
                            {!! csrf_field() !!}

                            <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">


                            <div class="form-group{{ $errors->has('propuesta') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Propuesta</label>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-open-file"></i></span>
                                        <input type="file" class="form-control" name="propuesta">

                                    </div>
                                    @if ($errors->has('propuesta'))
                                        <span class="help-block">
                    <strong>{{ $errors->first('propuesta') }}</strong>
                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" name="registrar">
                                        Editar
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

