<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
</head>
<style>
body{
  background-color: navy;
}
.card{
  background: white;
  width: 57%;
  margin: auto;
  border:white;
  border-radius:15px;
  position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
  padding: 12px;
}
.toodo{
  text-align: center;
}
table{
  display: flex;
  justify-content: center;
  align-items:center;
  padding: 15px;
}
.create{
  width: 78%;
  height: 35px;
  border:1px solid #ddd;
  border-radius:3px;
}
h1{
  font-size:25px;
  padding:10px 30px;
  margin: 0;
}
.create-btn{
  padding: 8px 20px;
  border-color:#f360eb;
  color:#f360eb;
  background:white;
  border-radius: 9px;
  border: 2px solid;
  font-weight: bold;
  margin-left:40px;
  cursor: pointer;
}
.create-btn:hover{
  background-color:#f360eb;
  boder-color:#f360eb;
  color:#fff;
}

th,td{
  padding: 15px 10px;
  text-align:center;
}
.list-udate{
  height: 30px;
  width: 280px;
  border:1px solid #ddd;
  border-radius:3px;
}
.update-btn{
  padding: 8px 20px;
  border-color:orange;
  color:orange;
  background:white;
  border-radius: 9px;
  border: 2px solid;
  font-weight: bold;
  cursor: pointer;
}
.update-btn:hover{
  background-color:orange;
  boder-color:orange;
  color:#fff;
}
.delete-btn{
padding: 8px 20px;
  border-color:#70e8cf;
  color:#70e8cf;
  background:white;
  border-radius: 9px;
  border: 2px solid;
  font-weight: bold;
  cursor: pointer;
}
.delete-btn:hover{
  border-color:#70e8cf;
  background-color:#70e8cf;
  color:#fff;
}
</style>
<body>
  <div class="todo">
   <div class="card">
   <h1>TodoList</h1>
   
   <div class="todoo">
   <div class="toodo">
  <form  action="/todo/create" method="POST">
  @csrf
  @if(count($errors)>0)
  <ul>
  @foreach($errors -> all() as $error)
  <li>{{$error}}</li>
  @endforeach
  </ul>
  @endif
  <input type="text"  name="content" class="create"　>
  <input type="submit" value="追加" class="create-btn"></form>
   </div>
 
  <table>
  <tr><th>作成日</th><th>タスク名</th><th>更新</th><th>削除</th></tr>
 @foreach($items as $item)
  <tr>
  <td>{{$item -> created_at}}</td>
  <form action="/todo/update" method="POST">
  
  
  <td><input type="text" name="content" class="list-udate" value="{{$item -> content}}"></td>
  
  <td>
  <input type="submit"  value="更新" class="update-btn">
  <input type="hidden" name="id" value="{{$item->id}}">
  @csrf
  </form></td>
  
<form action="/todo/delete" method="POST">
<input type="hidden" name="id"  value="{{$item->id}}">
@csrf
  <td><input type="submit" value="削除" class="delete-btn"></td>
  </form>



  </tr>
@endforeach
  </table>
  

  </div>
   </div>
  </div>
</body>
</html>