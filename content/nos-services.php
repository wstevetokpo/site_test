<?php

	$services = [
		[
			'icon' => 'cube-outline',
			'title' => 'Conception de produits',
			'content' => 'Un coefficient large et efficace de génération et de développement d\'idées à travers un processus qui conduit à de nouveaux produits.'
		],
		[
			'icon' => 'layers-outline',
			'title' => 'Création de marque',
			'content' => 'À travers des concepts innovants, nous développons la stratégie et l\'histoire de la marque afin de donner à l\'entreprise de l\'autorité.'
		],
		[
			'icon' => 'videocam-outline',
			'title' => 'Production vidéo',
			'content' => 'Montage vidéo structuré pour présenter toutes les informations du projet, y compris les films et les émissions de télévision, les publicités et la publicité.'
		],
		[
			'icon' => 'bag-check-outline',
			'title' => 'Marketing numérique',
			'content' => 'Nous intégrons des canaux numériques tels que les moteurs de recherche, les médias sociaux, les e-mails et d\'autres, afin d\'attirer des clients potentiels.'
		],
		[
			'icon' => 'camera-outline',
			'title' => 'Photographie artistique',
			'content' => 'Que ce soit pour un événement décontracté ou professionnel, faire appel à un professionnel fait toute la différence en matière de photographie.'
		],
		[
			'icon' => 'game-controller-outline',
			'title' => 'Développement de jeux',
			'content' => 'L\'un des segments numériques les plus rentables au monde nécessite une équipe créative et spécialisée pour concrétiser votre idée.'
		]
	];

?>
<!DOCTYPE HTML>
<html lang="<?= $requestLang ?>">
<?php $page_title = 'Nos services - ' . APP_NAME; $page_md = 'Découvrez nos services digital' ?>
<?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/head.php'; ?>

<body class="shock-body">
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/header.php'; ?>
    <main id="main" class="shock-main bg-color black">
        <section class="shock-section has-holder pt-4">
            <div class="container max-w-75">
                <div class="basic-intro text-center">
                    <h1 class="title">
                        <span class="text-1 d-block text-style-2 text-outline text-gradient scheme-1">
							Nous proposons des
						</span>
                        <span class="text-2 d-block text-style-2 text-italic text-gradient scheme-1">
							services spécialisés.	
						</span>
                    </h1>
                </div>
            </div>
        </section>
		
        <section class="shock-section pt-5 pb-4 bg-color black">
            <div class="container">
                <div class="row g-4">
					<?php
						foreach ($services as $key => $value) {
					?>
							<div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
								<div class="card double-edge has-icon parent">
									<div class="card-body">
										<img class="card-image-icon primary" src="<?= HOME_PATH . 'assets/img/' . $value['icon'] . '.svg' ?>" alt="Icon"  data-shock-icon="32" />
										<h3 class="title text-style-11 white">
											<?= $value['title'] ?>
										</h3>
										<p class="description">
											<?= $value['content'] ?>
										</p>
										<div class="button-wrapper align-h-right">
											<span class="arrow-button cross scheme-2 primary">
												<span class="arrow">
													<span class="item"></span>
													<span class="item"></span>
												</span>
												<span class="line"></span>
												<span class="text">
													VOIR PLUS
												</span>
											</span>
										</div>
									</div>
									<a href="<?= HOME_PATH ?>nous-contacter" class="full-link">
										<div class="overlay gray-25 magnetic-effect"></div>
									</a>
								</div>
							</div>
					<?php
						}
					?>
                </div>
            </div>
        </section>
		
        <section class="shock-section pb-4">
            <div class="container">
                <span class="zzz scheme-2 gray-75"></span>
            </div>
        </section>
    </main>
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/footer.php'; ?>
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/script.php'; ?>
</body>

</html>