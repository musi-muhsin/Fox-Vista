// mobile screen menu 
(function($) {
    if (window.angular) return;
    var isOpen = false;
  
    gsap.set("#overlay", { y: "100vh" });
    var overlayAnim = gsap.to("#overlay", {
        duration: 1,
        ease: "power4.out",
        y: 0,
        autoAlpha: 1,   
        paused: true
    });
  
    $(".open-icon, .close-icon").on("click", function() {
        isOpen = !isOpen; //toggle
  
        if (isOpen) {
            overlayAnim.play();
  
            gsap.fromTo("#overlay nav a", {
                xPercent: -100,
                opacity: 0
            }, {
                duration: 2,
                opacity: 1,
                xPercent: 0,
                stagger: 0.1,
                ease: "power4.out",
            });
  
        } else {
            overlayAnim.reverse();
        }
    });
  })(jQuery);