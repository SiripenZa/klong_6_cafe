<?php
session_start();
require_once 'conn.php';

$sql = "SELECT product_id, product_name, description, price, image
        FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLONG 6 CAFE</title>

    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@400;500;600;700&display=swap"
          rel="stylesheet">
</head>

<body style="margin:0; background:#fff0f3; color:#632b3b; font-family:'Mali',cursive;">

<!-- ปุ่มเข้าสู่ระบบ / สมัครสมาชิก มุมขวาบนสุด -->
<div style="
    position:absolute;
    top:15px;
    right:20px;
    z-index:1000;
    display:flex;
    gap:8px;
    align-items:center;
    flex-wrap:wrap;
    justify-content:flex-end;
">

    <?php if (isset($_SESSION['customer_id'])): ?>

        <span style="
            background:#ffffff;
            color:#c1123f;
            padding:9px 15px;
            border-radius:50px;
            font-weight:700;
            font-size:14px;
            box-shadow:0 3px 10px rgba(0,0,0,0.08);
            white-space:nowrap;
        ">
            สวัสดี, <?= htmlspecialchars($_SESSION['customer_firstname'], ENT_QUOTES, 'UTF-8') ?> 💗
        </span>

        <a
            href="logout.php"
            style="
                background:#c1123f;
                color:#ffffff;
                padding:9px 15px;
                border-radius:50px;
                text-decoration:none;
                font-weight:700;
                font-size:14px;
                white-space:nowrap;
            "
        >
            ออกจากระบบ
        </a>

    <?php else: ?>

        <a
            href="login.php"
            style="
                background:#ffffff;
                color:#000000;
                padding:9px 15px;
                border-radius:50px;
                text-decoration:none;
                font-weight:700;
                font-size:14px;
                white-space:nowrap;
                box-shadow:0 3px 10px rgba(0,0,0,0.05);
            "
        >
            เข้าสู่ระบบ
        </a>

        <a
            href="register.php"
            style="
                background:#c1123f;
                color:#ffffff;
                padding:9px 15px;
                border-radius:50px;
                text-decoration:none;
                font-weight:700;
                font-size:14px;
                white-space:nowrap;
            "
        >
            สมัครสมาชิก
        </a>

    <?php endif; ?>

</div>

<header style="background:#ffd6e2; text-align:center; padding:25px 12px;">

    <p style="color:#c1123f; letter-spacing:3px; font-size:13px;">
        SWEET MOMENTS EVERY DAY
    </p>

    <h1 style="margin:10px 0; color:#c1123f; font-size:clamp(25px,5vw,40px);">
        🍒 KLONG 6 CAFE 🍰
    </h1>

    <p>
        Coffee • Cake • Happiness ♡
    </p>

</header>

<nav
    style="
        background:transparent;
        width:fit-content;
        max-width:95%;
        margin:8px auto 20px auto;
        padding:7px;
        border-radius:50px;
        box-shadow:none;
        display:flex;
        align-items:center;
        justify-content:center;
        gap:4px;
        flex-wrap:wrap;
    "
>

    <!-- หน้าหลัก -->
    <a
        href="index.php"
        style="
            background:#000000;
            color:#ffffff;
            padding:12px 22px;
            border-radius:50px;
            text-decoration:none;
            font-weight:700;
            font-size:16px;
            white-space:nowrap;
        "
    >
        หน้าหลัก
    </a>

    <!-- เค้ก -->
<a
    href="cake.php"
    style="
        color:#000000;
        background:transparent;
        padding:12px 22px;
        border-radius:50px;
        text-decoration:none;
        font-weight:700;
        font-size:16px;
        white-space:nowrap;
    "
>
    เค้ก
</a>

    <!-- ขนมปัง -->
<a
    href="bread.php"
    style="
        color:#000000;
        background:transparent;
        padding:12px 22px;
        border-radius:50px;
        text-decoration:none;
        font-weight:700;
        font-size:16px;
        white-space:nowrap;
    "
>
    ขนมปัง
</a>

   
<!-- เครื่องดื่ม -->
<a
    href="drink.php"
    style="
        color:#000000;
        background:transparent;
        padding:12px 22px;
        border-radius:50px;
        text-decoration:none;
        font-weight:700;
        font-size:16px;
        white-space:nowrap;
    "
>
    เครื่องดื่ม
</a>


</nav>

<section
    id="home"
    style="
        text-align:center;
        padding:35px 15px;
        background:#ffe3eb;
    "
>

    <h2 style="color:#c1123f; font-size:28px;">
        Life is sweeter with cake! 💗
    </h2>

    <p>
        เติมความสุขให้ทุกวัน ด้วยกาแฟและขนมแสนอร่อย
    </p>

    <img
        src="cake.png"
        alt="เค้กของร้าน"
        style="
            width:100%;
            max-width:450px;
            height:700px;
            object-fit:cover;
            border:5px solid white;
            border-radius:25px;
        "
    >

    <img
        src="bread.png"
        alt="ขนมของร้าน"
        style="
            width:100%;
            max-width:450px;
            height:700px;
            object-fit:cover;
            border:5px solid white;
            border-radius:25px;
        "
    >

    <img
        src="water2.png"
        alt="น้ำของร้าน"
        style="
            width:100%;
            max-width:450px;
            height:700px;
            object-fit:cover;
            border:5px solid white;
            border-radius:25px;
        "
    >

    <p>
        <a
            href="#menu"
            style="
                display:inline-block;
                padding:12px 25px;
                background:#e63946;
                color:white;
                text-decoration:none;
                border-radius:25px;
            "
        >
            🍰 เลือกชมเมนู
        </a>
    </p>

</section>



<footer
    id="contact"
    style="
        background:#c1123f;
        color:white;
        padding:25px 15px;
        text-align:center;
    "
>

    <h3>
        🍒 KLONG 6 CAFE 🍒
    </h3>

    <p>
        Coffee • Cake • Bakery
    </p>

    <p>
        ขอบคุณที่แวะมาเยี่ยมชมร้านของเรา ♡
    </p>

</footer>

</body>
</html>

<?php
$conn->close();
?>