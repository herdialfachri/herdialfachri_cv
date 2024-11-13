<!DOCTYPE html>
<html class="no-js ss-preload" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>CV by herdialfachri.</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="main/css/vendor.css">
    <link rel="stylesheet" href="main/css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="main/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="main/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


    <!-- # preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>


    <!-- # page wrap
    ================================================== -->
    <div class="s-pagewrap">

        <div class="circles">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>


        <!-- ## site header 
        ================================================== -->
        <header class="s-header">

            <div class="header-mobile">
                <span class="mobile-home-link"><a href="">herdialfachri.</a></span>
                <a class="mobile-menu-toggle" href="#0"><span>Menu</span></a>
            </div>

            <div class="row wide main-nav-wrap">
                <nav class="column lg-12 main-nav">
                    <ul>
                        <li><a href="" class="home-link">herdialfachri.</a></li>
                        <li class="current"><a href="#intro" class="smoothscroll">Get to know me</a></li>
                        <li><a href="#about" class="smoothscroll">About me</a></li>
                        <li><a href="#experience" class="smoothscroll">Experiences</a></li>
                        <li><a href="#works" class="smoothscroll">Clients</a></li>
                        <li><a href="#contact" class="smoothscroll">Say Hello</a></li>
                    </ul>
                </nav>
            </div>

        </header> <!-- end s-header -->


        <!-- ## main content
        ==================================================- -->
        <main class="s-content">


            <!-- ### intro
            ================================================== -->
            <section id="intro" class="s-intro target-section">

                <div class="row intro-content wide">

                    <div class="column">
                        <div class="text-pretitle with-line">
                            <?= esc($get2know['title']) ?> <!-- Tampilkan title -->
                        </div>

                        <h1 class="text-huge-title">
                            <?= esc($get2know['description']) ?> <!-- Tampilkan description -->
                        </h1>
                    </div>


                    <ul class="intro-social">
                        <?php foreach ($sosmed as $item): ?>
                            <li><a href="<?= esc($item['url']) ?>" target="_blank"><?= esc($item['platform']) ?></a></li>
                        <?php endforeach; ?>
                    </ul>


                </div> <!-- end intro content -->

                <a href="#about" class="intro-scrolldown smoothscroll">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path d="M11 21.883l-6.235-7.527-.765.644 7.521 9 7.479-9-.764-.645-6.236 7.529v-21.884h-1v21.883z" />
                    </svg>
                </a>

            </section> <!-- end s-intro -->


            <!-- ### about
            ================================================== -->
            <section id="about" class="s-about target-section">


                <div class="row about-info wide" data-animate-block>

                    <div class="column lg-6 md-12 about-info__pic-block">
                        <img src="<?= base_url($aboutme['image']); ?>"
                            srcset="<?= base_url($aboutme['image']); ?> 1x, <?= base_url($aboutme['image']); ?>@2x 2x"
                            alt="Deskripsi Gambar"
                            class="about-info__pic" data-animate-el>
                    </div>

                    <div class="column lg-6 md-12">
                        <div class="about-info__text">
                            <h2 class="text-pretitle with-line" data-animate-el>
                                <?= esc($aboutme['title']); ?> <!-- Tampilkan title -->
                            </h2>
                            <p class="attention-getter" data-animate-el>
                                <?= esc($aboutme['description']); ?> <!-- Tampilkan description -->
                            </p>
                            <a href="<?= esc($aboutme['target_btn']) ?>" target="_blank" class="btn btn--medium u-fullwidth" data-animate-el><?= esc($aboutme['button_desc']) ?></a>
                        </div>
                    </div>

                </div> <!-- about-info -->


                <div class="row about-expertise" data-animate-block>
                    <div class="column lg-12">

                        <h2 class="text-pretitle" data-animate-el>Expertise</h2>

                        <ul class="skills-list h1" data-animate-el>
                            <?php foreach ($myskill as $items): ?>
                                <li><?= esc($items['skills']) ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div> <!-- end about-expertise -->

            </section> <!-- end s-about -->


            <!-- ### experience
            ================================================== -->
            <section id="experience" class="s-experience target-section">
                <!-- timeline -->
                <div class="row about-timelines" data-animate-block>

                    <div class="column lg-6 tab-12">

                        <h2 class="text-pretitle" data-animate-el>
                            Experience
                        </h2>

                        <div class="timeline" data-animate-el>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <a href="https://www.pemdespalasarigirang.id/" target="_blank">
                                        <h4 class="timeline__title">Internship at Desa Palasari Girang</h4>
                                    </a>
                                    <h5 class="timeline__meta">Android Developer</h5>
                                    <p class="timeline__timeframe">July 2024 - Present</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Learn to master Kotlin programming language in order to build a good Android applications,
                                        learn how to utilize APIs with the Retrofit library, learn the basics of AI for Android
                                        applications.</p>
                                </div>
                            </div>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <a href="https://php2d.kemdikbud.go.id/" target="_blank">
                                        <h4 class="timeline__title">PPK Ormawa Awarde 2023</h4>
                                    </a>
                                    <h5 class="timeline__meta">Web Developer</h5>
                                    <p class="timeline__timeframe">February 2023 - June 2023</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Being one of the selected teams out of 2110 sub-proposals submitted, collaborated with team
                                        to created a website-based information system application for the Palabuhanratu village,
                                        developed an IoT-based for Tsunami warning device.</p>
                                </div>
                            </div>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <a href="https://www.rsudsyamsudin.co.id/" target="_blank">
                                        <h4 class="timeline__title">Internship at RSUD, R. Syamsudin, SH</h4>
                                    </a>
                                    <h5 class="timeline__meta">IT Support</h5>
                                    <p class="timeline__timeframe">December 2018 - February 2019</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Being one of the selected teams out of 2110 sub-proposals submitted, collaborated with team
                                        to created a website-based information system application for the Palabuhanratu village,
                                        developed an IoT-based for Tsunami warning device.</p>
                                </div>
                            </div>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <a href="https://kedaireka.id/" target="_blank">
                                        <h4 class="timeline__title">Kedaireka Matching Fund Intership</h4>
                                    </a>
                                    <h5 class="timeline__meta">Graphic Designer</h5>
                                    <p class="timeline__timeframe">January 2023</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Conducted an interview and managed to get 200 data for 2 days for lecturer
                                        research purposes entitled "Analysis and environmental impact of PT. Kino Indonesia".</p>
                                </div>
                            </div>

                        </div> <!-- end timeline -->

                    </div> <!-- end column -->

                    <div class="column lg-6 tab-12">

                        <h2 class="text-pretitle" data-animate-el>
                            Education
                        </h2>

                        <div class="timeline" data-animate-el>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <a href="https://ummi.ac.id/" target="_blank">
                                        <h4 class="timeline__title">Muhammadiyah University of Sukabumi</h4>
                                    </a>
                                    <h5 class="timeline__meta">Informatics Engineering</h5>
                                    <p class="timeline__timeframe">September 2020 - Present</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                                </div>
                            </div>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <a href="http://smktpp-sukabumi.sch.id/" target="_blank">
                                        <h4 class="timeline__title">SMK Teknologi Plus Padjadjaran</h4>
                                    </a>
                                    <h5 class="timeline__meta">Computer and Network Engineering</h5>
                                    <p class="timeline__timeframe">June 2017 - July 2020</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                                </div>
                            </div>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <a href="https://grow.google/intl/id_id/" target="_blank">
                                        <h4 class="timeline__title">Bangkit Academy Alumni 2024</h4>
                                    </a>
                                    <h5 class="timeline__meta">Android Developer</h5>
                                    <p class="timeline__timeframe">February 2024 - July 2024</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Learn to master Kotlin programming language in order to build a good Android applications,
                                        learn how to utilize APIs with the Retrofit library, learn the basics of AI for Android
                                        applications.</p>
                                </div>
                            </div>

                        </div> <!-- end timeline -->

                    </div> <!-- end column -->


                </div> <!-- end about-timelines -->
            </section> <!-- end s-experience -->

            <!-- ### works
            ================================================== -->
            <section id="works" class="s-works target-section">


                <div class="row works-portfolio">

                    <div class="column lg-12" data-animate-block>

                        <h2 class="text-pretitle" data-animate-el>
                            Recent Works
                        </h2>
                        <p class="h1" data-animate-el>
                            Here are some of my favorite projects I have done lately. Feel free to check them out.
                        </p>

                        <ul class="folio-list row block-lg-one-half block-stack-on-1000">

                            <li class="folio-list__item column" data-animate-el>
                                <a class="folio-list__item-link" href="#modal-01">
                                    <div class="folio-list__item-pic">
                                        <img src="/main/images/portfolio/fuji.jpg"
                                            srcset="/main/images/portfolio/fuji.jpg 1x, /main/images/portfolio/fuji@2x.jpg 2x" alt="">
                                    </div>

                                    <div class="folio-list__item-text">
                                        <div class="folio-list__item-cat">
                                            Website
                                        </div>
                                        <div class="folio-list__item-title">
                                            Retro Camera.
                                        </div>
                                    </div>
                                </a>
                                <a class="folio-list__proj-link" href="#" title="project link">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li> <!--end folio-list__item -->

                            <li class="folio-list__item column" data-animate-el>
                                <a class="folio-list__item-link" href="#modal-02">
                                    <div class="folio-list__item-pic">
                                        <img src="/main/images/portfolio/lamp.jpg"
                                            srcset="/main/images/portfolio/lamp.jpg 1x, /main/images/portfolio/lamp@2x.jpg 2x" alt="">
                                    </div>

                                    <div class="folio-list__item-text">
                                        <div class="folio-list__item-cat">
                                            Product Design
                                        </div>
                                        <div class="folio-list__item-title">
                                            The White Lamp.
                                        </div>
                                    </div>
                                </a>
                                <a class="folio-list__proj-link" href="#" title="project link">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li> <!--end folio-list__item -->

                            <li class="folio-list__item column" data-animate-el>
                                <a class="folio-list__item-link" href="#modal-03">
                                    <div class="folio-list__item-pic">
                                        <img src="/main/images/portfolio/rucksack.jpg"
                                            srcset="/main/images/portfolio/rucksack.jpg 1x, /main/images/portfolio/rucksack@2x.jpg 2x" alt="">
                                    </div>

                                    <div class="folio-list__item-text">
                                        <div class="folio-list__item-cat">
                                            Branding
                                        </div>
                                        <div class="folio-list__item-title">
                                            Rucksuck.
                                        </div>
                                    </div>
                                </a>
                                <a class="folio-list__proj-link" href="#" title="project link">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li> <!--end folio-list__item -->

                            <li class="folio-list__item column" data-animate-el>
                                <a class="folio-list__item-link" href="#modal-04">
                                    <div class="folio-list__item-pic">
                                        <img src="/main/images/portfolio/skaterboy.jpg"
                                            srcset="/main/images/portfolio/skaterboy.jpg 1x, /main/images/portfolio/skaterboy@2x.jpg 2x" alt="">
                                    </div>

                                    <div class="folio-list__item-text">
                                        <div class="folio-list__item-cat">
                                            Website
                                        </div>
                                        <div class="folio-list__item-title">
                                            Since Day One.
                                        </div>
                                    </div>
                                </a>
                                <a class="folio-list__proj-link" href="#" title="project link">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li> <!--end folio-list__item -->

                            <li class="folio-list__item column" data-animate-el>
                                <a class="folio-list__item-link" href="#modal-05">
                                    <div class="folio-list__item-pic">
                                        <img src="/main/images/portfolio/sanddunes.jpg"
                                            srcset="/main/images/portfolio/sanddunes.jpg 1x, /main/images/portfolio/sanddunes@2x.jpg 2x" alt="">
                                    </div>

                                    <div class="folio-list__item-text">
                                        <div class="folio-list__item-cat">
                                            Illustration
                                        </div>
                                        <div class="folio-list__item-title">
                                            Sand Dunes.
                                        </div>
                                    </div>
                                </a>
                                <a class="folio-list__proj-link" href="#" title="project link">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li> <!--end folio-list__item -->

                            <li class="folio-list__item column" data-animate-el>
                                <a class="folio-list__item-link" href="#modal-06">
                                    <div class="folio-list__item-pic">
                                        <img src="/main/images/portfolio/minimalismo.jpg"
                                            srcset="/main/images/portfolio/minimalismo.jpg 1x, /main/images/portfolio/minimalismo@2x.jpg 2x" alt="">
                                    </div>

                                    <div class="folio-list__item-text">
                                        <div class="folio-list__item-cat">
                                            Branding
                                        </div>
                                        <div class="folio-list__item-title">
                                            Minimalismo.
                                        </div>
                                    </div>
                                </a>
                                <a class="folio-list__proj-link" href="#" title="project link">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li> <!--end folio-list__item -->

                        </ul> <!-- end folio-list -->

                    </div> <!-- end column -->


                    <!-- Modal Templates Popup
                    -------------------------------------------- -->
                    <div id="modal-01" hidden>
                        <div class="modal-popup">
                            <img src="/main/images/pfortfolio/gallery/g-fuji.jpg" alt="">

                            <div class="modal-popup__desc">
                                <h5>Retro Camera</h5>
                                <p>Odio soluta enim quos sit asperiores rerum rerum repudiandae cum. Vel voluptatem alias qui assumenda iure et expedita voluptatem. Ratione officiis quae.</p>
                                <ul class="modal-popup__cat">
                                    <li>Branding</li>
                                    <li>Product Design</li>
                                </ul>
                            </div>

                            <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                        </div>
                    </div> <!-- end modal -->

                    <div id="modal-02" hidden>
                        <div class="modal-popup">
                            <img src="/main/images/portfolio/gallery/g-lamp.jpg" alt="">

                            <div class="modal-popup__desc">
                                <h5>The White Lamp</h5>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                <ul class="modal-popup__cat">
                                    <li>Branding</li>
                                </ul>
                            </div>

                            <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                        </div>
                    </div> <!-- end modal -->

                    <div id="modal-03" hidden>
                        <div class="modal-popup">
                            <img src="/main/images/portfolio/gallery/g-rucksack.jpg" alt="">

                            <div class="modal-popup__desc">
                                <h5>Rucksuck</h5>
                                <p>Exercitationem reprehenderit quod explicabo consequatur aliquid ut magni ut. Deleniti quo corrupti illum velit eveniet ratione necessitatibus ipsam mollitia.</p>
                                <ul class="modal-popup__cat">
                                    <li>Product Design</li>
                                </ul>
                            </div>

                            <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                        </div>
                    </div> <!-- end modal -->

                    <div id="modal-04" hidden>
                        <div class="modal-popup">
                            <img src="/main/images/portfolio/gallery/g-skaterboy.jpg" alt="">

                            <div class="modal-popup__desc">
                                <h5>Since Day One</h5>
                                <p>Dolores velit qui quos nobis. Aliquam delectus voluptas quos possimus non voluptatem voluptas voluptas. Est doloribus eligendi porro doloribus voluptatum.</p>
                                <ul class="modal-popup__cat">
                                    <li>Website</li>
                                </ul>
                            </div>

                            <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                        </div>
                    </div> <!-- end modal -->

                    <div id="modal-05" hidden>
                        <div class="modal-popup">

                            <img src="/main/images/portfolio/gallery/g-sanddunes.jpg" alt="">

                            <div class="modal-popup__desc">
                                <h5>Sand Dunes</h5>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                <ul class="modal-popup__cat">
                                    <li>Illustration</li>
                                </ul>
                            </div>

                            <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                        </div>
                    </div> <!-- end modal -->

                    <div id="modal-06" hidden>
                        <div class="modal-popup">
                            <img src="/main/images/portfolio/gallery/g-minimalismo.jpg" alt="">

                            <div class="modal-popup__desc">
                                <h5>Minimalismo</h5>
                                <p>Quisquam vel libero consequuntur autem voluptas. Qui aut vero. Omnis fugit mollitia cupiditate voluptas. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                                <ul class="modal-popup__cat">
                                    <li>Branding</li>
                                    <li>Product Design</li>
                                </ul>
                            </div>

                            <a href="https://www.behance.net/" class="modal-popup__details">Project link</a>
                        </div>
                    </div> <!-- end modal -->

                </div> <!-- end works-portfolio -->


                <div class="row testimonials">
                    <div class="column lg-12" data-animate-block>

                        <div class="swiper-container testimonial-slider" data-animate-el>

                            <div class="swiper-wrapper">

                                <div class="testimonial-slider__slide swiper-slide">
                                    <div class="testimonial-slider__author">
                                        <img src="/main/images/avatars/user-02.jpg" alt="Author image" class="testimonial-slider__avatar">
                                        <cite class="testimonial-slider__cite">
                                            <strong>Tim Cook</strong>
                                            <span>CEO, Apple</span>
                                        </cite>
                                    </div>
                                    <p>
                                        Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem.
                                        Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil nostrum.
                                        Laudantium quia consequatur molestias delectus culpa.
                                    </p>
                                </div> <!-- end testimonial-slider__slide -->

                                <div class="testimonial-slider__slide swiper-slide">
                                    <div class="testimonial-slider__author">
                                        <img src="/main/images/avatars/user-03.jpg" alt="Author image" class="testimonial-slider__avatar">
                                        <cite class="testimonial-slider__cite">
                                            <strong>Sundar Pichai</strong>
                                            <span>CEO, Google</span>
                                        </cite>
                                    </div>
                                    <p>
                                        Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                                        Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                                        Quasi voluptas eius distinctio. Atque eos maxime.
                                    </p>
                                </div> <!-- end testimonial-slider__slide -->

                                <div class="testimonial-slider__slide swiper-slide">
                                    <div class="testimonial-slider__author">
                                        <img src="/main/images/avatars/user-01.jpg" alt="Author image" class="testimonial-slider__avatar">
                                        <cite class="testimonial-slider__cite">
                                            <strong>Satya Nadella</strong>
                                            <span>CEO, Microsoft</span>
                                        </cite>
                                    </div>
                                    <p>
                                        Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.
                                        Voluptatem dignissimos ut.
                                    </p>
                                </div> <!-- end testimonial-slider__slide -->

                                <div class="testimonial-slider__slide swiper-slide">
                                    <div class="testimonial-slider__author">
                                        <img src="/main/images/avatars/user-06.jpg" alt="Author image" class="testimonial-slider__avatar">
                                        <cite class="testimonial-slider__cite">
                                            <strong>Jeff Bezos</strong>
                                            <span>CEO, Amazon</span>
                                        </cite>
                                    </div>
                                    <p>
                                        Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel dui. In ac felis
                                        quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Qui sed at corrupti expedita voluptas odit.
                                        Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                                    </p>
                                </div> <!-- end testimonial-slider__slide -->

                            </div> <!-- end swiper-wrapper -->

                            <div class="swiper-pagination"></div>

                        </div> <!-- end swiper-container -->

                    </div> <!-- end column -->
                </div> <!-- end row testimonials -->

            </section> <!-- end s-works -->


            <!-- ### contact
            ================================================== -->
            <section id="contact" class="s-contact target-section">

                <div class="row contact-top">
                    <div class="column lg-12">
                        <h2 class="text-pretitle">
                            Get In Touch
                        </h2>

                        <p class="h1">
                            I love to hear from you.
                            Whether you have a question or just
                            want to chat about design, tech & art — shoot me a message.
                        </p>
                    </div>
                </div> <!-- end contact-top -->

                <div class="row contact-bottom">
                    <div class="column lg-3 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Reach me at</h3>
                        <p class="contact-links">
                            <a href="mailto:alfachri75@gmail.com" class="mailtoui">alfachri75@gmail.com</a> <br>
                            <a href="tel:+6282122506110">+62 821-2250-6110</a>
                        </p>
                    </div>
                    <div class="column lg-4 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Social</h3>
                        <ul class="contact-social">
                            <li><a href="#0">Facebook</a></li>
                            <li><a href="#0">Discord</a></li>
                            <li><a href="#0">LinkedIn</a></li>
                            <li><a href="https://instagram.com/herdialfachri/" target="_blank">Instagram</a></li>
                            <li><a href="#0">Github</a></li>
                        </ul>
                    </div>
                    <div class="column lg-4 md-12 contact-block">
                        <a href="mailto:alfachri75@gmail.com" class="mailtoui btn btn--medium u-fullwidth contact-btn">Contact me</a>
                    </div>
                </div> <!-- end contact-bottom -->

            </section> <!-- end contact -->

        </main> <!-- end s-content -->


        <!-- ## footer
        ================================================== -->
        <footer class="s-footer">

            <div class="row">
                <div class="column ss-copyright">
                    <span>© Copyright herdialfachri</span>
                    <span>Design by <a href="https://www.styleshout.com/">StyleShout</a> Distribution By <a href="https://themewagon.com">Themewagon</a></span>
                </div>

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M11 2.206l-6.235 7.528-.765-.645 7.521-9 7.479 9-.764.646-6.236-7.53v21.884h-1v-21.883z" />
                        </svg>
                    </a>
                </div>
            </div>

        </footer> <!-- end s-footer -->

    </div> <!-- end -s-pagewrap -->


    <!-- Java Script
    ================================================== -->
    <script src="main/js/plugins.js"></script>
    <script src="main/js/main.js"></script>

</body>

</html>