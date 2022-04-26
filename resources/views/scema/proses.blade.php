@if (empty(Auth::user()))
    <script type="text/javascript">
           window.location.replace('{{ url('/admin') }}')
    </script>
@else 
	@extends('Master/master')		
	@section('content')
		 <div class="header-large-title">
            <h1 class="title"> PENDAFTARAN </h1>
        </div>

        <ul class="listview image-listview flush transparent mt-3 mb-2">
           	
           	@php
           		$table=DB::table('DataUmum')->where('id',Auth::user()->id);
           		// $count=$table->count()>1; 
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
                <div class="col-md-12 pt-2">
            		<ul>
            			@php
            				$datapin=$table->first();
            				unset($datapin->id,$datapin->created_at,$datapin->updated_at);
            			@endphp
            			@foreach ($datapin as $key=>$element)
            			<li>{!! strtoupper(str_replace('_', ' ', $key)) !!} : {!! $element !!}</li>
            			@endforeach
            		</ul>
            	</div>
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
	            <div class="col-md-12 pt-2">
	           		<ul>
	           			@php
	           				$datapin=$table->first();
	           				unset($datapin->id,$datapin->created_at,$datapin->updated_at,$datapin->id_user,$datapin->id_tipe_pendaftara);
	           			@endphp
	           			@foreach ($datapin as $key=>$element)
	           			<li>{!! strtoupper(str_replace('_', ' ', $key)) !!} : {!! $element !!}</li>
	           			@endforeach
	           		</ul>
           		</div>
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
           		<ul>
	           		@php
	           			$datapin=$table2->first();
	           			unset($datapin->id,$datapin->created_at,$datapin->updated_at,$datapin->id_user,$datapin->id_tipe_pendaftara);
        			@endphp
	       			@foreach ($datapin as $key=>$element)
	       			<li>{!! strtoupper(str_replace('_', ' ', $key)) !!} : {!! $element !!}</li>
	           		@endforeach
	           	</ul>
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
		  		<ul>
	           		@php
	           			$datapin=$table2->first();
	           			unset($datapin->id,$datapin->created_at,$datapin->updated_at,$datapin->id_user,$datapin->id_tipe_pendaftara);
        			@endphp
	       			@foreach ($datapin as $key=>$element)
	       			<li>{!! strtoupper(str_replace('_', ' ', $key)) !!} : {!! $element !!}</li>
	           		@endforeach
	           	</ul>
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
@endif