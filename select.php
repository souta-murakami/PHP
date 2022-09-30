<?php
    $user_name = $_GET["user_name"];
    $user_id = $_GET["user_id"];
    $start = $_GET["start"];
    $size = $_GET["size"];



  try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=order;charset=utf8;',
        'root',
        '',
        [ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]
    );

      // 5件 検索
      $query2 = 'SELECT * FROM products order by id limit :begin, :size';


    $stmt2 = $pdo->prepare($query2);
    $stmt2->bindParam(':begin', $start, PDO::PARAM_INT);
    $stmt2->bindParam(':size', $size, PDO::PARAM_INT);
    $stmt2->execute();
    $result2 = $stmt2->fetchAll();

    require_once 'viewSelect_tpl.php';
    }

    catch (PDOException $e) {
    // 例外が発生したら無視
    require_once 'exception_tpl.php';
    echo $e->getMessage();
    exit();
  }






?>
