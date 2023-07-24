<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/main-resp.css">
    <link rel="stylesheet" href="./assets/css/header-footer.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="nav">
            <div class="container1440 h-100">
                <div class="wrap flex-row item-center justify-between">
                    <div class="left flex-row item-center">
                        <a href>Dashi Shoyu</a>
                        <a href>Yakiniku Sauce</a>
                    </div>
                    <div class="right flex-row item-center">
                        <a href>Ponzu Sauce</a>
                        <a href>Teriyaki Sauce</a>
                        <div id="hamburger" class="hamburger flex-col item-center justify-around">
                            <img class="line-1" src="./assets/image/hamburger-line.svg" alt>
                            <img class="line-2" src="./assets/image/hamburger-line.svg" alt>
                            <img class="line-3" src="./assets/image/hamburger-line.svg" alt>
                            <img class="cir" src="./assets/image/cir-close.svg" alt="">
                            <svg class="cir-border" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M50.6127 14.8245C59.2701 25.9325 57.2834 41.9555 46.1754 50.6129C35.0673 59.2702 19.0443 57.2836 10.387 46.1755C1.72961 35.0675 3.71626 19.0445 14.8243 10.3871C24.4919 2.85237 37.8826 3.38018 46.9001 10.9668"
                                    stroke="white" stroke-width="5" />
                            </svg>

                        </div>
                    </div>
                    <a class="logo">
                        <img src="./assets/image/hibiki-logo.svg" alt>
                    </a>
                </div>
            </div>
        </div>
        <div id="menu-desktop" class="menu-desktop">
            <div class="container1440 h-100 w-100">
                <div class="outter-wrap">
                    <div class="left">
                        <div class="line"></div>
                        <div class="inner-wrap">
                            <ol>
                                <li>menu</li>
                                <li><a href="">Home</a></li>
                                <li><a href="">All products</a></li>
                                <li><a href="">sustainable</a></li>
                            </ol>
                            <div class="contact">
                                <div>contact</div>
                                <div class="flex-row item-start justify-between">
                                    <p>Sales Food Service
                                        <a href="">062-3851-445</a>
                                    </p>
                                    <p> Sales Modern Trade
                                        <a href="">092-2769-266</a>
                                    </p>
                                </div>
                            </div>
                            <div class="follow">
                                <div>Follow us </div>
                                <div class="flex-row">
                                    <a href=""> <img src="./assets/image/ig-icon-footer.svg" alt=""></a>
                                    <a href=""> <img src="./assets/image/fb-icon-footer.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="inner-wrap">
                            <ol>
                                <li>seasoning</li>
                                <li><a href="">Dashi Shoyu</a>
                                    <div><img src="./assets/image/Dashi-shoyu.png" alt=""></div>
                                </li>
                                <li><a href="">Yakiniku Sauce</a>
                                    <div><img src="./assets/image/Yakiniku-sauce.png" alt=""></div>
                                </li>
                                <li><a href="">Ponzu Sauce</a>
                                    <div><img src="./assets/image/Ponzu-sauce.png" alt=""></div>
                                </li>
                                <li><a href="">Teriyaki Sauce</a>
                                    <div><img src="./assets/image/Teriyaki-Sauce.png" alt=""></div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-mobile" class="menu-mobile">
            <div class="outter-wrap">
                <div class="inner-wrap">
                    <ol>
                        <li>Menu</li>
                        <li><a href="">Home</a></li>
                        <li><a href="">All products</a></li>
                        <li><a href="">sustainable</a></li>
                    </ol>
                    <div class="line"></div>
                    <div class="sauce-wrap">
                        <h2>seasoning</h2>
                        <div class="wrap grid2">
                            <div class="item flex-col">
                                <div>Dashi <br>
                                    Shoyu</div>
                                <img src="./assets/image/Dashi-shoyu.png" alt="">
                            </div>
                            <div class="item flex-col">
                                <div>YAKINIYU <br>
                                    SAUCE</div>
                                <img src="./assets/image/Yakiniku-sauce.png" alt="">
                            </div>
                            <div class="item flex-col">
                                <div>PONZU <br>
                                    SAUCE</div>
                                <img src="./assets/image/Ponzu-sauce.png" alt="">
                            </div>
                            <div class="item flex-col">
                                <div>TERIYAKI <br>
                                    SAUCE</div>
                                <img src="./assets/image/Teriyaki-Sauce.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="contact">
                        <h2>contact</h2>
                        <div class="wrap flex-row item-start justify-between">
                            <p>Sales Food Service<a href="">062-3851-445</a></p>
                            <p> Sales Modern Trade<a href="">092-2769-266</a></p>
                        </div>
                    </div>
                    <div class="follow">
                        <h2>Follow us </h2>
                        <div class="wrap flex-row item-center justify-center">
                            <a href=""><img src="./assets/image/ig-icon-footer.svg" alt=""></a>
                            <a href=""><img src="./assets/image/fb-icon-footer.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="allproduct-page wrapper-type3">
        <section class="sec-product">
            <div class="container1080">
                <div class="outter-wrap">
                    <h2>seasoning</h2>
                    <hr>
                    <p>ผลิตภัณฑ์ปรุงรสที่คัดสรรวัตถุดิบธรรมชาติ ไม่ใส่ผงชูรส หรือผงปรุงรสต่างๆ</p>
                </div>
                <div class="inner-wrap grid21">
                    <a class="product-item">
                        <div class="wrap flex-col item-center justify-between">
                            <div>
                                <h2>Dashi shoyu</h2>
                                <h3>ดาชิโชยุ (ซอสอเนกประสงค์)</h3>
                            </div>
                            <img src="./assets/image/Dashi-shoyu.png" alt="">
                            <div class="white-btn flex-row item-center justify-between">ดูข้อมูลเพิ่มเติม</div>
                            <img src="./assets/image/product-hilight-01.png" alt="" class="tag">
                        </div>
                        <img class="bg-hover" src="./assets/image/Dashi-hover.jpg" alt="">
                    </a>
                    <a class="product-item">
                        <div class="wrap flex-col item-center justify-between">
                            <div>
                                <h2>Teriyaki Sauce</h2>
                                <h3>ซอสเทริยากิ (ซอสผัดอเนกประสงค์)</h3>
                            </div>
                            <img src="./assets/image/Teriyaki-Sauce.png" alt="">
                            <div class="white-btn flex-row item-center justify-between">ดูข้อมูลเพิ่มเติม</div>
                            <img src="./assets/image/product-hilight-02.png" alt="" class="tag">
                        </div>
                        <img class="bg-hover" src="./assets/image/Teriyaki-hover.jpg" alt="">
                    </a>
                    <a class="product-item">
                        <div class="wrap flex-col item-center justify-between">
                            <div>
                                <h2>Yakiniku sauce</h2>
                                <h3>ซอสเนื้อย่าง (ซอส หมัก ย่าง จิ้ม)</h3>
                            </div>
                            <img src="./assets/image/Yakiniku-sauce.png" alt="">
                            <div class="white-btn flex-row item-center justify-between">ดูข้อมูลเพิ่มเติม</div>
                            <img src="./assets/image/product-hilight-03.png" alt="" class="tag">
                        </div>
                        <img class="bg-hover" src="./assets/image/Yakiniku-hover.jpg" alt="">
                    </a>
                    <a class="product-item">
                        <div class="wrap flex-col item-center justify-between">
                            <div>
                                <h2>Ponzu sauce</h2>
                                <h3>ซอสพอนซึ</h3>
                            </div>
                            <img src="./assets/image/Ponzu-sauce.png" alt="">
                            <div class="white-btn flex-row item-center justify-between">ดูข้อมูลเพิ่มเติม</div>
                            <img src="./assets/image/product-hilight-01.png" alt="" class="tag">
                        </div>
                        <img class="bg-hover" src="./assets/image/Ponzu-hover.jpg" alt="">
                    </a>
                </div>
            </div>
        </section>
        <section class="blog-sec">
            <img class="texture" src="./assets/image/graphic-paper-texture-cream.png" alt>
            <!-- <img class="logo" src="./assets/image/logo-bg-opacity.png" alt=""> -->
            <div class="container1080">
                <div class="outter-wrap grid21">
                    <h2 class="mobile">All seasoning was
                        developed with the
                        chef</h2>
                    <div class="img-wrap">
                        <img src="./assets/image/chef-kenji.jpg" alt>
                    </div>
                    <div class="inner-wrap">
                        <h2 class="desktop">All
                            seasoning was developed with
                            the chef</h2>
                        <p>ผลิตภัณฑ์ปรุงรสทั้งหมดได้รับการพัฒนาร่วมกับเชฟ
                            Kenji Nakayama แห่ง Kenji’s
                            Lab
                            เราเลือกสรรส่วนผสมที่ใช้ในผลิตภัณฑ์ของเราอย่างพิถีพิถัน
                            รสชาติ
                            เหมือนกับต้นตำรับ
                            เพื่อให้คุณมั่นใจกับคุณภาพ
                            และ
                            ความอร่อยจากผลิตภัณฑ์ HIBIKI
                        </p>
                        <img src="./assets/image/signage-kenji.svg" alt>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-sec">
            <div class="container1080">
                <h2>Online store</h2>
                <div class="outter-wrap grid21">
                    <a href="#" class="item flex-row item-center">
                        <img class="logo" src="./assets/image/shopee-logo.png" alt>
                        <div class="inner-wrap">
                            <h3>Shopee hibiki</h3>
                            <div class="white-btn flex-row item-center">
                                ซื้อสินค้าผ่าน Shopee
                            </div>
                        </div>
                        <img class="bg-img" src="./assets/image/shopee-bg-img.jpg" alt>
                    </a>
                    <a href="#" class="item flex-row item-center">
                        <img class="logo" src="./assets/image/lazada-logo.png" alt>
                        <div class="inner-wrap">
                            <h3>Lazada hibiki</h3>
                            <div class="white-btn flex-row item-center">
                                ซื้อสินค้าผ่าน Lazada
                            </div>
                        </div>
                        <img class="bg-img" src="./assets/image/lazada-bg-img.jpg" alt>
                    </a>
                </div>
            </div>
        </section>
        <section class="contact-sec">
            <div class="container1080">
                <div class="outter-wrap grid21">
                    <div class="left">
                        <div class="inner-wrap">
                            <h2>We’d love to hear from
                                you</h2>
                            <p>ส่งข้อความหาเราเพื่อติดต่อในเรื่องต่างๆ
                                ทั้งการขอตัวอย่างสินค้า
                                ขอใบเสนอราคา
                                หรือติดต่อเรื่องอื่นๆ
                            </p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="inner-wrap">
                            FORM
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <img class="texture" src="./assets/image/graphic-paper-texture-cream.png" alt>
        <div class="container1440">
            <div class="wrap">
                <img class="logo flex-row" src="./assets/image/hibiki-logo.svg" alt>
                <div class="add-mobile">
                    <div>Rice CreationThailand Co., Ltd</div>
                    <p>9/17 Rangsit Prospere Estate,Moo 5,Phaholyotin
                        Road,Klong Nueng,Klong Luarg,Pathumthani 12120,
                        Thailand</p>
                </div>
                <div class="inner-wrap grid2">
                    <div class="left">
                        <div class="grid21">
                            <ul>
                                <li>Menu</li>
                                <li><a href>Homepage</a></li>
                                <li><a href>All Products</a></li>
                                <li><a href>Sustainable</a></li>
                            </ul>
                            <ul>
                                <li>Rice Creation Thailand Co., Ltd</li>
                                <li>9/17 Rangsit Prospere Estate,Moo <br>
                                    5,Phaholyotin Road,Klong Nueng,Klong <br>
                                    Luarg,Pathumthani 12120,Thailand</li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <div class="grid21">
                            <ul>
                                <li>contact</li>
                                <li>Sales Food Service
                                    <a href>062-3851-445</a>
                                </li>
                                <li>Sales Modern Trade
                                    <a href>092-2769-266</a>
                                </li>
                            </ul>
                            <ul>
                                <li>Follow us</li>
                                <li>
                                    <div class="flex-row item-start justify-start">
                                        <a href> <img src="./assets/image/ig-icon-footer.svg" alt></a>
                                        <a href> <img src="./assets/image/fb-icon-footer.svg" alt></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="media-mobile">
                    <div>Follow us</div>
                    <div class="flex-row item-center justify-center">
                        <a href> <img src="./assets/image/ig-icon-footer.svg" alt></a>
                        <a href> <img src="./assets/image/fb-icon-footer.svg" alt></a>
                    </div>
                </div>
                <div class="last-footer">© 2023 Rice Creation Thailand. <a href>Privacy Policy</a></div>
            </div>
        </div>
    </footer>
</body>
<script src="./assets/js/SplitText.min.js"></script>
<script src="./assets/js/DrawSVGPlugin.min.js"></script>
<script src="./assets/js/animation.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    var swiper = new Swiper(".myswiper-showcase", {
        centeredSlides: true,
        speed: 5000,
        loop: true,
        autoplay: {
            delay: 0,
        },
        breakpoints: {
            375: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            991: {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        },
    });
</script>
<script>
    var swiper = new Swiper(".myswiper-recipes", {
        speed: 1200,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            375: {
                slidesPerView: 1.2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 1.8,
                spaceBetween: 20,
            },
            991: {
                slidesPerView: 2.4,
                spaceBetween: 30,
            },
        },
    });
</script>

</html>