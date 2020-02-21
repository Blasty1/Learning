@extends('layout')
@section('content')
<div class="container"> 
<div id="newsletter" class="container">
		<div class="title">
			<h2>Modify Your Article</h2>
		</div>
		<div class="content">
			<form method="POST" action="/{{$Article->id}}/edit">
				@csrf
				@method('PUT')
				<div class="row half">
					<div class="6u">
						<input type="text" style="padding: 0.6em;" class="text" name="ArticleName" id="ArticleName" value="{{$Article->ArticleName}}" />
					</div>
					<div class="6u">
						<input type="text" style="padding: 0.6em;"  class="text" name="ArticlePreface" id="ArticlePreface" value="{{$Article->ArticlePreface}}"/>
					</div>
					<div class="6u">
						<input type="text" style="padding: 0.6em;"  class="text" name="ArticlePathImage" id="ArticlePathImage" value="{{$Article->ArticlePathImage}}"/>
					</div>
					<div class="6u">
						<textarea name="ArticlePathFileText" style="padding: 0.6em;" id="ArticlePathFileText">{{$TextArticle}}</textarea>
				
					</div>
				</div>
				<div class="row">
					<div class="12u"> <Button type="submit" class="button">Modifica</div>
				</div>
			</form>
		</div>
	</div>

    </div>

@endsection
