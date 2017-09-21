<?php
$customer=$price=$percent=$discount=$pay="";
if(isset($_POST['cal'])) {
    $customer = $_POST['customer'];
    $price = $_POST['price'];
    
    //ຫາເປີເຊັນສ່ວນຫຼຸດ
    if($price <= 100000) {
        $percent = 2;
    } elseif($price <= 200000) {
        $percent = 3;
    } elseif($price <= 500000) {
        $percent = 5;
    } else {
        $percent = 7;
    }
    
    //ຫາສ່ວນຫຼຸດ
    $discount = $price * $percent / 100;
    $pay = $price - $discount;
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ຫາສ່ວນຫຼຸດ</title>
        <style>
            body, input {
                font-family: Phetsarath OT;
            }
        </style>
    </head>
    <body>
        <h3>ໂປຼແກຼມຫາສ່ວນຫຼຸດ</h3>
        <form action="" method="post">
            ຊື່ລູກຄ້າ: <input type="text" name="customer" value=""><br><br>
            ລາຄ່າສິນຄ້າທັງໝົດ: <input type="number" name="price" value="" min="0" required=""><br><br>
            <input type="submit" name="cal" value="ປະມວນຜົນ">
        </form>
        <?php
        echo '<br><hr>';
        echo "ຊື່ລູກຄ້າ: $customer";
        echo "<br>ລາຄາສິນຄ້າທັງໝົດ: ", number_format(doubleval($price), 2) ," ກີບ";
        echo "<br>ສ່ວນຫຼຸດ: $percent%: ", number_format(doubleval($discount), 2) , " ກີບ";
        echo "<br>ລາຄາທີ່ຕ້ອງຈ່າຍ: ", number_format(doubleval($pay), 2) , " ກີບ";
        ?>
    </body>
</html>
