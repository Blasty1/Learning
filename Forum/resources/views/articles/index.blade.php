@extends('layout')
@section('content')
<!-- attuiamo delle modifiche al layout -->
<div id="banner" class="container" style="border-left:none;border-right: none; border-bottom: 30px solid rgba(255,255,255,.4)">
		<div class="heading">
			<h2>Benvenuto {{Auth::user()->name}}</h2>
			<p>Inizia a creare contenuti e a pubblicarli sul nostro sito, in modo da ottenere views e da aiutare altra gente</p>
			<a href="{{route('new_article')}}" class="button" >Crea Contenuti</a>
		</div>
	</div>
@endsection