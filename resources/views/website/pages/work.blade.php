<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords"
        content="Fox Vista|Foxvista|Foxvista|App Development company in Trivandrum|Website development company in Trivandrum|Best app development Company in Trivandrum|Best Webdesigning Company in Trivandrum|Best Web Development company in Trivandrum|Best App Development company in Kerala|Best Web development company in Kerala|Digital Marketing Agency In Trivandrum|Ui/Ux Development in Trivandrum|Product designing In Trivandrum" />
    <meta name="description"
        content="Foxvista - The Best Company in Trivandrum Focusing on App Development,Web development,Web Designing, Ui /Ux & Digital Marketing. Best Web Development Company in Trivandrum,Best App Development Company in Trivandrum,Best Web designing Company in Trivandrum,Best Digital Marketing Service in Trivandrum" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/FoxVIsta_FavIcon.svg') }}" />
    <title>Fox Vista | See The Future</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .swiper {
            width: 100%;
            height: 600px;
            margin-right: 0;
            align-items: center;
        }

        .swiper-wrapper {
            display: flex;
            align-items: center;
            counter-reset: list-slider;
        }

        .swiper-slide {
            position: relative;
            height: 90%;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            counter-increment: list-slider;
            font-size: 18px;
            opacity: 1;
            transition: opacity 600ms ease;
            cursor: grab;
        }

        .swiper-slide::before {
            content: "0" counter(list-slider);
            display: block;
            position: absolute;
            width: fit-content;
            left: 0;
            top: 0;
            font-size: 50px;
            font-weight: 600;
            line-height: 1;
            color: #ffffff;
            transform: scale(0.5);
            opacity: 0;
            z-index: -1;
            pointer-events: none;
            transition: all 350ms ease;
            background: #ff5906;
            border-radius: 118px;
            padding: 31px;
            z-index: 9;
        }

        .swiper-slide-active::before {
            opacity: 1;
            transform: scale(1);
        }

        .swiper-slide-active .c-swiper__text {
            opacity: 1;
        }

        .swiper-slide-active .c-swiper__title,
        .swiper-slide-active .c-swiper__link {
            transform: translateY(0);
        }

        .swiper-slide-prev {
            opacity: 0;
        }

        .swiper-slide-next {
            opacity: 0.5;
        }

        .c-swiper__text {
            opacity: 0;
            width: 300px;
            height: 250px;
            position: absolute;
            /* top: 40%; */
            left: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            transition: opacity 350ms ease;
            background: #101010;
            padding: 20px;
            height: fit-content;
            bottom: 0;
            border-radius: 15px;
            gap: 15px;
        }

        .c-swiper__title {
            max-height: 100%;
            font-size: 55px;
            font-weight: 600;
            text-align: left;
            pointer-events: none;
            transition: transform 500ms ease;
            transition-delay: 100ms;
            transform: translateY(-25%);
            z-index: 1;
            color: #fff;
            line-height: 1.2;
        }

        .c-swiper__link {
            position: relative;
            /* max-width: 100px; */
            color: #fff;
            text-decoration: none;
            transform: translateY(25%);
            transition: transform 500ms ease;
            transition-delay: 200ms;
            font-size: 16px;
            width: fit-content;
        }

        .c-swiper__link::after {
            content: "";
            height: 2px;
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            background-color: #fff;
            transition: width 0.3s ease;
        }

        .c-swiper__link:hover::after {
            width: 50%;
        }

        .c-swiper__image-container {
            width: 90%;
            height: 80%;
            overflow: hidden;
        }

        .c-swiper__image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-pagination-bullet {
            width: 36px;
            height: 3px;
            background-color: #ff5906;
            border-radius: 0;
        }
    </style>
</head>

<body class="bg-[#F8F8F8] relative">
    <div class="fixed z-[999] w-full h-screen flex items-center justify-center bg-black" id="loadingDiv">
        <div class="typing-indicator">
            <div class="typing-circle"></div>
            <div class="typing-circle"></div>
            <div class="typing-circle"></div>
            <div class="typing-shadow"></div>
            <div class="typing-shadow"></div>
            <div class="typing-shadow"></div>
        </div>
    </div>

    <div class="container bg-transparent">
        <header class="main-tool-bar z-[99] w-full flex items-center justify-between">
            <div class="flex items-center justify-between w-full py-3">
                <a href="{{ route('home') }}">
                    <div class="w-[2.5rem] md:w-[3rem]" alt="">
                        <svg width="65" height="65" viewBox="0 0 34 34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1367_7243)">
                                <path
                                    d="M5.01239 29.0947V28.5637L5.01715 27.6152H4V30.9972H5.01239V29.9207H5.73518V29.0947H5.01239Z"
                                    fill="#EEEEEE" />
                                <path d="M6.59364 27.6143H5.73438V28.5412H6.59364V27.6143Z" fill="#FF5906" />
                                <path
                                    d="M6.75586 29.3028C6.75586 28.3321 7.50008 27.6143 8.51009 27.6143C9.52009 27.6143 10.2635 28.3274 10.2635 29.3028C10.2635 30.2783 9.5193 30.9914 8.51009 30.9914C7.50087 30.9914 6.75586 30.2735 6.75586 29.3028ZM9.52724 29.3219C9.52724 28.7193 9.09324 28.2844 8.51009 28.2844C7.92693 28.2844 7.49294 28.7185 7.49294 29.3219C7.49294 29.9253 7.92693 30.3594 8.51009 30.3594C9.09324 30.3594 9.52724 29.9253 9.52724 29.3219Z"
                                    fill="#EEEEEE" />
                                <path
                                    d="M12.8901 30.9906L12.1142 29.7075L11.3477 30.9906H10.4258L11.5215 29.2687L10.4258 27.6143H11.408L12.1324 28.8155L12.8473 27.6143H13.7446L12.71 29.2448L13.7478 30.9906H12.8893H12.8901Z"
                                    fill="#EEEEEE" />
                                <path
                                    d="M18.6992 27.6143L18.3159 28.7034H19.3442L19.7306 27.6143H18.6992ZM17.7328 30.3459L16.7331 27.6143H15.6953L16.8894 30.9962H18.5294L19.0879 29.4221H18.0597L17.732 30.3459H17.7328Z"
                                    fill="#EEEEEE" />
                                <path d="M20.0446 27.6143H20.8229L20.8213 30.9962H20.043L20.0446 27.6143Z"
                                    fill="#EEEEEE" />
                                <path
                                    d="M22.5192 31.0004C21.8336 31.0004 21.3052 30.6402 21.2949 30.0153H22.0042C22.0233 30.2801 22.1978 30.4558 22.5049 30.4558C22.8119 30.4558 23.0015 30.2904 23.0015 30.0535C23.0015 29.3388 21.3005 29.7697 21.3052 28.5716C21.3052 27.9754 21.7876 27.6152 22.4676 27.6152C23.1475 27.6152 23.6061 27.9611 23.649 28.5573H22.9214C22.9071 28.3395 22.7326 28.1694 22.4485 28.1646C22.1891 28.155 21.9947 28.283 21.9947 28.5525C21.9947 29.2156 23.6863 28.8459 23.6863 30.0106C23.6863 30.5313 23.2705 31.0004 22.5192 31.0004Z"
                                    fill="#EEEEEE" />
                                <path d="M24.6954 28.259H23.8496V27.6143H26.3155V28.259H25.4697V30.997H24.6954V28.259Z"
                                    fill="#EEEEEE" />
                                <path
                                    d="M28.7357 30.2091H27.3258L26.9918 30.9962H26.0762L27.5916 27.6143H28.4778L29.998 30.9962H29.0713L28.7349 30.2091H28.7357ZM28.5476 29.5994L28.0311 28.2407L27.5194 29.5994H28.5476ZM28.7373 30.2131L29.9988 30.9962Z"
                                    fill="#EEEEEE" />
                                <path
                                    d="M26.7254 5.92969V15.073C26.7254 15.5095 26.5588 15.9276 26.2621 16.2361L20.9081 21.8051L17.0117 17.2163L26.7254 5.92969Z"
                                    fill="#E5E5E5" />
                                <path
                                    d="M20.9126 21.8001L16.8709 25.9214L13.0404 21.7874L7.86417 16.2009C7.58172 15.8964 7.42383 15.4893 7.42383 15.0664L7.45001 5.93262L16.9979 17.1875L20.8816 21.7651L20.911 21.8001H20.9126Z"
                                    fill="#505050" />
                                <path opacity="0.23" d="M17.0117 17.2158L17.7694 16.335L20.9129 21.7998"
                                    fill="black" />
                                <path
                                    d="M16.7227 16.0818L18.5054 10.3267L21.5601 9.25429L22.2638 7.31925L23.5785 4.08915L24.049 3L20.6167 7.995L17.263 9.09449L16.7227 16.0818Z"
                                    fill="#FF5906" />
                                <path d="M24.0496 3L22.4707 5.9272L21.9883 8.07848L24.0496 3Z" fill="#EAEAEA" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1367_7243">
                                    <rect width="26" height="28" fill="white" transform="translate(4 3)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </a>
                <button class="open-icon md:hidden">
                    <svg width="40" height="40" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="4">
                            <path d="M7.94971 11.9497H39.9497" />
                            <path d="M7.94971 23.9497H39.9497" />
                            <path d="M7.94971 35.9497H39.9497" />
                        </g>
                    </svg>
                </button>
                <div
                    class="bg-white md:bg-transparent w-full top-14 md:top-0 hidden md:flex flex-col md:flex-row items-center justify-center gap-5">
                    <a href="{{ route('home') }}" class="hover:text-white font-sans text-[#505050]">Home</a>
                    <a href="{{ route('services') }}" class="hover:text-white font-sans text-[#505050]">Services</a>
                    <a href="{{ route('work') }}" class="text-white font-sans text-[#505050]">Works</a>
                    <a href="{{ route('about') }}" class="hover:text-white font-sans text-[#505050]">About</a>
                    <a href="{{ route('contact') }}" class="hover:text-white font-sans text-[#505050]">Contact</a>
                </div>
                <a href="{{ route('contact') }}"
                    class="hidden md:block text-white font-sans md:w-[200px] lg:w-[150px]">Ask for a
                    quote</a>
            </div>
            <!-- mobile menu  -->
            <div id="overlay"
                class="md:hidden fixed top-0 left-0 z-[9999] flex items-center h-screen w-full bg-black text-white">
                <button class="absolute right-5 top-5 close-icon">
                    <svg width="40" height="40" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#fff" fill-rule="evenodd"
                            d="M4.28 3.22a.75.75 0 0 0-1.06 1.06L6.94 8l-3.72 3.72a.75.75 0 1 0 1.06 1.06L8 9.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L9.06 8l3.72-3.72a.75.75 0 0 0-1.06-1.06L8 6.94z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <nav>
                    <a href="{{ route('home') }}" class="hover:text-white block m-10 text-3xl  text-[#505050]">Home</a>
                    <a href="{{ route('services') }}"
                        class="hover:text-white block m-10 text-3xl text-[#505050]">Services</a>
                    <a href="{{ route('work') }}" class="text-white block m-10 text-3xl text-[#505050]">Works</a>
                    <a href="{{ route('about') }}"
                        class="hover:text-white block m-10 text-3xl font-sans text-[#505050]">About</a>
                    <a href="{{ route('contact') }}"
                        class="hover:text-white block m-10 text-3xl font-sans text-[#505050]">Contact</a>
                </nav>
            </div>
        </header>
    </div>


    <div id="smooth-wrapper">
        <div id="smooth-content" class="overflow-visible w-100">
            <!-- hero  -->

            <div class="bg-primary h-[70vh] relative overflow-hidden pt-10">
                <div class="container h-[70vh] flex items-center">
                    <h5
                        class="max-w-[200px] md:max-w-[400px] my-auto font-semibold md:flex flex-col text-white font-sans text-[2rem] md:text-[2.2rem] lg:text-[2.9rem] xl:text-[3.7rem] lg:leading-relaxed">
                        Experience Our Service
                    </h5>
                </div>
            </div>

            <div class="swiper-hotels-container pt-10 md:pt-24 pb-16">
                <div class="swiper w-full h-[600px] mr-0 items-center" id="js-swiper-hotels">
                    <div class="swiper-wrapper flex items-center counter-reset-list-slider">
                        <!-- ITEMS -->
                        @foreach ($projects as $project)
                            <div class="swiper-slide fade-in-section">
                                <div class="c-swiper__text">
                                    <a href="{{ route('work.details', ['id' => $project->id]) }}"
                                        class="c-swiper__link">
                                        <div class="c-swiper__title">{{ @$project->title }}</div>
                                        {{ $project->section }}
                                </div>
                                </a>

                                <div class="c-swiper__image-container">
                                    <img src="{{ asset('uploads/projects' . '/' . @$project->thumbnail) }}"
                                        alt="" />
                                </div>
                            </div>
                        @endforeach
                        {{-- <!-- ITEM 2 -->
                        <div class="swiper-slide fade-in-section">
                            <div class="c-swiper__text">
                                <div class="c-swiper__title">Hotel Urban</div>

                                <a href="#" class="c-swiper__link">View Details</a>
                            </div>

                            <div class="c-swiper__image-container">
                                <img src="https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                    alt="" />
                            </div>
                        </div>

                        <!-- ITEM 3 -->
                        <div class="swiper-slide fade-in-section">
                            <div class="c-swiper__text">
                                <div class="c-swiper__title">Hotel Adults</div>

                                <a href="#" class="c-swiper__link">View Details</a>
                            </div>

                            <div class="c-swiper__image-container">
                                <img src="https://images.pexels.com/photos/6474917/pexels-photo-6474917.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                    alt="" />
                            </div>
                        </div>

                        <!-- ITEM 4 -->
                        <div class="swiper-slide">
                            <div class="c-swiper__text">
                                <div class="c-swiper__title">Hotel Beach</div>

                                <a href="#" class="c-swiper__link">View Details</a>
                            </div>

                            <div class="c-swiper__image-container">
                                <img src="https://images.pexels.com/photos/1591361/pexels-photo-1591361.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                    alt="" />
                            </div>
                        </div> --}}
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer  -->
    <footer class="fade-in-section bg-primary will-change-transform" data-speed="1.1">
        <div class="container py-12">
            <div class="md:flex justify-between items-end mb-10 md:mb-20">
                <div class="flex flex-col items-center md:items-start gap-3">
                    <img src="{{ asset('images/logo.svg') }}" class="w-28 md:w-52" alt="" />
                    <nav class="flex justify-between md:justify-center gap-4 mb-8 md:mb-3">
                        <a href="#" class="text-white font-sans text-sm font-medium">Home</a>
                        <a href="#" class="text-white font-sans text-sm font-medium">Service</a>
                        <a href="#" class="text-white font-sans text-sm font-medium">Works</a>
                        <a href="#" class="text-white font-sans text-sm font-medium">Contact</a>
                    </nav>
                </div>

                <div class="text-center">
                    <p class="text-xl md:text-2xl lg:text-3xl font-normal text-white mb-3">
                        Start a New Project......
                    </p>
                    <p class="text-2xl md:text-3xl lg:text-4xl font-bold text-white uppercase">
                        Let’s Talk
                    </p>
                </div>
            </div>
            <div class="text-white font-sans text-sm font-medium text-center">
                © FoxVista2023 | All rights reserved. | <a href="#">Privacy Policy</a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>
    <script src="{{ asset('src/script.js') }}"></script>
    <script src="{{ asset('src/sidebar.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper("#js-swiper-hotels", {
            effect: "coverflow",
            slidesPerView: 2,
            spaceBetween: 20,
            centeredSlides: true,

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            mousewheel: {
                invert: false,
                speed: 800,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1.5,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                1440: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
            },
        });

        gsap.registerPlugin(ScrollTrigger);
        ScrollTrigger.create({
            trigger: "#js-swiper-hotels", // Target the Swiper section
            start: "top 10%", // Pin when the section reaches the top
            end: "+=90%%", // How long the pin should last
            pin: true, // Pin the section in place
            scrub: true, // Smooth scrolling effect
            markers: false, // Enable markers for debugging (set to true if needed)
        });
    </script>
</body>

</html>