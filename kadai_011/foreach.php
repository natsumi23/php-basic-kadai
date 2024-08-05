<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>課題011</title>
  </head>

  <body>
    <p>
      <?php
      $dates = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

      foreach ($dates as $index => $value) {
        echo "{$index}:{$value}<br>";
      }
      ?>
    </p>
  </body>
</html>