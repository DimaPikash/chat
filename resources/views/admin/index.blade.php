@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <td>Пользователь</td>
                <td>email</td>
                <td>Статус</td>
                <td>Действие</td>
            </tr>

            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->active}}</td>
                    <td>
                        @if($user->role=='admin')
                            Админ
                        @elseif($user->active==true)
                            <form method="post" action="userManage/{{$user->id}}">
                                <button name="status" value="0" class="btn btn-danger">Заблокировать</button>
                            </form>
                        @else
                            <form method="post" action="userManage/{{$user->id}}">
                                <button name="status" value="1" class="btn btn-success">Разблокировать</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    @stop