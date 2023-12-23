document.addEventListener("DOMContentLoaded", function () {
    var dropdown = document.querySelector(".dropdown");

    dropdown.addEventListener("mouseover", function () {
      var dropdownContent = dropdown.querySelector(".dropdown-content");
      dropdownContent.style.height = dropdownContent.scrollHeight + "px";
    });

    dropdown.addEventListener("mouseout", function () {
      var dropdownContent = dropdown.querySelector(".dropdown-content");
      dropdownContent.style.height = "0";
    });
  });


//   window.addEventListener("scroll", function () {
//     var navbar = document.getElementById('navbar');
    
//     if (window.pageYOffset > 0) {
//         navbar.style.position = "fixed";
//         navbar.classList.add('fixedNavbar'); 
//         navbar.classList.remove('staticNavbar');
//     } else {
//         navbar.style.position = "static";
//         navbar.classList.remove('fixedNavbar'); 
//         navbar.classList.add('staticNavbar'); 
//     }
// });

const tl = gsap.timeline();
gsap.set(tl, { opacity: 0, });
tl.from(".line span", 1.8, {
  y:200,
  ease:"power4.out",
  delay: 0.5,
  skewY: 7,
  stagger: {
    amount:0.1
  }
})
// smooth scroll 
gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
ScrollTrigger.normalizeScroll(true)

let smoother = ScrollSmoother.create({
  smooth: 2,
  effects: true,
  normalizeScroll: true
});

ScrollTrigger.create({
  start: 'top -80',
  end: 99999,
  toggleClass: {className: 'main-tool-bar--scrolled', targets: '.main-tool-bar'}
});

// json file 
document.addEventListener("DOMContentLoaded", function () {
  var animation = bodymovin.loadAnimation({
    container: document.getElementById("animation-container"),
    renderer: "svg",
    loop: true,
    autoplay: true,
    path: "../assets/images/Animation - 1698488886741.json", // Path to your JSON animation file
  });
});

document.addEventListener('DOMContentLoaded', function () {
  const fadeInSection = document.querySelectorAll('.fade-in-section');

  fadeInSection.forEach(section => {
      gsap.set(section, { opacity: 0, y: 200 });

      gsap.to(section, {
          opacity: 1,
          y: 0,
          duration: 1,
          ease:"power1.out",
          scrollTrigger: {
              trigger: section,
              start: 'top 100%', // Adjust as needed
              end: '+=100', // Adjust as needed
              scrub: 2, // Smoothly animates the element during scroll
              once: true,
          },
          stagger: {
            amount:0.2
          }
      });
  });
});