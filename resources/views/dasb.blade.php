<div class="container">
    <div class="row">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
        <div class="col-md-6">
            <div class="card mb-3 rounded" style="">
                <div class="row g-0">
                    <div class="col-md-4 text-center" style="margin-bottom: 0px;margin-top: 15px;">
                        <img src="{{ url('/storage/settings/June2022/user.png') }}" class="img-fluid rounded-circle"
                            style="max-width: 150px;">
                    </div>
                    <div class="col-md-8" style="color: black">
                        <div class="card-body">
                            <h3 class="card-title">DATA USER</h3>
                            <p class="card-text">
                                @php
                                    $data1 = DB::table('users');
                                @endphp
                                TOTAL DATA USER : {{ $data1->count() }}
                            </p>
                            <p class="card-text">
                                <small class="text-muted">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a class="btn btn-primary" href="{{url('/admin/users')}}">Lihat</a>
                                        {{-- <button type="button" class="btn btn-success">Unduh</button> --}}
                                        {{-- <button type="button" class="btn btn-primary">Right</button> --}}
                                    </div>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-3 rounded" style="">
                <div class="row g-0">
                    <div class="col-md-4 text-center" style="margin-bottom: 0px;margin-top: 15px;">
                        <img src="{{ url('/storage/settings/June2022/lengkap.png') }}" class="img-fluid rounded-circle"
                            style="max-width: 150px;">
                    </div>
                    <div class="col-md-8" style="color: black">
                        <div class="card-body">
                            <h3 class="card-title">SUDAH DAFTAR ULANG</h3>
                            <p class="card-text">
                                @php
                                    $data2 = DB::table('inwepon');
                                @endphp
                                {{-- @dd($data2->dump()) --}}
                                TOTAL DATA USER : {{ $data2->count()}}
                            </p>
                            <p class="card-text">
                                <small class="text-muted">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{url('/admin/c_view')}}" class="btn btn-primary">Lihat</a>
                                        <a href="{{url('/admin/c_ex')}}" class="btn btn-success">Unduh</a>
                                        {{-- <button type="button" class="btn btn-primary">Right</button> --}}
                                    </div>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-3 rounded" style="">
                <div class="row g-0">
                    <div class="col-md-4 text-center" style="margin-bottom: 0px;margin-top: 15px;">
                        <img src="{{ url('/storage/settings/June2022/3740813.png') }}" class="img-fluid rounded-circle"
                            style="max-width: 150px;">
                    </div>
                    <div class="col-md-8" style="color: black">
                        <div class="card-body">
                            <h3 class="card-title">BELUM DAFTAR ULANG</h3>
                            <p class="card-text">
                                @php
                                    $belum = $data1->count() - $data2->count();
                                @endphp
                                TOTAL DATA USER : {{ $belum }}
                            </p>
                            <p class="card-text">
                                <small class="text-muted">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        {{-- <button type="button" class="btn btn-primary">Lihat</button> --}}
                                        <a href="{{url('/admin/c_ex2')}}" class="btn btn-success">Unduh</a>
                                        {{-- <button type="button" class="btn btn-primary">Right</button> --}}
                                    </div>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12">

        </div>
    </div>
</div>
