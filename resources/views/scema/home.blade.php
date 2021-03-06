 @extends('Master/master')
 @section('content')
     <div class="header-large-title">
         <h1 class="title text-center">SELAMAT DATANG <br> @empty(Auth::user())
                 @else{!! Auth::user()->name !!}
             @endempty
         </h1>
         <h4 class="subtitle text-center">
             {!! setting('site.description') !!}
         </h4>
     </div>
     {{-- @dump(Auth::user()); --}}
     @if (!empty(Auth::user()->id))
         @php
             $users = DB::table('users')
                 ->join('DOKUMEN_PERSYARATAN', 'users.id', '=', 'DOKUMEN_PERSYARATAN.AUTH_ID')
                 ->where('users.id', Auth::user()->id)
                 ->first();
             // dd($users);
         @endphp
         <div class="section mt-3 mb-3 card">
             <div class="card mb-3" style="max-width: 100vw;">
                 <div class="row g-0">
                     <div class="col-md-4">
                         @if (empty($users->PAS_POTO))
                             <img src="https://ppdb.smkn4bogor.sch.id/storage/lgarin211.jpg" class="img-fluid rounded"
                                 style="width: 100%;height: 300px;object-fit: cover;">
                         @else
                             <img src="{{ url('/storage/' . $users->PAS_POTO) }}" class="img-fluid rounded"
                                 style="width: 100%;height: 300px;object-fit: cover;">
                         @endif
                     </div>
                     <div class="col-md-8">
                         <div class="card-body">
                             {{-- <h5 class="card-title">{{AUTH}}</h5> --}}
                             <p class="card-text">
                             <div class="row">
                                 <div class="col-5">
                                     NAMA
                                 </div>
                                 <div class="col-7">
                                     : {{ Auth::user()->name }}
                                 </div>
                                 <div class="col-5">
                                     NISN
                                 </div>
                                 <div class="col-7">
                                     : {{ Auth::user()->NISN }}
                                 </div>
                                 <div class="col-5">
                                     PROGRAM KEAHLIAN
                                 </div>
                                 <div class="col-7">
                                     : {{ Auth::user()->Kejuruan }}
                                 </div>
                                 <div class="col-5">
                                     JALUR PENDAFTARAN
                                 </div>
                                 <div class="col-7">
                                     : {{ Auth::user()->JDP }}
                                 </div>

                             </div>
                             </p>
                             <p class="card-text"><small class="text-muted"></small></p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
     @else
         @php
             $tha = DB::table('posts')
                 ->orderBy('created_at', 'desc')
                 ->limit(10)
                 ->get();
         @endphp

         @foreach ($tha as $key => $element)
             <div class="section mt-3 mb-3 card">
                 <div class="card text-center">
                     <center>
                         <img src="{!! url('storage/' . $element->image) !!}" class="card-img-top" alt="image" style="width: 150px">
                     </center>
                     <div class="card-body">
                         <h5 class="card-title">{!! $element->title !!}</h5>
                         <p class="card-text">
                             {!! $element->excerpt !!}
                         </p>
                         <a href="{{ url('art/?id=' . $element->id) }}" class="btn btn-primary">
                             <ion-icon name="layers-outline"></ion-icon>
                             LIHAT
                         </a>
                     </div>
                 </div>
             </div>
         @endforeach
     @endif
     <!-- app footer -->
     <div class="appFooter">
         {{-- <img src="{{ url('/mobilekit1/') }}/assets/img/logo.png" alt="icon" class="footer-logo mb-2"> --}}
         <div class="footer-title">
             Copyright ?? SMKN 4 BOGOR 2022.
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
