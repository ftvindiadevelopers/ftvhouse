// ========================================================================= //
// Scroll to Top Script
// ========================================================================= //
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("#scroll").fadeIn();
    } else {
      $("#scroll").fadeOut();
    }
  });
  $("#scroll").click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      600
    );
    return false;
  });
});


// 

gsap.registerPlugin(ScrollTrigger);
ScrollTrigger.matchMedia({
    // desktop
    "(min-width: 768px)": function() {
        let banner = gsap.timeline({
            scrollTrigger: {
                trigger: ".body_page",
                start: "top 0%",
                // end: "bottom 100%",
                endTrigger: ".footer",
                // markers:true,
                // pin:true,
                stagger: 4,
                scrub: 4,
                duration: 5,
            },
        });

        banner.fromTo(
            ".body_page", {
                backgroundSize: "200%",
            }, {
                backgroundSize: "100%",
            }
        );
    }
});
// 
let banner1 = gsap.timeline({
    scrollTrigger: {
        trigger: ".heading_anim",
        start: "bottom 100%",
        end: "top 5%",
        // markers: true,
        toggleActions: "restart reverse restart complete",
        scrub: 4
    },
})
banner1.fromTo(
    ".heading_anim", {
        opacity: 0,
        scale: 0,
    }, {
        opacity: 1,
        scale: 1,
    }
);
let banner2 = gsap.timeline({
    scrollTrigger: {
        trigger: ".heading_anim1",
        start: "bottom 100%",
        end: "top 5%",
        // markers: true,
        toggleActions: "restart reverse restart complete",
        scrub: 4
    },
})
banner2.fromTo(
    ".heading_anim1", {
        opacity: 0,
        scale: 0,
    }, {
        opacity: 1,
        scale: 1,
    }
);
let banner3 = gsap.timeline({
    scrollTrigger: {
        trigger: ".heading_anim2",
        start: "bottom 100%",
        end: "top 5%",
        // markers: true,
        toggleActions: "restart reverse restart complete",
        scrub: 4
    },
})
banner3.fromTo(
    ".heading_anim2", {
        opacity: 0,
        scale: 0,
    }, {
        opacity: 1,
        scale: 1,
    }
);
let banner4 = gsap.timeline({
    scrollTrigger: {
        trigger: ".heading_anim3",
        start: "bottom 100%",
        end: "top 5%",
        // markers: true,
        toggleActions: "restart reverse restart complete",
        scrub: 4
    },
})
banner4.fromTo(
    ".heading_anim3", {
        opacity: 0,
        scale: 0,
    }, {
        opacity: 1,
        scale: 1,
    }
);
let banner5 = gsap.timeline({
    scrollTrigger: {
        trigger: ".heading_anim4",
        start: "bottom 100%",
        end: "top 5%",
        // markers: true,
        toggleActions: "restart reverse restart complete",
        scrub: 4
    },
})
banner5.fromTo(
    ".heading_anim4", {
        opacity: 0,
        scale: 0,
    }, {
        opacity: 1,
        scale: 1,
    }
);
let heading1 = gsap.timeline({
    scrollTrigger: {
        trigger: ".subheading_anim",
        start: "bottom 100%",
        end: "top 5%",
        // markers: true,
        toggleActions: "restart reverse restart complete",
        scrub: 4
    },
})
heading1.fromTo(
    ".subheading_anim", {
        // opacity: 0,
        y: 100,
    }, {
        y: 0,
    }
);
let heading2 = gsap.timeline({
    scrollTrigger: {
        trigger: ".subheading_anim1",
        start: "bottom 100%",
        end: "top 5%",
        // markers: true,
        toggleActions: "restart reverse restart complete",
        scrub: 4
    },
})
heading2.fromTo(
    ".subheading_anim1", {
        // opacity: 0,
        y: 100,
    }, {
        y: 0,
    }
);
let heading3 = gsap.timeline({
    scrollTrigger: {
        trigger: ".subheading_anim2",
        start: "bottom 100%",
        end: "top 5%",
        // markers: true,
        toggleActions: "restart reverse restart complete",
        scrub: 4
    },
})
heading3.fromTo(
    ".subheading_anim2", {
        // opacity: 0,
        y: 100,
    }, {
        y: 0,
    }
);



