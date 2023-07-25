<?php
session_start();
/*if(!$_SESSION['user']){
    header("Location: index_start.php");
}*/
//unset( $_SESSION['vid_sprayer']);
//print_r($_SESSION['vid_sprayer'] . "dfsdfsfs");
/*if (ini_get('register_globals'))
{
    foreach ($_SESSION as $key=>$value)
    {
        if (isset($GLOBALS[$key]))
            unset($GLOBALS[$key]);
    }
}*/
//$user_email = $_SESSION['user_email'];
//$user_email = !empty($_SESSION['user_email']) ? $_SESSION['user_email'] : 'exm';
//$_SESSION['user_email'] = 'exm';
//$user_email = $_SESSION['user_email'];
?>
<?php
//require_once 'db.php';
require_once 'db.php';


function La()
{
    //unset($_SESSION['vid_sprayer']);

    //header("Refresh:10");
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta charset="utf-8">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(89331636, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>

    <noscript><div><img src="https://mc.yandex.ru/watch/89331636" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- /Yandex.Metrika counter -->
    <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js" charset="UTF-8"></script>-->
    <!--        <link href="../style.css" rel="stylesheet">-->
</head>


</script>
 <style>
        .input-text {
            background-color: #E9F7F5;
            width: 534px;
            height: 50px;
            border-radius: 5px;
            border: 2px solid #000000;
            font-size: 20px;
            margin: 15px 0;
        }
        label {
            font-family: "Inter";
            font-size: 20px;
        }
        
        div .block-div {
            margin: 20px;
        }
        
        .label-chapter {
            font-size: 30px;
            font-weight: bold;
        
        .input-submit {
            margin: 20px;
            width: 323px;
            height: 70px;
            border-radius: 5px;
            border: 0px;
            background-color: #4EA691;
            font-size: 20px;
            color: #FFFFFF;
            text-align: center;
        }
        
        .input-submit:hover {
            cursor: pointer;
            background-color: #4EB691;
        }
        
         .input-image {
        }
        
       .input-image-btn {
            width: 210px;
            padding: 10px 0;
            border-radius: 5px;
            background-color: #FFFFFF;
            box-shadow: 0 0 10px #000000;
            font-size: 20px;
            text-align: center;
        }
        
        .input-image-text {
            padding: 0 10px;
            line-height: 40px;
            font-size: 15px;
            color: #F0F0F0F;
        }
        
         .input-image-btn:hover {
            background-color: #000000;
            cursor: pointer;
        }
        
          .input-image input[type=file] {
	        z-index: -1;
	        opacity: 0;
	        width: 0;
	        height: 0;
        }
        
    
    </style>
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<body>
<div>
    <form class="cont"  name="zac_data" action="save_data_auto_all.php" method="POST" enctype="multipart/form-data">
         <div class="block-div">
             <label class="label-chapter">Персональные данные</label>
        </div>
        <div class="u-form-group u-form-message block-div">
            <label>Введите email, чтобы мы могли прислать вам письмо с подобранной системой полива: </label><br>
            <input class="input-text" name="user_email" id="user_email" type="text" value="<?php echo $_SESSION['user_email']; ?>" placeholder="example@yandex.ru" class="form-control form-control--size-sm">
        </div>
       
        <div class="u-form-group u-form-message block-div">
            <label for="customer_name" class="u-label">Введите ваше ФИО или название организации: </label><br>
            <textarea class="input-text" name="customer_name" placeholder="Алексей Иванов или ООО &quot;Заказчик&quot;" type="text" value="<?php echo $_SESSION['customer_name']; ?>" rows="1" cols="40" id="customer_name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
        </div>
          <div class="block-div">
             <label class="label-chapter">Данные участка</label>
            </div>
        <div class="u-form-group u-form-group-3 block-div">
            <label for="plot_length" >Длина участка (в метрах): </label><br>
            <input class="input-text" name="plot_length" type="text" required placeholder="" id="plot_length" value="<?php echo $_SESSION['plot_length']; ?>" class="input_1">
        </div>
        <div class="u-form-group u-form-group-4 block-div">
            <label for="plot_width" >Ширина участка (в метрах): </label><br>
            <input class="input-text" name="plot_width" type="text" required placeholder="" id="plot_width" value="<?php echo $_SESSION['plot_width']; ?>" class="input_1">
        </div>
        <div class="block-div">
            <label for="step_of_arrangement_of_sprayers" class="u-label">Порядок расстановки распылителей: </label><br>
            <input type="radio" name="choosing_the_arrangement_of_sprayers" id="ctree" value="смещенный" checked="checked"/>
            <label for="ctree">Со смещением</label>
            <input type="radio" name="choosing_the_arrangement_of_sprayers" id="consistently" value="последовательный"/>
            <label for="consistently">Последовательно</label>

        </div>
      
        <div class="block-div">
            <label for="vid_sprayer">Выберите распылитель: </label>
            <!--<input class="sprayers" list="sprayers" name="vid_sprayer" required>-->
            <!--<datalist class="sprayers" id="sprayers">-->
            <select name="vid_sprayer" required>
                <option dizabled>Радиус</option>
                <?php
                $sprayers = get_sprayers();
                foreach ($sprayers as $sprayer) :
                    ?>
                    <option name="vid_sprayer" id="vid_sprayer" value="<?=$sprayer['name'] ?>"> <?=$sprayer['name']?></option>

                <?php endforeach; ?>
                </select>
            <!--</datalist>-->
        </div>
          <script>
        document.addEventListener('DOMContentLoaded', function () {
             $('.input-image input[type=file]').on('change', function(){
	        let file = this.files[0];
        	$(this).closest('.input-image').find('.input-image-text').html(file.name);
        }); 
        });
      
    </script>
      <div class="u-form-group u-form-group block-div">
         
            <label for="logo">Загрузите логотип масштабом не более 400х70 и формата .jpg, .jpeg или .png: </label><br>
            <label class="input-image">
                <input type="file" name="logo">
                <div class="input-image-btn" > Выберите файл</div>
                <div class="input-image-text"> Файл не выбран</div>
            </label>
            
        </div>
        <div class="u-form-group u-form-message block-div">
            <label for="customer_data" class="u-label">Комментарий (телефон и т.п.)</label><br>
            <textarea class="input-text" placeholder="+79089084242" rows="4" cols="50" name="customer_data" id="customer_data" value="<?php echo $_SESSION['customer_data']; ?>" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
        </div>
        <input class="input-submit"  type="submit" value="Построить схему">
        <?php
        if(isset($_SESSION['message_image_type']))
        {
        echo '<p class="mes" style="color: #CC0000">' .$_SESSION['message_image_type']. '</p>';
        }
        unset($_SESSION['message_image_type']);
        if(isset($_SESSION['message_image_pix']))
        {
            echo '<p class="mes" style="color: #CC0000">' .$_SESSION['message_image_pix']. '</p>';
        }
        unset($_SESSION['message_image_pix']);
        ?>
    </form>

   </div>
</body>

<script>

</script>
</html>