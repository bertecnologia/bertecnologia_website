<main id="main">

    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('<?php echo BASEURL ?>img/bg-01.png');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 id="titulo">Contato</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?php echo BASEURL ?>index.php">Home</a></li>
                    <li>Contatos</li>
                </ol>
            </div>
        </nav>
    </div>

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div>
                <iframe style="border:0; width: 100%; height: 340px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.627215806126!2d-46.32371788446655!3d-22.85327754171048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceac3454e4301f%3A0xb4ce17f03c164120!2sR.%20Don%C3%A1%20Ol%C3%ADvia%2C%20165%20-%20Extrema%2C%20MG%2C%2037640-000!5e0!3m2!1spt-BR!2sbr!4v1674051723421!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="row gy-4 mt-4">

                <div class="col-lg-4">

                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Endereço:</h4>
                            <p>Rua Dona Olivia 165, Extrema - MG | 37640-000</p>
                        </div>
                    </div>

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>E-mail:</h4>
                            <p>contato@engenhabr.com.br</p>
                        </div>
                    </div>

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Fone / Whatsapp:</h4>
                            <p>Rodrigo: (35) 98846-8374</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="https://formsubmit.co/victormartinsgamer@gmail.com" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="_subject" id="subject" placeholder="Assunto" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
                        </div>
                        <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>

</main>


<style>
    @media only screen and (max-width: 480px) {
        #titulo {
            font-size: 40px;
        }
    }
</style>