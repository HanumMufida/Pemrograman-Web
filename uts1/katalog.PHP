<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit;
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Katalog Buku Tere Liye</title>
    <link rel="stylesheet" href="stylekatalog.css"> <!-- Sambungkan dengan file CSS eksternal -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>

</head>
<body>
    <header>
        <div>
            <img src="tereliye.jpg" style="max-width: 150px;"> 
            <h1>Toko Buku Tere Liye</h1>
        </div>
    </header>
    <main>
        <form id="orderForm" action="checkout.php" method="post">
            <div class="container">
                <!-- Buku 1 -->
                <section class="buku-item" data-price="79">
                    <img src="nebula.jpg" alt="Nebula" class="image">
                    <h2 class="name">Nebula</h2>
                    <p class="price"><b>Rp. 79.000</b></p>
                    <div class="order-controls">
                        <button type="button" class="decrement-btn">-</button>
                        <input type="number" class="quantity-input" name="rembulan_qty" value="0">
                        <button type="button" class="increment-btn">+</button>
                    </div>
                </section>

                <!-- Buku 2 -->
                <section class="buku-item" data-price="52">
                    <img src="bibigil.jpg" alt="BibiGil" class="image">
                    <h2 class="name">BibiGil</h2>
                    <p class="price"><b>Rp. 52.000</b></p>
                    <div class="order-controls">
                        <button type="button" class="decrement-btn">-</button>
                        <input type="number" class="quantity-input" name="bedebah_qty" value="0">
                        <button type="button" class="increment-btn">+</button>
                    </div>
                </section>

                <!-- Buku 3 -->
                <section class="buku-item" data-price="89">
                    <img src="matahari.jpg" alt="Matahari" class="image">
                    <h2 class="name">Matahari</h2>
                    <p class="price"><b>Rp. 89.000</b></p>
                    <div class="order-controls">
                        <button type="button" class="decrement-btn">-</button>
                        <input type="number" class="quantity-input" name="matahari_qty" value="0">
                        <button type="button" class="increment-btn">+</button>
                    </div>
                </section>

                <!-- Buku 4 -->
                <section class="buku-item" data-price="84">
                    <img src="bumi.jpg" alt="Bumi" class="image">
                    <h2 class="name">Bumi</h2>
                    <p class="price"><b>Rp. 84.000</b></p>
                    <div class="order-controls">
                        <button type="button" class="decrement-btn">-</button>
                        <input type="number" class="quantity-input" name="bumi_qty" value="0">
                        <button type="button" class="increment-btn">+</button>
                    </div>
                </section>

                <!-- Buku 5 -->
                <section class="buku-item" data-price="84">
                    <img src="bulan.jpg" alt="Bulan" class="image">
                    <h2 class="name">Bulan</h2>
                    <p class="price"><b>Rp. 84.000</b></p>
                    <div class="order-controls">
                        <button type="button" class="decrement-btn">-</button>
                        <input type="number" class="quantity-input" name="bulan_qty" value="0">
                        <button type="button" class="increment-btn">+</button>
                    </div>
                </section>

                <!-- Buku 6 -->
                <section class="buku-item" data-price="73">
                    <img src="bintang.jpg" alt="Bintang" class="image">
                    <h2 class="name">Bintang</h2>
                    <p class="price"><b>Rp. 73.000</b></p>
                    <div class="order-controls">
                        <button type="button" class="decrement-btn">-</button>
                        <input type="number" class="quantity-input" name="bintang_qty" value="0">
                        <button type="button" class="increment-btn">+</button>
                    </div>
                </section>
            </div>
            <button type="submit" class="checkout-btn">Checkout</button>
        </form>
    </main>
    <footer>
        &copy; 2024 || Hanum Mufida - UTS WEB || 2241760042
    </footer>
    </body>
</html>