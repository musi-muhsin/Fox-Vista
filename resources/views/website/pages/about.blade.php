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
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
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
        <header class="main-tool-bar z-[99]  w-full flex items-center justify-between">
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
                    <a href="{{ route('services') }}" class="hover:text-white font-sans  text-[#505050] ">Services</a>
                    <a href="{{ route('work') }}" class="hover:text-white font-sans  text-[#505050] ">Works</a>
                    <a href="{{ route('about') }}" class="text-white font-sans">About</a>
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
                    <a href="{{ route('services') }}"
                        class="hover:text-white block m-10 text-3xl text-[#505050]">Services</a>
                    <a href="{{ route('work') }}"
                        class="hover:text-white block m-10 text-3xl text-[#505050]">Works</a>
                    <a href="{{ route('about') }}" class="text-white block m-10 text-3xl">About</a>
                    <a href="{{ route('contact') }}"
                        class="hover:text-white block m-10 text-3xl font-sans text-[#505050]">Contact</a>
                </nav>
            </div>
        </header>

    </div>

    <div id="smooth-wrapper">
        <div id="smooth-content" class="overflow-visible w-100  ">
            <!-- hero  -->

            <div class="bg-primary h-screen relative overflow-hidden ">
                <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
                    <source src="{{ asset('images/hero-main.mp4') }}" type="video/mp4">
                </video>
                <div class="container my-auto h-screen grid items-center">
                    <div class="flex flex-col gap-16 md:gap-20  will-change-transform" data-speed="clamp(0.5)">
                        <h1
                            class="hidden md:flex flex-col text-white font-sans text-[1.8rem] sm:text-[2rem] md:text-[2.2rem] lg:text-[2.9rem] xl:text-[3.7rem] lg:leading-relaxed">
                            <span class="line h-[85px] md:h-[70px] xl:h-[100px] relative overflow-hidden">
                                <span class="absolute">
                                    When you need a team that's
                                </span>
                            </span>
                            <span class="line h-[85px] md:h-[70px] xl:h-[100px] relative overflow-hidden">
                                <span class="absolute">
                                    always got your back.
                                </span>
                            </span>
                        </h1>
                        <h1 class="flex md:hidden text-white font-sans text-[2.5rem] leading-[1.2] md:leading-relaxed">
                            When You Need A Team That's
                            Always Got Your Back.
                        </h1>
                        <div class="">
                            <p
                                class="hidden md:flex flex-col md:text-left text-lg md:text-2xl lg:text-3xl font-serif font-normal text-[#f6f6f6] w-[16rem] md:w-screen lg:max-w-3xl lg:ml-auto ">
                                <span class="line h-[42px] relative overflow-hidden">
                                    <span class="absolute ">
                                        We're your partners in success, and we're
                                    </span>
                                </span>
                                <span class="line h-[42px] relative overflow-hidden">
                                    <span class="absolute ">
                                        committed to helping you achieve your
                                    </span>
                                </span>
                                <span class="line h-[42px] relative overflow-hidden">
                                    <span class="absolute ">
                                        goals.
                                    </span>
                                </span>
                            </p>
                            <p class="flex md:hidden text-2xl font-serif font-normal text-[#d3d3d3]">
                                We're your partners in success, and we're committed to helping you achieve your goals.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container">
                <div class=" my-16 will-change-transform" data-speed="1.1">
                    <div class="grid md:grid-cols-2 gap-3 md:gap-5">
                        <div class="flex flex-col gap-3 md:gap-5">
                            <img src="{{ asset('images/img-1.png') }}" class="rounded-lg" alt="">
                            <div class="grid grid-cols-3 gap-3 md:gap-5">
                                <div class="col-span-1">
                                    <div class="grid grid-cols-2 gap-3 md:gap-5 ">
                                        <div class="grid grid-rows-2 gap-3 md:gap-5">
                                            <a target="blank"
                                                href="https://www.instagram.com/fox__vista?igsh=MTc3OW90bjh3b3hvNA==">
                                                <img src="{{ asset('images/instagram-img.png') }}"
                                                    class="rounded-lg w-full" alt="">
                                            </a>

                                            <a target="blank" href="https://twitter.com/Fox__Vista">
                                                <img src="{{ asset('images/twitter-img.png') }}"
                                                    class="rounded-lg w-full" alt="">
                                            </a>

                                        </div>
                                        <div class="grid grid-rows-2 gap-3 md:gap-5">
                                            <a target="blank" href="https://www.behance.net/foxvista">
                                                <img src="{{ asset('images/behance-img.png') }}"
                                                    class="rounded-lg w-full" alt="">
                                            </a>
                                            <a target="blank" href="https://www.linkedin.com/company/foxvista/">
                                                <img src="{{ asset('images/linked.png') }}" class="rounded-lg w-full"
                                                    alt="">
                                            </a>

                                        </div>
                                        <div class="col-span-2 bg-[#E5E5E5] rounded-lg p-3 flex flex-col self-stretch">
                                            <p class="ext-2xl md:text-4xl font-medium font-serif ">1</p>
                                            <div class="flex flex-col gap-3">
                                                <p class="text-xl md:text-2xl font-medium font-serif mb-8">Office</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-span-2">
                                    <div
                                        class="bg-[#FF5906] rounded-lg text-white p-3 flex flex-col justify-between h-full">
                                        <p class="text-2xl md:text-4xl font-medium font-serif ">10</p>
                                        <div class="flex flex-col gap-2">
                                            <p class="text-xl md:text-2xl font-medium font-serif mb-3">Team members</p>
                                            <p
                                                class="text-sm md:text-[1rem] leading-6 font-serif font-thin mb-0 md:mb-8">
                                                Brilliant minds come together, sparking creativity and working as a team
                                                to overcome any challenge.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 md:gap-5">
                            <div class="grid md:grid-cols-2 gap-3 md:gap-5">
                                <div class="bg-primary rounded-lg text-white p-3 flex flex-col justify-between h-full">
                                    <p class="text-2xl md:text-4xl font-medium font-serif mb-5">100%</p>
                                    <div class="flex flex-col gap-1">
                                        <p class="text-xl md:text-2xl font-medium font-serif mb-3">Dedication</p>
                                        <p
                                            class="text-sm md:text-[1rem] md:mb-3 leading-5 font-serif font-light text-[#BEBEBE]">
                                            With sweat as their conductor and grit as their score, they play on, their
                                            dedication a relentless melody driving them towards the final triumphant
                                            chord.</p>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-3 md:gap-5 ">
                                    <div class="col-span-2 bg-[#E5E5E5] rounded-lg p-3 flex flex-col self-stretch">
                                        <p class="text-2xl md:text-4xl mb-6 font-medium font-serif ">1</p>
                                        <div class="flex flex-col ">
                                            <p class="text-xl md:text-2xl font-medium font-serif">Mission</p>
                                            <p class="text-sm md:text-md leading-6 font-serif">We don't just build
                                                brands,
                                                we build futures.</p>
                                        </div>
                                    </div>
                                    <div class="col-span-2 bg-[#E5E5E5] rounded-lg p-3 flex flex-col self-stretch">
                                        <p class="ext-2xl md:text-4xl font-medium mb-16 font-serif">100%</p>
                                        <div class="flex flex-col gap-3">
                                            <p class="text-xl md:text-2xl font-medium font-serif">Creativity</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <img src="{{ asset('images/img-2.png') }}" class="rounded-lg" alt="">
                        </div>
                    </div>
                </div>

                <div class=" md:mb-10 will-change-transform" data-speed="1.1">
                    <!-- <div class="fade-in-section pt-8 md:py-8 flex flex-col md:items-center gap-6 mb-5 md:mb-16">
                <div class="text-md md:text-xl font-medium text-primary font-serif">
                   MEET THE TEAM
                </div>
                <p class="text-3xl md:text-4xl lgtext-5xl font-medium text-primary max-w-3xl md:text-center ">
                    You need the best team on your side.
                    So we made one for you
                </p>
            </div> -->

                    <!-- <div class="md:grid grid-cols-3 fade-in-section gap-0 mb-24">
                <div class="bg-[#D9D9D9] h-[60vh] md:h-[80vh] w-full overflow-hidden relative group">
                  <img src="/images/about-img-1.png" class="ml-auto h-[80vh] md:h-auto" alt="">
                  <div class="absolute w-[64%] p-3 top-0 z-50 md:-left-80 transition duration-300 delay-150 md:opacity-0 md:group-hover:left-0 group-hover:opacity-100">
                    <div class="text-xl font-medium font-sans mb-1 uppercase">Ajay</div>
                    <div class="text-md font-normal text-black/40 font-serif mb-2">Founder/ UI UX Designer</div>
                    <div class="text-sm text-black/80 font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                  </div>
                </div>
                <div class="bg-[#D9D9D9] h-[60vh] md:h-[80vh] w-full overflow-hidden relative group">
                  <img src="/images/about-img-1.png" class="ml-auto h-[80vh] md:h-auto" alt="">
                  <div class="absolute w-[64%] p-3 top-0 z-50 md:-left-80 transition duration-300 delay-150 md:opacity-0 md:group-hover:left-0 group-hover:opacity-100">
                    <div class="text-xl font-medium font-sans mb-1 uppercase">Ajay</div>
                    <div class="text-md font-normal text-black/40 font-serif mb-2">Founder/ UI UX Designer</div>
                    <div class="text-sm text-black/80 font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                  </div>
                </div>
                <div class="bg-[#D9D9D9] h-[60vh] md:h-[80vh] w-full overflow-hidden relative group">
                  <img src="/images/about-img-1.png" class="ml-auto h-[80vh] md:h-auto" alt="">
                  <div class="absolute w-[64%] p-3 top-0 z-50 md:-left-80 transition duration-300 delay-150 md:opacity-0 md:group-hover:left-0 group-hover:opacity-100">
                    <div class="text-xl font-medium font-sans mb-1 uppercase">Ajay</div>
                    <div class="text-md font-normal text-black/40 font-serif mb-2">Founder/ UI UX Designer</div>
                    <div class="text-sm text-black/80 font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                  </div>
                </div>
            </div> -->

                    <div class="md:grid grid-cols-3 gap-16 ">
                        <div class="col-span-1 ">
                            <div class=" fade-in-section flex flex-col mb-5">
                                <span class="text-[#FF5906] text-sm font-sans tracking-[0.2em]">ABOUT FOXVISTA </span>
                                <h4 class="text-3xl md:text-4xl lg:text-5xl font-medium text-primary">Curiosity
                                    <br class="hidden md:block"> & creativity
                                </h4>
                            </div>
                        </div>
                        <div class=" fade-in-section col-span-2">

                            <p class="text-black text-md lg:text-md font-normal mb-5 font-serif">
                                Foxvista is a multi-disciplinary, independently owned design studio. Our work
                                encompasses graphics and identity, strategy and positioning, products and packaging,
                                exhibitions and installations, websites and digital experiences, advertising and
                                communications, data visualizations and typefaces, sound and motion. Our 11 partners are
                                all practicing designers, and whether working collaboratively or independently, they do
                                so in friendship.
                            </p>
                            <p class="text-black text-md lg:text-md font-normal mb-5 font-serif">
                                Our structure is unique. We are the design studio where the owners of the business are
                                the creators of the work and serve as the primary contact for every client. This
                                reflects our conviction that great design cannot happen without passion, intelligence
                                and—above all—personal commitment, and is demonstrated by a portfolio that spans five
                                decades, many industries, and clients of every size.
                            </p>

                        </div>
                    </div>

                </div>
            </div>

            <!--footer-->
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
                            <p class="text-xl md:text-2xl lg:text-3xl font-normal text-white mb-3">Start a New
                                Project......</p>
                            <p class="text-2xl md:text-3xl lg:text-4xl font-bold text-white uppercase">Let’s Talk</p>
                        </div>
                    </div>
                    <div class=" text-white font-sans text-sm font-medium text-center">
                        © FoxVista2023 | All rights reserved. | <a href="#">Privacy Policy</a>
                    </div>

                </div>

            </footer>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <script src="{{ asset('src/script.js') }}"></script>
    <script src="{{ asset('src/script.js') }}"></script>

</body>

</html>
