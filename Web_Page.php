<?php
$university = "มหาวิทยาลัยราชภัฏอุดรธานี";
$faculty = "คณะวิทยาศาสตร์";
$major = "สาขาวิชาเทคโนโลยีสารสนเทศ";
$name = "กฤติมา ทินจันทร์";
$intro = "ฉันเป็นนักศึกษาที่สนใจด้านเทคโนโลยีและการพัฒนาโปรแกรม";
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>หน้าแนะนำตัว</title>
    <style>
        body {
            font-family: "Segoe UI", Arial;
            margin: 0;
            padding: 0;
            background: linear-gradient(#2b2f42, #1d1f2e);
            display: flex;
            justify-content: center;
            padding-top: 40px;
        }

        .card {
            width: 420px;
            background: #ffffff10;
            backdrop-filter: blur(10px);
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            padding: 25px;
            color: #e8e8e8;
            text-align: center;
            border: 1px solid #ffffff30;
        }

        .profile-img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #3b4a57;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.6);
        }

        h2 {
            margin-top: 15px;
            font-size: 26px;
            color: #f3f3f3;
        }

        .info-box {
            margin-top: 20px;
            text-align: left;
            padding: 15px;
            background: #ffffff15;
            border-radius: 10px;
            border: 1px solid #ffffff25;
        }

        .info-box p {
            margin: 6px 0;
            font-size: 16px;
        }

        b {
            color: #ffd85c;
        }

        a {
            display: block;
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

        <!-- รูปภาพโปรไฟล์ -->
        <img src="pic/e77aa54c-ece3-494d-ab39-a637b2e9474f.png" alt="รูปภาพ" width="160" height="160"
            class="profile-img">

        <h2><?= $name ?></h2>

        <div class="info-box">
            <p><b>สาขา:</b> <?= $major ?></p>
            <p><b>คณะ:</b> <?= $faculty ?></p>
            <p><b>มหาวิทยาลัย:</b> <?= $university ?></p>
            <p><b>เกี่ยวกับฉัน:</b> <?= $intro ?></p>
        </div>

        <a href="ex1.php">➡ ไปที่งานลูป PHP</a>
    </div>
</body>

</html>