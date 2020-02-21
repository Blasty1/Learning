 @extends('layout')


<!--
-->
@section('home_riquadro')
<div class="container"> 
<div id="newsletter" class="container">
		<div class="title">
			<h2>Login</h2>
		</div>
		<div class="content">
			<form method="post" action="{{ route('login') }} ">
				@csrf
				<div class="row half">
					<div class="6u">
					@error('name')
						<div id="error">{{$message}}</div>
					@enderror
						<input type="text" class="text" name="name" id="name" placeholder="Username" />
					</div>
					<div class="6u">
						<input type="password" class="text" name="password" id="password" placeholder='Password'/>
					</div>
				</div>
				<div class="row">
					<div class="12u"> <Button type="submit" class="button">Entra</div>
				</div>
			</form>
		</div>
	</div>

    </div>

@endsection

