@foreach($users as $user)
	<li>{!! $user["primeiro_nome"], " " ,$user["segundo_nome"]!!}</li>
	<li>{!! $user["primeiro_nome"]!!} {!! $user["segundo_nome"]!!} Ola mundo</li>

@endforeach