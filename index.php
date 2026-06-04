<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo "<h1>งานที่ 1 พิชชาพร นามแดง BIT2/4 เลขที่ 26</h1>";
    ?>

    <form action="">
        <labal for="">เลขแม่สูตรคูณ</labal> <br>
        <input type="number" name="" id="">
        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo " สูตรคูนแม่ " . $num;
        

        }
    ?>
</body>
</html>