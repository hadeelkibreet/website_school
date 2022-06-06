<?php 
 include 'connect.php';

 $stmt = $con->prepare("SELECT * FROM library WHERE type='film' ");


 $stmt->execute();


 $rows = $stmt->fetchAll();

 $stmt2 = $con->prepare("SELECT * FROM library WHERE type='Song' ");


 $stmt2->execute();


 $rows2 = $stmt2->fetchAll();

 
 $stmt3 = $con->prepare("SELECT * FROM library WHERE type='story' ");


 $stmt3->execute();


 $rows3 = $stmt3->fetchAll();
 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="style_nav.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<style>
    .container{
    max-width: 55%;
    margin:   auto;
    /* background:#e0ebeb; */
    text-align: center;


}
.img1{
    background-image: url("backg.jpg");
  background-repeat: no-repeat;
  background-position:  top;
  height: 284px;
  position: relative;
	margin:  auto 0;
}
.img5{
    background-image: url("lab.jpg");
  background-repeat: no-repeat;
  background-position:  top;
  height: 184px;
  position: relative;
	margin:  auto 0;
}
.img2{
    background-image: url("story.jpg");
  background-repeat: no-repeat;
  background-position:  top;
  height: 319px;
  position: relative;
	margin:  auto 0;
}
.img3{
    background-image: url("song.jpg");
  background-repeat: no-repeat;
  background-position:  top;
  height: 418px;
  position: relative;
	margin:  auto 0;
}
.img4{
    background-image: url("film.jpg");
  background-repeat: no-repeat;
  background-position:  top;
  height: 335px;
  position: relative;
	margin:  auto 0;
}
.card-img-top{
    height:204px
}
.footer{

  background:#34495e;
  color:white;

}
th, td {
  padding-inline-start: 215px;
    padding-inline-end: 157px;
}

table {
  margin-left: auto; 
  margin-right: auto;

}


</style>
<body>
<header>

<nav>
      <a href="start.php">تسجيل خروج  </a>
      <a href="film.php" >المسلسلات </a>
      <a href="song.php" >الأغاني </a>
      <a href="story.php" >القصص </a>
      <a href="admin.php">الرئيسية</a>
      
      <div class="animation start-home"></div>
    </nav>
</header>
<div class="img1"></div>
<div class="img5"> </div>
<hr>


    <div class="img2"></div>


<div class="container">
    <div class="row mt-3" >
        <?php
        foreach($rows3 as $u){
        ?>
        <div class="col-lg-4 col-sm-12 " style="margin-top:10px; ">
        <div class="card" style="width: 14rem;" >
            <img src="<?php echo $u['image'];?>" class="card-img-top" alt="...">
            <div class="card-body " style="background-color:#e6ffe6;">
                <h5 class="card-title"><?php echo $u['name']; ?></h5>
                <a href="<?php echo $u['link'];?>" class="btn btn-success">القراءة</a>
                <a href="down_pdf.php?link=<?php echo $u['link'];?>" class="btn btn-outline-success"><i class="fa fa-download"></i></a>
                
            </div>
            </div>
        </div>


        <?php
        }
        ?>
    </div>

</div>
<hr>

<div class="img3"></div>
<div class="container">
    <div class="row mt-3" >
        <?php
        foreach($rows2 as $u){
        ?>
        <div class="col-lg-4 col-sm-12 " style="margin-top:10px; ">
        <div class="card" style="width: 14rem;" >
            <img src="<?php echo $u['image'];?>" class="card-img-top" alt="...">
            <div class="card-body" style="background-color:#e6ffe6;">
                <h5 class="card-title"><?php echo $u['name']; ?></h5>
                <a href="<?php echo $u['link'];?>" class="btn btn-success">الإستماع</a>
                <a href="download_mp4.php?video_link=<?php echo $u['link'];?>" class="btn btn-outline-success"><i class="fa fa-download"></i></a>

            </div>
            </div>
        </div>


        <?php
        }
        ?>
    </div>

</div>
<hr>

    <div class="img4"></div>
    <div class="container">
    <div class="row mt-3" >
        <?php
        foreach($rows as $u){
        ?>
        <div class="col-lg-4 col-sm-12 " style="margin-top:10px; ">
        <div class="card" style="width: 14rem;" >
            <img src="<?php echo $u['image'];?>" class="card-img-top" alt="...">
            <div class="card-body" style="background-color:#e6ffe6;">
                <h5 class="card-title"><?php echo $u['name']; ?></h5>
                <a href="<?php echo $u['link'];?>" class="btn btn-success">المشاهدة</a>
                <a href="download_mp4.php?video_link=<?php echo $u['link'];?>" class="btn btn-outline-success"><i class="fa fa-download"></i></a>

            </div>
            </div>
        </div>


        <?php
        }
        ?>
    </div>

</div>



<footer>
<div class="footer">
  <hr style="height:5px;">

  <table>
  <tr>
    <th >Name</th>
    <th style=" text-align:center ;">class</th>
  </tr>
  <tr>
    <td>nibal_131649</td>
    <td style=" text-align:center ;">c1</td>
  </tr>

    <tr>
    <td>mobasher_133907</td>
        <td style="  border: 1px ;text-align:center ;">:زورونـــــا  <br> <i class='fab fa-facebook' style='margin:12px;;font-size:30px;color:#6666ff
'></i>

<i class='fab fa-twitter' style='font-size:30px;color:#80dfff;margin:12px;

'></i>
<i class='fab fa-youtube' style='font-size:30px;color:red;margin:12px;'></i>

      </td>


  </tr>
    <tr>
    <td style="padding-bottom:40px;">hadil_127728</td>

  </tr>
</table>


</div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>