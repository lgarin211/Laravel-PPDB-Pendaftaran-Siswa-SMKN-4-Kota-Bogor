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
				$fas=[
					4=>[
						'name'=>'DATA_UMUM',
						'link'=>'data-umum',
						'text'=>"DATA UMUM",
					],
					1=>[
						'name'=>'DATA_KHUSUS',
						'link'=>'data-khusus',
						'text'=>"DATA KHUSUS",
					],
					2=>[
						'name'=>'DATA_ORANGTUA',
						'link'=>'data-orangtua',
						'text'=>"DATA ORANG TUA",
					],
					3=>[
						'name'=>'DATA_BEASISWA',
						'link'=>'data-beasiswa',
						'text'=>"DATA BEASISWA",
					],
					5=>[
						'name'=>'DATA_ALAMAT',
						'link'=>'data-alamat',
						'text'=>"DATA ALAMAT",
					],
					0=>[
						'name'=>'CITA_CITA',
						'link'=>'cita-cita',
						'text'=>"CITA CITA",
					],
					6=>[
						'name'=>'DATA_COVID',
						'link'=>'data-covid',
						'text'=>"PROTOKOL COVID",
					],
					7=>[
						'name'=>'DATA_MEDIS',
						'link'=>'data-medis',
						'text'=>"DATA MEDIS",
					],
					8=>[
						'name'=>'DATA_PRESTASI',
						'link'=>'data-prestasi',
						'text'=>"DATA PRESTASI",
					],
					9=>[
						'name'=>'DATA_SENSUS_SEKOLAH_ASAL',
						'link'=>'data-sensus-sekola-asal',
						'text'=>"SENSUS SEKOLAH ASAL",
					],
					10=>[
						'name'=>'DATA_SENSUS_UMUM',
						'link'=>'data-sensus-umum',
						'text'=>"SENSUS UMUM",
					],
				];
			@endphp
			@foreach ($fas as $key=>$item)
				@php
					$table=DB::table($item['name'])->where('AUTH_ID',Auth::user()->id);
					$nas[$item['name']]=$table->first();
				@endphp
				{{-- @dd($table); --}}
				@if ($table->count()==0)
				<li>
	                <a href="{{  url('/admin/'.$item['link'].'/create') }}" class="item">
	                    <div class="icon-box bg-primary">
	                        <ion-icon name="chat bubble-ellipses-outline"></ion-icon>
	                    </div>
	                    <div class="in">
	                        {{$item['text']}}
	                    </div>
	                </a>
	            </li>
				@else
				<li>
					<a href="{{  url('/admin/'.$item['link'].'/'.Auth::user()->id.'/edit') }}" class="item">
							<div class="icon-box bg-danger">
								<ion-icon name="chatbubble-ellipses-outline"></ion-icon>
							</div>
							<div class="in">
								DATA KHUSUS
							</div>
					</a>
				</li>
				@endif
			@endforeach

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
			        				<table class="table text-left">
									  <tbody>
										@foreach ($datapin as $key=>$element)
										    <tr>
										      <th width="200px">{!! strtoupper(str_replace('_', ' ', $key)) !!}</th>
										      <td class="text-left">
											    @if(strpos($key,"foto")===0)
													<img src="{{ url('/storage/'.$element) }}" class="img-fluid" style="max-height: 250px;">
												@else
								       			 	<strong> {!! $element !!} </strong>
												@endif
										      </td>
										    </tr>
						           		@endforeach
									  </tbody>
									</table>
					           	@endempty
					@endforeach	
				</div>
				<a href="#" class="btn btn-primary col-12">Print data</a>
        	</div>
		</div>
		<hr>
	@endsection
@endif
