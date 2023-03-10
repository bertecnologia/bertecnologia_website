<div id="box-footer">

    <div class="card col-md-12">
        <div class="row mb-4 ">

            <div class="col-md-4 col-sm-11 col-xs-11">
                <div class="footer-text pull-left">
                    <div class="d-flex">
                        <h1 id="bertitulo" style="color:#FFF; font-family: Poppins, sans-serif;">B&R Tecnologia</h1>
                    </div>
                    <p class="card-text">B&R SOLUCOES DE ENGENHARIA LTDA | CNPJ 29.614.550/0001-82 | Rua Dona Olivia, N° 165, CEP 37640-000 | Extrema - MG </p>

                    <div class="social mt-2 mb-3">
                        <i class="fa fa-facebook-official fa-lg"></i>
                        <i class="fa fa-instagram fa-lg"></i>
                        <i class="fa fa-linkedin-square fa-lg"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-1 col-xs-1 mb-2"></div>

            <div class="col-md-2 col-sm-4 col-xs-4">
                <h5 class="heading">Páginas</h5>
                <ul>
                    <li><a href="<?php echo BASEURL ?>">Home</a></li>
                    <li><a href="<?php echo BASEURL ?>app/sobre.php">Sobre</a></li>
                    <li><a href="<?php echo BASEURL ?>app/servicos.php">Serviços</a></li>
                    <li><a href="<?php echo BASEURL ?>app/contato.php">Contato</a></li>
                </ul>
            </div>


            <div class="col-md-2 col-sm-4 col-xs-4">
                <h5 class="heading">Serviços</h5>
                <ul>
                    <li><a href="<?php echo BASEURL ?>app/politica_privacidade.php">Política de Privacidade</a></li>
                    <li><a href="<?php echo BASEURL ?>pdf/B&R_Conduta_Etica.pdf" target="_blank">Código de Conduta</a></li>
                    <li><a href="<?php echo BASEURL ?>pdf/B&R_Compliance.pdf" target="_blank">Programa de Compliance</a></li>
                </ul>
            </div>


            <div class="col-md-2 col-sm-4 col-xs-4">
                <h5 class="heading">Engenharia</h5>
                <ul>
                    <li><a href="https://engenhabr.com.br/">Conheça também nossos serviços na área de Engenharia, Treinamentos e Segurança do Trabalho.</a></li>
                </ul>
            </div>
        </div>


        <div class="divider mb-4"></div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="pull-left">
                    <p><i class="fa fa-copyright"></i>Copyright 2023 - <a href="#">bertecnologia.com.br</a>|Todos os Direitos Reservados</p>
                </div>
            </div>
        </div>
    </div>

</div>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@700&display=swap');


    a {
        text-decoration: none;
        color: #646771;
    }

    a:hover {
        color: #0d7eff;
    }

    .card {
        border-radius: 0;
        padding: 2% 7%;
        color: #646771;
        background-color: #132137;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    ul>li {
        padding: 4px;
    }

    hr {
        border-width: 3px;
    }

    .social>i {
        padding: 1%;
        font-size: 15px;
    }

    .social>i:hover {
        color: #957bda;
        cursor: pointer;
    }

    .policy>div {
        padding: 4px;
    }

    .heading {
        font-family: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        color: white;
    }

    .divider {
        border-top: 2px solid #0D42FF;
    }

    @media only screen and (max-width: 480px) {
        #box-footer {
            text-align: center;
        }

        #bertitulo {
            margin: auto;
            margin-bottom: 2%;
        }

        h5 {
            margin-top: 5%;
            margin-bottom: 1%;
            border-bottom: 1px solid lightgray;
        }
    }
</style>