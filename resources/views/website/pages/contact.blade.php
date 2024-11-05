<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="Fox Vista|Foxvista|Foxvista|App Development company in Trivandrum|Website development company in Trivandrum|Best app development Company in Trivandrum|Best Webdesigning Company in Trivandrum|Best Web Development company in Trivandrum|Best App Development company in Kerala|Best Web development company in Kerala|Digital Marketing Agency In Trivandrum|Ui/Ux Development in Trivandrum|Product designing In Trivandrum">
    <meta name="description"
        content="Foxvista - The Best Company in Trivandrum Focusing on App Development,Web development,Web Designing, Ui /Ux & Digital Marketing. Best Web Development Company in Trivandrum,Best App Development Company in Trivandrum,Best Web designing Company in Trivandrum,Best Digital Marketing Service in Trivandrum">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">
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
                    <img src="images/logo.png" class="w-[2.5rem] md:w-[3rem]" alt="">
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
                    <a href="{{ route('work') }}" class="hover:text-white font-sans text-[#505050] ">Works</a>
                    <a href="{{ route('about') }}" class="hover:text-white font-sans text-[#505050] ">About</a>
                    <a href="{{ route('contact') }}" class="text-white font-sans">Contact</a>
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
                    <a href="{{ route('about') }}"
                        class="hover:text-white block m-10 text-3xl font-sans text-[#505050]">About</a>
                    <a href="{{ route('contact') }}" class="text-white block m-10 text-3xl">Contact</a>
                </nav>
            </div>
        </header>

    </div>

    <div id="smooth-wrapper">
        <div id="smooth-content" class="overflow-visible w-100  ">
            <!-- hero  -->


            <div class="bg-primary h-[60vh] relative overflow-hidden flex ">
                <div class="absolute right-0 bottom-0">
                    <img src="{{ asset('images/India.svg') }}" alt="">
                </div>

                <h5 class=" container text-white my-auto font-normal text-4xl">CONTACT US</h5>


            </div>

            <div class="container">

                <div class="mt-12 md:mt-24 mb-16 will-change-transform z-50" data-speed="clamp(1)">
                    <div class="fade-in-section flex flex-col gap-6 mb-5 md:mb-16">
                        <p class="text-3xl md:text-4xl lg:text-5xl font-normal text-primary max-w-xl">
                            Get in touch with us.
                            Send a message.
                        </p>
                    </div>
                    <div class=" md:grid grid-cols-3 gap-10 bg-primary md:px-24 md:py-8">
                        <div class="col-span-2 p-3 ">
                            <p class="text-2xl md:text-3xl font-serif font-normal text-white mb-5">
                                Send Us a Message
                            </p>
                            <div class="flex flex-col gap-3 md:grid grid-cols-2 md:gap-5">
                                <div class="flex flex-col gap-1">
                                    <label for=""
                                        class="text-[#929292] text-sm font-normal uppercase">Name</label>
                                    <input type="text" class="bg-[#313131] text-white p-2">
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label for="" class="text-[#929292] text-sm font-normal uppercase">Mail
                                        Id</label>
                                    <input type="text" class="bg-[#313131] text-white p-2">
                                </div>
                                <div class="flex col-span-2 flex-col gap-1">
                                    <label for=""
                                        class="text-[#929292] text-sm font-normal uppercase">Message</label>
                                    <textarea name="" id="" cols="30" rows="10"
                                        class="bg-[#313131] text-white p-2 resize-none"></textarea>
                                </div>
                                <button
                                    class="col-span-2 p-2 w-full text-center bg-[#FF5906] text-white capitalize rounded-full md:rounded-none tracking-wide">Send
                                    a Message</button>
                            </div>
                        </div>
                        <div class="col-span-1 bg-[#F8F8F8] md:bg-transparent pt-5 md:pt-0 ">
                            <p class="text-2xl font-serif md:text-3xl font-normal text-primary md:text-white mb-5">
                                Contact Us
                            </p>
                            <div class="flex flex-col gap-7">
                                <div class="flex flex-col gap-3">
                                    <p class="text-[#636363] md:text-[#929292] text-sm font-normal uppercase">Address
                                    </p>
                                    <p class="text-[#636363] md:text-white text-lg font-normal md:font-medium">SREE
                                        PANKAJ BUILDING, <br>
                                        NO: XVII /77 MAHADEVA NAGAR, PERUVARAM NORTH PARAVUR, <br> PIN : 683513</p>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <p class="text-[#636363] md:text-[#929292] text-sm font-normal uppercase">Email</p>
                                    <p class="text-[#636363] md:text-white text-lg font-normal md:font-medium">
                                        Hello@foxvista.in</p>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <p class="text-[#636363] md:text-[#929292] text-sm font-normal uppercase">Call Us
                                    </p>
                                    <p class="text-[#636363] md:text-white text-lg font-normal md:font-medium">+91 907
                                        456 114</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- map  -->

            <div class="hidden md:flex map">
                <iframe class="absolute w-full bottom-0" width="100%" height="400" frameborder="0"
                    scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas"
                    src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Trivandrum+(trivandrum)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <a href='https://www.acadoo.de/'>Dissertation Ghostwriter</a>
                <script type='text/javascript'
                    src='https://embedmaps.com/google-maps-authorization/script.js?id=39cbfb0990de8811b7b3f07bb5889dc1c0fde55c'>
                </script>
            </div>
            <div class="flex md:hidden">
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0" id="gmap_canvas"
                    src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Trivandrum+(trivandrum)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <a href='https://www.acadoo.de/'></a>
                <script type='text/javascript'
                    src='https://embedmaps.com/google-maps-authorization/script.js?id=39cbfb0990de8811b7b3f07bb5889dc1c0fde55c'>
                </script>
            </div>

            <!-- footer  -->
            <footer class="fade-in-section bg-primary will-change-transform" data-speed="1.1">
                <div class="container py-12">
                    <div class="md:flex justify-between items-end mb-10 md:mb-20">
                        <div class="flex flex-col items-center md:items-start gap-3">
                            <img src="images/logo.svg" class="w-28 md:w-52" alt="">
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

    <script>
        gsap.registerPlugin(ScrollTrigger);
        const containerAnimation = gsap.from(".map", {
            zIndex: -1,
            y: -5,
            duration: 1,
            scrollTrigger: {
                trigger: ".map", // The element to trigger the animation
                start: "center bottom", // When to start the animation
                end: "bottom center", // When to end the animation
                scrub: true, // Smoothly scrub through the animation as you scroll
                pin: true
            },
        });
    </script>
</body>

</html>
