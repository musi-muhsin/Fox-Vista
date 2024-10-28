<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords"
        content="Fox Vista|Foxvista|Foxvista|App Development company in Trivandrum|Website development company in Trivandrum|Best app development Company in Trivandrum|Best Webdesigning Company in Trivandrum|Best Web Development company in Trivandrum|Best App Development company in Kerala|Best Web development company in Kerala|Digital Marketing Agency In Trivandrum|Ui/Ux Development in Trivandrum|Product designing In Trivandrum" />
    <meta name="description"
        content="Foxvista - The Best Company in Trivandrum Focusing on App Development,Web development,Web Designing, Ui /Ux & Digital Marketing. Best Web Development Company in Trivandrum,Best App Development Company in Trivandrum,Best Web designing Company in Trivandrum,Best Digital Marketing Service in Trivandrum" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}" />
    <title>Fox Vista || Designing & Developing</title>
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
                    <img src="{{ asset('images/logo.png') }}" class="w-[2.5rem] md:w-[3rem]" alt="" />
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
                    <!-- <div class="dropdown py-8">
                  <a href="#" class="hover-group font-sans text-[#505050] flex items-center gap-2 transition">
                    <span class="text">Services</span>
                    <svg class="icon fill-[#505050] " width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 16a1 1 0 0 1-.64-.23l-6-5a1 1 0 1 1 1.28-1.54L12 13.71l5.36-4.32a1 1 0 0 1 1.41.15a1 1 0 0 1-.14 1.46l-6 4.83A1 1 0 0 1 12 16"/>
                    </svg>
                  </a>
                  <div class="dropdown-content absolute px-10 pt-9 pb-5 flex overflow-hidden">
                      <div class="container grid grid-cols-2">
                          <div class="my-auto">
                              <div class="font-sans text-white text-5xl leading-[1.2]">
                                 <span>
                                  Elevate Your
                                 </span>
                                 <span>
                                  Brand Unleash
                                 </span>
                                 <span>
                                  its Inner Superhero
                                 </span>
                              </div>
                            </div>
                            <div class=" grid grid-cols-2 grid-rows-2 gap-5">
                              <div class="flex flex-col gap-4">
                                  <h6 class="text-white font-sans font-semibold text-2xl ">Branding</h6>
                                  <ul class="text-white font-sans flex flex-col gap-2">
                                      <li>Brand Consulting</li>
                                      <li>Brand Identity</li>
                                      <li>Product design</li>
                                      <li>Graphic Design</li>
                                      <li>Motion Graphics</li>
                                  </ul>
                              </div>
                              <div class="flex flex-col gap-4">
                                  <h6 class="text-white font-sans font-semibold text-2xl ">Technology</h6>
                                  <ul class="text-white font-sans flex flex-col gap-2">
                                      <li>Web Development</li>
                                      <li>Mobile App Development</li>
                                      <li>E-commerce</li>
                                  </ul>
                              </div>
                              <div class="flex flex-col gap-4">
                                  <h6 class="text-white font-sans font-semibold text-2xl ">Experience Design</h6>
                                  <ul class="text-white font-sans flex flex-col gap-2">
                                      <li>UI/UX Design</li>
                                      <li>Web Experience</li>
                                      <li>Mobile Experience</li>
                                      <li>Commerce Experience</li>
                                  </ul>
                              </div>
                              <div class="flex flex-col gap-4">
                                  <h6 class="text-white font-sans font-semibold text-2xl ">Digital Marketing</h6>
                                  <ul class="text-white font-sans flex flex-col gap-2">
                                      <li>Search Engine Optimization</li>
                                      <li>Social Media Managment</li>
                                      <li>Performance Marketing</li>
                                      <li>Analytics</li>
                                  </ul>
                              </div>
                         
                            </div>
                      </div>
                 
                  </div>
                </div> -->
                    <a href="{{ route('home') }}" class="hover:text-white font-sans text-[#505050]">Home</a>
                    <a href="{{ route('services') }}" class="hover:text-white font-sans text-[#505050]">Services</a>
                    <a href="{{ route('work') }}" class="text-white font-sans">Works</a>
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
                    <a href="{{ route('home') }}" class="hover:text-white block m-10 text-3xl text-[#505050]">Home</a>
                    <a href="{{ route('services') }}"
                        class="hover:text-white block m-10 text-3xl text-[#505050]">Services</a>
                    <a href="{{ route('work') }}" class="text-white block m-10 text-3xl">Works</a>

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
                                    <div class="c-swiper__title">{{ @$project->title }}</div>

                                    <a href="{{ route('work.details', ['id' => $project->id]) }}"
                                        class="c-swiper__link">View Details</a>
                                </div>

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
    <script src="{{ asset('src/script.js') }}"></script>
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
