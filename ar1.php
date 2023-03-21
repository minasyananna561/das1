<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Satisfy&family=The+Nautigal&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<style>
       body{
    background: url("https://img.freepik.com/free-photo/abstract-grunge-decorative-relief-navy-blue-stucco-wall-texture-wide-angle-rough-colored-background_1258-28311.jpg?auto=format&h=200");
    background-size: cover;
   } 
   #div1{
        width: 450px;
        height: 500px;
        margin:auto;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
    }
    #div1>div{
        width: 430px;
        height: 60px;
        border: 1px solid rgb(17, 52, 11);
        color: aliceblue;
        font-size: 20px;
        font-weight: bold;
         display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 3px 4px 13px 10px #090636;

    }
    #div1>div:nth-child(1){
        height: 300px;
    }
    #div2{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
        
    }
    #div2>div{
        width: 210px;
        height: 145px;
        border: 1px solid rgb(26, 11, 41);
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 3px 4px 13px 10px #090636;

    }
    #div3{
        width: 800px;
        height: 200px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
         margin:auto;
    }
    #div3>div{
        width: 398px;
        height: 100px;
        border: 1px solid rgb(61, 26, 26);
        color: aliceblue;
        font-size: 20px;
        font-weight: bold;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 3px 4px 13px 10px #090636;

    }
    #div4{
        width: 800px;
        height: 280px;
        display: flex;
        flex-direction: row;
         margin:auto;
    }
    #div4>div{
        width: 200px;
        height: 250px;
        border: 1px solid rgb(61, 26, 26);
        color: aliceblue;
        font-size: 20px;
        font-weight: bold;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 3px 4px 13px 10px #090636;

    }
    #div4>div:nth-child(2){
        width: 397px;
    }
    #div5{
        width: 800px;
        height: 150px;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
         margin:auto;
    }
    #div5>div{
        width: 170px;
        height: 150px;
        border: 1px solid rgb(61, 26, 26);
        color: aliceblue;
        font-size: 20px;
        font-weight: bold;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 3px 4px 13px 10px #090636;
}
#d{
    font-size:34px;
}
#div6{
    display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        font-family: 'Satisfy', cursive;;
}
ol{
    display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
}
.dv{
    display: flex;
        flex-direction: column;

}
</style>
<body>
<?php
$int1=20;
$int2=4;
$int3=100;
$float=20.2;
$string="Hello World";
$cars=array("Volvo","BMW","Mersedes","Toyota");
$cars1=array(
"https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Volvo_850_sedan.jpg/1200px-Volvo_850_sedan.jpg",
"https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Ym13fGVufDB8fDB8fA%3D%3D&w=1000&q=80",
"https://upload.wikimedia.org/wikipedia/commons/1/14/Mercedes-Benz_C292_fr.jpg",
"https://cdn0-production-images-kly.akamaized.net/vrq7XF58HSGcYKJXGzW_J2eFAco=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2321441/original/015299000_1533611765-camry.jpg");
?>

<div id="div1">
    <div id="div2">
        <div>INT1=<?=$int1?></div>
        <div>INT2=<?=$int2?></div>
        <div>INT3=<?=$int3?></div>
        <div>FLOAT=<?=$float?></div>
    </div>
    <div>STRING=<?=$string?></div>
    <div>ARRAY 
        <ol>
            <li><?=$cars[0]?></li>
            <li><?=$cars[1]?></li>
            <li><?=$cars[2]?></li>
            <li><?=$cars[3]?></li>
        </ol>
    </div>
   </div> 
   <div id="div3">
        <div>INT1+INT2=<?=$int1+$int2?></div>
        <div>INT1*INT2=<?=$int1*$int2?></div>
        <div>INT1/INT2=<?=$int1/$int2?></div>
        <div>INT1%INT2=<?=$int1%$int2?></div>
    </div>
    <div id="div4">
        <div>Hello World</div>
        <div id="div6">
            <div><?=$string?></div> 
            <div><?=strrev($string)?></div> 
            <div><?=str_word_count($string)?></div> 
            <div id="d"><?=str_replace("Hello","Barev",$string)?></div> 
        </div>
        <div>Hello World</div>
    </div>
    <div id="div5">
        <div class="dv"><img src="<?=$cars1[0]?>" width='100%'><p><?=$cars[0]?></p></div>
        <div class="dv"><img src="<?=$cars1[1]?>" width='100%'><p><?=$cars[1]?></p></div>
        <div class="dv"><img src="<?=$cars1[2]?>" width='100%'><p><?=$cars[2]?></p></div>
        <div class="dv"><img src="<?=$cars1[3]?>" width='100%'><p><?=$cars[3]?></p></div>
    </div>

</body>
</html>
