<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />
    </head>
    <body id="app-layout">

        @include('layouts._admin._nav')

        <main>
            @if(Session::has('mensagem'))
            
            <div class="container">
                
                <div class="row">
                    
                    <div class="card {{Session::get('mensagem')['class']}}">
                        
                        <div align="center" class="card-content">{{Session::get('mensagem')['msg']}}</div>
                        
                    </div>
                    
                </div>
                
            </div>
            
            @endif
            @yield('content')
        </main>

        <footer class="page-footer blue">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">SisAdmin</h5>
                        <p class="grey-text text-lighten-4">Sistema de Administração</p>
                        
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="{{route('admin.principal')}}">Início</a></li>
                            <li><a target="_blank" class="grey-text text-lighten-3" href="{{route('site.home')}}">Site</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2019 Copyright SisAdmin
                    <a class="grey-text text-lighten-4 right" href="#!">Jailson Oliveira</a>
                </div>
            </div>
        </footer>         

        <script src="{{asset('js/jquery-3.2.1.js')}}"></script>
        <script src="{{asset('js/materialize.js')}}"></script>
        <script src="{{asset('js/init.js')}}"></script>

    </body>
</html>
