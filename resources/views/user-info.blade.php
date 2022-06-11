@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">

                            <tbody>
                               
                                
                                <tr>
                                    <td>Айдишник:</td>
                                    <td >{{ $user->id }}</td>
                                </tr>
                                <tr>
                                    <td>Имя:</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Почта:</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>Создан:</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>Админ?:</td>
                                    <td>{{ $user->is_admin }}</td>
                                </tr>
                                <tr>
                                    <a href="{{ route('user-delete', $user->id) }}" class="btn btn-danger">Удалить пользователя</a>
                                </tr>
                                

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
