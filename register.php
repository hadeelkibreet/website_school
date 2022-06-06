
<?php 
  include 'connect.php';

if(isset($_POST['send'])){
   {

    $name =$_POST['name'] ;
    $pass =$_POST['pass'] ;
    $date =$_POST['date'] ;
    $sex = $_POST['sex'];
    $language = $_POST['language'];
    $speak =$_POST['speak'] ;
    $study =$_POST['study'] ;
    $level = $_POST['level'];
    $fatherName = $_POST['fatherName'];
    $matherName =$_POST['matherName'] ;
    $supervisor =$_POST['supervisor'] ;
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country =$_POST['country'] ;
    $city =$_POST['city'] ;
    $address = $_POST['address'];
    $message = $_POST['message'];

    $addData = $con->prepare("INSERT INTO user(name,pass,date,sex,language,speak,study,level,fatherName,matherName,supervisor,email,phone,country,city,address,message)
     VALUES('$name','$pass','$date','$sex','$language','$speak','$study','$level','$fatherName','$matherName','$supervisor','$email','$phone','$country','$city','$address','$message')");



    if($addData->execute())
    {
        header("location:start-users.php");
    }
   
       
    }

}
?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="style_nav.css">

        <title>Register </title>
        <style >
        body {
            background-image: url("backlogin.jpg");
            background-color: #000000;
            background-position: center;
        }


        .sr-background-transparent {
            background-color: rgb(254, 254, 255);
            border-color: gold;

        }

            .h-100 row align-items-center{
     
                grid-template-columns: repeat(3,1fr);
                grid-template-rows: 100px 1fr 1fr 100px ;

                gap:10px;
                padding: 10px;
                box-sizing: border-box;
            }
            .h-100 row align-items-center div{
                padding: 10px;

            }
            .h5 form-group{
                grid-row-start: 2;
                grid-row-end: span 4;
            }
            .h5 label-control {
                text-align: right;
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
    </head>
<body align="right" dir="rtl" >

<header>

<nav>
      <a href="start.php">الرئيسية </a>
      <a href="login.php" >تسجيل دخول  </a>
      <a href="#">اتصل بنا </a>
      
      <div class="animation start-home"></div>
    </nav>
</header>
<main class="container" >
<form method="POST">


    <div class="h-100 row align-items-center">
        <div class="col d-flex justify-content-center">
            <div class="card m-5 w-100" style="background-color:rgba(0,0,0,0.3);">
                <div class="card-header" style="background-color:antiquewhite;">
                    <h2 class="card-title" style="color:darkslateblue;">استمارة التسجيل  </h2></div>
                <div class="card-body m-5" style="background-color:antiquewhite">
                    <form id="register" novalidate action="" method="POST">
                        <div class="row d-none" id="errorsSummary">
                </div>
         
             <div class="h6 row justify-content-center">
                 <div class="col-12">
                     <li><label for="address" class="h5 label-control" style="color:darkslateblue;"text="text-align:right"> اسم الطفل كاملاً </label></li>
                     <div class="form-group">
                         <textarea class="form-control nb-border-color nb-border-hover" name="name" id="name"></textarea>
                         <div class="error d-none"></div>
                     </div>
                 </div>
             </div>
             <div class="h6 row justify-content-center">
                 <div class="col-12">
                     <li><label for="address" class="h5 label-control" style="color:darkslateblue;"text="text-align:right">كلمة المرور</label></li>
                     <div class="form-group">
                         <textarea class="form-control nb-border-color nb-border-hover" name="pass" id="pass"></textarea>
                         <div class="error d-none"></div>
                     </div>
                 </div>
             </div>

             <div class="h6 row justify-content-center">
                 <div class="col-12">
                    
                     <div class="form-group">
                     <li><label for="address" class="h5 label-control" style="color:darkslateblue;"text="text-align:right">تاريخ الولادة </label></li>
                         <input type="date" name="date" id="date" class="form-control" />
                         <br>
                         <div class="error d-none"></div>
                     </div>
                 </div>
             </div>
          
             
                 <div class="error d-none">
                </div>    
                <div class="h6 row justify-content-center">
                <div class="col-12">
                    <li><label for="address" class="h5 label-control" style="color:darkslateblue;">جنس الطفل </label></li>
                                <select id="sex" name="sex" class="custom-select nb-border-color nb-border-hover">
                                     <option value="boy">ذكر</option>
                                     <option value="girl">أنثى</option>
                                </select> <div class="error d-none">
                              </div>
                           </div>
                        </div>
                        
                        <div class="h6 row justify-content-center">
                            <div class="col-12">
                                <li><label for="address" class="h5 label-control" style="color:darkslateblue;">أختر اللغة التي ترغب بتعليمها لطفلك  </label></li>
                                <select id="language" name="language" class="custom-select nb-border-color nb-border-hover">
                                     <option value="AR">العربية</option>
                                     <option value="ENG">الانجليزية</option>
                                </select><div class="error d-none">
                            </div>
                         </div>
                      </div>
                            
                      <div class="h6 row justify-content-center">
                        <div class="col-12">
                            <li><label for="address" class="h5 label-control" style="color:darkslateblue;">هل يستطيع طفلك التحدث بها   </label></li>
                                <select id="speak" name="speak" class="custom-select nb-border-color nb-border-hover">
                                     <option value="yes">نعم</option>
                                     <option value="no">لا</option>
                                </select>
                                <div class="error d-none">
                            </div>
                         </div>
                      </div>
                          
                      <div class="h6 row justify-content-center">
                        <div class="col-12">
                            <li><label for="address" class="h5 label-control" style="color:darkslateblue;">هل درستها سابقا   </label></li>
                                <select id="study" name="study" class="custom-select nb-border-color nb-border-hover">
                                    <option value="yes">نعم</option>
                                    <option value="no">لا</option>
                                </select>
                                <div class="error d-none">
                                </div>
                             </div>
                          </div>
                        
                        <div class="h6 row justify-content-center">
                            <div class="col-12">
                                <li><label for="address" class="h5 label-control" style="color:darkslateblue;">ما هو مستواه؟ها بها    </label></li>
                                <select id="level" name="level" class="custom-select nb-border-color nb-border-hover">
                                    <option value="elementry">مبتدئ</option>
                                    <option value="medium">متوسط</option>
                                    <option value="good">جيد</option>
                                </select>
                                <div class="error d-none">
                            </div>
                         </div>
                      </div>

                      <div class="h6 row justify-content-center">
                        <div class="col-12">
                            <li><label for="address" class="h5 label-control" style="color:darkslateblue;">أسم الأب كاملا</label></li>
                            <div class="form-group">
                                <textarea class="form-control nb-border-color nb-border-hover" name="fatherName" id="fatherName"></textarea>
                                <div class="error d-none"></div>
                            </div>
                        </div>
                    </div>

                    <div class="h6 row justify-content-center">
                        <div class="col-12">
                            <li><label for="address" class="h5 label-control" style="color:darkslateblue;">أسم الأم كاملا</label></li>
                            <div class="form-group">
                                <textarea class="form-control nb-border-color nb-border-hover" name="matherName" id="matherName"></textarea>
                                <div class="error d-none"></div>
                            </div>
                        </div>
                    </div>

                    <div class="h6 row justify-content-center">
                        <div class="col-12">
                            <li><label for="address" class="h5 label-control" style="color:darkslateblue;">المشرف </label></li>
                            <select id="supervisor" name="supervisor" class="custom-select nb-border-color nb-border-hover">
                                <option value="father">الأب</option>
                                <option value="mother">الأم States</option>
                                <option value="both">الأم والأب معاً</option>
                            </select>
                        <div class="error d-none">
                    </div>
                </div>
            </div>
    
            <div class="h6 row justify-content-center">
                <div class="col-12">
                    <li><label for="address" class="h5 label-control" style="color:darkslateblue;">الإيميل  </label></li>
                         <input id="email" name="email" class="form-control nb-border-color nb-border-hover" required />
                         <div class="error d-none">
                        </div>
                    </div>
                </div>

                     <div class="h6 row justify-content-center">
                        <div class="col-12">
                            <li><label for="address" class="h5 label-control" style="color:darkslateblue;">الهاتف مع الرمز الدولي  </label></li>
                        <input id="phone" name="phone" class="form-control nb-border-color nb-border-hover" required />
                        <div class="error d-none">
                        </div>
                    </div>
                </div>
                    
                    <div class="h6 row justify-content-center">
                        <div class="col-12">
                            <li><label for="address" class="h5 label-control" style="color:darkslateblue;">البلد المقيم فيها حالياً </label></li>
                        <input id="country" name="country" class="form-control nb-border-color nb-border-hover" required />
                        <div class="error d-none">
                        </div>
                    </div>
                </div>

                    <div class="h6 row justify-content-center">
                        <div class="col-12">
                            <li><label for="address" class="h5 label-control" style="color:darkslateblue;">المدينة المقيم فيها حالياً </label></li>
                        <input id="city" name="city" class="form-control nb-border-color nb-border-hover" required />
                       
                        <div class="h6 row justify-content-center">
                            <div class="col-12">
                                <li><label for="address" class="h5 label-control" style="color:darkslateblue;">عنوان سكن الطفل بالتفصيل</label></li>
                                <div class="form-group">
                                    <textarea class="form-control nb-border-color nb-border-hover" name="address" id="address"></textarea>
                                    <div class="error d-none"></div>
                                </div>
                            </div>
                        </div>

                        <div class="h6 row justify-content-center">
                            <div class="col-12">
                                <li><label for="message" class="h5 label-control" style="color:darkslateblue;">رسالتك أو سؤالك للمدرسة</label></li>
                                <div class="form-group">
                                    <textarea class="form-control nb-border-color nb-border-hover" name="message" id="message"></textarea>
                                    <div class="error d-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                    <hr/>

                   <div class="col-12">
                        <input type="checkbox" name="terms" id="terms"unchecked="checked" /> موافق على ملء جميع الحقول
                        <div class="error d-none">Must Agree To Terms !</div> 
                        <br/> <br/> 
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="Submit" class="btn btn-success"name="send" value="إنشاء الحساب" />

                                </div> 
                            </div>
                        </div>
                    </form>
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
    <td style="padding-bottom:40px;" >hadil_127728</td>

  </tr>
</table>


</div>
</footer>


</body>
</html>