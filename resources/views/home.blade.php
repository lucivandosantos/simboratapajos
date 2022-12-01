@extends('master')

@section('main')
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">SIMBORA TAPAJÓS</h1>
                        <p class="lead fw-normal text-muted mb-5">CORRIDA BARATA DE
                            VERDADE É SÓ AQUI!</p>
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <a class="me-lg-3 mb-4 mb-lg-0" href="https://play.google.com/store/apps/details?id=br.com.simboratapajos.passenger.drivermachine" target="_blank"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                            <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle></svg
                        ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                        ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <img src="/assets/img/simboraapp.png" alt="" style="max-width: 100%; height: 100%">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <aside class="text-center simboragradiente">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">Nosso objetivo é trazer o melhor serviço de mobilidade urbana, com uma experiência agradável, preço justo, conforto e segurança.</div>
                    <img src="assets/img/barrasimborat.png" alt="..." style="height: 5rem" />
                </div>
            </div>
        </div>
    </aside>

    <!-- App features section-->
    <section id="features">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center mt-5" >
                                    <i class="bi bi-bag-check-fill icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Você tem escolha</h3>
                                    <p class="text-muted mb-0">Temos opções para você escolher como ir e vir. Carro com motorista particular, táxi ou táxi preto: para cada momento uma solução.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi bi-key-fill icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Você tem segurança</h3>
                                    <p class="text-muted mb-0">Nossos motoristas parceiros passam por uma checagem de histórico e uma avaliação permanente. Notas baixas causam suspensão da plataforma.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi bi-credit-card-fill icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Você tem economia</h3>
                                    <p class="text-muted mb-0">O nosso preço é o melhor da cidade! Além disso, também temos várias opções de pagamento à sua escolha: segurança e praticidade pra você.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi bi-card-checklist icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Fácil de usar</h3>
                                    <p class="text-muted mb-0">Escolheu o destino?! Agora é aguardar o motorista chegar. Tudo muit fácil e prático.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle></svg
                        ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                        ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <img src="/assets/img/localizacaoapp.png" style="max-width: 100%; height: 100%">    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Basic features section-->
    <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5">
                    <h2 class="display-4 lh-1 mb-4">Simbora dirigir e ganhe uma renda extra.</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0">Que tal usar o seu veículo para ganhar uma grana extra e aumentar a sua renda, utilizando uma plataforma segura, completa e que traz muitos benefícios?! Baixe agora mesmo o nosso app, faça seu cadastro gratuito e comece a ganhar dinheiro. Junte-se a nós!</p>
                    <a href=" https://wa.me/message/6OGPOJU6XQWLH1 " target="_blank">
                        <button class="btn btn-warning  rounded-pill px-4 mt-2 mb-2 mb-lg-0">
                            <span class="d-flex align-items-center">
                                <i class="bi bi-car-front-fill me-2"></i>
                                <span class="small">Seja um motorista</span>
                            </span>
                        </button>
                    </a>
                </div>
                <div class="col-sm-8 col-md-6">
                    <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="/assets/img/motorista.png" alt="..." /></div>
                </div>
            </div>
        </div>
    </section>


    <section class="simboragradiente" id="download">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4">Baixe nosso APP agora!</h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <a class="me-lg-3 mb-4 mb-lg-0" href="https://play.google.com/store/apps/details?id=br.com.simboratapajos.passenger.drivermachine" target="_blank"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                <a href="#!" target="_blank"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
            </div>
        </div>
    </section>
@endsection