@extends('Master/master')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="p-4 p-md-5 mb-4 text-white rounded ">
            @php
                $berita=DB::table('posts')->where('id',6)->first();
                // dump($berita);   
            @endphp
            <div class="col-md-6 px-0">
              {{-- <h3 class="display-4 fst-italic">{{$berita->title }}</h3> --}}
              <p class="lead my-3">
                  {!! $berita->body !!}
              </p>
              {{-- <p class="lead mb-0"><a href="{{back()}}" class="text-white fw-bold">back</a></p> --}}
            </div>
        </div>
    </div>
</div>
@endsection