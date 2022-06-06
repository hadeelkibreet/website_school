
<?php
  include 'connect.php';





if(isset($_POST['send'])){
$Title = $_POST['Title'];
$Content = $_POST['Content'];
 

$stmt = $con->prepare("SELECT * FROM user WHERE name='$Title' AND pass='$Content'");


$stmt->execute();


$rows = $stmt->fetchAll();
$count=$stmt->rowCount();
// echo "<td>".$rows['name']."</td>";

if($count==1){
    if($Title=='admin' && $Content=='123'){
echo "<script> location.replace('admin.php'); </script>";
        
    }else
    {
echo "<script> location.replace('start-users.php'); </script>";
    }

}
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="style_nav.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style>
    body
    {
        background-image: url("backlogin.jpg");
            background-color: #000000;
            background-position: center;
            text-align: center;
    }

    .sr-background-transparent {
            background-color: rgb(254, 254, 255);
            border-color: gold;

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
       color:white;

}

 
</style>
<body>
<header>

<nav>
      <a href="#">اتصل بنا </a>
      <a href="register.php" >سجل الآن   </a>
      <a href="start.php">الرئيسية</a>
      
      <div class="animation start-home"></div>
    </nav>
</header>
<main class="container">


<form method="POST">
<div class="h-100 row align-items-center">
        <div class="col d-flex justify-content-center">
            <div class="card m-5 w-100" style="background-color:rgba(0,0,0,0.3);">
                <div class="card-header" style="background-color:antiquewhite;">
                    <h2 class="card-title-center" style="color:darkslateblue;"><i class='fab fa-gratipay' style='font-size:48px;color:#00b300'></i> أهلا بكم 
                    <i class='fab fa-gratipay' style='font-size:48px;color:#00b300'></i>
 </h2>
                </div>
                <div class="card-body m-7" style="background-color:antiquewhite">
                    <label for="mid" class="h5 label-control d-flex justify-content-center" style="color:darkslateblue">أدخل حسابك الشخصي</label>
                    <div class="row d-flex justify-content-center">
                        <div class="col-6">
                            <div class=" h5 form-group" style="color:indianred;">

                                <input id="name" name="Title" class="form-control nb-border-color nb-border-hover" placeholder="اسم المستخدم" required />
                            </div>
                            <div class=" h5 form-group" style="color:indianred;">

                                <input id="pass" name="Content" class="form-control nb-border-color nb-border-hover" placeholder="كلمة المرور" required />
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col_6">
                                    <button type="submit" name="send" class="btn btn-outline-success">تسجيل الدخول</button>
                                </div>

                            </div>
                            <div class="row justify-content-between mb-2">
                                
                                <div class="col-12">

                                    <a href="register.php" style="color: darkslateblue">إذا لم يكن لديك حساب اضغط هنا للتسجيل  </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <script src="../assets/js/jquery.min.js"></script>
                <script src="../assets/js/boostrap.min.js"></script>
                <script src="../assets/js/popper.js"></script>

    
</form>

</main>

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

