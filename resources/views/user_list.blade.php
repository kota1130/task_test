<!DOCTYPE html>
<html lang="ja">
　<head>
　　<meta charset="utf-8">
　　<title>テスト</title>
　</head>
　<body>
   <table border="1">
    <tr>
     <th>id</th>
     <th>user_id</th>
     <th>password</th>
    </tr>
    @foreach($users as $user)
    <tr>
     <td>{{$user->id}}</td>
     <td>{{$user->user_id}}</td>
     <td>{{$user->password}}</td>
    </tr>
    @endforeach 
   </table>

　</body>
</html>
