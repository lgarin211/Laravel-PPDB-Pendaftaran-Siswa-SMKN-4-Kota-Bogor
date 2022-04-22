	@extends('Master/master')		
	@section('content')
        <div class="header-large-title">
            <h1 class="title">PPDB SMKN 4 BOGOR</h1>
            <h4 class="subtitle">2022</h4>
        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <img src="https://www.smkn4bogor.sch.id/wp-content/uploads/2021/05/IMG-20210526-WA0005.jpg" class="card-img-top" alt="image">
                <div class="card-body">
                    <h6 class="card-subtitle">Discover</h6>
                    <h5 class="card-title">Pages</h5>
                    <p class="card-text">
                        Mobilekit comes with basic pages you may need and use in your projects easily.
                    </p>
                    <a href="app-pages.html" class="btn btn-primary">
                        <ion-icon name="layers-outline"></ion-icon>
                        Preview
                    </a>
                </div>
            </div>
        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <img src="https://sman8bekasi.sch.id/wp-content/uploads/2019/07/P3.jpg" class="card-img-top" alt="image">
                <div class="card-body">
                    <h6 class="card-subtitle">PPDB Segera Di Buka</h6>
                    <h5 class="card-title">Pendaftaran Penerimaan Peserta Didik Baru Tahun 2022</h5>
                    <p class="card-text">
                    	Pendaftaran Penerimaan Peserta Didik Baru Tahun 2022 Akan Segera di Buka Ayo Pahami dan Cermati Persyaratannya
                    </p>
                    <a href="http://www.detik.com/edu/sekolah/d-6015445/ppdb-2022-dibuka-mei-begini-tahapan-pendaftaran-hingga-seleksi" class="btn btn-primary">
                        <ion-icon name="cube-outline"></ion-icon>
                        Detail
                    </a>
                </div>
            </div>
        </div>
        <!-- app footer -->
        <div class="appFooter">
            {{-- <img src="{{ url('/mobilekit1/') }}/assets/img/logo.png" alt="icon" class="footer-logo mb-2"> --}}
            <div class="footer-title">
                Copyright © SMKN 4 BOGOR 2020.
            </div>
            <div>Portal Pendaftaran Penerimaan Peserta Didik Baru Tahun 2022.</div>
            Sekolah Menengah Kejuruan Negeri 4 Kota Bogor

            <div class="mt-2">
                <a href="#" class="btn btn-icon btn-sm btn-secondary goTop">
                    <ion-icon name="arrow-up-outline"></ion-icon>
                </a>
            </div>

        </div>
        <!-- * app footer -->
@endsection