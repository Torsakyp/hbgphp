let scroll = document.body;
//-----------------------------------------------------------------------------
let redot1 = gsap.timeline({
    scrollTrigger: {
        trigger: ".re-1",
        //markers: true,
        toggleClass: 'active',
        start: "-40% 70%",
        end: '120% 78%',
    }
})
let imgre1 = gsap.to(".imgre-1", {
    scrollTrigger: {
        trigger: ".re-1",
        //markers: true,
        start: "-40% 70%",
        end: '120% 78%',
        toggleActions: "play reverse play reverse"
    },
    opacity: 1,
})
let redot2 = gsap.timeline({
    scrollTrigger: {
        trigger: ".re-2",
        //markers: true,
        toggleClass: 'active',
        start: "-40% 70%",
        end: '120% 78%',
    }
})
let imgre2 = gsap.to(".imgre-2", {
    scrollTrigger: {
        trigger: ".re-2",
        //markers: true,
        start: "-40% 70%",
        end: '120% 78%',
        toggleActions: "play reverse play reverse"
    },
    opacity: 1,
})
let redot3 = gsap.timeline({
    scrollTrigger: {
        trigger: ".re-3",
        //markers: true,
        toggleClass: 'active',
        start: "-40% 70%",
        end: '120% 78%'
    }
})
let imgre3 = gsap.to(".imgre-3", {
    scrollTrigger: {
        trigger: ".re-3",
        //markers: true,
        start: "-40% 70%",
        end: '120% 78%',
        toggleActions: "play reverse play reverse"
    },
    opacity: 1,
})
let redot4 = gsap.timeline({
    scrollTrigger: {
        trigger: ".re-4",
        //markers: true,
        toggleClass: 'active',
        start: "-40% 70%",
        end: '120% 78%'
    }
})
let imgre4 = gsap.to(".imgre-4", {
    scrollTrigger: {
        trigger: ".re-4",
        //markers: true,
        start: "-40% 70%",
        end: '120% 78%',
        toggleActions: "play reverse play reverse"
    },
    opacity: 1,
})
//-----------------------------------------------------------------------------
let burger = document.getElementById("hamburger");
let hamburger = gsap.timeline({ paused: true, defaults: { duration: 0.5, ease: Sine.easeInOut } });
hamburger.to(".hamburger .line-1", { y: 10, rotation: 45, transformOrigin: "center center" })
    .to(".hamburger .line-2", { opacity: 0 }, "<")
    .to(".hamburger .line-3", { y: -10, rotation: -45, transformOrigin: "center center" }, "<")
    .to(".cir-border", { opacity: 1, delay: 0.2 }, "<")
    .to(".nav .cir", { opacity: 1 }, "<0.5")
    .to(".nav .cir-border path", { drawSVG: 0, duration: 0.5, ease: Sine.easeInOut }, "<")
//-----------------------------------------------------------------------------
let menudesk = gsap.timeline({ paused: true });
let menudesktopjs = gsap.matchMedia();
menudesktopjs.add("(min-width: 991px)", () => {
    menudesk.to(".menu-desktop", { opacity: 1, pointerEvents: "visible" })
        .to(".nav .left", { opacity: 0 }, "<")
        .to(".nav .right a", { opacity: 0 }, "<")
        .to(".nav .logo", { opacity: 0 }, "<")
        .to(".menu-desktop .left .line", { height: "100%", duration: 1, ease: Power0.easeNone }, "<0.3")
        .from(".menu-desktop .left li", { y: 60, opacity: 0, stagger: 0.1, ease: Power0.InOut }, "<0.3")
        .from(".menu-desktop .right li", { y: 60, opacity: 0, stagger: 0.1, ease: Power0.InOut }, "<0.3")
        .from(".menu-desktop .left .contact div", { y: 60, opacity: 0, stagger: 0.1, ease: Power0.InOut }, "<")
        .from(".menu-desktop .left .follow div", { y: 60, opacity: 0, stagger: 0.1, ease: Power0.InOut }, "<0.3")
    return () => {
    };
});
//-----------------------------------------------------------------------------
let menumob = gsap.timeline({ paused: true });
let menumobilejs = gsap.matchMedia();
menumobilejs.add("(max-width: 991px)", () => {
    menumob.to(".menu-mobile", { opacity: 1, pointerEvents: "visible" })
        .to(".nav .logo", { opacity: 0 }, "<")
        .from(".menu-mobile ol li", { y: 50, opacity: 0, stagger: 0.1 }, "0.5")
        .to(".menu-mobile .line", { width: "100%", duration: 1, ease: Power0.easeNone }, "<0.5")
        .from(".menu-mobile .sauce-wrap h2", { y: 50, opacity: 0, stagger: 0.1 }, "<")
        .from(".menu-mobile .sauce-wrap .item", { y: 50, opacity: 0, stagger: 0.1 }, "<0.3")
        .from(".menu-mobile .contact h2", { y: 50, opacity: 0, stagger: 0.1 }, "<")
        .from(".menu-mobile .contact div", { y: 50, opacity: 0, stagger: 0.1 }, "<0.3")
        .from(".menu-mobile .follow h2", { y: 50, opacity: 0, stagger: 0.1 }, "<")
        .from(".menu-mobile .follow div", { y: 50, opacity: 0, stagger: 0.1 }, "<0.3")
    return () => {
    };
});
//-----------------------------------------------------------------------------
let cirbanner = gsap.timeline({
    scrollTrigger: {
        trigger: ".sec-banner",
        start: "10% top",
        end: "80% 20%",
        //markers: true,
        scrub: 1,
    }
})
    .to(".front-page .sec-banner .cir", { scale: 3 })
    .to(".front-page .sec-banner h1", { y: -300 }, "<")
    .to(".front-page .main-wrap", { y: 100, opacity: 0 }, "<")
    .to(".front-page .sec-banner .swiper-button-next", { y: 200, opacity: 0 }, "<")
    .to(".front-page .sec-banner .swiper-button-prev", { y: 200, opacity: 0 }, "<")
    .to(".front-page .sec-banner .img-wrap", { y: -500 }, "<")
    .to(".sec-intro .wrap", { y: -50 }, "<")
//-----------------------------------------------------------------------------

burger.addEventListener("click", () => {
    if (burger.classList.contains("active") !== true) {
        hamburger.timeScale(1).play();
        menudesk.play();
        menumob.timeScale(1).play();
        burger.classList.add("active");
        scroll.classList.add("hidden")
    }
    else if (burger.classList.contains("active")) {
        hamburger.timeScale(0.8).reverse();
        menudesk.reverse();
        menumob.timeScale(1.5).reverse();
        burger.classList.remove('active');
        scroll.classList.remove("hidden");
    }
});
