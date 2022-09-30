<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title></title>
</head>
<body>
<p>ようこそ <?php echo $user_name; ?> さん</p>


<?php
echo '<form action="addition.php" method="get">';
echo '    <input type="submit" name="additionBtn" value="新規登録">';
echo '    </form>';



  foreach($result2 as $row) {
    echo '<p>';
    echo $row["name"];
    echo ', \\';
    echo $row["price"];

echo '<form action="update.php" method="get">';
echo '    <input type="hidden" name="user_name" value="<?php echo $user_name, ?>">';
echo '    <input type="hidden" name= "user_id" value="<?php echo $user_id; ?>">';
echo '    <input type="hidden" name= "product_id" value="$row["id"]">';
echo '    <input type="submit" name="submitBtn" value="更新">';
echo '  </form>';




echo '</p>';
  }

?>

  <form action="select.php" method="get">
    <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <inpyt type="hidden" name="start" value="
<?php
  $next = $start - 5;
  if ($next < 0) {
    $next = 0;
  }
  echo $next;
?>
    ">
    <input type="hidden" name="size" value="<?php echo $size; ?>">
    <input type="hidden" name="start" value="<?php
  $next = $start - 5;
  if ($next < 0) {
    $next = 0;
  }
  echo $next;
?>">
    <input type="submit" name="submitBtn" value="前へ">
  </form>

    <form action="select.php" method="get">
      <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
      <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
      <input type="hidden" name="start" value="<?php echo $start + 5; ?>">
      <input type="hidden" name="size" value="<?php echo $size; ?>">
      <input type="submit" name="submitBtn" value="次へ">
  </form>


</body>
</html>
