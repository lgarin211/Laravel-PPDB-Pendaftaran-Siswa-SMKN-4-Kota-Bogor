<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Mobilekit Mobile UI Kit</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="{{ url('/mobilekit1/') }}/assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/mobilekit1/') }}/assets/img/icon/192x192.png">
    <link rel="stylesheet" href="{{ url('/mobilekit1/') }}/assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">FAQ</div>
        <div class="right">
            <a href="page-contact.html" class="headerButton">
                <ion-icon name="mail-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section text-center">
            <img src="{{ url('/mobilekit1/') }}/assets/img/sample/photo/vector5.png" alt="image" class="imaged w200">
        </div>

        <div class="section full">
            <div class="section-title">Welcome to Frequently Asked Questions</div>
            <div class="wide-block pt-2 pb-2">
                Welcome to the frequently asked questions page. You can find the answer to your question here.
            </div>
        </div>

        <div class="section full mt-2">
            <div class="section-title">AKUN, Login, Registrasi</div>

            <div class="accordion" id="accordionExample1">

                <div class="item">
                    <div class="accordion-header">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#accordion1">
                            Kendala Login
                        </button>
                    </div>
                    <div id="accordion1" class="accordion-body collapse" data-parent="#accordionExample1">
                        <div class="accordion-content">
                            Hallo Jika kamu kesulitan untuk melakukan login pada halaman berikut <a href="{{ url('/admin') }}">#tekan aku</a>. kamu harus memasukan email dan password yang terdaftar pada Portal PPDB SMKN 4 untuk melakukan Login dan Pendaftaran Siswa Baru, Jika Kamu belum Memiliki akun Harap pilih menu register lalu kembali login 
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="accordion-header">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#accordion3">
                            Cara Melakukan Registrasi
                        </button>
                    </div>
                    <div id="accordion3" class="accordion-body collapse" data-parent="#accordionExample1">
                        <div class="accordion-content">
                            We are using lastest Bootstrap 4.
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="accordion-header">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#accordion4">
                            Lupa Sandi
                        </button>
                    </div>
                    <div id="accordion4" class="accordion-body collapse" data-parent="#accordionExample1">
                        <div class="accordion-content">
                            You can make mobile websites or progressive web apps for mobile devices.
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="accordion-header">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#accordion5">
                            Profile
                        </button>
                    </div>
                    <div id="accordion5" class="accordion-body collapse" data-parent="#accordionExample1">
                        <div class="accordion-content">
                            No, this template build with HTML, CSS and Javascript and some love.
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="section full mt-2">
            <div class="section-title">PPDB SMKN 4 BOGOR</div>

            <div class="accordion" id="accordionExample2">

                <div class="item">
                    <div class="accordion-header">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#accordion6">
                            Kapan Di Mulai
                        </button>
                    </div>
                    <div id="accordion6" class="accordion-body collapse" data-parent="#accordionExample2">
                        <div class="accordion-content">
                            You can buy only at Themeforest.
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="accordion-header">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#accordion7">
                            Data Yang Di siapkan
                        </button>
                    </div>
                    <div id="accordion7" class="accordion-body collapse" data-parent="#accordionExample2">
                        <div class="accordion-content">
                            No, we don't accept refunds. Please review the template carefully before you buy.
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="section full mt-2 mb-2">
            <div class="section-title">Pusat Bantuan</div>

            <div class="accordion" id="accordionExample3">

                <div class="item">
                    <div class="accordion-header">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#accordion8">
                            Kontak Kami
                        </button>
                    </div>
                    <div id="accordion8" class="accordion-body collapse" data-parent="#accordionExample3">
                        <div class="accordion-content">
                            Feel free to contact us on <a href="https://themeforest.net/user/bragher"
                                target="_blank">our profile page</a>.
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>
    <!-- * App Capsule -->

    @include('Master/navb')

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{ url('/mobilekit1/') }}/assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="{{ url('/mobilekit1/') }}/assets/js/lib/popper.min.js"></script>
    <script src="{{ url('/mobilekit1/') }}/assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="{{ url('/mobilekit1/') }}/assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{ url('/mobilekit1/') }}/assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="{{ url('/mobilekit1/') }}/assets/js/base.js"></script>


</body>

</html>