入門課題です<br>

@foreach($values as $value)

id:{{$value->id}}<br>
user_id:{{$value->user_id}}<br>
password:{{$value->password}}<br>
=========================<br>
@endforeach
