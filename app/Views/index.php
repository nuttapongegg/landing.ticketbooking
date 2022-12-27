<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- <meta name="apple-mobile-web-app-capable" content="yes" /> -->
    <meta name="apple-mobile-web-app-title" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Official Ticket | EVENS UP</title>
    <base href="">
    <meta name="description" content="Official Ticket | EVENS UP" />
    <meta name="keywords" content="Official Ticket | EVENS UP" />
    <meta name="author" content="UP DIGITAL" />
    <!-- meta for facebook -->
    <meta property="og:url" content="" />
    <meta property="og:title" content="Official Ticket | EVENS UP" />
    <meta property="og:description" content="EVENS UP" />
    <meta property="og:image" content="#ffffff" />
    <meta property="article:publisher" content="" />
    <meta property="article:author" content="UP DIGITAL" />
    <meta property="og:site_name" content="" />
    <meta property="og:type" content="Website" />
    <meta property="fb:app_id" content="326324767913792" />
    <!-- meta for twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:creator" content="EVENS UP" />
    <meta name="twitter:title" content="Official Ticket | EVENS UP" />
    <meta name="twitter:description" content="EVENS UP" />
    <meta name="twitter:image" content="#ffffff" />
    <!--  Bootstrap css-->
    <link id="style" href="<?php echo base_url('/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#de0000">
    <meta name="theme-color" content="#ffffff">
    <link href="assets/css/main.css?v=162127" rel="stylesheet" />
    <!-- Start of Google Analytics script -->
    <script>
        // (function(i, s, o, g, r, a, m) {
        //     i['GoogleAnalyticsObject'] = r;
        //     i[r] = i[r] || function() {
        //         (i[r].q = i[r].q || []).push(arguments)
        //     }, i[r].l = 1 * new Date();
        //     a = s.createElement(o),
        //         m = s.getElementsByTagName(o)[0];
        //     a.async = 1;
        //     a.src = g;
        //     m.parentNode.insertBefore(a, m)
        // })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        // ga('create', 'UA-2666540-2', 'auto');
        // ga('send', 'pageview');
    </script>
    <!-- End of Google Analytics script -->
    <!-- <script>
        .main-header {
            background: linear - gradient(to bottom, rgba(215, 104, 137, 0.7) 0 % , rgba(215, 104, 137, 0) 100 % );
        }
    </script> -->
    <!-- Advenue DMP Container - Thai Ticket Major -->
    <!-- <script type="text/javascript" charset="UTF-8">
        (function(w, d, s, i, c) {
            var f = d.createElement(s);
            f.type = "text/javascript";
            f.async = true;
            f.src = ("https:" == d.location.protocol ? "https://ssl-avd.innity.net" : "http://avd.innity.net") + "/" + i + "/container_" + c + ".js";
            var g = d.getElementsByTagName(s)[0];
            g.parentNode.insertBefore(f, g);
        })(window, document, "script", "238", "57bd70251c51b182461b5273");
    </script> -->
    <!-- End Advenue DMP Container -->
</head>

<body>
    <script>
        var serverUrl = '<?php echo base_url(); ?>';
    </script>

    <script>
        // function setLang(la) {
        //     if ($.cookie('__la') != undefined) {
        //         $.removeCookie('__la');
        //     }
        //     $.cookie('__la', la, {
        //         expires: 7,
        //         path: '/',
        //         domain: '.thaiticketmajor.com'
        //     });
        //     location.reload();
        // }
    </script>
    <script>
        var $meta = {
            url: '',
            title: 'Official Ticket | EVENS UP'
        }
    </script>
    <div class="main">
        <header class="main-header">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col d-block d-lg-none">
                                <a href="javascript:void(0);" class="btn-menu">
                                    <span class="inactive"></span>
                                    <span class="active"></span>
                                </a>
                            </div>
                            <a class="main-logo col-auto" role="logo" title="logo">
                                <img src="<?php echo base_url('assets/img/ttm-logo-txt-white.png'); ?>" alt="EVENS UP">
                            </a>
                            <nav class="main-nav col" role="navigation">
                                <div class="row">
                                    <ul class="main-menu col">
                                        <li><a href="#intro" class="menu-anchor active">หน้าหลัก</a></li>
                                        <li><a href="#ticket" class="menu-anchor">ซื้อบัตร</a></li>
                                        <!-- <li><a href="#detail" class="menu-anchor">รายละเอียด</a></li> -->
                                        <li class="d-block d-lg-none py-0">
                                            <!-- <div class="my-3">
                                                <a class="btn-signin btn-block" href="javascript:void(0);" onclick="$app.popup.signin();">เข้าสู่ระบบ</a>
                                            </div> -->
                                            <?php if (session()->get('session') ==  1) {
                                                $login = '<a href="javascript:void(0);" onclick="fbLogout();" id="fbLink2"><div class="d-flex justify-content-center"><div class="me-2 mt-1"><span class="avatar"><img src="' . session()->get('picture') . '" alt="img" class="rounded-circle" style="width: 30px; height: 30px;"></span></div><div class="d-flex1 mt-2">ออกจากระบบ</div></div></a>';
                                            } else {
                                                $login = '<a href="javascript:void(0);" onclick="fbLogin();" id="fbLink2"><i class="fa fa-facebook-square" style="font-size:24px" aria-hidden="true"></i> เข้าสู่ระบบด้วย Facebook</a>';
                                            } ?>
                                            <?php echo $login ?>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="col col-lg-auto">
                                <div class="form-row align-items-center">
                                    <div class="col">
                                        <!-- <div class="box-dropdown my-2 text-right">
                                            <button class="btn-lang btn-dropdown">
                                                <span><img src="https://www.thaiticketmajor.com/assets/img/icon/flag-th.svg" /></span><span>ไทย</span> </button>
                                            <div class="dropdown-menu lang-menu">
                                                <a href="javascript: setLang('en');" class="dropdown-item"><span class="d-inline-block align-middle"><img src="https://www.thaiticketmajor.com/assets/img/icon/flag-en.svg" width="20px" class="mr-3" /></span><span class="d-inline-block align-middle">English</span></a>
                                                <div class="dropdown-item">
                                                    <div id="google_translate_element"></div>
                                                    <script type="text/javascript">
                                                        function googleTranslateElementInit() {
                                                            new google.translate.TranslateElement({
                                                                pageLanguage: 'en',
                                                                includedLanguages: 'ja,ko,lo,ms,vi,zh-CN,zh-TW,en',
                                                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                                                                multilanguagePage: true
                                                            }, 'google_translate_element');
                                                        }
                                                    </script>
                                                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-auto d-none d-lg-block">
                                        <!-- <a class="btn-signin" href="javascript:void(0);" onclick="$app.popup.signin();">เข้าสู่ระบบ</a> -->
                                        <div id="status"></div>
                                        <div id="revenues"></div>
                                        <?php if (session()->get('session') ==  1) {
                                            $login = '<a href="javascript:void(0);" onclick="fbLogout();" id="fbLink1"><div class="d-flex justify-content-center"><div class="me-2 mt-1"><span class="avatar"><img src="' . session()->get('picture') . '" alt="img" class="rounded-circle" style="width: 30px; height: 30px;"></span></div><div class="d-flex1 mt-2">ออกจากระบบ</div></div></a>';
                                        } else {
                                            $login = '<a href="javascript:void(0);" onclick="fbLogin();" id="fbLink1"><i class="fa fa-facebook-square" style="font-size:24px" aria-hidden="true"></i> เข้าสู่ระบบด้วย Facebook</a>';
                                        } ?>
                                        <?php echo $login ?>
                                        <!-- <a href="javascript:void(0);" onclick="fbLogin();" id="fbLink"><i class="fa fa-facebook-square" style="font-size:24px" aria-hidden="true"></i> เข้าสู่ระบบด้วย Facebook</a> -->
                                        <!-- <a href="javascript:void(0);" onclick="fbLogin();" id="fbLink"><i class="fa fa-facebook-square" style="font-size:24px" aria-hidden="true"></i> เข้าสู่ระบบด้วย Facebook</a> -->
                                        <div class="ac-data" id="userData"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="main-container" role="main">
            <section class="section-anchor" id="intro">
                <picture>
                    <source srcset="https://backoffice.eventups.com/upload/herobanner-m.jpg" media="(max-width:768px)">
                    <img class="w-100" src="https://backoffice.eventups.com/upload/herobanner.jpg" alt="">
                </picture>
            </section>
            <div class="overlay-container">
                <!-- <section class="mt-3 mt-lg-0">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <div class="text-center">
                                    <h1 class="d-none d-sm-block text-bp h3 font-weight-bold line-space ts-pink" data-aos="fade-up">หลังจากขายบัตรหมดเกลี้ยงทั้งสองรอบที่เกาหลี BLACKPINK ประกาศเวิดล์ทัวร์ใหญ่ <span class="text-nowrap">‘THE BORN PINK WORLD TOUR’</span> พร้อมบุก 42 เมืองใหญ่ทั่วโลก บลิงก์ไทยเตรียมฟินได้เลย 7-8 มกราคม 2566 ที่สนามศุภชลาศัย</h1>
                                    <h1 class="d-block d-sm-none text-bp h4 font-weight-bold line-space ts-pink" data-aos="fade-up">หลังจากขายบัตรหมดเกลี้ยงทั้งสองรอบที่เกาหลี BLACKPINK ประกาศเวิดล์ทัวร์ใหญ่ <span class="text-nowrap">‘THE BORN PINK WORLD TOUR’</span> พร้อมบุก 42 เมืองใหญ่ทั่วโลก บลิงก์ไทยเตรียมฟินได้เลย 7-8 มกราคม 2566 ที่สนามศุภชลาศัย</h1>
                                    <h2 class="h5 text-shadow-white line-space" data-aos="fade-up">BLINK Membership Pre-Sale เริ่ม 16 พฤศจิกายน 10.00 - 22.00 น. สามารถสมัคร BLINK Membership เพื่อรับสิทธิ์พรีเซลล์ได้ทาง Weverse ตั้งแต่วันนี้ ถึง 30 ตุลาคม เวลา 13.00 น. Live Nation Pre-Sale 17 พฤศจิกายน 10.00 - 22.00 น. สมัครสมาชิกเลยที่ livenation.co.th และเปิดจำหน่ายบัตรรอบทั่วไป 18 พฤศจิกายนนี้ ตั้งแต่ 10.00 น. เป็นต้นไป</h2>
                                </div>
                                <div class="space"></div>
                                <div class="line mb-0" data-aos="zoom-in-up"></div>
                            </div>
                        </div>
                    </div>
                </section> -->
                <section class="section-anchor pt-0 pt-lg-3" id="ticket">
                    <div class="container pt-5 pb-0 pb-lg-5 ticket-container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-10">
                                <h2 class="h2" data-aos="fade-up">Event Tickes</h2>
                                <div class="row justify-content-center">
                                    <input type="hidden" id="user_id" value="<?php echo  session()->get('userID'); ?>"></input>
                                    <?php foreach ($tickets as $ticket) { ?>

                                        <?php $tickets_count = 0;
                                        if ($ticket->ticket_pcs_count_sale != 0) {
                                            $tickets_count = $ticket->ticket_pcs - $ticket->ticket_pcs_count_sale;
                                        } else {

                                            $tickets_count = $ticket->ticket_pcs;
                                        }
                                        ?>
                                        <?php $tickets_null = $ticket->ticket_pcs - $ticket->ticket_pcs_count_sale; ?>
                                        <?php if ($tickets_null != 0) { $img_base = ""; 
                                                if(base_url() == "http://localhost:8080")
                                                {
                                                    $img_base = base_url();
                                                }else
                                                {
                                                    $img_base = "https://backoffice.eventups.com";
                                                }
                                            ?>
                                            <div class="col-12 col-lg-10 col-xl-7 col-xxl-8">    
                                                <div class="post-it mb-3" data-aos="fade-up">
                                                    <div class="inner py-1 px-3">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="p text-left"><?php echo $ticket->ticket_name . ' ' . $ticket->ticket_detail . '&nbsp;บัตรคงเหลือ (' . $tickets_count . ' ใบ)&nbsp; ราคา&nbsp;(' . $ticket->ticket_price . ' บาท/ใบ)' ?></p>
                                                            </div>
                                                            <div class="col-auto"><img src="<?php echo $img_base . "/upload/" . $ticket->ticket_src;?>" title="<?php echo $ticket->ticket_name;?>" class="rounded" width="60" height="60"></div>
                                                            <div class="col-auto">
                                                                <p>
                                                                    <?php
                                                                    $id_user = '';
                                                                    $name_user = '';
                                                                    if (session()->get('session') ==  1) {
                                                                        $id_user = session()->get('userID');
                                                                        $name_user = session()->get('username');
                                                                        $test = 'onclick="buyTickets(this.id);"';
                                                                    } else {
                                                                        $id_user = 0;
                                                                        $name_user = 0;
                                                                        $name_user = session()->get('username');
                                                                        $test = 'onclick="fbLogin();"';
                                                                    } ?>
                                                                    <a class="btn btn-main sale-list" href="javascript:void(0);" id="<?php echo $id_user . "###" . $name_user . "###" .  $ticket->id . "###" . $tickets_count . "###" .  $ticket->ticket_price . "###" . $ticket->ticket_pcs_count_sale; ?>" <?php echo $test ?>><span>ซื้อบัตร</span></a>
                                                                    <!-- onclick="$app.popup.signin('https://www.thaiticketmajor.com/booking/1/zones.php?query=749&rdId=68987');" -->
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                    <!-- <div class="col-12 col-lg-10 col-xl-7 col-xxl-8">
                                        <div class="post-it mb-3" data-aos="fade-up">
                                            <div class="inner py-1 px-3">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <p class="p text-left">วันเสาร์ที่ 7 มกราคม 2566</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <p>
                                                            <a class="btn btn-main" href="javascript:void(0);" onclick="$app.popup.signin('https://www.thaiticketmajor.com/booking/1/zones.php?query=749&rdId=68987');"><span>ซื้อบัตร</span></a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-12"></div>
                                    <div class="col-12 col-lg-10 col-xl-7 col-xxl-8">
                                        <div class="post-it mb-3" data-aos="fade-up">
                                            <div class="inner py-1 px-3">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <p class="p text-left">วันอาทิตย์ที่ 8 มกราคม 2566</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <p>
                                                            <a class="btn btn-main" href="javascript:void(0);" onclick="checkLoginState();"><span>ซื้อบัตร</span></a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-12 col-xl-10">
                                <div class="line mb-3 mb-lg-5" data-aos="fade-up"></div>
                            </div>
                            <!-- <div class="col-12 col-lg-6 col-xl-5">
                                <div data-aos="fade-up">
                                    <h2 class="h2">วันพรีเซลล์</h2>
                                    <p class="p"><span class="d-block my-3">
                                            <strong class="d-block">BLINK MEMBERSHIP EARLY BIRD PRESALE</strong>
                                            16 พฤศจิกายน 2565, 10.00 น, – 22.00 น.
                                        </span>
                                        <span class="d-block my-3">
                                            <strong class="d-block">BLINK MEMBERSHIP PRESALE</strong>
                                            16 พฤศจิกายน 2565, 11.00 น, – 22.00 น.
                                        </span>
                                        <span class="d-block my-3">
                                            <strong class="d-block">LIVE NATION TERO MEMBER PRESALE</strong>
                                            17 พฤศจิกายน 2565, 10.00 น, – 22.00 น.
                                        </span>
                                    </p>
                                    <div class="line my-3 d-block d-lg-none"></div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-5">
                                <div data-aos="fade-up">
                                    <h2 class="h2">วันเปิดจำหน่าย</h2>
                                    <p class="p">วันศุกร์ที่ 18 พฤศจิกายน 2565, 10:00 น.</p>
                                    <div class="line my-4 my-lg-5"></div>
                                    <h2 class="h2">ประตูเปิด</h2>
                                    <p class="p">ก่อนการแสดงเริ่มประมาณ 3 ชม.</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="line my-3 my-lg-5" data-aos="fade-up"></div>
                            </div>
                            <div class="col-12 col-xl-5">
                                <div data-aos="fade-up">
                                    <h2 class="h2">ผังที่นั่ง</h2>
                                    <p class="bg-black rounded">
                                        <a href="assets/img/seatmap.jpg" data-fancybox class="rounded-top d-block hv-img-zoom"><img src="assets/img/seatmap-thumb.jpg" class="mx-auto"></a>
                                        <a href="https://goo.gl/maps/a3bLS7c2XdmUutY67" target="_blank" class="d-block text-white p-3 text-center text-muted">สนามกีฬาแห่งชาติ (สนามศุภชลาศัย)<i class="fa fa-long-arrow-right ml-2" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </section>
                <div class="bg"></div>
                <div class="opacity"></div>
            </div>
            <!-- <div class="detail-container">
                <section class="section-anchor pt-0 pt-lg-3" id="detail">
                    <div class="container py-5">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-11 col-xxl-10">
                                <h1 class="font-weight-bold text-bp text-center text-shadow-white" data-aos="fade-up">รายละเอียด</h1>
                                <div class="post-it full" data-aos="fade-up">
                                    <div class="inner">
                                        <div class="togglebox">
                                            <h3 class="tg-label">แพคเกจ VIP</h3>
                                            <div class="tg-item">
                                                <div class="tg-item-inner">
                                                    <a href="assets/img/vip.jpg" class="d-block mb-3" data-fancybox style="opacity:1;"><img src="assets/img/vip.jpg" width="100%"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-it full" data-aos="fade-up">
                                    <div class="inner">
                                        <div class="togglebox">
                                            <h3 class="tg-label">Blink Membership Presale</h3>
                                            <div class="tg-item">
                                                <div class="tg-item-inner">
                                                    <h4 class="h5">พรีเซลล์สำหรับ BLINK MEMBERSHIP EARLY BIRD</h4>
                                                    <ul>
                                                        <li>สำหรับ BLINK MEMBERSHIP EARLY BIRD จะได้รับสิทธิ์เข้าซื้อบัตรพรีเซลล์ล่วงหน้า 1 ชั่วโมงก่อน BLINK MEMBERSHIP รอบปกติ</li>
                                                        <li>ผู้ที่ได้รับสิทธิ์ BLINK MEMBERSHIP EARLY BIRD คือมาจากการลงทะเบียนในระยะเวลาที่กำหนดและยังคงสถานะสมาชิกไว้จนถึงวันจำหน่ายบัตร</li>
                                                        <li>เริ่มจำหน่ายบัตรพรีเซลล์ BLINK MEMBERSHIP EARLY BIRD: วันพุธที่ 16 พฤศจิกายน 2565 เวลา 10.00 น. (ตามเวลาประเทศไทย)</li>
                                                        <li>สิ้นสุดการจำหน่ายบัตรพรีเซลล์ BLINK MEMBERSHIP EARLY BIRD: วันพุธที่ 16 พฤศจิกายน 2565 เวลา 22.00 น. (ตามเวลาประเทศไทย)</li>
                                                        <li>บัตรพรีเซลล์มีจำนวนจำกัด ซื้อก่อนมีสิทธิ์ก่อน
                                                        <li>ขั้นตอนการพรีเซลล์ BLINK MEMBERSHIP EARLY BIRD ทำตามขั้นตอนเดียวกับพรีเซลล์ BLINK MEMBERSHIP</li>
                                                    </ul>
                                                    <h4 class="h5">พรีเซลล์สำหรับ BLINK MEMBERSHIP</h4>
                                                    <ul>
                                                        <li>เริ่มจำหน่ายบัตรพรีเซลล์ BLINK MEMBERSHIP: วันพุธที่ 16 พฤศจิกายน 2565 เวลา 11.00 น. (ตามเวลาประเทศไทย)</li>
                                                        <li>สิ้นสุดการจำหน่ายบัตรพรีเซลล์ BLINK MEMBERSHIP: วันพุธที่ 16 พฤศจิกายน 2565 เวลา 22.00 น. (ตามเวลาประเทศไทย)</li>
                                                        <li>บัตรพรีเซลล์มีจำนวนจำกัด ซื้อก่อนมีสิทธิ์ก่อน</li>
                                                    </ul>
                                                    <h4 class="h5">คำแนะนำก่อนการซื้อพรีเซลล์</h4>
                                                    <div class="row">
                                                        <div class="col-12 d-none d-md-block">
                                                            <div class="border-top"></div>
                                                        </div>
                                                        <div class="col-12 col-md">
                                                            <p class="h4 text-bp">ขั้นตอนที่ 1</p>
                                                            <p>
                                                                <strong>ล็อคอิน / เข้าสู่ระบบ WEVERSE สำหรับ BLINK MEMBERSHIP (@Weverse)</strong>
                                                            </p>
                                                            <p class="text-fade">วันศุกร์ที่ 28 ตุลาคม 2565 ตั้งแต่ 13.00 น. จนถึงวันอาทิตย์ที่ 30 ตุลาคม 2565 เวลา 13.00 น.</p>
                                                            <p>
                                                                สมัครเป็น BLINK MEMBERSHIP บน Weverse Shop
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-md-auto">
                                                            <div class="border-left d-none d-sm-block h-100"></div>
                                                            <div class="border-top d-block d-sm-none"></div>
                                                        </div>
                                                        <div class="col-12 col-md">
                                                            <p class="h4 text-bp">ขั้นตอนที่ 2</p>
                                                            <p>
                                                                <strong>แอปพลิเคชั่นพรีเซล (@Weverse)</strong>
                                                            </p>
                                                            <p class="text-fade">วันศุกร์ที่ 28 ตุลาคม 2565 ตั้งแต่ 13.00 น. จนถึงวันอาทิตย์ที่ 30 ตุลาคม 2565 เวลา 13.00 น.</p>
                                                            <p>
                                                                ยอมรับข้อกำหนดและเงื่อนไขในการสมัครพรีเซลแฟนคลับ
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-md-auto">
                                                            <div class="border-left d-none d-sm-block h-100"></div>
                                                            <div class="border-top d-block d-sm-none"></div>
                                                        </div>
                                                        <div class="col-12 col-md">
                                                            <p class="h4 text-bp">ขั้นตอนที่ 3</p>
                                                            <p>
                                                                <strong>เริ่มพรีเซล</strong>
                                                            </p>
                                                            <p class="text-fade">วันพุธที่ 16 พฤศจิกายน 2565<br><strong>สำหรับ BLINK MEMBERSHIP EARLY BIRD</strong> ตั้งแต่ 10.00 – 22.00 น.<br><strong>สำหรับ BLINK MEMBERSHIP</strong> ตั้งแต่ 11.00 – 22.00 น.</p>
                                                            <p>
                                                                กรอกรหัสเพื่อใช้สิทธิ์พรีเซล ซึ่งรหัสดังกล่าวคือหมายเลขสมาชิก BLINK MEMBERSHIP ของลูกค้า โดยกรอกตัวอักษรและตัวเลขทั้งหมด ไม่ต้องเว้นวรรค เช่น BB123456789
                                                            </p>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="border-top"></div>
                                                        </div>
                                                    </div>
                                                    <h4 class="h5">วิธีซื้อบัตรพรีเซลสำหรับ BLINK MEMBER</h4>
                                                    <ul>
                                                        <li>ลูกค้าจะต้องมีบัญชี Thaiticketmajor สำหรับซื้อบัตรเข้าชม สมัครได้ <a href="https://www.thaiticketmajor.com" class="text-link">ที่นี่</a></li>
                                                        <li>กรุณาลงชื่อเข้าใช้ Thaiticketmajor ก่อนช่วงเวลาพรีเซลจะเริ่มต้น</li>
                                                        <li>เลือก / ค้นหางาน “BLACKPINK WORLD TOUR [BORN PINK] BANGKOK”</li>
                                                        <li>ปุ่ม “ซื้อบัตร” จะปรากฎขึ้น เมื่อถึงเวลาพรีเซล (วันที่ 16 พฤศจิกายน 2565 เวลา 10.00 น.)</li>
                                                        <li>กรอกรหัสเพื่อใช้สิทธิ์พรีเซล ซึ่งรหัสดังกล่าวคือหมายเลขสมาชิก BLINK MEMBERSHIP ของลูกค้า โดยกรอกตัวอักษรและตัวเลขทั้งหมด ไม่ต้องเว้นวรรค จากนั้นคลิก “ตกลง” และเลือกซื้อบัตร</li>
                                                        <li>ลูกค้าสามารถซื้อบัตรพรีเซลสำหรับ BLINK MEMBERSHIP ได้สูงสุด 4 ใบ ต่อ 1 สมาชิก</li>
                                                    </ul>
                                                    <p class="text-danger"><strong>สามารถใช้สิทธิ์ BLINK MEMBER PRESALE ได้ที่ thaiticketmajor.com เท่านั้น</strong></p>
                                                    <p><strong>***การซื้อบัตรทางเว็บไซต์ www.thaiticketmajor.com วันที่ 16 พฤศจิกายน 2565</strong></p>
                                                    <ul>
                                                        <li>BLINK MEMBERSHIP EARLY BIRD โปรดกดเพื่อรอรับคิวซื้อบัตรได้ที่หน้าเว็บไซต์ตั้งแต่เวลา 9.00 น. และจำหน่ายบัตรเวลา 10.00 น. เป็นต้นไป</li>
                                                        <li>BLINK MEMBERSHIP โปรดกดเพื่อรอรับคิวซื้อบัตรได้ที่หน้าเว็บไซต์ตั้งแต่เวลา 11.00 น. และจำหน่ายบัตรเวลา 11.00 น. เป็นต้นไป</li>
                                                    </ul>
                                                    <p><strong>โปรดตรวจสอบขั้นตอนการรับคิว >> <a href="https://corporate.thaiticketmajor.com/other.php#queue" target="_blank" class="text-link">https://corporate.thaiticketmajor.com/other.php#queue</a></strong></p>
                                                    <p>
                                                        <strong>สมาชิกเพื่อรับสิทธิ์พรีเซล ได้ที่</strong> <a class="text-link" href="https://weverse.io/blackpink/notice" target="_blank">https://weverse.io/blackpink/notice</a>
                                                    </p>
                                                    <ol>
                                                        <li>ไปที่ข้อมูลพรีเซลสำหรับ BLINK MEMBERSHIP ของคอนเสิร์ต BLACKPINK WORLD TOUR [BORN PINK] BANGKOK</li>
                                                        <li>ไปที่ด้านล่างสุดของเพจ</li>
                                                        <li>คลิก "ลงทะเบียนเพื่อรับสิทธิ์แฟนคลับพรีเซล"</li>
                                                    </ol>
                                                    <p>
                                                        <strong>ข้อมูลเพิ่มเติมเกี่ยวกับคอนเสิร์ต “BLACKPINK WORLD TOUR [BORN PINK] BANGKOK”, ที่นี่</strong> <a href="https://www.thaiticketmajor.com" class="text-link">www.thaiticketmajor.com</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-it full" data-aos="fade-up">
                                    <div class="inner">
                                        <div class="togglebox">
                                            <h3 class="tg-label">Live Nation Tero Members Pre-sale</h3>
                                            <div class="tg-item">
                                                <div class="tg-item-inner">
                                                    <p>
                                                        สมาชิก Live Nation Tero รับสิทธิซื้อบัตรในรอบ Pre-sale ได้ ในวันที่ 17 พฤศจิกายน 2565 10:00 น. – 22:00 น. เปิดจำหน่ายทางออนไลน์ที่ <a href="https://www.livenation.co.th" class="text-link" target="_blank">www.livenation.co.th</a> เท่านั้น
                                                    </p>
                                                    <h4 class="h5">สำหรับผู้ที่ยังไม่เคยสมัครสมาชิก Live Nation Tero</h4>
                                                    <ul>
                                                        <li>ในวันที่เปิดขาย Pre-sale Live Nation Tero สามารถสมัครสมาชิกผ่านทาง <a href="https://www.livenation.co.th/register" target="_blank" class="text-link">livenation.co.th/register</a> ยืนยันการสมัครผ่านทางอีเมลให้เรียบร้อย จากนั้นให้เข้าสู่ระบบ (ล็อกอิน) ที่ <a href="https://www.livenation.co.th" class="text-link" target="_blank">livenation.co.th</a> คลิกเลือกคอนเสิร์ตที่ต้องการใช้สิทธิ์พรีเซลล์ สังเกตที่แถบ "ไลฟ์ เนชั่น เทโร พรีเซลล์" คลิกปุ่ม "ซื้อบัตร" (ปุ่มซื้อบัตรจะปรากฏในวันเปิดจำหน่ายบัตรพรีเซลล์เท่านั้น)</li>
                                                        <li>ลูกค้าสามารถสมัครสมาชิกได้ตลอดเวลา จนถึงวันจำหน่ายรอบ Pre-sale ของคอนเสิร์ตนั้นๆ
                                                        </li>
                                                    </ul>
                                                    <h4 class="h5">สำหรับสมาชิก Live Nation Tero</h4>
                                                    <ul>
                                                        <li>ในวันที่เปิดขาย Pre-sale Live Nation Tero เข้าสู่ระบบ (ล็อกอิน) ที่ <a href="https://www.livenation.co.th" class="text-link" target="_blank">livenation.co.th</a> คลิกเลือกคอนเสิร์ตที่ต้องการใช้สิทธิ์พรีเซลล์ สังเกตที่แถบ "ไลฟ์ เนชั่น เทโร พรีเซลล์" คลิกปุ่ม "ซื้อบัตร" (ปุ่มซื้อบัตรจะปรากฏในวันเปิดจำหน่ายบัตรพรีเซลล์เท่านั้น)</li>
                                                    </ul>
                                                    <div class="space"></div>
                                                    <p><strong>***การซื้อบัตรทางเว็บไซต์ <a href="https://www.thaiticketmajor.com" class="text-link">www.thaiticketmajor.com</a> วันที่ 17 พฤศจิกายน 2565 โปรดกดเพื่อรอรับคิวซื้อบัตรได้ที่หน้าเว็บไซต์ตั้งแต่เวลา 9.00 น. และจำหน่ายบัตรเวลา 10.00 น. เป็นต้นไป โปรดตรวจสอบขั้นตอนการรับคิว >> <a href="https://corporate.thaiticketmajor.com/other.php#queue" class="text-link" target="_blank">https://corporate.thaiticketmajor.com/other.php#queue</a></strong></p>
                                                    <ul>
                                                        <li>ลูกค้า 1 ท่าน ซื้อบัตรได้ไม่เกิน 4 ใบ</li>
                                                        <li>บัตร Pre-sale มีจำนวนจำกัด ซื้อก่อนมีสิทธิก่อน</li>
                                                        <li>เมื่อซื้อบัตร ท่านจะต้องระบุชื่อ-นามสกุลของผู้ที่เข้าชมคอนเสิร์ตทุกที่นั่ง ตรงกับบัตรประชาชน โดยระบุเป็นภาษาไทย หรือภาษาอังกฤษเท่านั้น ชื่อดังกล่าวจะถูกพิมพ์ลงบนบัตร และไม่สามารถเปลี่ยนแปลงได้ โปรดตรวจสอบชื่อ-นามสกุลให้ถูกต้องก่อนชำระเงิน</li>
                                                        <li>การซื้อบัตรออนไลน์ จะรับชำระเงินผ่านบัตรเครดิต, บัตรเดบิต, KPay+, True Wallet และ Shopee Pay เท่านั้น</li>
                                                        <li>การชำระเงินผ่านบัตรเครดิต, บัตรเดบิต, True Wallet , Shopee Pay มีค่าธรรมเนียม convenience fee 3 % สำหรับการชำระเงินผ่าน BBL iBanking , K Pay+ ไม่มีค่าธรรมเนียม</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-it full" data-aos="fade-up">
                                    <div class="inner">
                                        <div class="togglebox">
                                            <h3 class="tg-label">เปิดจำหน่ายบัตรทั่วไป</h3>
                                            <div class="tg-item">
                                                <div class="tg-item-inner">
                                                    <p>
                                                        เปิดจำหน่ายบัตรทั่วไปวันที่ 18 พฤศจิกายน 2565 เวลา 10:00 น. เป็นต้นไป ที่เคาน์เตอร์ไทยทิคเก็ตเมเจอร์ 11 สาขา (ได้แก่สาขา สำนักงานใหญ่ / สาขาโรงละครเคแบงก์สยามพิฆเนศ / สาขาสามย่าน มิตรทาวน์ / สาขาพารากอนซีนีเพล็กซ์ / สาขาเมืองไทยรัชดาลัยเธียเตอร์ / สาขาเซ็นทรัลชิดลม/ สาขาเซ็นทรัล พลาซ่า ลาดพร้าว/ สาขาเซ็นทรัล ซิตี้ บางนา / สาขาเมเจอร์ซีนีเพล็กซ์ รัชโยธิน / สาขาเซ็นทรัล พลาซ่า ปิ่นเกล้า และสาขาเมเจอร์ซีนีเพล็กซ์ รังสิต รายละเอียดเพิ่มเติมคลิก <a href="https://bit.ly/3yuznuY" class="text-link" target="_blank">https://bit.ly/3yuznuY</a> และทางออนไลน์ที่ <a href="https://www.thaiticketmajor.com" class="text-link" target="_blank">www.thaiticketmajor.com</a>
                                                    </p>
                                                    <div class="space"></div>
                                                    <p><strong>
                                                            ***การซื้อบัตรทางเว็บไซต์ <a href="https://www.thaiticketmajor.com" class="text-link">www.thaiticketmajor.com</a> วันที่ 18 พฤศจิกายน 2565 โปรดกดเพื่อรอรับคิวซื้อบัตรได้ที่หน้าเว็บไซต์ตั้งแต่เวลา 9.00 น. และจำหน่ายบัตรเวลา 10.00 น. เป็นต้นไป โปรดตรวจสอบขั้นตอนการรับคิว >> <a href="https://corporate.thaiticketmajor.com/other.php#queue" class="text-link" target="_blank">https://corporate.thaiticketmajor.com/other.php#queue</a>
                                                        </strong></p>
                                                    <ul>
                                                        <li>ลูกค้า 1 ท่าน ซื้อบัตรได้ไม่เกิน 4 ใบ</li>
                                                        <li>เมื่อซื้อบัตร ท่านจะต้องระบุชื่อ-นามสกุลของผู้ที่เข้าชมคอนเสิร์ตทุกที่นั่ง ตรงกับบัตรประชาชน โดยระบุเป็นภาษาไทย หรือภาษาอังกฤษเท่านั้น ชื่อดังกล่าวจะถูกพิมพ์ลงบนบัตร และไม่สามารถเปลี่ยนแปลงได้ โปรดตรวจสอบชื่อ-นามสกุลให้ถูกต้องก่อนชำระเงิน</li>
                                                        <li>การซื้อบัตรออนไลน์ จะรับชำระเงินผ่านบัตรเครดิต, บัตรเดบิต, KPay+, True Wallet และ Shopee Pay เท่านั้น</li>
                                                        <li>การชำระเงินผ่านบัตรเครดิต, บัตรเดบิต, True Wallet , Shopee Pay มีค่าธรรมเนียม convenience fee 3 % สำหรับการชำระเงินผ่าน BBL iBanking , K Pay+ ไม่มีค่าธรรมเนียม</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-it full" data-aos="fade-up">
                                    <div class="inner">
                                        <div class="togglebox">
                                            <h3 class="tg-label">เงื่อนไขการซื้อบัตร</h3>
                                            <div class="tg-item">
                                                <div class="tg-item-inner">
                                                    <ul>
                                                        <li>เมื่อซื้อบัตรคอนเสิร์ต ท่านจะต้องระบุชื่อ-นามสกุลที่ตรงกับบัตรประชาชนของผู้ที่เข้าชมคอนเสิร์ตทุกที่นั่ง โดยระบุเป็นภาษาไทย หรือภาษาอังกฤษเท่านั้น ชื่อดังกล่าวจะถูกพิมพ์ลงบนบัตรคอนเสิร์ต และไม่สามารถเปลี่ยนแปลงได้ โปรดตรวจสอบชื่อ-นามสกุลให้ถูกต้องก่อนชำระเงิน
                                                        </li>
                                                        <li>ท่านอาจะถูกร้องขอให้แสดงบัตรประชาชนของท่านในวันคอนเสิร์ต โดยชื่อบนบัตรคอนเสิร์ตจะต้องตรงกับบัตรประชาชนของท่าน กรณีบัตรคอนเสิร์ตที่มีชื่อผู้เข้าชมซ้ำกันมากกว่า 1 ใบ ให้ผู้เข้าชมที่เป็นเจ้าของบัตรคอนเสิร์ตมาแสดงตัวพร้อมด้วยบัตรคอนเสิร์ตและบัตรประชาชน เพื่อยืนยันพร้อมกับผู้เข้าชมท่านอื่นๆ หากผิดเงื่อนไข ทางผู้จัดของสงวนสิทธิ์ในการปฏิเสธไม่ให้เข้าชมการแสดง และจะไม่รับผิดชอบในความเสียหายใดๆ ที่อาจเกิดขึ้น
                                                        </li>
                                                        <li>โปรดระวังมิจฉาชีพที่แฝงมาในรูปแบบต่างๆ เช่น การรับจองบัตรคอนเสิร์ต การให้โค้ดจอง การซื้อ-ขายบัตรคอนเสิร์ตนอกระบบ การแอบอ้างเป็นพนักงานของบริษัทผู้จัดงานฯ เป็นต้น โปรดทราบว่า ทางผู้จัดงานขอสงวนสิทธิ์ในการให้สิทธิประโยชน์ของบัตรชมคอนเสิร์ตโดยยึดตามข้อมูลของผู้ซื้อบัตรคอนเสิร์ตจากผู้จัดเท่านั้น และจะไม่รับผิดชอบใดๆ หากเกิดความเสียหายในกรณีที่ลูกค้าซื้อบัตรคอนเสิร์ตจากบุคคลที่สาม ทั้งนี้ การตัดสินของผู้จัดงาน ถือเป็นที่สิ้นสุด
                                                        </li>
                                                        <li>การนำบัตรคอนเสิร์ตไปขายต่อหรือแจกเพื่อการโฆษณาหรือประชาสัมพันธ์ หรือเพื่อจัดกิจกรรมส่งเสริมการขายใดๆ โดยไม่ได้รับอนุญาตจากผู้จัดงาน ถือว่าผิดเงื่อนไข ผู้จัดงานมีสิทธิยกเลิกบัตรคอนเสิร์ตหรือปฏิเสธไม่ให้เข้าชมการแสดง รวมถึงยกเลิกสิทธิประโยชน์ใดๆ ของบัตรคอนเสิร์ตที่ขายต่อหรือแจกจ่ายโดยไม่ได้รบอนุญาตนั้น
                                                        </li>
                                                        <li>บัตรคอนเสิร์ตที่ซื้อแล้วไม่สามารถเปลี่ยนรอบและไม่สามารถเปลี่ยนที่นั่งได้
                                                        </li>
                                                        <li>บัตรคอนเสิร์ตเป็นทรัพย์สินของผู้จัดงาน ไม่อนุญาตให้นำไปจำหน่ายต่อ ขอคืนเงิน แลกเปลี่ยน หรือ โอนสิทธิในบัตรแก่ผู้อื่น หากตรวจสอบและพบหลักฐานการกระทำดังกล่าว ผู้จัดงานขอสงวนสิทธิ์ในการยกเลิกการจองในกรณียังไม่ชำระเงินหรือในกรณีที่ชำระเงินแล้วผู้จัดงานมีสิทธิยกเลิกบัตรคอนเสิร์ตโดยไม่ต้องแจ้งให้ทราบล่วงหน้าและไม่คืนเงินทุกกรณี และมีสิทธินำบัตรคอนเสิร์ตกลับคืนสู่ระบบเพื่อจำหน่ายใหม่อีกครั้ง
                                                        </li>
                                                        <li>โปรดตรวจสอบเงื่อนไขเพิ่มเติมได้ที่ <a href="http://www.thaiticketmajor.com/variety/info/6134/" target="_blank" class="text-link">http://www.thaiticketmajor.com/variety/info/6134/</a>
                                                        </li>
                                                        <li>การซื้อบัตรคอนเสิร์ตหมายถึงผู้ซื้อยอมรับตามข้อตกลงที่ทางผู้จัดงานกำหนดข้างต้นแล้วทุกประการ
                                                        </li>
                                                    </ul>
                                                    <h3>มาตรการสําหรับผู้เข้าชมการแสดง</h3>
                                                    <ul>
                                                        <li>ผู้เข้าชมทุกท่านต้องสวมหน้ากากอนามัยตลอดการชมการแสดง</li>
                                                        <li>รักษาระยะห่างระหว่างบุคคล</li>
                                                        <li>ไม่อนุญาตให้เปลี่ยนหรือย้ายที่นั่ง</li>
                                                        <li>ทำความสะอาดมืออยู่เสมอ ด้วยเจลแอลกอฮอล์ที่จัดให้บริการตามจุดต่างๆ ภายในบริเวณงาน</li>
                                                        <li>ไม่อนุญาตให้นำสิ่งของต้องห้ามเข้าภายในฮอลล์ ได้แก่ อาวุธทุกชนิด กระป๋อง ขวดแก้ว กล้องและเครื่องบันทึกเสียงทุกชนิด อาหาร และเครื่องดื่ม กระเป๋าขนาดใหญ่ ไม้เซลฟี่ แท็ปเล็ต หรือ โน้ตบุคที่มีขนาดเกินกว่า 7” ปากกาเลเซอร์ โดรน เป็นต้น</li>
                                                        <li>กรุณาเผื่อเวลาในการเดินทางและการตรวจคัดกรองก่อนเข้าชมการแสดง อย่างน้อย 1 ชม. ก่อนเริ่มการแสดง</li>
                                                        <li>เพื่อเป็นการป้องกันแพร่ระบาดของโรคโควิด-19 หากท่านมีอาการป่วย ไอ จาม มีน้ำมูก หรือมีไข้สูงเกินกว่า 37.5 องศาเซลเซียส หรือมีผลตรวจโควิด-19 เป็นบวก ผู้จัดมีสิทธิปฏิเสธการเข้าชมการแสดงได้ โดยทางผู้จัดสงวนสิทธิในการไม่คืนเงินในทุกกรณี</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-it full" data-aos="fade-up">
                                    <div class="inner">
                                        <h2 class="h3">ช่องทางการจำหน่ายบัตรและชำระเงิน</h2>
                                        <div class="payment-ch text-center">
                                            <div class="form-row justify-content-center">
                                                <div class="col-6 col-sm-2 col-lg">
                                                    <a target="_blank" href="https://corporate.thaiticketmajor.com/faq.php#buy-website" data-aos="fade-left" data-aos-delay="50">
                                                        <span class="img"><img class="lazy" src="assets/img/blank.gif" data-src="/assets/img/icon/desktop.svg" /></span><small>Website</small>
                                                    </a>
                                                </div>
                                                <div class="col-6 col-sm-2 col-lg">
                                                    <a target="_blank" href="https://corporate.thaiticketmajor.com/outlet-location.php" data-aos="fade-left" data-aos-delay="100">
                                                        <span class="img"><img class="lazy" src="assets/img/blank.gif" data-src="/assets/img/logo_ttm.png" /></span><small><span class="text-nowrap">Thaiticketmajor</span> Outlets</small>
                                                    </a>
                                                </div>
                                                <div class="col-6 col-sm-2 col-lg">
                                                    <a target="_blank" href="https://corporate.thaiticketmajor.com/outlet-location.php#heading-4" data-aos="fade-left" data-aos-delay="150">
                                                        <span class="img"><img class="lazy" src="assets/img/blank.gif" data-src="/assets/img/logo_thaipost.png" /></span><small>Thai Post</small>
                                                    </a>
                                                </div>
                                                <div class="col-6 col-sm-2 col-lg">
                                                    <a target="_blank" href="https://corporate.thaiticketmajor.com/outlet-location.php#heading-3" data-aos="fade-left" data-aos-delay="200">
                                                        <span class="img"><img class="lazy" src="assets/img/blank.gif" data-src="/assets/img/logo_major.png" /></span><small><span class="text-nowrap">Major Cineplex</span> Outlets</small>
                                                    </a>
                                                </div>
                                                <div class="col-6 col-sm-2 col-lg">
                                                    <a target="_blank" href="https://corporate.thaiticketmajor.com/contact-us.php" data-aos="fade-left" data-aos-delay="250">
                                                        <span class="img"><img class="lazy" src="assets/img/blank.gif" data-src="/assets/img/icon/call-center.svg" /></span><small><span class="text-nowrap">Call Center TTM</span> 02-2623456</small>
                                                    </a>
                                                </div>
                                                <div class="col-6 col-sm-2 col-lg">
                                                    <a target="_blank" href="https://corporate.thaiticketmajor.com/outlet-location.php#heading-5" data-aos="fade-left" data-aos-delay="300">
                                                        <span class="img"><img class="lazy" src="assets/img/blank.gif" data-src="/assets/img/lotus-s.png" /></span><small>Lotus's</small>
                                                    </a>
                                                </div>
                                                <div class="col-6 col-sm-2 col-lg">
                                                    <a target="_blank" href="https://corporate.thaiticketmajor.com/outlet-location.php#heading-7" data-aos="fade-left" data-aos-delay="350">
                                                        <span class="img"><img class="lazy" src="assets/img/blank.gif" data-src="/assets/img/logo_bigc.png" /></span><small>Big C</small>
                                                    </a>
                                                </div>
                                                <div class="col-6 col-sm-2 col-lg">
                                                    <a target="_blank" href="https://corporate.thaiticketmajor.com/how-to-pay.php#pay-by-air-pay" data-aos="fade-left" data-aos-delay="400">
                                                        <span class="img"><img class="lazy" src="assets/img/blank.gif" data-src="/assets/img/Shopee-Pay.png" /></span><small>ShopeePay</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div> -->
        </main>
        <footer class="main-footer">
            <div class="footer-container container">
                <div class="row">
                    <div class="col-12 col-lg-4 col-xl-4 d-none d-lg-block" style="text-align: center;">
                        <!-- <address class="box-address"> -->
                            <a class="ttm-logo" href="/">
                            <img src="../assets/img/ttm-logo-dark.png" alt="tickets" />
                            </a>
                            <p>
                                <span class="txtMed">บริษัท อีสานนครสิลป์ จำกัด</span>
                            </p>
                            <!-- <p>
                                3199 อาคารมาลีนนท์ทาวเวอร์ ชั้น 27, ถนนพระราม 4,<br>
                                แขวงคลองตัน, เขตคลองเตย, กรุงเทพฯ 10110 </p>
                            <p> -->
                                โทร : 093-465-8509 <br>
                                <!-- อีเมล : <a href="mailto:cs@thaiticketmajor.com">cs@thaiticketmajor.com</a> -->
                            </p>
                        <!-- </address> -->
                    </div>
                    <!-- <div class="col-12 col-lg-2">
                        <div class="menu-group">
                            <h3 class="menu-head">ไทยทิคเก็ตเมเจอร์</h3>
                            <ul class="menu-list">
                                <li class="menu-item"><a target="_blank" href="/about-us.php" title="เกี่ยวกับเรา">เกี่ยวกับเรา</a></li>
                                <li class="menu-item"><a target="_blank" href="/policies.php" title="เงื่อนไขการใช้บริการ">เงื่อนไขการใช้บริการ</a></li>
                                <li class="menu-item"><a target="_blank" href="/outlet-location.php" title="จุดจำหน่าย">จุดจำหน่าย</a></li>
                                <li class="menu-item"><a target="_blank" href="/advertisement.php" title="ติดต่อลงโฆษณา">ติดต่อลงโฆษณา</a></li>
                                <li class="menu-item"><a target="_blank" href="/job.php" title="ร่วมงานกับเรา">ร่วมงานกับเรา</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-12 col-lg-5">
                        <div class="menu-group">
                            <h2 class="menu-head">ช่องทางการติดตามผลงาน</h2>
                            <ul class="menu-list">
                                <li class="menu-item mb-2"><a href="javascript:void(0);" title="facebook">facebook : หมอลำอีสารนครศิลป์ แฟนเพจ</a></li>
                                <li class="menu-item mb-2"><a href="javascript:void(0);" title="instagram">instagram : Isannewgen_brand888</a></li>
                                <li class="menu-item mb-2"><a href="javascript:void(0);" title="youtube">youtube : คณะหมอลำอีสารนครศิลป์ official</a></li>
                                <li class="menu-item mb-2"><a href="javascript:void(0);" title="tiktok">tiktok : หมอลำอีสารนครศิลป์</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-lg-3">
                        <div class="menu-group">
                            <h3 class="menu-head">ช่วยเหลือ</h3>
                            <ul class="menu-list">
                                <li class="menu-item"><a target="_blank" href="/contact-us.php" title="ติดต่อเรา">ติดต่อเรา</a></li>
                                <li class="menu-item"><a target="_blank" href="/faq.php" title="คำถามที่พบบ่อย">คำถามที่พบบ่อย</a></li>
                                <li class="menu-item"><a target="_blank" href="/how-to-pay.php" title="วิธีการชำระเงิน">วิธีการชำระเงิน</a></li>
                                <li class="menu-item"><a href="/ajax/popup-feedback.php" class="btn-popup-ajax" title="ติชม/แจ้งปัญหาการใช้งาน">ติชม/แจ้งปัญหาการใช้งาน</a></li>
                                <li class="menu-item"><a href="/regis/unsub.htm" title="สมัคร/ยกเลิกรับข่าวสาร">สมัคร/ยกเลิกรับข่าวสาร</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-12 col-lg-3 col-xl-3">
                        <div class="contact-group">
                            <p>
                                <span class="d-inline-block d-lg-block">
                                    <span class="d-none d-lg-block">ติดต่องานแสดง/โฆษณา</span>
                                    <i class="fa fa-phone d-inline-block d-lg-none" aria-hidden="true"></i>
                                    <span class="txt-callcenter"><a>093-465-8509</a></span>
                                </span>
                                <!-- <span class="d-inline-block d-lg-none">
                                    <i class="fa fa-envelope ml-1" aria-hidden="true"></i>
                                    <span><a href="mailto:callcenter@thaiticketmajor.com">callcenter@thaiticketmajor.com</a></span>
                                </span> -->
                            </p>
                            <p class="box-social">
                                <a class="item" title="Facbook Fanpage" href="javascript:void(0);" ><img src="../assets/img/icon/facebook-circle.svg" alt="Facebook" /></a>
                                <!-- <a class="item" title="Twitter" href="javascript:void(0);" ><img src="../assets/img/icon/twitter-circle.svg" alt="Twitter" /></a>
                                <a class="item" title="Line" href="javascript:void(0);"><img src="../assets/img/icon/line-circle.svg" alt="Line" /></a> -->
                                <a class="item" title="Instagram" href="javascript:void(0);"><img src="../assets/img/icon/instagram-circle.svg" alt="Instagram" /></a>
                                <a class="item" title="Youtube" href="javascript:void(0);"><img src="../assets/img/icon/youtube-circle.svg" alt="Youtube" /></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/js/core/jquery.js"></script>
    <script src="assets/js/core/jquery-migrate-3.0.0.min.js"></script>
    <script src="assets/js/core/jquery.easing.js"></script>
    <script src="assets/js/core/jquery.mousewheel.js"></script>
    <script src="assets/js/core/detect.min.js"></script>
    <script src="assets/js/core/jquery.cookie.js"></script>
    <script src="assets/js/vendor/fancybox/jquery.fancybox.min.js"></script>
    <script src="assets/js/vendor/slick/slick.min.js"></script>
    <!-- LAZY -->
    <script src="assets/js/vendor/lazy/jquery.lazy.min.js"></script>
    <script src="assets/js/vendor/lazy/jquery.lazy.youtube.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/event-template/assets/js/main.min.js?v=162127"></script>
    <script src="assets/js/template.min.js?v=162127"></script>
    <div style="display:none;">
        <div class="popup-signin" id="popup-signin">
            <div class="popupContainer">
                <a href="/" class="head-logo"><img src="/assets/img/ttm-logo.png" alt="THAITICKETMAJOR"></a>
            </div>
        </div>
        <!-- Display user's profile info -->
        <div class="ac-data" id="userData"></div>
        <link rel="stylesheet" type="text/css" href="/assets/css/intlTelInput.min.css" />
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadRC_signin" async defer></script>
        <script src="/assets/js/vendor/dobpicker.min.js"></script>
        <script src="/assets/js/vendor/intl-tel-input/intlTelInput.min.js"></script>
        <script>
            // var RC_resetPassword;
            // var RC_signup;
            // var onloadRC_signin = function() {
            //     RC_resetPassword = grecaptcha.render('RC_resetPassword', {
            //         'sitekey': '6LeOyn0UAAAAAN02aY4koMP7zq7Ly7fMXCVuHmX9',
            //     });
            //     RC_signup = grecaptcha.render('RC_signup', {
            //         'sitekey': '6Ld5SH0UAAAAAGAKKGZo-WvZVqKahSy_jgXG_pjr',
            //     });
            // };
            // $(function() {
            //     $app.form.signin();
            //     $app.form.signup();

            // });
        </script>
    </div>
    <script>
        AOS.init({
            disable: 'mobile'
        });
    </script>
    <!-- modalChoose_Number -->
    <div class="modal fade" id="modalChoose_Number" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <div align="left" class=" mb-3">
                                <label for="number_select" id="numlabel" style="text-align: center;">กรอกจำนวนบัตร</label>
                                <input type="number" class="form-control" oninput="this.value = Math.round(this.value);" id="number_select" name="number_select" placeholder="กรุณากรอกจำนวน">
                            </div>
                            <div style="display: flex; justify-content: center;" id="QR_code"></div>
                            <div style="display: flex; justify-content: center;" id="QR_price"></div>
                        </div>
                        <div style="display: flex; justify-content: center;">
                            <button class="btn btn-warning mr-3 btnCancel" type="button">ยกเลิก</button>
                            <button class="btn btn-primary btnSave" type="button">ยืนยัน</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end modalChoose_Number-->
</body>

</html>
<scrip>

</scrip>
<script src="<?php echo base_url('assets/js/login_facebook/auth_face.js?v=' . time()); ?>"></script>
<script src="<?php echo base_url('assets/js/login_facebook/buy_tickets.js?v=' . time()); ?>"></script>
<script>
    $(".btnCancel").click(function() {
        $('#modalChoose_Number').modal('hide');
        $('#number_select').val('');
        $("#QR_code").html('<div style="display: flex; justify-content: center;" id="QR_code"></div>');

        $.ajax({
            type: 'get',
            url: '/qrCancel',
            contentType: 'application/json; charset=utf-8;',
            processData: false,
        });
        window.location.reload();
    });
</script>