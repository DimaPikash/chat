
@extends('layouts.app')

@section('content')
    <script>var user='{{$user}}';</script>
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>Чат 1.0</h2>
                        <div id="status"></div>
                        <div id="input" style="width: 100%; height: 300px; border: 1px solid gray; margin-bottom:10px; overflow: auto"></div>
                        <input type="text" id="message" />
                        <input type="button" id="send" value="Отправить" />
                        <input type="button" id="exit" value="Покинуть чат" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

