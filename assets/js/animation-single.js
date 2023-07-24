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
let menu1 = document.getElementById("menu1");
let menu2 = document.getElementById("menu2");
let menu3 = document.getElementById("menu3");
let menupop1 = document.getElementById("menu-popup1");
let menupop2 = document.getElementById("menu-popup2");
let menupop3 = document.getElementById("menu-popup3");
let popup1 = gsap.timeline({ paused: true });
popup1.to("#menu-popup1", { opacity: 1, pointerEvents: "visible" })
    .to(".nav .left", { opacity: 0 }, "<")
    .to(".nav .right a", { opacity: 0 }, "<")
    .to(".nav .logo", { opacity: 0 }, "<")
let popup2 = gsap.timeline({ paused: true });
popup2.to("#menu-popup2", { opacity: 1, pointerEvents: "visible" })
    .to(".nav .left", { opacity: 0 }, "<")
    .to(".nav .right a", { opacity: 0 }, "<")
    .to(".nav .logo", { opacity: 0 }, "<")
let popup3 = gsap.timeline({ paused: true });
popup3.to("#menu-popup3", { opacity: 1, pointerEvents: "visible" })
    .to(".nav .left", { opacity: 0 }, "<")
    .to(".nav .right a", { opacity: 0 }, "<")
    .to(".nav .logo", { opacity: 0 }, "<")

menu1.addEventListener("click", () => {
    if ((burger.classList.contains("active") !== true) && (menupop1.classList.contains("active") !== true)) {
        hamburger.timeScale(1).play();
        popup1.play();
        burger.classList.add('active');
        scroll.classList.add("hidden");
        menupop1.classList.add("active");
    }
});
menu2.addEventListener("click", () => {
    if ((burger.classList.contains("active") !== true) && (menupop2.classList.contains("active") !== true)) {
        hamburger.timeScale(1).play();
        popup2.play();
        burger.classList.add('active');
        scroll.classList.add("hidden");
        menupop2.classList.add("active");
    }
});
menu3.addEventListener("click", () => {
    if ((burger.classList.contains("active") !== true) && (menupop1.classList.contains("active") !== true)) {
        hamburger.timeScale(1).play();
        popup3.play();
        burger.classList.add('active');
        scroll.classList.add("hidden");
        menupop3.classList.add("active");
    }
});
//-----------------------------------------------------------------------------
burger.addEventListener("click", () => {
    if (burger.classList.contains("active") !== true) {
        hamburger.timeScale(1).play();
        menudesk.play();
        menumob.timeScale(1).play();
        burger.classList.add("active");
        scroll.classList.add("hidden")
    }
    else if ((burger.classList.contains("active")) && (menupop1.classList.contains("active") !== true) && (menupop2.classList.contains("active") !== true) && (menupop3.classList.contains("active") !== true)) {
        hamburger.timeScale(0.8).reverse();
        menudesk.reverse();
        menumob.timeScale(1.5).reverse();
        burger.classList.remove('active');
        scroll.classList.remove("hidden");
    }
    else if ((burger.classList.contains("active")) && (menupop1.classList.contains("active"))) {
        hamburger.timeScale(0.8).reverse();
        popup1.reverse();
        burger.classList.remove("active");
        scroll.classList.remove("hidden");
        menupop1.classList.remove("active");
    }
    else if ((burger.classList.contains("active")) && (menupop2.classList.contains("active"))) {
        hamburger.timeScale(0.8).reverse();
        popup2.reverse();
        burger.classList.remove("active");
        scroll.classList.remove("hidden");
        menupop2.classList.remove("active");
    }
    else if ((burger.classList.contains("active")) && (menupop3.classList.contains("active"))) {
        hamburger.timeScale(0.8).reverse();
        popup3.reverse();
        burger.classList.remove("active");
        scroll.classList.remove("hidden");
        menupop3.classList.remove("active");
    }
});
