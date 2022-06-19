		<div class="col-md-12">
			<div class="card">
	            <div class="mb-2">
	                <img src="assets/img/sample/photo/vector3.png" alt="alt" class="imaged square w200">
	            </div>
	            <h1 class="title">Coming Soon!</h1>
	            <div class="text mb-3">
	                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	            </div>
	            <div class="row">
	            	@foreach ($nas as $key=>$bis)
				           		@php
				           			$datapin=$bis;
				           			unset($datapin->id,$datapin->created_at,$datapin->updated_at,$datapin->id_user,$datapin->id_tipe_pendaftara);
			        			@endphp
				       			@foreach ($datapin as $key=>$element)
				       			<p class="col-6">{!! strtoupper(str_replace('_', ' ', $key)) !!} : {!! $element !!}</p>
				           		@endforeach
					@endforeach
	            </div>
	            <div class="fixed-footer">
	                <div class="row">
	                    <div class="col-12">
	                        <a href="app-pages.html" class="btn btn-primary btn-lg btn-block">Go Back</a>
	                    </div>
	                </div>
	            </div>
        	</div>
		</div>