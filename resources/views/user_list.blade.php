<!DOCTYPE html>
<html lang="ja">
　<head>
　　<meta charset="utf-8">
　　<title>ユーザー情報一覧</title>
　</head>
　<body>
   <table border="1">
      <tr>
         <th>id</th>
         <th>login_id</th>
         <th>last_name</th>
         <th>first_name</th>
         <th>sex</th>
         <th>mail_address</th>
         <th>created_at</th>
         <th>updated_at</th>
         <th>deleted_at</th>
      </tr>
      @foreach($users as $user)
      <tr>
         <td>{{$user->id}}</td>
         <td>{{$user->login_id}}</td>
         <td>{{$user->last_name}}</td>
         <td>{{$user->first_name}}</td>
         <td>{{$user->sex}}</td>
         <td>{{$user->mail_address}}</td>
         <td>{{$user->created_at}}</td>
         <td>{{$user->updated_at}}</td>
         <td>{{$user->deleted_at}}</td>
      </tr>
      @endforeach 
   </table>

　</body>
</html>
