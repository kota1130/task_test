@foreach($users as $user)
        
       id: {{$user->id}}<br>
       user_id: {{$user->user_id}}<br>
       password: {{$user->password}}<br>
       =========================<br>
   
        
    @endforeach
