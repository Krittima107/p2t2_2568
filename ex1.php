<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>งานลูป PHP</title>

    <style>
        body {
            font-family: "Segoe UI", Arial;
            margin: 0;
            padding: 0;
            background: linear-gradient(#2b2f42, #1d1f2e);
            display: flex;
            justify-content: center;
            padding-top: 40px;
            color: #e8e8e8;
        }

        .card {
            width: 600px;
            background: #ffffff10;
            backdrop-filter: blur(10px);
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            padding: 25px;
            border: 1px solid #ffffff30;
            margin-bottom: 40px;
        }

        h2,
        h3 {
            color: #ffd85c;
        }

        pre {
            background: #0d0f17;
            color: #00ff84;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ffffff25;
            white-space: pre-wrap;
            font-size: 15px;
        }

        a {
            display: inline-block;
            margin-top: 25px;
            padding: 10px;
            background: #4b5e57;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 17px;
            transition: 0.25s;
        }

        a:hover {
            background: #5f7b72;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>งานลูป PHP</h2>

        <!-- 1) สามเหลี่ยมเพิ่มดาว -->
        <h3>1) สามเหลี่ยมเพิ่มดาว (ใช้ For Loop)</h3>
        <pre><?php
        for ($i = 1; $i <= 9; $i++)
            echo str_repeat("*", $i) . "\n";
        ?></pre>

        <h3>1) สามเหลี่ยมเพิ่มดาว (ใช้ While Loop)</h3>
        <pre><?php
        $i = 1;
        while ($i <= 9) {
            echo str_repeat("*", $i) . "\n";
            $i++;
        }
        ?></pre>

        <h3>1) สามเหลี่ยมเพิ่มดาว (ใช้ Do-While Loop)</h3>
        <pre><?php
        $i = 1;
        do {
            echo str_repeat("*", $i) . "\n";
            $i++;
        } while ($i <= 9);
        ?></pre>

        <!-- 2) ตัวเลขซ้ำแนวนอน -->
        <h3>2) ตัวเลขซ้ำแนวนอน (ใช้ For Loop)</h3>
        <pre><?php
        for ($i = 1; $i <= 9; $i++)
            echo str_repeat($i . " ", 9) . "\n";
        ?></pre>

        <h3>2) ตัวเลขซ้ำแนวนอน (ใช้ While Loop)</h3>
        <pre><?php
        $i = 1;
        while ($i <= 9) {
            echo str_repeat($i . " ", 9) . "\n";
            $i++;
        }
        ?></pre>

        <h3>2) ตัวเลขซ้ำแนวนอน (ใช้ Do-While Loop)</h3>
        <pre><?php
        $i = 1;
        do {
            echo str_repeat($i . " ", 9) . "\n";
            $i++;
        } while ($i <= 9);
        ?></pre>

        <!-- 3) สามเหลี่ยมตัวเลข -->
        <h3>3) สามเหลี่ยมตัวเลข (ใช้ For Loop)</h3>
        <pre><?php
        for ($i = 1; $i <= 9; $i++)
            echo str_repeat($i . " ", $i) . "\n";
        ?></pre>

        <h3>3) สามเหลี่ยมตัวเลข (ใช้ While Loop)</h3>
        <pre><?php
        $i = 1;
        while ($i <= 9) {
            echo str_repeat($i . " ", $i) . "\n";
            $i++;
        }
        ?></pre>

        <h3>3) สามเหลี่ยมตัวเลข (ใช้ Do-While Loop)</h3>
        <pre><?php
        $i = 1;
        do {
            echo str_repeat($i . " ", $i) . "\n";
            $i++;
        } while ($i <= 9);
        ?></pre>

        <!-- 4) กรอบสี่เหลี่ยม -->
        <h3>4) กรอบสี่เหลี่ยม (ใช้ For Loop) — ขนาด 11</h3>
        <pre><?php
        for ($row = 1; $row <= 11; $row++) {
            if ($row == 1 || $row == 11)
                echo str_repeat("* ", 11) . "\n";
            else
                echo "* " . str_repeat(($row - 1) . " ", 9) . "*\n";
        }
        ?></pre>

        <h3>4) กรอบสี่เหลี่ยม (ใช้ While Loop)</h3>
        <pre><?php
        $row = 1;
        while ($row <= 11) {
            if ($row == 1 || $row == 11)
                echo str_repeat("* ", 11) . "\n";
            else
                echo "* " . str_repeat(($row - 1) . " ", 9) . "*\n";

            $row++;
        }
        ?></pre>

        <h3>4) กรอบสี่เหลี่ยม (ใช้ Do-While Loop)</h3>
        <pre><?php
        $row = 1;
        do {
            if ($row == 1 || $row == 11)
                echo str_repeat("* ", 11) . "\n";
            else
                echo "* " . str_repeat(($row - 1) . " ", 9) . "*\n";

            $row++;
        } while ($row <= 11);
        ?></pre>

        <!-- 5) สามเหลี่ยมกลับหัว -->
        <h3>5) สามเหลี่ยมกลับหัว (ใช้ For Loop)</h3>
        <pre><?php
        for ($i = 9; $i >= 1; $i--)
            echo str_repeat($i . " ", $i) . "\n";
        ?></pre>

        <h3>5) สามเหลี่ยมกลับหัว (ใช้ While Loop)</h3>
        <pre><?php
        $i = 9;
        while ($i >= 1) {
            echo str_repeat($i . " ", $i) . "\n";
            $i--;
        }
        ?></pre>

        <h3>5) สามเหลี่ยมกลับหัว (ใช้ Do-While Loop)</h3>
        <pre><?php
        $i = 9;
        do {
            echo str_repeat($i . " ", $i) . "\n";
            $i--;
        } while ($i >= 1);
        ?></pre>

        <a href="Web_Page.php">⬅ กลับหน้าแนะนำตัว</a>
    </div>
</body>

</html>