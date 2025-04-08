<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio - PMI - ITABUNA</title>

        <!-- Fonts -->
        <!-- Bootstrap 4 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

        <!-- Styles -->

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        .info-box {
        width: 164px; /* Largura fixa */
        height: 175px; /* Altura fixa para tornar quadrado */
        display: flex;
        flex-direction: column; /* Muda a direção para coluna */
        align-items: center; /* Centraliza o conteúdo horizontalmente */
        justify-content: center; /* Centraliza o conteúdo verticalmente */
        display: flex;

        align-items: center;
        justify-content: center;
        border-radius: 10px; /* Bordas arredondadas */
        overflow: hidden; /* Garante que o conteúdo não ultrapasse o contêiner */
        background-color: #0074bb;
        }

        .info-box:hover{
            transition: transform 0.3s ease-in-out; /* Smooth transition */
            transform: translateY(-8px); /* Lift the box slightly */
        }

        .info-box-icon {
        width: 100px; /* Tamanho do ícone */
        height: 80px; /* Tamanho do ícone */
        background-color: #0074bb;
        color: hsl(0, 0%, 0%);
        border-radius: 50px; /* Arredondar as bordas */
        padding: 10px; /* Adicionar espaço entre o conteúdo e a borda */
        object-fit: cover;
        }
        .info-box-content {
            font-weight: bold;
            color: #fff
        }
        .info-box .info-box-icon>img{
            max-width: 150%;
        }
        svg {
            fill: #fff207;
        }
        img{
            border-radius: 10%;
        }
        #m_sei, #m_interbairros, #m_sispmi{
            fill: #0074bb;
        }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-image: url('img/fundo_pmi.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: repeat;
            }
            .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>
<body>
<div class="container">
    <a href="{{ route('graphic_generator') }}" class="btn btn-outline-primary">Gerador de Gráficos</a>
    <!--header-->
    <div class="p-3 mb-5 text-center shadow-sm d-flex flex-column flex-md-row align-items-center px-md-4 banner border-bottom"
        style="
        background-image: url(img/bannersuperior.png);
        background-repeat: repeat;
        background-size: cover;
        border-radius:5px;">
        <a href="/"><img src="img/brasao_pmi3.png" width="auto"></a>
        <h4 class="my-0 ml-md-auto mr-md-auto font-weight-normal text-light"><b>Prefeitura Municipal de
        Itabuna<br> Sistemas e aplicações </b></h4>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-light" href="/">Início</a>
            <a class="p-2 text-light" data-toggle="modal" data-target="#contatoModal" data-whatever="@mdo"
                href="#">Contato</a>
        </nav>
        <!--<a class="btn btn-outline-light" href="/login">Acesso</a>-->
    </div>
    <!--fim header-->
<div class="row">
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
    <a href="https://controlecovid.prefeituradeitabuna.com.br/">
        <div class="shadow-lg info-box">
            <span class="info-box-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#fe0000" class="bi bi-virus"
                viewBox="0 0 16 16">
                    <path
                    d="M8 0a1 1 0 0 1 1 1v1.402c0 .511.677.693.933.25l.7-1.214a1 1 0 0 1 1.733 1l-.701 1.214c-.256.443.24.939.683.683l1.214-.701a1 1 0 0 1 1 1.732l-1.214.701c-.443.256-.262.933.25.933H15a1 1 0 1 1 0 2h-1.402c-.512 0-.693.677-.25.933l1.214.701a1 1 0 1 1-1 1.732l-1.214-.7c-.443-.257-.939.24-.683.682l.701 1.214a1 1 0 1 1-1.732 1l-.701-1.214c-.256-.443-.933-.262-.933.25V15a1 1 0 1 1-2 0v-1.402c0-.512-.677-.693-.933-.25l-.701 1.214a1 1 0 0 1-1.732-1l.7-1.214c.257-.443-.24-.939-.682-.683l-1.214.701a1 1 0 1 1-1-1.732l1.214-.701c.443-.256.261-.933-.25-.933H1a1 1 0 1 1 0-2h1.402c.511 0 .693-.677.25-.933l-1.214-.701a1 1 0 1 1 1-1.732l1.214.701c.443.256.939-.24.683-.683l-.701-1.214a1 1 0 0 1 1.732-1l.701 1.214c.256.443.933.261.933-.25V1a1 1 0 0 1 1-1m2 5a1 1 0 1 0-2 0 1 1 0 0 0 2 0M6 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0m1 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m5-3a1 1 0 1 0-2 0 1 1 0 0 0 2 0" />
                </svg>
            </span>
            <div class="info-box-content">
                <span class="text-center info-box-text">Controle</span>
                <span class="text-center info-box-text">COVID-19</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </a>
    </div>
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
    <a href="https://siscreas.prefeituradeitabuna.com.br/">
        <div class="shadow-lg info-box">
            <span class="info-box-icon ">
                <img src="img/recorte_CREA.png">
            </span>
            <div class="info-box-content">
                <span class="info-box-text">SisCreas</span>
                <span class="info-box-text">&nbsp;</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </a>
    </div>
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
    <a href="https://telefonia.prefeituradeitabuna.com.br/">
        <div class="shadow-lg info-box">
            <span class="info-box-icon ">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#fe0000" class="bi bi-telephone-plus-fill"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5" />
                </svg>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">Telefonia</span>
                <span class="info-box-text">&nbsp;</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </a>
    </div>
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
    <a href="https://proate.prefeituradeitabuna.com.br/">
        <div class="shadow-lg info-box">
            <span class="info-box-icon ">
               <img src="img/proate01.jpeg">
            </span>
            <div class="info-box-content">
                <span class="info-box-text">PROATE</span>
                <span class="info-box-text">&nbsp;</span>
            </div>
        </div>
    </a>
    </div>

    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
            <div class="shadow-lg info-box">
                <span class="info-box-icon ">
                    <img src="img/settran01.png">
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">SETTRAN</span>
                    <span class="info-box-text">&nbsp;</span>
                </div>
                <!-- /.info-box-content -->
            </div>
    </div>
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
    <a href="https://primeiracnhsocial.prefeituradeitabuna.com.br/">
            <div class="shadow-lg info-box">
                <span class="info-box-icon ">
                    <img src="img/cnh_social.png"/>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">CNH social</span>
                    <span class="info-box-text">&nbsp;</span>
                </div>
                <!-- /.info-box-content -->
            </div>
    </a>
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
    <a href="https://licitacao.prefeituradeitabuna.com.br/">
            <div class="shadow-lg info-box">
                <span class="info-box-icon ">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M318.6 9.4c-12.5-12.5-32.8-12.5-45.3 0l-120 120c-12.5 12.5-12.5 32.8 0 45.3l16 16c12.5 12.5 32.8 12.5 45.3 0l4-4L325.4 293.4l-4 4c-12.5 12.5-12.5 32.8 0 45.3l16 16c12.5 12.5 32.8 12.5 45.3 0l120-120c12.5-12.5 12.5-32.8 0-45.3l-16-16c-12.5-12.5-32.8-12.5-45.3 0l-4 4L330.6 74.6l4-4c12.5-12.5 12.5-32.8 0-45.3l-16-16zm-152 288c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l48 48c12.5 12.5 32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-1.4-1.4L272 285.3 226.7 240 168 298.7l-1.4-1.4z" />
                </svg>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">Licitações</span>
                    <span class="info-box-text">&nbsp;</span>
                </div>
                <!-- /.info-box-content -->
            </div>
    </a>
    </div>
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
    <a href="https://casarecomeco.prefeituradeitabuna.com.br/">
            <div class="shadow-lg info-box">
                <span class="info-box-icon ">
                    <img src="img/casa_recomeco.png"/>
                </span>

                <div class="info-box-content">
                    <span class="text-center info-box-text">Casa</span>
                    <span class="text-center info-box-text">Recomeço</span>
                </div>
                <!-- /.info-box-content -->
            </div>
    </a>
    </div>

    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
    <a href="https://processoseletivo.itabuna.ba.gov.br/">
            <div class="shadow-lg info-box">
                <span class="info-box-icon ">
                    <img src="img/processo_seletivo.png">
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">Processo</span>
                    <span class="text-left info-box-text">Seletivo</span>
                </div>
                <!-- /.info-box-content -->
            </div>
    </a>
    </div>
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
    <a href="https://ambulante.itabuna.ba.gov.br/">
            <div class="shadow-lg info-box">
                <span class="info-box-icon ">
                    <img src="img/logotipo-pmi_solo.png">
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">Gestão de eventos</span>
                    <span class="text-center info-box-text">SGEV</span>
                </div>
                <!-- /.info-box-content -->
            </div>
    </a>
    </div>
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
    <a href="https://anuario.itabuna.ba.gov.br/home">
            <div class="shadow-lg info-box">
                <span class="info-box-icon ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#fe0000" class="bi bi-file-earmark-bar-graph"
                        viewBox="0 0 16 16">
                        <path
                            d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5z" />
                        <path
                            d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                    </svg>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">Anuário</span>
                    <span class="info-box-text">&nbsp;</span>
                </div>
                <!-- /.info-box-content -->
            </div>
    </a>
    </div>
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
    <a href="http://192.168.20.4/procuradoria/login.php">
            <div class="shadow-lg info-box">
                <span class="info-box-icon ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="50"  height="50">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path
                            d="M384 32l128 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L398.4 96c-5.2 25.8-22.9 47.1-46.4 57.3L352 448l160 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-192 0-192 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l160 0 0-294.7c-23.5-10.3-41.2-31.6-46.4-57.3L128 96c-17.7 0-32-14.3-32-32s14.3-32 32-32l128 0c14.6-19.4 37.8-32 64-32s49.4 12.6 64 32zm55.6 288l144.9 0L512 195.8 439.6 320zM512 416c-62.9 0-115.2-34-126-78.9c-2.6-11 1-22.3 6.7-32.1l95.2-163.2c5-8.6 14.2-13.8 24.1-13.8s19.1 5.3 24.1 13.8l95.2 163.2c5.7 9.8 9.3 21.1 6.7 32.1C627.2 382 574.9 416 512 416zM126.8 195.8L54.4 320l144.9 0L126.8 195.8zM.9 337.1c-2.6-11 1-22.3 6.7-32.1l95.2-163.2c5-8.6 14.2-13.8 24.1-13.8s19.1 5.3 24.1 13.8l95.2 163.2c5.7 9.8 9.3 21.1 6.7 32.1C242 382 189.7 416 126.8 416S11.7 382 .9 337.1z" />
                    </svg>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">Procuradoria</span>
                    <span class="info-box-text">&nbsp;</span>
                </div>
                <!-- /.info-box-content -->
            </div>
    </a>
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
    <a href="http://192.168.20.4/cd/">
            <div class="shadow-lg info-box">
                <span class="info-box-icon ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-broadcast"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707m2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708m5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708m2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0" />
                    </svg>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">Comunicado</span>
                    <span class="text-center info-box-text">Digital</span>
                </div>
                <!-- /.info-box-content -->
            </div>
    </a>
    </div>
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
            <div class="shadow-lg info-box" id="item_sei" >
                <span class="info-box-icon ">
                    <img src="img/sei.png">
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">SEI</span>
                    <span class="info-box-text">&nbsp;</span>
                </div>
                <!-- /.info-box-content -->
            </div>

    </div>
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">

            <div class="shadow-lg info-box" id="item_sispmi">
                <span class="info-box-icon ">
                    <img src="img/logotipo-pmi_solo.png">
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">SISPMI</span>
                    <span class="info-box-text">&nbsp;</span>
                </div>

                <!-- /.info-box-content -->
            </div>

    </div>
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">

            <div class="shadow-lg info-box"  id="item_interbairros">
                <span class="info-box-icon ">
                    <img src="img/logotipo-pmi_solo.png">
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Interbairros</span>
                    <span class="info-box-text">&nbsp;</span>
                </div>
                <!-- /.info-box-content -->
            </div>

    </div>
    <div class="col-md-3 col-lg-2 col-sm-6 col-12">
        <a href="http://187.44.149.123:8085/">
            <div class="shadow-lg info-box">
                <span class="info-box-icon ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#fe0000" class="bi bi-stoplights"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m0 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m1.5 2.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                        <path
                            d="M4 2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v1a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-1c-1.2-.4-1.833-1.5-2-2h2V8c-1.2-.4-1.833-1.5-2-2h2V4c-1.2-.4-1.833-1.5-2-2zm2-1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                    </svg>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">Guarda</span>
                    <span class="text-center info-box-text">Trânsito</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </a>
    </div>
</div>

            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
<!-- Modal sei -->
<div class="modal fade" id="modal_sei" tabindex="-1" aria-labelledby="modal_sei_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="align-items: center; justify-content: start">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20" id="m_sei">
                    <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24l0 112c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-112c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                </svg>
                <h5 class="modal-title" id="modal_sei_label" style="margin-left: 10px">Aviso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <p>Em fase de implantação</p>
            </div>

        </div>
    </div>
</div>

<!-- Modal sispmi -->
<div class="modal fade" id="modal_sispmi" tabindex="-1" aria-labelledby="modal_sispmi_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="align-items: center; justify-content: start">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20" id="m_sispmi">
                    <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24l0 112c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-112c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                </svg>
                <h5 class="modal-title" id="modal_sispmi_label" style="font-weight:bold; margin-left:10px;">Aviso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <p>Aplicação desktop</p> <p>Para maiores informações</p> Entre em contato com o setor de tecnologia.
            </div>

        </div>
    </div>
</div>
<!-- Modal interbairros -->
<div class="modal fade" id="modal_interbairros" tabindex="-1" aria-labelledby="modal_interbairros_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="align-items: center; justify-content: start">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20" id="m_interbairros">
                    <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24l0 112c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-112c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                </svg>
                <h5 class="modal-title" id="modal_interbairros_label" style="font-weight:bold; margin-left:10px;">Aviso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <p>Aplicação desktop</p>
                <p>Para maiores informações</p> Entre em contato com o setor de tecnologia.
            </div>

        </div>
    </div>
</div>
<!-- jQuery (necessário para Bootstrap 4 e AdminLTE) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js (necessário para Bootstrap 4) -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Bootstrap 4 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

<!-- AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
<script>
$(document).ready(function() {
    $('#item_sei').on('click', function () {
        $('#modal_sei').modal('show')
    });
    $('#item_sispmi').on('click', function () {
        $('#modal_sispmi').modal('show')
    });
    $('#item_interbairros').on('click', function () {
        $('#modal_interbairros').modal('show')
    });
});
</script>
</body>
</html>
