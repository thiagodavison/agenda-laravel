@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <h1>Cadastro de Agendas</h1>
                <div class="panel-body">

                    <div class="row">
                        <form action="calendar/add" method="post">
                            {{csrf_field()}}
                            <input type="text" name="title" value="{{old('title')}}" placeholder="Agenda de negócios..."/>
                            <textarea name="description">{{old('description')}}</textarea>
                            <button name="send" class="btn btn-primary">Calendário +</button>
                        </form>
                    </div>
                    @if($errors)
                        <div class="row">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
