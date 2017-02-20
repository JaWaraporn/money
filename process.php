
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title></title>
</head>

<body>
 <div class="wrap1280">
 <div class="box-bg">
  <div class="container">
<div class="box2">
  <?php
  $money=$_POST['money'];   
  $coin=$_POST['coin'];
 
 
  switch ($coin) {
   case 1:
    $coin_m=0.03;
    $sum=$money*$coin_m;
 
    echo "money ".number_format($money,2)." bath  =  ".number_format($sum,2)."America(USD)";
    break;
   case 2:
    $coin_m=0.02;
    $sum=$money*$coin_m;
    echo "money ".number_format($money,2)." bath =  ".number_format($sum,2)." ปอนด์(GBP)";
    break;    
   case 3:
    $coin_m=0.2;
    $sum=$money*$coin_m;
    echo "money ".number_format($money,2)." bath  =  ".number_format($sum,2)."ฮ่องกง(HKD)";
    break;    
  }
 
  ?>
 
</div>
</div>
</div>
</div>
</body>
</html>