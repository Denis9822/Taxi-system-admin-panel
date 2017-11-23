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
    
    height: 70px;
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
 padding: 20px 20px;
 margin: 3px auto;
 width: 800px;
 background-color: #FFF;
 list-style-type: none;
}

.name_cat li
{
   
    display:inline-block;
    font-size: 18px;
    padding: 12px 44px;
    font-weight: bold;
   
    border-left: 3px solid #C0C0C0;
}

.wrapper2{
  border-right: 5px solid #C0C0C0;
   border-left: 3px solid #C0C0C0;
    margin: 10px auto;
    width: 840px;
    background-color: #FFF;
    
}
.cars_text
{
   

 margin-right: 110px;
 margin-left: 70px;
}
.cars_texts
{
  

}
.cars_textss
{
     margin-right: 100px;
    
}
.cars_textsss
{
    
    margin-left: 80px;
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
</style>

<?
require_once 'include2.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новый сайт успешно создан и готов к работе</title>
    <script type="text/javascript" src="jquery-3.1.1.js"></script>
    <!-- b0a8e2d8ccb04b24683d347076e80d29e451a385:d3aa2e6571e673001cb012eda23bd97d02234f0b -->
    
    
</head>
<body>
    <? $f=2 ?>
    
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
        
        <? $query4 = mysqli_query($connection, "SELECT * FROM `cars`"); ?>
        <div class="wrapper2">
            <ul class="name_cat">
                <li> Фото </li>
                <li> Клас </li>
                <li> Цвет </li>
                <li> Год выпуска </li>
                <li> Цена за 1км/грн </li>
            </ul>
        </div>

        <ul class="list_cars">
         <?  while( $arr3 = mysqli_fetch_assoc($query4)) {  ?>
        
        <li> <img src="<?echo $arr3['img']?>"/> <div class="wrapper3"> <span class="cars_texts"> <? echo $arr3['class'] ?>  </span>  <span class="cars_text"> <? echo $arr3['color'] ?> </span> <span class="cars_textss"><? echo $arr3['god_vipuska'] ?> </span> <span class="cars_textsss"><? echo $arr3['cena'] ?> </span></div> </li>
          
          <? } ?>
          
         </ul>
        
</div>
    
