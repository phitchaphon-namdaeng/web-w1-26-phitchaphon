
   <!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานที่ 1 - โปรแกรมแม่สูตรคูณ</title>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            max-width: 450px;
            width: 100%;
            text-align: center;
            box-sizing: border-box;
        }

        h1 {
            color: #4a5568;
            font-size: 1.4rem;
            margin-bottom: 25px;
            border-bottom: 2px dashed #e2e8f0;
            padding-bottom: 15px;
        }

        form {
            margin-bottom: 25px;
        }

        label {
            display: block;
            font-size: 1.1rem;
            color: #718096;
            margin-bottom: 10px;
            font-weight: 600;
        }

        /* ตกแต่งช่องกรอกตัวเลข */
        input[type="number"] {
            width: 60%;
            padding: 10px 15px;
            font-size: 1.1rem;
            border: 2px solid #cbd5e0;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.2s;
            text-align: center;
            font-family: 'Prompt', sans-serif;
        }

        input[type="number"]:focus {
            border-color: #667eea;
        }

        /* ตกแต่งปุ่มกด */
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 1.1rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-left: 8px;
            font-family: 'Prompt', sans-serif;
            transition: transform 0.1s, opacity 0.2s;
        }

        input[type="submit"]:hover {
            opacity: 0.9;
        }

        input[type="submit"]:active {
            transform: scale(0.98);
        }

        /* ตกแต่งผลลัพธ์สูตรคูณ */
        .result-box {
            background: linear-gradient(45deg, #bbb0ff 0%, #ebd3f8 100%);
            padding: 20px;
            border-radius: 12px;
            margin-top: 20px;
            text-align: left;
            display: inline-block;
            width: 100%;
            box-sizing: border-box;
        }

        .result-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #4a5568;
            text-align: center;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .line {
            font-size: 1.1rem;
            color: #2d3748;
            padding: 4px 0;
            border-bottom: 1px solid rgba(255,255,255,0.4);
            display: flex;
            justify-content: space-between;
            max-width: 200px;
            margin: 0 auto;
        }

        .line:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>✨ งานที่ 1 พิชชาพร นามแดง <br> BIT2/4 เลขที่ 26 ✨</h1>

        <form action="" method="GET">
            <label for="num">🔢 กรอกแม่สูตรคูณที่ต้องการ</label>
            <input type="number" name="num" id="num" min="1" required value="<?php echo isset($_GET['num']) ? htmlspecialchars($_GET['num']) : ''; ?>">
            <input type="submit" value="คำนวณ">
        </form>

        <?php
            // ตรวจสอบว่ามีการส่งค่า num มาหรือไม่
            if (isset($_GET["num"]) && $_GET["num"] != "") {
                $num = intval($_GET["num"]); // แปลงค่าเป็นจำนวนเต็มเพื่อความปลอดภัย

                echo "<div class='result-box'>";
                echo "<p class='result-title'>✖️ สูตรคูณแม่ " . $num . "</p>";
                
                // ใช้ลูป for วนคำนวณ 1 ถึง 12
                for ($i = 1; $i <= 12; $i++) {
                    $result = $num * $i;
                    echo "<div class='line'>";
                    echo "<span>{$num} × {$i}</span>";
                    echo "<span>= <b>{$result}</b></span>";
                    echo "</div>";
                }
                
                echo "</div>";
            }
        ?>
    </div>

</body>
</html>   
   