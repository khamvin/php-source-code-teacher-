<?php
$score=$result="";
if(isset($_POST['cal'])) { //ກວດສອບວ່າມີການກົດປຸ່ມ cal 
    $score = $_POST['score'];
    if($score > 70) {
        $result = "ຍິນດີນໍາ ທ່ານ ຜ່ານການສອບເສັງ";
    } else {
        $result = "ທ່ານ ບໍ່ຜ່ານການສອບເສັງ ";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body, input {
                font-family: Phetsarath OT;
            }
        </style>
    </head>
    <body>
        <h3>ຕົວຢ່າງການໃຊ້ຄໍາສັ່ງ if</h3>
        <form action="" method="post">
            ປ້ອນຄະແນນ: <input type="number" name="score" value="<?= $score?>" min="0" max="100" required="">
            <input type="submit" name="cal" value="ປະມວນຜົນ">
        </form>
        <?php
        echo '<hr>';
        echo $result;
        ?>
    </body>
</html>
