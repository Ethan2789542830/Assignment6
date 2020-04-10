<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <script type="text/javascript">
            ImageArray = new Array();
            ImageArray[0] = 'apple.png';
            ImageArray[1] = 'cherry.png';
            ImageArray[2] = 'grapes.png';
            ImageArray[3] = 'lemon.png';
            ImageArray[4] = 'orange.png';
            ImageArray[5] = 'pear.png';
            ImageArray[6] = 'watermelon.png';


            function getRandomImage() {
                var num = Math.floor( Math.random() * 7);
                var num2 = Math.floor( Math.random() * 7);
                var num3 = Math.floor( Math.random() * 7);
                var img = ImageArray[num];
                var img2 = ImageArray[num2];
                var img3 = ImageArray[num3];
                document.getElementById("randImage").src='fruit/' + img;
                document.getElementById("randImage2").src='fruit/' + img2;
                document.getElementById("randImage3").src='fruit/' + img3;
                if (num === num2 || num === num3 || num2 === num3){
                    alert("Congratulations! You won a small prize!");
                }
                else if(num === num2 || num === num3){
                    alert("Congratulations! You won a large prize!")
                }
            }
        </script>
    </head>
    
    <body>
        <?php
            echo 'The Virtual Slot Machine!';
            echo '<div class="flexSection"> '
            . '<img id="randImage" src="fruit/cherry.png"> '
            . '<img id="randImage2" src="fruit/cherry.png">'
            . '<img id="randImage3" src="fruit/cherry.png">'
            . '<button onclick="getRandomImage();" style="height:300px">Spin! </button> '
            . '</div>'
        ?>
        
<!--        <div class="flexSection"> 
            <img id="randImage" src="fruit/cherry.png">
            <img id="randImage2" src="fruit/cherry.png">
            <img id="randImage3" src="fruit/cherry.png"> 
            <button onclick="getRandomImage();" style="height:300px">Spin! </button>
        </div>-->
        
        <form method="post" action="">
            <div class="form-field"> 
                <label for="name">Name: </label>
                <input type="text" name="value" id="name" value="<?php echo isset($_POST['value']) ? $_POST['value'] : '' ?>">
                
                <br>
                <br>
                
                <label for="bet">Your bet: </label>
                <input type="number" name="betVal" id="bet" value="<?php echo isset($_POST['betVal']) ? $_POST['betVal'] : '' ?>">
                
                <input type="number" name="credit" value="100" readonly="true">
                
                <input type="submit">
            </div>
        </form>
        
        
    </body>
</html>
