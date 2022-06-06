<link rel="stylesheet" type="text/css" href="stylem.css">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>story</title>
  <link rel="stylesheet" href="style_nav.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<style>
      .container{
    max-width: 55%;
    margin:   auto;
    text-align: center;


}
.card-img-top{
    height:204px
}
</style>
<body>
  
<header>

<nav>
    <a href="start.php">تسجيل خروج</a>
    <a  href="story.php?do=Add">اضافة عنصر</a>
    <a  href="story.php">القصص</a>

    <a href="admin.php">الرئيسية</a>

      <div class="animation start-home"></div>
    </nav>
</header>
<?php




  include 'connect.php';


  $do = isset($_GET['do']) ?$_GET['do'] : 'control';


  if($do == "control"){


    $stmt = $con->prepare("SELECT * FROM library WHERE type='story' ");


    $stmt->execute();


    $rows = $stmt->fetchAll();


    ?>



<div class="container">
    <div class="row mt-3" >
    <?php


        foreach($rows as $u){?>

      <div class="col-lg-4 col-sm-12 " style="margin-top:10px; ">
              <div class="card" style="width: 14rem;" >
                  <img src="<?php echo $u['image'];?>" class="card-img-top" alt="...">
                  <div class="card-body" style="background-color:#e6ffe6;">

                      <h5 class="card-title"><?php echo $u['name']; ?>  </h5>
                      <a href="<?php echo $u['link'];?>" class="btn btn-success">القراءة</a>
                      <a href="down_pdf.php?link=<?php echo $u['link'];?>" class="btn btn-outline-success"><i class="fa fa-download"></i></a>
                      <br>
                      <a href="story.php?do=Edit&std=<?php echo $u['id'];?>" class="btn btn-primary">تعديل</a>
                      <a href="story.php?do=Delete&std=<?php echo $u['id'];?>"class="btn btn-danger">حذف</a>

                  </div>
                  </div>
              </div>

      <?php  }

    ?>
        </div>

</div>


    <?php


  }


    elseif($do == "Add"){?>



<form action="?do=Insert" method="POST" enctype="multipart/form-data">


الاسم : <input type="text" name ="name"/>


    <br><br>


الملف :<input type="file" name="link" id="link"/>


    <br><br>
    
    


النوع : <select name="type" id="type">
<option value="story">قصة</option>

</select>
<br><br>



الصورة :<input type="file" name="image" id="image"/>


<br><br>




<br><br>

    <input class="btn btn-outline-success" type="submit" name="upload" value="حفظ" >


</from>


<?php     


}


elseif($do == "Insert"){


if($_SERVER["REQUEST_METHOD"] == "POST")


{



    $name = $_POST['name'];


   // $link = $_POST['link'];
    
    $type = $_POST['type'];
    
    
    if (isset($_POST['upload'])) {
        
    
    $filename = $_FILES["image"]["name"];
    
    
    $temp = $_FILES["image"]["tmp_name"];
    
    
    $folder = "".$filename;
    
    move_uploaded_file($temp,$folder);

        
    $filename1 = $_FILES["link"]["name"];
    
    
    $temp1 = $_FILES["link"]["tmp_name"];
    
    
    $folder1 = "".$filename1;
    
    move_uploaded_file($temp1,$folder1);
    
    $stmt  = $con->prepare("INSERT INTO library (name , link,type ,image  ) VALUES (:zname , :zfolder1 ,:ztype ,:zfolder )");
    

    $stmt->execute(array(
    'zname' => $name,
    'zfolder1' => $folder1,
    'ztype'=> $type, 
    'zfolder'=> $folder 
    ));
    
    
    
    
    }
    
    
    
    header("location:story.php");
    
    
    

        }


    }


    elseif($do == "Edit"){


        $std = isset($_GET['std']) && is_numeric($_GET['std']) ? intval($_GET['std']) : 0;


        $stmt1  = $con->prepare("SELECT * FROM library WHERE id = ?");


        $stmt1->execute(array($std));


        $rows = $stmt1->fetch();


        $count = $stmt1->rowCount();


        


        if($stmt1->rowCount() > 0){?>


            <form action="?do=Update" method="POST" enctype="multipart/form-data">


               <input type="hidden" name="std" value ="<?php echo $std ?>">


               الاسم : <input type="text" name ="name" value="<?php echo $rows['name']?>" class="input-group" />


                <br><br>


                الملف :<input type="file" name="link" value="<?php echo $rows['link']?>" class="input-group" />


                <br><br>



                الصورة :<input type="file" name="image" value="<?php echo $rows['image']?>" class="input-group" />


                <br><br>




                <button type="submit" class="btn btn-outline-success">حفظ</button>

                <!-- <input class="btn" type="submit" value="حفظ" > -->


            </from>


     <?php


        }


    }


    elseif($do == "Update"){


        if($_SERVER["REQUEST_METHOD"] == "POST"){



            $id = $_POST['std'];


            $name  = $_POST['name'];


          //  $link = $_POST['link'];



         //  $image  = $_POST['image'];

 
         
        $filename = $_FILES["image"]["name"];
     

        $temp = $_FILES["image"]["tmp_name"];


        $folder = "".$filename;

        move_uploaded_file($temp,$folder);


        $filename1 = $_FILES["link"]["name"];
     

        $temp1 = $_FILES["link"]["tmp1_name"];


        $folder1 = "".$filename1;

        move_uploaded_file($temp1,$folder1);


            




            $stmt2 = $con->prepare("UPDATE library SET name = ? , link =? , type='story',image=?  WHERE id = ?");


            $stmt2->execute(array($name,$folder1,$folder,$id));


            


            header("location:story.php");




        }


    }


    elseif($do == 'Delete')


    {

        $std = isset($_GET['std']) && is_numeric($_GET['std']) ? intval($_GET['std']) : 0;


         $stmt3 = $con->prepare("DELETE FROM library WHERE id = :zid");


         $stmt3->bindParam(":zid" ,$std);


         $stmt3->execute();


         header("location:story.php");
  }


  ?>
  
  </body>
  </html>