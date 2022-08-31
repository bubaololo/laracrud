@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> Заголовки </div>

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

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Добавить задачу
                                    </button>
                                </div>
                            </div>
                        </form>

                        <table class="table table-hover">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <thead>
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">id</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">Задача</th>
                                    <th scope="col">Приоритет</th>
                                    <th scope="col">del</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)
                                
                                <tr>
                                    {{-- <th scope="row">{{ $page->id }}</th> --}}
                                    <td>{{ $page->id }}</td>
                                    <td>{{ $page->url }}</td>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ $page->description }}</td>
                                    
                                    <td><a href="{{ route('pages.update', $page->id) }}" class="btn btn-light">обновить</a></td>
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
