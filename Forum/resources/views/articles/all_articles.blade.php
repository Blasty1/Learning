@extends('layout')
@section('content')
<div id="wrapper3">
	<div id="portfolio" class="container">
		<div class="title">
			<h2>Articles </h2>
			<span class="byline">Ordinati secondo le tue recenti letture</span> </div>

			@foreach($Articles as $i)
				<?php echo $i; ?>
			@endforeach

	</div>
</div>
@endsection