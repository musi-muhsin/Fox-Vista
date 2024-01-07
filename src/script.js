
// services dropdown 
// document.addEventListener("DOMContentLoaded", function () {
//     var dropdown = document.querySelector(".dropdown");

//     dropdown.addEventListener("mouseover", function () {
//       var dropdownContent = dropdown.querySelector(".dropdown-content");
//       dropdownContent.style.height = dropdownContent.scrollHeight + "px";
//     });

//     dropdown.addEventListener("mouseout", function () {
//       var dropdownContent = dropdown.querySelector(".dropdown-content");
//       dropdownContent.style.height = "0";
//     });
//   });

// text fade animation 
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
});
// smooth scroll 
gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.create({
  start: 'top -80',
  end: 99999,
  toggleClass: { className: 'main-tool-bar--scrolled', targets: '.main-tool-bar' }
});

const lenis = new Lenis({
  duration: 1.2,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
});

function raf(time) {
  lenis.raf(time);
  ScrollTrigger.update(); // Add this line to update ScrollTrigger
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);
