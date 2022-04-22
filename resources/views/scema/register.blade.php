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

<body class="bg-white">

    <!-- loader -->
{{--     <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div> --}}
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
            <a href="{{ url('/admin') }}" class="headerButton">
                Login
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="login-form">
            <div class="section">
                <h1>Register</h1>
                <h4>Buatlah Akun Untuk Mendaftarkan Diri dan Mendapatkan Informasi Seputar PPDB 2022 di SMKN 4 Bogor</h4>
            </div>
            <div class="section mt-2 mb-5">
                <form action="{{ url('restination') }}" method="POST">
                    @csrf
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkapmu">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="email" name="email" class="form-control" placeholder="Masukan Email yang tidak Digunakan">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" name="password" class="form-control" id="password1" placeholder="Password">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" class="form-control" id="password2"
                                placeholder="Password (again)" onchange="buas()">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=" mt-1 text-left">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customChecka1" onclick="">
                            <label class="custom-control-label text-muted" for="customChecka1">Saya Akan <a
                                    href="javascript:;">Ingat Email dan Password Saya !</a></label>
                        </div>
                    </div>
                    <style type="text/css">
                        .buas{
                            display: none;
                        }
                    </style>
                    <div class="form-button-group buas" id="nas">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" >Register</button>
                    </div>

                </form>
            </div>
        </div>



    </div>
    <!-- * App Capsule -->



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

    <script type="text/javascript">
        function buas() {
            var p1=document.getElementById('password1').value
            var p2=document.getElementById('password2').value

            if (p1==p2) {
                document.getElementById('nas').classList.toggle('buas')
            }
        }
    </script>

</body>

</html>