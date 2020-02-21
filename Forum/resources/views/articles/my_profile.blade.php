@extends('layout')
@section('content')
<?php $profile= Auth::user(); ?>
<div class='title'>
<h2>Benvenuto nel tuo profilo</h2></div>
<div id="three-column">
<p>Nome:{{$profile->name}}</p>
<p>Email: {{$profile->email}}</p>
<p>Ti sei iscritto il {{date_format($profile->created_at,'d F o')}}</p>
<p>Articoli scritti: {{$Num_articoli}}</p>
<p>Ruolo: {{$profile->User_permess}}</p></div>
@endsection