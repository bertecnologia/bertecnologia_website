<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="<?php echo BASEURL ?>" class="logo d-flex align-items-center">
            <img src="<?php echo BASEURL ?>img/icone-ber.svg" alt="">
            <h1>B&R Tecnologia</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?php echo BASEURL ?>">Home</a></li>
                <li><a href="<?php echo BASEURL ?>app/sobre.php">Sobre</a></li>
                <li class="dropdown"><a href="<?php echo BASEURL ?>app/servicos.php"><span>Serviços</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="<?php echo BASEURL ?>app/sobre_sistemas.php">Desenvolvimento de Sistemas</a></li>
                        <li><a href="<?php echo BASEURL ?>app/sobre_suporte.php">Suporte em TI e Tecnologia</a></li>
                        <li><a href="<?php echo BASEURL ?>app/sobre_websites.php">Website Personalizado</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo BASEURL ?>app/contato.php">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>