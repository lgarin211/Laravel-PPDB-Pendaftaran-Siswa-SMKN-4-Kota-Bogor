@if (empty(Auth::user()))
    <script type="text/javascript">
           window.location.replace('{{ url('/admin') }}')
    </script>
@else 
	@extends('Master/master')		
	@section('content')
	@php
		$nas=[];
	@endphp
		 <div class="header-large-title">
            <h4 class="title"> PENDAFTARAN </h4>
        </div>

        <ul class="listview image-listview flush transparent mt-3 mb-2">
           	
           	@php
           		$table=DB::table('DataUmum')->where('id',Auth::user()->id);
           		// $count=$table->count()>1; 
           		$nas['DataUmum']=$table->first();
           	@endphp
           	@if ($table->count()==0)
				<li>
	                <a href="{{  url('/admin/dataumum/create') }}" class="item">
	                    <div class="icon-box bg-primary">
	                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
	                    </div>
	                    <div class="in">
	                        Data Umum
	                    </div>
	                </a>
	            </li>
            @else
	            <li>
	               <a href="{{  url('/admin/dataumum/'.Auth::user()->id.'/edit') }}" class="item">
	                    <div class="icon-box bg-primary">
	                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
	                    </div>
	                    <div class="in">
	                        edit Data Umum
	                    </div>
	               </a>
	            </li>
           	@endif

           	@php
           		$table=DB::table('Data_Jalur_Pendaftaran')->where('id',Auth::user()->id)->where('id_user',Auth::user()->id)->where('id_tipe_pendaftara',Auth::user()->id);
           		$nas['Data_Jalur_Pendaftaran']=$table->first();
           	@endphp 
           	@if ($table->count()==0)
				<li>
	                <a href="{{  url('admin/data-jalur-pendaftaran/create') }}" class="item">
	                    <div class="icon-box bg-primary">
	                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
	                    </div>
	                    <div class="in">
	                        Program Keahlian
	                    </div>
	                </a>
	            </li>
            @else
	            <li>
	                <a href="{{  url('admin/data-jalur-pendaftaran/'.Auth::user()->id.'/edit') }}" class="item">
	                    <div class="icon-box bg-primary">
	                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
	                    </div>
	                    <div class="in">
							edit Program Keahlian
	                    </div>
	                </a>
	            </li>
           	@endif
        @if(!empty($table->first()))   	
			@php
           		$table2=DB::table('Jalur_'.$table->first()->tipe_pendaftaran)->where('id',Auth::user()->id)->where('id_user',Auth::user()->id);
           		$nas['Pendaftaran']=$table2->first()
           	@endphp 
           	@if ($table2->count()==0)
				<li>
	                <a href="{{  url('admin/jalur-'.strtolower($table->first()->tipe_pendaftaran).'/create') }}" class="item">
	                    <div class="icon-box bg-primary">
	                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
	                    </div>
	                    <div class="in">
	                    	{{ $table->first()->tipe_pendaftaran }}
	                    </div>
	                </a>
	            </li>
            @else
	            <li>
	                <a href="{{  url('admin/jalur-'.strtolower($table->first()->tipe_pendaftaran).'/'.Auth::user()->id.'/edit') }}" class="item">
	                    <div class="icon-box bg-primary">
	                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
	                    </div>
	                    <div class="in">
	                    	edit {{ $table->first()->tipe_pendaftaran }}
	                    </div>
	                </a>
	            </li>
           	@endif

           	@php
           		$table2=DB::table($table->first()->Kejuruan)->where('id',Auth::user()->id)->where('id_user',Auth::user()->id);
           		$nas['Kejuruan']=$table2->first();
           	@endphp 
           	@if ($table2->count()==0)
				<li>
	                <a href="{{  url('admin/'.strtolower($table->first()->Kejuruan).'/create') }}" class="item">
	                    <div class="icon-box bg-primary">
	                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
	                    </div>
	                    <div class="in">
	                    	{{ $table->first()->Kejuruan }}
	                    </div>
	                </a>
	            </li>
            @else
	            <li>
	                <a href="{{  url('admin/'.strtolower($table->first()->Kejuruan).'/'.Auth::user()->id.'/edit') }}" class="item">
	                    <div class="icon-box bg-primary">
	                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
	                    </div>
	                    <div class="in">
	                    	edit {{ $table->first()->Kejuruan }}
	                    </div>
	                </a>
	            </li>
           	@endif
        @endif
		</ul>
	@endsection

	@section('c2')
		<div class="col-md-12">
			<div class="col-md-12 text-center">
	            <div class="mb-2">
	                <img src="https://www.smkn4bogor.sch.id/wp-content/uploads/2020/07/logoSMKN4.jpg" alt="alt" class="imaged square w200">
	            </div>
	            <h1 class="title">{!! Auth::user()->name !!}</h1>
	            <div class="text mb-3">
	            	Hallo {!! Auth::user()->name !!} harap periksa dan isi data ya .
	            </div>
	            <div class="row">
	            	@foreach ($nas as $key=>$bis)
				           		@php
				           			$datapin=$bis;
				           			unset($datapin->id,$datapin->created_at,$datapin->updated_at,$datapin->id_user,$datapin->id_tipe_pendaftara);
			        			@endphp
			        			@empty ($datapin)
			        			@else   
					       			@foreach ($datapin as $key=>$element)
					       			<p class="col-sm-6 text-left">{!! strtoupper(str_replace('_', ' ', $key)) !!} :
					       			 	<strong> {!! $element !!} </strong>
					       			</p>
					           		@endforeach
					           	@endempty
					@endforeach
	            </div>
        	</div>
		</div>
		<hr>
	@endsection
@endif
