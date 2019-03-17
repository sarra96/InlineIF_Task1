<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Task1</title>
  
</head>
<body>

<form method="post" action="">
   Score: <input type="text" name="score">
    <input type="Submit" name="Submit" value="Submitted">
    
</form>
<?php
if (isset($_POST['Submit'])){
echo 'Based on your score, you are a ',((int)$_POST['score'] > 10 ? 'genius' : 'nobody');
}
?> 
</body>
</html>