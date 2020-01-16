@extends('layout')
@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
				<?php
				foreach($article as $al){
				echo '<div class="title"><h2>'.$al->title.'</h2></div> <p><img src="/images/banner.jpg" alt="" class="image image-full" />'.$al->excerpt.'</p>';
				} 
				?>
			</div>
</div>
</div>
@endsection
