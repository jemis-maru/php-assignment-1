<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chess board</title>
  <style>
    main {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .board {
      display: flex;
      flex-wrap: wrap;
      width: 600px;
      height: 600px;
      border: 2px solid #000;
    }
    .cell {
      width: 75px;
      height: 75px;
      border: 1px solid #000;
      box-sizing: border-box;
    }
    .cell.white {
      background: #fff;
    }
    .cell.black {
      background: #000;
    }
  </style>
</head>
<body>
  <main>
    <h1>Chess board</h1>
    <div class="board">
      <?php 
      
      $previous = 'white';

      for($i = 0; $i < 64; $i++) { 
        $fill = $previous;

        if($i % 8 == 0 && $i != 0) {
          if($fill == 'white') {
            $fill = 'black';
          } else {
            $fill = 'white';
          }
        }

        if($fill == 'white') {
          $previous = 'black';
        } else {
          $previous = 'white';
        }
      ?>
        <div class="cell <?php echo $fill; ?>"></div>
      <?php } ?>
    </div>
  </main>
</body>
</html>