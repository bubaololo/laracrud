@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> Заголовки </div>

                        <table class="table">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <thead>
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">id</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">Текст</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)
                                    <tr>
                                        {{-- <th scope="row">{{ $page->id }}</th> --}}
                                        <td>{{ $page->id }}</td>
                                        <td>{{ $page->url }}</td>
                                        <td>
                                            <div class="col-8">
                                                <div class="row">
                                                    <div class="row m-3"> {{ $page->title }} </div>
                                                </div>
                                                    <div class="row">
                                                        <form class="w-100" action="{{ route('pages.store', $page->id) }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input class="form-control" placeholder="title" type="text" name="title"
                                                                id="title" required>
                                                                <input  type="hidden" name = "_id" value= "{{ $page->id }}">
                                                            <button type="submit"
                                                                class="btn mt-3 btn-primary ">
                                                                сохранить 
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="row m-3"> {{ $page->description}} </div>
                                                    
                                                    <div class="row">
                                                        <form action="{{ route('pages.store', $page->id) }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input class="form-control" placeholder="description" type="text" name="description"
                                                                id="title" required>
                                                                <input  type="hidden" name = "_id" value= "{{ $page->id }}">
                                                            <button type="submit"
                                                                class="btn mt-3 btn-primary ">
                                                                сохранить 
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> --}}

@endsection
