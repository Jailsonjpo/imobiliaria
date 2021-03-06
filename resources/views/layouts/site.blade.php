<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}</title>
    <meta name="description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" value="summary">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ isset($seo['url']) ? $seo['url'] : config('app.url') }}" />
    <meta property="og:image" content="{{ isset($seo['imagem']) ? $seo['imagem'] : config('seo.imagem') }}" />
    <meta property="og:description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}" />
        
        
        <!--<title>{{ config('app.name', 'Laravel') }}</title>-->

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />
        

    </head>
    <body>
       
            <header>

                @include('layouts._site._nav')

            </header>

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
                            <h5 class="white-text">Footer Content</h5>
                            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text">Links</h5>
                            <ul>
                                <li><a class="grey-text text-lighten-3" href="{{route('site.home')}}">Home</a></li>
                                <li><a class="grey-text text-lighten-3" href="{{route('site.sobre')}}">Sobre</a></li>
                                <li><a class="grey-text text-lighten-3" href="{{route('site.contato')}}">Contato</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2019 Copyright Text
                        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                    </div>
                </div>
            </footer>           

            <script src="{{asset('js/jquery-3.2.1.js')}}"></script>
            <script src="{{asset('js/materialize.js')}}"></script>
            <script src="{{asset('js/init.js')}}"></script>

    </body>
</html>
