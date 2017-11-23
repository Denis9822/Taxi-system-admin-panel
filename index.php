<style type="text/css">
@font-face
{
    font-family: Ubuntu; /* Имя шрифта */
    src: url(Ubuntu-L.ttf);
    
}
*{
    padding: 0;
    margin: 0;
}
body
{
    
    background-color: #F0F0F0;
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
.zakaz_div
{
  
    
   
   
   font-family: Ubuntu;
   
}
.button1
{
    padding: 10px 40px;
    display: block;
    margin: 0 auto;
  background-color:#FECD0B;
  border:1px solid #FECD0B;
  border-radius: 5px;
  font-family:Ubuntu;
  font-size: 18px;
    
}
.wrapper_all{
    background-color: #F0F0F0;
    
}

.dannie_label,.mesto_podachi_label,.mesto_otpravki_label,.dop_info_label
{
    font-size: 18px;
   
    
    letter-spacing: 0.7px;
    display: block;
    padding:10px 25px;
    width: 150px;
    
    border-bottom: 4px solid black;
   
    
}

.dannie_div,.mesto_posadki_div,.mesto_otpravki_div,.dop_info_div
{
  
 padding:20px 25px;
 padding-right:100px;
 width: 550px;

}
.dannie_div input,.mesto_posadki_div input,.mesto_posadki_div select,.mesto_otpravki_div select,.mesto_otpravki_div input,.asdqw
{
  float: right; 
    width: 300px;
    padding: 5px;
    border-radius:3px;
    border:1px solid #E0E0E0;
    font-family: Ubuntu;
}
.wrapper1
{
    background-color: #FFF;
    width: 680px;
    margin-bottom: 15px;
    margin: 10px auto;
}
.wrapper1:hover
{
   box-shadow: 0 2px 10px rgba(0,0,0,0.10);
}
.mesto_podachi_label
{
     width: 200px;
    color:#30ABE4;
     border-bottom: 4px solid #30ABE4;
}

.mesto_otpravki_label
{
    color:#30ABE4;
    border-bottom: 4px solid #FED402;
}
.dop_info_label{
    
    color:#30ABE4;
    border-bottom: 4px solid #E0E0E0;
    width: 300px;
}

</style>

<?
require_once 'include2.php';

if(isset($_POST['button']))
    {
        $name = $_POST['name'];
        if ($name=='')
         echo "Vvedite imya";

        $telefon = $_POST['telefon'];
        $ylica = $_POST['select'];
        $ylica_1 = $_POST['select2'];
        $aO = $_POST['adresOtpravki'];
        $ap = $_POST['adrespriezda'];
          $disk = $_POST['disk'];
        $data1 = $_POST['data'];
        $data2 = $_POST['data_1'];
        $car = $_POST['car'];


          $pieces = explode(" ", $name);
          $name1=$pieces[0];
          $family=$pieces[1];
        $query1=mysqli_query($connection,"INSERT INTO `zakazi` (`imya`,`familiya`,`telefon`,`ylica_posadki`,`adres_posadki`,`ulica_okon_poezdki`,`adres_okon_poezdki`,`id_disc`,`predvar_zakaz`,`car_id`) VALUES ('$name1','$family','$telefon','$ylica','$aO','$ylica_1','$ap','$disk','$data2','$car')");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новый сайт успешно создан и готов к работе</title>
    <script type="text/javascript" src="jquery-3.1.1.js"></script>
    <!-- b0a8e2d8ccb04b24683d347076e80d29e451a385:d3aa2e6571e673001cb012eda23bd97d02234f0b -->
    
    
</head>
<body>
    <? $f=1 ?>
          <? $query2 = mysqli_query($connection, "SELECT * FROM `ylici`"); ?>
         <? $query3 = mysqli_query($connection, "SELECT * FROM `ylici_1`"); ?>
    <script type="text/javascript">
    
$(document).ready(function(){

    $(".inp").click(function(){
        
		$(".time_hide").show();
		$(".time_hide").css({
		    "display": "block",
      "margin-top": "20px"
      
    });
	});

    $(".inp2").click(function(){
        
		$(".time_hide").hide();
	});


});
</script>

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
    
    <div class="zakaz_div">
        <form name="order" action="" method="post">
           
             <div class="wrapper1">
                 <label class="dannie_label"> Ваши данные </label>
                 <div class="dannie_div">
                    <label> Ваше имя и фамилия: </label>
                    <input type="text" name="name" /> </br></br>
                    <label> Телефон: </label>
                    <input type="number" name="telefon" /> 
                </div>
            </div>
            
             <div class="wrapper1">
                 <label class="mesto_podachi_label"> Место подачи авто </label>
                 <div class="mesto_posadki_div">
                    <label> Выберите улицу отправки: </label>
                    <select name="select" >
                        <?  while ( $arr1 = mysqli_fetch_assoc($query2)) { ?>
                          <option value="<?echo $arr1['name']?>"><? echo $arr1['name']?></option>
                         $a++;
                       <?
                      
                       } ?>
                       
                    </select></br></br>
                 
                     <label> Адрес отправки:  </label> 
                    <input type="text" name="adresOtpravki" /> </br></br>
                 </div>
            </div>
            
            <div class="wrapper1">
                <label class="mesto_otpravki_label"> Куда отправить </label>
                 <div class="mesto_otpravki_div">
                  <label> Улица приезда:  </label> 
                   <select name="select2" >
                    <?  while ( $arr2 = mysqli_fetch_assoc($query3)) { ?>
                      <option value="<?echo $arr2['name']?>"><? echo $arr2['name']?></option>
                     
                   <?
                
                   } ?>
                   </select></br></br>
                 <label> Адрес приезда:  </label> 
                <input type="text" name="adrespriezda" /> </br></br>
                </div>
            </div>
            
            <div class="wrapper1">
        
                <label class="dop_info_label"> Дополнительные требования </label>
                
                <div class="dop_info_div">
                    
                    <label> Дискортная картка: </label>
                    
                    <input type="number" class="asdqw" name="disk"  /> </br></br>
                    
                    <label> Когда ехать: </label></br></br>
                    
                    <input type="radio" class="inp2" name="data" value="Срочно" /> 
                    <label> Срочно </label>
                    
                    <input type="radio" class="inp" name="data" value="Предварительный заказ"/> 
                    <label> Предварительный заказ </label>
                    <div class="time_hide">
                    <label class="asd">  Время подачи: </label></br></br>
                    
                    <input type="datetime-local"  name="data_1" /> 
                    </div></br></br>
                    <label> Класс автомобиля:</label></br></br>
                       
                    <input type="radio" name="car" value="1" /> 
                    <label title="Обычный 4-х местный автомобиль."> Обычный </label>
                    
                      <input type="radio"  name="car" value="2" /> 
                    <label title=" Если количество пассажиров превышает 4 человека, рекомендуем использовать эту опцию."> Микроавтобус </label>
                    
                    <input type="radio" name="car" value="3" /> 
                    <label title="Автомобиль комфорт-класса."> Комфорт </label>
                    
                      <input type="radio" name="car" value="4" /> 
                    <label title="Автомобиль комфорт-класса."> Бизнес </label></br></br>
                </div>
            </div>
           
           
              <input type="submit" name="button" value="Сделать заказ" class="button1" /> </br></br>
       </form>
        
    </div>
</div>


</body>

</html>