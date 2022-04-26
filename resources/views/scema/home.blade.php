	@extends('Master/master')		
	@section('content')
        <div class="header-large-title">
            <h1 class="title">Selamat Datang @empty (Auth::user())@else{!! Auth::user()->name !!}@endempty</h1>
            <h4 class="subtitle">
                {!! setting('site.description') !!}
            </h4>
        </div>

        @php
            $tha=DB::table('posts')->orderBy('created_at','desc')->get();
            // dd($tha);
        @endphp

        @foreach ($tha as $key=>$element)
             <div class="section mt-3 mb-3">
                <div class="card">
                    <img src="{!! url('storage/'.$element->image) !!}" class="card-img-top" alt="image">
                    <div class="card-body">
                        <h6 class="card-subtitle">{!! $element->slug !!}</h6>
                        <h5 class="card-title">{!! $element->title !!}</h5>
                        <p class="card-text">
                            {!! $element->excerpt !!}
                        </p>
                        <a href="app-pages.html" class="btn btn-primary">
                            <ion-icon name="layers-outline"></ion-icon>
                            Preview
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
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