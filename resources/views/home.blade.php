@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('ETH price:') }}
                    {{ json_decode($mails->returnSmth(), true)['USD'] }}
                    <details>
                        <summary>info</summary>
                        - В форму вставляем список ссылок, (c http/www или без, неважно) пустые строки или случайный текст тоже не страшно<br><br>
                        - Нажимаем отправить - скрипт начинает работать, когда он отработал проигрывается звук уведомления и найденные почты появляются в блоке справа<br><br>
                        - если задание (список ссылок) отправлено то даже при закрытии окна скрипт продолжает работать, то что он нашёл сохраняется и можно позже
                        посмотреть на отдельной странице нажав ссылку вверху<br><br>
                        - нежелательно отправлять новое задание не убедившись что скрипт отработал предыдущее, серверу может не хватить оперативки и он упадёт<br><br>
                        - столбик с почтами можно выделять отдельно от ссылок, сортировка почт в том-же порядке в котором были ссылки - в след. версии<br><br>
                    </details>
                    <div class="box">
                        <form method="POST" id="form">
                            <!-- <form action="app.php" method="POST"> -->
                            <textarea name="one" id="one" placeholder="example.com"></textarea>
                            <input type="submit" name="send" value="отправить" class="button">
                        </form>
                        <div class="list">
                            <table class="email">
                                
                            </table>
                            <table class="url">
                
                               </table>
                        </div>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
