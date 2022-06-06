


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
  
<main class="container">


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






}
?>

<form method="POST">

<div class="link-container">
  <input type="text" class="link" name="link" require>
  <select for="">
    <option value="mp3">mp3</option>
    <option value="480">mp4</option>

  </select>
  <div class="button-container">
  <button class="btn" type="submit">start</button>

  </div>
</div>
<script>

    $(".btn").click(function(){
      var link = $(".link").val();
      var format=$(".format").children("option:selected").val();
      var src= "" + link + "=" + format + "";
      download(link,format);
    });
    function download(link,format)
    {
      $('.button-container').html('<ifrma style="height:50px; border:none;overflow:hidden;"scr="https://loader.to/api/button/?url='+link+'&f='+format+'"></iframe>');

    }
</script>
</form>

</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

