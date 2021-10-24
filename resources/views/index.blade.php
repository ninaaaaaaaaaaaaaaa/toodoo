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
}
.delete-btn{
padding: 8px 20px;
  border-color:#70e8cf;
  color:#70e8cf;
  background:white;
  border-radius: 9px;
  border: 2px solid;
  font-weight: bold;
}
</style>
<body>
  <div class="todo">
   <div class="card">
   <h1>TodoList</h1>
   <div class="todoo">
   <div class="toodo">
  <form  action="/todo/create" methot="POST">
  <input type="text" name="todo" class="create">
  <input type="submit" value="追加" class="create-btn"></form>
   </div>
 
  <table>
  <tr><th>作成日</th><th>タスク名</th><th>更新</th><th>削除</th></tr>
 @foreach($items as $item)
  <tr>
  <td>{{$item -> created_at}}</td>
  <td><input type="text" class="list-udate" value="{{$item -> content}}" name=content></td>
  <form action="/todo/update" methot="POST">
  <td><input type="submit" value="更新" class="update-btn"></td></form>
<form action="/todo/delete" method="POST">
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