<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
<!-- Start Header -->
	<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
			  	<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>

				      <!-- Text Logo -->
				      <a class="navbar-brand" href="index.html">
                        <?php /*<i class="fa fa-book" aria-hidden="true"></i>Kindle */?>
                        <img src="<?=$chin_logo . $logo ?>" style="width:15%; border-radius: 5%; top:10%"  aria-hidden="true" alt="">
                        </a>

				      <!-- Image Logo -->
				      <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"></a> -->


				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav mu-menu navbar-right">
					        <li><a href="#">ACCUEIL</a></li>
					        <li><a href="#mu-book-overview">VUE D'ENSEMBLE</a></li>
					        <li><a href="#mu-author">AUTEUR</a></li>
				            <?php /*<li><a href="#mu-pricing">PRIX</a></li> */?>
				            <?php /*<li><a href="#mu-testimonials">TESTIMONIALS</a></li> */?>
				            <li><a href="#mu-contact">CONTACT</a></li>
				      	</ul>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->

<!-- fixer le bouton -->
    <style>
        /* styles.css */
body {
    margin: 0;
    padding: 0;
}

.fixed-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    padding: 10px 20px;
    background-color: <?= $couleur_entreprise1 ?>;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    animation: pulse 2s infinite;
    transition: background-color 0.3s;
    z-index: 558;
}

.fixed-button:hover {
    background-color:<?= $couleur_entreprise2 ?>;
    /* background-color: #218838; */
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}

.service_buton{
	animation: pulse 2s infinite;
    transition: background-color 0.3s;
}

    </style>

<button class="fixed-button service_buton"> <?=$textbouton ?> <i class="fa fa-book" aria-hidden="true"></i> </button>