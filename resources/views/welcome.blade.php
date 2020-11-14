<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            body {
                position: absolute;
                left:0;
                width: 100%;
                height:100%;
                background:url("{{ asset('image/fundo1.png') }}");
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="flex-center full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="#" data-toggle="modal" data-target="#modal-login">Login</a>

                        @if (Route::has('register'))
                            <a href="#" data-toggle="modal" data-target="#modal-cadastro">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
       
            <div class="container">
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="row">
                    <input type="text" style="width: 60%; display:block;margin:auto" name="pesquisa" placeholder="Informe o título do objeto" id="pesquisa" class="form-control" onkeyup="buscarObjeto()">
                    <div id="objetos" style="width: 60%;display:block;margin:auto"></div>
                </div>
            </div>
            @include('auth.register')
            @include('auth.login')
        </div>
    </body>
</html>
<script src="{{ asset('js/axios.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function buscarObjeto()
    {
        let valor = document.getElementById('pesquisa').value;
        if (valor != '') {
            axios.post('/pesquisa', {
                pesquisa: valor
            })
            .then(response => {
                let {data} = response;
                $('#objetos').empty()
                if (data.dados.length > 0) {
                    let dados_objetos = '';                
                    dados_objetos += '<table class="table table-hover" style="background: #ffffff">';
                    dados_objetos += '<tbody>';
                        
                        $.each(data.dados, function (key, objeto) {
                            dados_objetos += '<tr>'
                            dados_objetos += '<th class="table-search" scope="row" ><a href="/objeto-aprendizagem/'+ objeto.id +'">' + objeto.titulo + '</a></th>';
                        });

                    dados_objetos += '</tbody>';  
                    dados_objetos += '</table>';

                    $("#objetos").append(dados_objetos);
                } else {
                    $("#objetos").empty()
                }
            })
        } else {
            $('#objetos').empty()
        }       
    }
</script>
