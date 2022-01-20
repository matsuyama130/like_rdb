<?php
session_start();
include('functions.php');
check_session_id();


?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型ツールリスト（入力画面）</title>
</head>

<body>
  <form action="lost_create.php" method="POST">
    <fieldset>
      <legend>DB連携型ツールリスト（入力画面）</legend>
      <a href="lost_read.php">一覧画面</a>
      <a href="lost_logout.php">ログアウト</a>
      <div>
        tool: <input type="text" name="tool">
      </div>
     
      <div>
        takeout: <input type="date" name="takeout">
      </div>
      <body>
  <div>
    Waypoint1: <select>
      <option value = "A">A</option>
      <option value = "B">B</option>
      <option value = "C">C</option>
      <option value = "D">D</option>
      <option value = "E">E</option>
      <option value = "F">F</option>
      <option value = "G">G</option>
      <option value = "H">H</option>
      <option value = "I">I</option>
   </select>
<input type="text" name= "waypoint1">
   </div>
<div>
   Waypoint2: <select type="text" name= "waypoint2">
      <option value = "A">A</option>
      <option value = "B">B</option>
      <option value = "C">C</option>
      <option value = "D">D</option>
      <option value = "E">E</option>
      <option value = "F">F</option>
      <option value = "G">G</option>
      <option value = "H">H</option>
      <option value = "I">I</option>
   </select>
   </div>
   <div>
   Waypoint3: <select type="text" name= "waypoint3">
      <option value = "A">A</option>
      <option value = "B">B</option>
      <option value = "C">C</option>
      <option value = "D">D</option>
      <option value = "E">E</option>
      <option value = "F">F</option>
      <option value = "G">G</option>
      <option value = "H">H</option>
      <option value = "I">I</option>
   </select>
   </div>
    
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>