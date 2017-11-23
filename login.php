<? 
ob_start();
require_once 'include2.php';
if (isset($_SESSION["$nums"]))
{
   header('Refresh: 0; URL=zakazi.php');
   exit;
}
?>
<style type="text/css">
@font-face
{
    font-family: Ubuntu; /* Имя шрифта */
    src: url(Ubuntu-L.ttf);
    
}
*{
    padding: 0;
    margin: 0;
    font-family: Ubuntu;
}
body
{
    
    background-color:#F0F0F0;
}
.time_hide
{
    
    display: none;
    
}
.head
{
 
    height: 120px;
   
    margin: 0 auto;
    background-color: #FFF;
    position: relative;
    margin-bottom: 50px;
}

.name_head
{
    float: left;
    font-family: Ubuntu;
    font-size: 35px;
    color:#30ABE4;
    margin-top:20px;
    margin-left: 20px;

    
}
.name_head_1
{
    color:#454754;
    font-size: 25px;
}
.list_cars img
{
    
    height: 100px;
    width: auto;
    
}
.wrapper_head
{
    width: 900px;
    height: 150px;

    margin: 0 auto;
    
}
.link_head
{
    float: right;
    margin-top: 8%;
     margin-right: 20px;
    
}

.a{
      display: inline-block;
 
    margin-left: 15px;
    padding: 10px;
}

.a1,.a2,.a3
{
       display: inline-block;
   border-bottom: 4px solid silver;
    margin-left: 15px;
    padding: 10px;
    
}
.link_head ul li a
{
    font-family:Ubuntu;
    font-size: 16px;
    text-decoration: none;
    color:#333333;
}

.wrapper_all{
    background-color: #F0F0F0;
    
}

.list_cars li 
{
 font-size: 16px;
 padding: 5px 20px;
 margin: 10px auto;
 width: 800px;
 background-color: #FFF;
 list-style-type: none;
}

.name_cat li
{
   
    display:inline-block;
    font-size: 18px;
    padding: 12px 72px;
    font-weight: bold;
   
    border-left: 3px solid #C0C0C0;
}

.wrapper2{
  border-right: 5px solid #C0C0C0;
   border-left: 3px solid #C0C0C0;
    margin: 20px auto;
    width: 840px;
    background-color: #FFF;
    
}
.cars_text
{
   

 margin-right: 170px;

}
.cars_texts
{
   
 margin-right: 120px;

}
.cars_textss
{
     
    
}
img
{
   
}
.wrapper3
{
      
    float: right;
    margin-right: 100px;
    margin-top: 40px;
}

.wrapper5
{
    
    width: 600px;
    height: 250px;
    background-color: #FFF;
    margin: 30px auto;
}
.dannie_div
{
  
 padding:20px 25px;
 padding-right:100px;
 width: 550px;
x
}
.dannie_div input
{
  float: right; 
    width: 300px;
    padding: 5px;
    border-radius:3px;
    border:1px solid #E0E0E0;
    font-family: Ubuntu;
    margin-right: 100px;
}
.dannie_label
{
    font-size: 18px;
   
    
    letter-spacing: 0.7px;
    display: block;
    padding:10px 25px;
    width: 300px;
    margin-bottom: 25px;
    border-bottom: 4px solid black;
   
    
}
.button1
{
    padding: 5px 25px;
    display: block;
    margin: 0 auto;
  background-color:#FECD0B;
  border:1px solid #FECD0B;
  border-radius: 5px;
  font-family:Ubuntu;
  font-size: 18px;
  margin-top:30px;
    
}
</style>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новый сайт успешно создан и готов к работе</title>
    <script type="text/javascript" src="jquery-3.1.1.js"></script>
    <!-- b0a8e2d8ccb04b24683d347076e80d29e451a385:d3aa2e6571e673001cb012eda23bd97d02234f0b -->
    
    
</head>
<body>
   <?
$arr8=false;

if(isset($_POST['button2']))
    {
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        
        $query1 = mysqli_query($connection, "SELECT * FROM `dispetcher` WHERE `login`='$login' AND `pass`='$pass'");
        $num=mysqli_num_rows($query1);
      if($num==1)
      $arr8=true;
      
          $arr4=mysqli_fetch_assoc($query1);
          
            if ($arr8==true)
               $_SESSION["$nums"]=$arr4['login'];
               
       
               if (isset($_SESSION["$nums"]))
                        {
                         
                            header('Refresh: 0; URL=zakazi.php');
                             
                        }
                       
        }

        
    
?>
 
    <? $f=3 ?>
    
    <div class="wrapper_all">

        <div class="head">
                  <div class="wrapper_head">
            
                    <div class="name_head">
               Служба такси</br>
            <?
          

            ?>
                        <span style="margin-left:50px;" class="name_head_1" >"Мафына" </span>
                    </div>
   

                    <div class="link_head">
                        <ul class="link_head_1">
                            <li class="a<?if ($f==1) echo $f?>"> <a href="/"> ЗАКАЗ </a> </li>
                            <li class="a<?if ($f==2) echo $f?>"> <a href="cars.php"> АВТОМОБИЛИ</a> </li>
                            <li class="a<?if ($f==3) echo $f?>"> <a href="login.php"> ВХОД</a> </li>
                        </ul>
                    </div>
              </div>
        </div>
        
        <div class="wrapper5">
        <form name="order1" action="" method="post">     
          <label class="dannie_label"> Авторизация для диспетчеров </label>
                 <div class="dannie_div">
                    <label> Логин: </label>
                    <input type="text" name="login" /> </br></br>
                    <label> Пароль: </label>
                    <input type="password" name="pass" /> 
                </div>
          <input type="submit" name="button2" value="Войти" class="button1" /> </br></br>
          </form>
         </div>   
          
        </div>
      <?
     ob_end_flush();
      ?>
      
  