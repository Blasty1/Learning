@extends('layout')

@section('home_riquadro')

<div class="container"> 
<div id="newsletter" class="container">
		<div class="title">
			<h2>Registrazione</h2>
		</div>
		<div class="content">
			<form method="post" action="{{ route('register') }} ">
				@csrf
				<div class="row half">
					<div class="6u">
					@error('name')
						<div id='error'>{{$message}}
					@enderror
						<input type="text" class="text" name="name" id="name" placeholder="Name" />
					</div>
					</div>
					<div class="6u">
					@error('email')
						<div id='error'>{{$message}}
					@enderror
						<input type="email" class="text" name="email" id="email" placeholder="Email" />
					</div>
					<div class="6u">
					@error('password')
						<div id="error">{{$message}}
					@enderror
						<input type="password" class="text" name="password" id="password" placeholder='Password'/>
					
					</div>
				</div>
		
				<div class="row">
					<div class="12u"> <Button type='submit' class="button">Registrati</div>
				</div>
			</form>
		</div>
	</div>

     </div>
   


@endsection
