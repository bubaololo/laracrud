@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Задачи </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form  method="POST" action="{{ route('save-task') }}">
                            @csrf
                        
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Название задачи</label>
                        
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                        
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="text" class="col-md-4 col-form-label text-md-end">текст задачи</label>
                        
                                <div class="col-md-6">
                                    <input id="text" type="text" class="form-control @error('name') is-invalid @enderror" name="text"
                                        value="{{ old('text') }}" autocomplete="text" autofocus>
                        
                                    @error('text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class=" mb-3">
                                <label for="priority" class="col-md-4 col-form-label text-md-end">Приоритет</label>
                                
                            <select class="form-select" name="priority" id="priority">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        

                        

                        
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Добавить задачу
                                    </button>
                                </div>
                            </div>
                        </form>

                            {{-- @foreach ($data as $user)
                                <div class="alert alert-info">
                                    <h3>{{ $user->name }}</h3>
                                </div>
                            @endforeach --}}
                        <table class="table">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <thead>
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">#</th>
                                    <th scope="col">Название задачи</th>
                                    <th scope="col">Задача</th>
                                    <th scope="col">Приоритет</th>
                                    <th scope="col">del</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                
                                <tr>
                                    {{-- <th scope="row">{{ $task->id }}</th> --}}
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->text }}</td>
                                    <td>{{ $task->priority }}</td>
                                    
                                    <td><a href="{{ route('delete-task', $task->id) }}" class="btn btn-light">Удалить</a></td>
                                </tr>
                                
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
