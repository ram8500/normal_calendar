<?php
session_start();
require_once 'cal_date.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>PHPカレンダー</title>
    <link rel="icon" href="img/favicon.ico">
    <!-- CSS -->
    <link rel="stylesheet" href="cal_style.css">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- view -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  ver5.0.0-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- bootstrap  ver5.0.0 /JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="container_header">
      <div class="container_header1">
        <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
      </div>
    </div>
    <table class="table table-bordered">
      <tr>
        <th>日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th>土</th>
      </tr>
      <?php
          foreach ($weeks as $week) {
              echo $week;
          }
      ?>
    </table>
    <table class="table-details table table-bordered">
      <thead>
        <tr>
          <th colspn="2" class="details">
            <div id="select_day"><?php echo $today1;?></div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="details">予定の内容</td>
        </tr>
      </tbody>
    </table>
  </div>
<script src="cal_script.js"></script>
</body>
</html>