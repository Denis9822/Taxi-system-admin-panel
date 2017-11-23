<? 

ob_start();
require_once 'include2.php';
if (isset($_SESSION["$nums"]))
{
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
    margin-top: 0%;
     margin-right: 20px;
    
}

.a{
      display: inline-block;
 
    margin-left: 15px;
    padding: 10px;
}

.a1,.a2,.a3,.a4,.a5,.a6
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
    margin-right: 70px;
}
.dannie_label
{
    font-size: 18px;
   
    
    letter-spacing: 0.7px;
    display: block;
    padding:10px 25px;
    width: 250px;
    margin-bottom: 25px;
    border-bottom: 4px solid black;
   
    
}
.dannie_label1
{
        letter-spacing: 0.7px;
    display: block;
    padding:10px 25px;
    width: 250px;
    margin-bottom: 25px;
    border-bottom: 4px solid red;
    
    
}
.button1
{
    padding: 5px 4px;
    display: inline-block;
   letter-spacing: 0.7px;
  background-color:#FECD0B;
  border:1px solid #FECD0B;
  border-radius: 5px;
  font-family:Ubuntu;
  font-size: 16px;
  margin-top:6px;
  margin-bottom: 35px;
  margin-left: 130px;
    
}
.sd
{
    margin-left: 30px;

    
}
.wrapper_body
{
     width: 600px;
    
       border:1px solid #FFF;
     margin: 0px auto;
    background-color: #FFF;
    padding: 0 20px;
    margin-bottom: 20px;
}
table
{
  font-family:Ubuntu;
  font-size: 16px;    
  
 
 
   
}
table tr th
{
    border: 1px solid silver;
    padding: 10px 13.5px;
   background-color:#E7F8F7;
   letter-spacing: 0.7px;
    
}

table tr td
{
    padding: 13px;
    border: 1px solid #E8E8E8;
    text-align: center;
    background-color: #FFF;
}

.wrapper_body .table
{
    
    background-color:#F0F0F0;
    margin-top: 30px;
    
}

.links
{
    
    margin-top: 20px;
    width: 300px;
    height: 50px;
   border-bottom:1px solid silver;
  
 
}
.links span
{
    padding-left: 15px;
    padding: 10px;
 padding-bottom: 10px;
 font-size: 18px;

margin-right: 40px;
    
}
a
{
    
    text-decoration: none;
    color:#7C7C7C;
}
.aa1
{
    border-bottom: 4px solid #30ABE4;
    
}
.aa2
{
    
   border-bottom: 4px solid yellow; 
}
.wrapper_body form
{
    
    margin-top: 30px;
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
 if(isset($_POST['button2']))
    {
       
       session_destroy();
  header('Refresh: 0; URL=/');
                             
  }
                       
   if(isset($_POST['button4']))
    {
       
      $kod = $_POST['kod'];

      
      $arr12=mysqli_query($connection,"DELETE FROM `drivers` WHERE `id`=".$kod);
      
      
                             
  } 
  
  if(isset($_POST['button3']))
    {
       
      $name = $_POST['name'];
      $fam = $_POST['family'];
      $dr = $_POST['dr'];
      $staj = $_POST['staj'];
      $cat = $_POST['cat'];
       $nomerTS = $_POST['nomerTS'];
       
       $fullname=$name.''.$fam;
      
      $arr11=mysqli_query($connection,"INSERT INTO `drivers` (`familiya`,`imya`,`vozrast`,`staj`,`category`,`gos_nomer`) VALUES ('$fam','$name','$dr','$staj','$cat','$nomerTS')");
      
      
                             
  }   

        
    
?>
    <? $f=5; $s=1?>
    
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
                         <form name="order1" action="" method="post">  
                         <label  class="sd">  Привет, <? echo $_SESSION["$nums"]?>! </label> 
                         <input type="submit" name="button2" value="Выйти" class="button1" />
                         </form>
                        <ul class="link_head_1">
                            <li class="a<?if ($f==4) echo $f?>"> <a href="zakazi.php"> ЗАКАЗЫ </a> </li>
                            <li class="a<?if ($f==5) echo $f?>"> <a href="drivers.php"> ВОДИТЕЛИ</a> </li>
                            <li class="a<?if ($f==6) echo $f?>"> <a href="disp.php"> ДИСПЕТЧЕРА</a> </li>
                        </ul>
                    </div>
              </div>
        </div>
        
        
        <div class="wrapper_body">
            
            
            <div class="links">
                <span class="aa<?if ($s==1) echo $s?>"> <a href="zakazi.php"> Список водителей </a></span>
            
                
            </div>
            <div class="table">
                
                <table >
                
                    <tr class="tr1">
                        <th> Код </th>
                        <th> Имя и фамилия </th>
                        <th> Возраст </th>
                        <th> Стаж </th>
                        <th> Категория </th>
                        <th> Номер ТС </th>
                  
                    </tr>
                    
                <?
                
                 $query = mysqli_query($connection,"SELECT *  FROM `drivers` GROUP BY `id` DESC LIMIT 10");
                  
                    while($arr = mysqli_fetch_assoc($query))
                    {
                        $name = $arr['imya'].' '.$arr['familiya'];
                       
                        
                    
                        
                        ?>
                        <tr> <td> <? echo $arr['id'] ?> </td> <td> <? echo $name ?> </td> <td> <? echo $arr['vozrast'] ?> 
                        </td>  <td> <? echo $arr['staj'] ?> </td> <td> <? echo $arr['category']  ?> </td> <td> 
                        <? echo $arr['gos_nomer'] ?> </td>  </tr>
                        <?
                        
                    }
                    
                
                
                
                ?>
                
                
                </table>
            
            </div>
            </br></br>
           </div>
           <div class="wrapper_body">
    <form name="order1" action="" method="post">     
          <label class="dannie_label"> Добавление водителей </label>
                 <div class="dannie_div">
                    <label> Введите имя: </label>
                    <input type="text" name="name" /> </br></br>
                               <label> Введите фамилию: </label>
                    <input type="text" name="family" /> </br></br>
                               <label> Введите возраст: </label>
                    <input type="number" name="dr" /> </br></br>
                               <label> Введите стаж: </label>
                    <input type="number" name="staj" /> </br></br>
              <label> Введите категорию: </label>
                    <input type="text" name="cat" /> </br></br>
                        <label> Введите номер ТС: </label>
                    <input type="number" name="nomerTS" /> </br></br>
                </div>
          <input type="submit" name="button3" value="Добавить" class="button1" /> </br></br>
          </form>
            
            
        </div>
        
        
                   <div class="wrapper_body">
    <form name="order1" action="" method="post">     
          <label class="dannie_label1"> Удаление водителей </label>
                 <div class="dannie_div">
                    <label> Введите код: </label>
                    
                    <input type="number" name="kod" /> </br></br>
               
                </div>
          <input type="submit" name="button4" value="Удалить" class="button1" /> </br></br>
          </form>
            
            
        </div>
        
</div>
     <?
     ob_end_flush();
}
else
exit("ОШИБКА");
      ?>