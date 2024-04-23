<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit;
}

// Define prices for each book
$prices = array(
    "Nebula" => 79000,
    "BibiGil" => 52000,
    "Matahari" => 89000,
    "Bumi" => 84000,
    "Bulan" => 84000,
    "Bintang" => 73000
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve order data from $_POST
    $rembulan_qty = isset($_POST["rembulan_qty"]) ? $_POST["rembulan_qty"] : 0;
    $bedebah_qty = isset($_POST["bedebah_qty"]) ? $_POST["bedebah_qty"] : 0;
    $matahari_qty = isset($_POST["matahari_qty"]) ? $_POST["matahari_qty"] : 0;
    $bumi_qty = isset($_POST["bumi_qty"]) ? $_POST["bumi_qty"] : 0;
    $bulan_qty = isset($_POST["bulan_qty"]) ? $_POST["bulan_qty"] : 0;
    $bintang_qty = isset($_POST["bintang_qty"]) ? $_POST["bintang_qty"] : 0;

    // Calculate total order
    $total_rembulan = $rembulan_qty * $prices["Nebula"]; // Price of Nebula
    $total_bebibigil = $bedebah_qty * $prices["BibiGil"]; // Price of BibiGil
    $total_matahari = $matahari_qty * $prices["Matahari"]; // Price of Matahari
    $total_bumi = $bumi_qty * $prices["Bumi"]; // Price of Bumi
    $total_bulan = $bulan_qty * $prices["Bulan"]; // Price of Bulan
    $total_bintang = $bintang_qty * $prices["Bintang"]; // Price of Bintang

    // Calculate total overall
    $total = $total_rembulan + $total_bebibigil + $total_matahari + $total_bumi + $total_bulan + $total_bintang;

    // Store order details in session
    $order = array(
        "Nebula" => $rembulan_qty,
        "BibiGil" => $bedebah_qty,
        "Matahari" => $matahari_qty,
        "Bumi" => $bumi_qty,
        "Bulan" => $bulan_qty,
        "Bintang" => $bintang_qty
    );
    $_SESSION["order"] = $order;
    $_SESSION["total"] = $total;

    // Redirect to checkout page
    header("Location: checkout.php");
    exit();
}

// If accessed directly without a POST request, display order details
$order = isset($_SESSION["order"]) ? $_SESSION["order"] : null;
$total = isset($_SESSION["total"]) ? $_SESSION["total"] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Checkout</title>
    <link rel="stylesheet" href="stylekatalog.css">
    <style>
        /* Additional CSS styles */
    </style>
</head>
<body>
    <header>
        <div>
            <img src="">
            <h1>Checkout</h1>
        </div>
    </header>
    <main>
        <?php if ($order) : ?>
            <h2>Rincian Pesanan</h2>
            <table>
                <thead>
                    <tr>
                        <th>Buku</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($order as $book => $quantity) : ?>
                        <tr>
                            <td><?php echo $book; ?></td>
                            <td>Rp. <?php echo $prices[$book]; ?></td>
                            <td><?php echo $quantity; ?></td>
                            <td>Rp. <?php echo $prices[$book] * $quantity; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Total :</td>
                        <td>Rp. <?php echo $total; ?></td>
                    </tr>
                </tfoot>
            </table>
        <?php else : ?>
            <p>Belum ada pesanan.</p>
        <?php endif; ?>
    </main>
    <footer>
        &copy; 2024 Pemesanan Buku
    </footer>
</body>
</html>
