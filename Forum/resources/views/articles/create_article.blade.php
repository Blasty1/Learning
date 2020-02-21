@extends('layout')
@section('content')
<div class="container"> 
<div id="newsletter" class="container">
		<div class="title">
			<h2>Create your Article</h2>
		</div>
		<div class="content">
			<form method="post" action="{{ route('new_article') }} ">
				@csrf
				<div class="row half">
					<div class="6u">
					@error('ArticleName')
						<div id='error'>{{$message}}
					@enderror
						<input type="text" style="padding: 0.6em;" class="text" name="ArticleName" id="ArticleName" placeholder="Name of Article" />
					</div>
					<div class="6u">
					@error('ArticlePreface')
						<div id='error'>{{$message}}
					@enderror
						<input type="text" style="padding: 0.6em;"  class="text" name="ArticlePreface" id="ArticlePreface" placeholder='Preface of Article'/>
					</div>
					<div class="6u">
					@error('ArticlePathImage')
						<div id='error'>{{$message}}
					@enderror
						<input type="text" style="padding: 0.6em;"  class="text" name="ArticlePathImage" id="ArticlePathImage" placeholder='Link of image'/>
					</div>
					<div class="6u">
					@error('ArticlePathFileText')
						<div id='error'>{{$message}}
					@enderror
						<textarea name="ArticlePathFileText" style="padding: 0.6em;" id="ArticlePathFileText" placeholder="Write Your Article"></textarea>
				
					</div>
				</div>
				<div class="row">
					<div class="12u"> <Button type="submit" class="button">Crea</div>
				</div>
			</form>
		</div>
	</div>

    </div>

@endsection
