<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="Fox Vista|Foxvista|Foxvista|App Development company in Trivandrum|Website development company in Trivandrum|Best app development Company in Trivandrum|Best Webdesigning Company in Trivandrum|Best Web Development company in Trivandrum|Best App Development company in Kerala|Best Web development company in Kerala|Digital Marketing Agency In Trivandrum|Ui/Ux Development in Trivandrum|Product designing In Trivandrum">
    <meta name="description"
        content="Foxvista - The Best Company in Trivandrum Focusing on App Development,Web development,Web Designing, Ui /Ux & Digital Marketing. Best Web Development Company in Trivandrum,Best App Development Company in Trivandrum,Best Web designing Company in Trivandrum,Best Digital Marketing Service in Trivandrum">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">
    <title>Fox Vista || Designing & Developing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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

    <div class="container  bg-transparent">
        <header class="main-tool-bar z-[99]  w-full flex items-center justify-between ">
            <div class="flex items-center justify-between w-full py-3">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" class="w-[2.5rem] md:w-[3rem]" alt="">
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
                    class=" bg-white md:bg-transparent w-full  top-14 md:top-0 hidden  md:flex flex-col md:flex-row items-center justify-center gap-5 ">
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
                    <a href="{{ route('home') }}" class="hover:text-white font-sans text-[#505050]  ">Home</a>
                    <a href="{{ route('services') }}" class="text-white font-sans">Services</a>
                    <a href="{{ route('work') }}" class="hover:text-white font-sans text-[#505050] ">Works</a>
                    <a href="{{ route('about') }}" class="hover:text-white font-sans text-[#505050] ">About</a>
                    <a href="{{ route('contact') }}" class="hover:text-white font-sans text-[#505050] ">Contact</a>
                </div>
                <a href="{{ route('contact') }}"
                    class="hidden md:block text-white font-sans md:w-[200px] lg:w-[150px]">Ask for a
                    quote</a>
            </div>
            <!-- mobile menu  -->
            <div id="overlay"
                class="md:hidden fixed top-0 left-0 z-[9999] flex items-center h-screen w-full bg-black text-white">
                <button class="absolute right-5 top-5 close-icon ">
                    <svg width="40" height="40" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#fff" fill-rule="evenodd"
                            d="M4.28 3.22a.75.75 0 0 0-1.06 1.06L6.94 8l-3.72 3.72a.75.75 0 1 0 1.06 1.06L8 9.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L9.06 8l3.72-3.72a.75.75 0 0 0-1.06-1.06L8 6.94z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <nav>
                    <a href="{{ route('home') }}" class="hover:text-white block m-10 text-3xl text-[#505050]">Home</a>
                    <a href="{{ route('services') }}" class="text-white block m-10 text-3xl">Services</a>
                    <a href="{{ route('work') }}"
                        class="hover:text-white block m-10 text-3xl text-[#505050]">Works</a>
                    <a href="{{ route('about') }}"
                        class="hover:text-white block m-10 text-3xl font-sans text-[#505050]">About</a>
                    <a href="{{ route('contact') }}"
                        class="hover:text-white block m-10 text-3xl font-sans text-[#505050]">Contact</a>
                </nav>
            </div>
        </header>

    </div>

    <div id="smooth-wrapper">
        <div id="smooth-content" class="overflow-visible w-100  ">
            <!-- hero  -->

            <div class="bg-primary h-[70vh] relative overflow-hidden pt-10">
                <div class="container h-[70vh] flex items-center ">
                    <h5
                        class="max-w-[200px] md:max-w-[400px] my-auto font-semibold md:flex flex-col text-white font-sans text-[2rem] md:text-[2.2rem] lg:text-[2.9rem] xl:text-[3.7rem] lg:leading-relaxed">
                        Experience
                        Our Service</h5>
                </div>

            </div>

            <div class="container py-10 md:py-16">
                <div class="grid md:grid-cols-2 grid-rows-2 gap-5">
                    <a href="{{ route('branding') }}"
                        class="rounded-xl md:rounded-3xl overflow-hidden relative fade-in-section will-change-transform"
                        data-speed="0.5">
                        <img src="{{ asset('images/services/img1.png') }}" class="w-full" alt="">
                        <span
                            class="text-white text-2xl font-semibold font-sans absolute top-1/2 left-8">Branding</span>
                    </a>
                    <a href="{{ route('usability') }}"
                        class="rounded-xl md:rounded-3xl overflow-hidden relative fade-in-section will-change-transform"
                        data-speed="0.7">
                        <img src="{{ asset('images/services/img2.png') }}" class="w-full" alt="">
                        <span
                            class="text-white text-2xl font-semibold font-sans absolute top-1/2 left-8">Usability</span>
                    </a>
                    <a href="{{ route('technology') }}"
                        class="rounded-xl md:rounded-3xl overflow-hidden relative fade-in-section will-change-transform"
                        data-speed="0.9">
                        <img src="{{ asset('images/services/img3.png') }}" class="w-full" alt="">
                        <span
                            class="text-white text-2xl font-semibold font-sans absolute top-1/2 left-8">Technology</span>
                    </a>
                    <a href="{{ route('digital.marketing') }}"
                        class="rounded-xl md:rounded-3xl overflow-hidden relative fade-in-section will-change-transform"
                        data-speed="1">
                        <img src="{{ asset('images/services/img4.png') }}" class="w-full" alt="">
                        <span class="text-white text-2xl font-semibold font-sans absolute top-1/2 left-8">Digital
                            Marketing</span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- footer  -->
    <footer class="fade-in-section bg-primary will-change-transform" data-speed="1.1">
        <div class="container py-12">
            <div class="md:flex justify-between items-end mb-10 md:mb-20">
                <div class="flex flex-col items-center md:items-start gap-3">
                    <img src="{{ asset('images/logo.svg') }}" class="w-28 md:w-52" alt="">
                    <nav class=" flex justify-between md:justify-center gap-4 mb-8 md:mb-3 ">
                        <a href="#" class="text-white font-sans text-sm font-medium">Home</a>
                        <a href="#" class="text-white font-sans text-sm font-medium">Service</a>
                        <a href="#" class="text-white font-sans text-sm font-medium">Works</a>
                        <a href="#" class="text-white font-sans text-sm font-medium">Contact</a>
                    </nav>
                </div>

                <div class="text-center ">
                    <p class="text-xl md:text-2xl lg:text-3xl font-normal text-white mb-3">Start a New Project......
                    </p>
                    <p class="text-2xl md:text-3xl lg:text-4xl font-bold text-white uppercase">Let’s Talk</p>
                </div>
            </div>
            <div class=" text-white font-sans text-sm font-medium text-center">
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


</body>

</html>
