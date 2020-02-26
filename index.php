<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  .container-fluid{
    height: 100%;
    margin-top: 5%;
    margin-bottom: 5%;
  }
  .block1 {
    max-height: 100%;
    background-color: #b3b3b3;
    border-style: outset;
  }
  .block{
    height: auto;
    background: #ffffff;
  }
  img{
    width: 100%;
  }
  .fontstyle{
    font-size: 2vw;
    margin-bottom: -10%;
    margin-top: 10%;
    color: #ffffff;
    text-decoration: none;
  }
  .head{
    font-size: 6vw;
    margin-top: 3%;
    margin-bottom: 3%;
  }
  .image1{
    position: relative;
  }
  .secondtext{
    font-size: 3.5vw;
  }
  .one{
    width: 40%;
    margin-top: 17%;
  }
  .two{
    background: #000000;
  }
  .image2{
    border-right:1px solid #ffffff;
    margin-top: 2%;
  }
  .img{
    position: absolute;
    top: 20%;
    left: 20%;
    width: 40%;
  }
  </style>
</head>

<body>
  <div class="container-fluid block">
    <div class="row no-gutters">

      <?php 

      $conn=mysqli_connect('localhost','root','','emp');
      $result=mysqli_query($conn,"SELECT * FROM emp2");
      while(mysqli_fetch_array($result))
      {
        ?>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 block1">
        <div class="text-center head">HOTEL KRISHNA</div>
         <div class="text-center image1"><img src="1.jpg"><img src="6.png" class="img"></div>
          <div class="text-center secondtext">Table No: <?php echo $row['empid']; ?></div>
          <div class="text-center secondtext">Scan QR Code To Order FOOD</div>
          <div class="row no-gutters two">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-6 text-center">
                  <img src="4.png" class="image2">
                </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-6">
                <div class="text-center"><a href="https://play.google.com/store" class="fontstyle">Available ON!!</a></div>
                  <div class="row no-gutters">
                  <div class="col-xs-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-6 text-center"><img src="4.png"></div>
                  <div class="col-xs-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-6 text-center"><img src="apple.png" class="one"></div>
                </div>
              </div>
            </div>
        </div>
    <?php  } ?>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>    
  <!-- Latest compiled and minified JavaScript -->
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</body>
</html>