<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WeThrift - Keranjang Belanja</title>
        <!--Font link-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                scroll-behavior: smooth;
                font-family: "Jost", sans-serif;
                list-style: none;
                text-decoration: none;
            }
            header{
                background-color: rgba(255, 255, 255, .50);
                position: fixed;
                width: 100%;
                top: 0;
                right: 0;
                z-index: 1000;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 20px 10%;
            }
            .logo img{
                max-width: 110px;
                height: auto;
            }
            .navmenu{
                display: flex;
            }
            .navmenu a{
                color: black;
                font-size: 16px;
                text-transform: capitalize;
                padding: 10px 20px;
                font-weight: 400;
                transition: all .42s ease;
            }
            .navmenu a:hover{
                color: #ee1c47;
            }
            .nav-icon{
                display: flex;
                align-items: center;
            }
            .nav-icon i{
                margin-right: 20px;
                color: black;
                font-size: 25px;
                font-weight: 400;
                transition: all .42s ease;
            }
            .nav-icon i:hover{
                color: #ee1c47;
            }

            /* Container styling */
            .container {
                padding: 100px 10%;
                max-width: 1200px;
                margin: 20px auto;
            }

            .section {
                margin-bottom: 60px;
            }

            h2 {
                font-size: 36px;
                margin-bottom: 20px;
                text-align: center;
            }

            /* Cart items styling */
            .cart-items {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .cart-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                border: 1px solid #ccc;
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 8px;
            }

            .cart-item img {
                width: 100px;
                height: auto;
            }

            .cart-item-details {
                flex: 1;
                padding-left: 20px;
            }

            .cart-item-details h5 {
                font-size: 18px;
                margin-bottom: 10px;
            }

            .cart-item-details p {
                font-size: 16px;
                color: #666;
            }

            .cart-item-price {
                font-size: 18px;
                font-weight: bold;
            }

            /* Total section styling */
            .total-section {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 40px;
                padding: 20px;
                border-top: 2px solid #ccc;
                background-color: #f3f3f3;
                border-radius: 8px;
            }

            .total-section h3 {
                font-size: 24px;
            }

            .total-section .total-price {
                font-size: 24px;
                font-weight: bold;
                color: #ee1c47;
            }

            /* Button styling */
            .pay-button {
                background-color: #ee1c47;
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 18px;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .pay-button:hover {
                background-color: #d11a3b;
            }

            /* Footer Styling */
            footer {
                background-color: #d3d3d3;
                padding: 40px 10%;
                color: #000;
                font-size: 14px;
            }

            .footer-container {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
                gap: 20px;
            }

            .footer-item {
                flex: 1;
                min-width: 220px;
            }

            .footer-item h2, .footer-item h3 {
                margin-bottom: 15px;
                font-size: 18px;
            }

            .footer-item p, .footer-item ul, .footer-item li {
                margin-bottom: 10px;
                line-height: 1.6;
            }

            .footer-item ul {
                list-style: none;
                padding: 0;
            }

            .footer-item ul li a {
                text-decoration: none;
                color: #000;
            }

            .footer-item ul li a:hover {
                color: #ee1c47;
            }

            /* Social Media Icons */
            .social-icons a {
                margin-right: 10px;
                font-size: 24px;
                color: #000;
                transition: color 0.3s;
            }

            .social-icons a:hover {
                color: #ee1c47;
            }

            /* Footer Bottom */
            .footer-bottom {
                text-align: center;
                padding: 20px 0;
                border-top: 1px solid #ccc;
                margin-top: 20px;
            }

            .footer-bottom p {
                margin: 0;
            }

        </style>
    </head>
    <body>

        <!-- Header Section -->
        <header>
            <a href="home" class="logo"><img src="fotohome/logo.png" alt="logo WeThrift"></a>

            <ul class="navmenu">
                <li><a href="market">Market</a></li>
                <li><a href="event">Event</a></li>
            </ul>

            <div class="nav-icon">
                <a href="profile"><i class='bx bx-user'></i></a>
                <a href="cart"><i class='bx bx-cart'></i></a>
            </div>
        </header>

        <!-- Main Content -->
        <div class="container">
            <h2>Cart</h2>

            <!-- Cart Items -->
            <div class="cart-items">
            <?php foreach ($carts as $cart) {
        ?>
                <div class="cart-item">
                    <img src="<?= base_url('fotohome/') ?><?= $cart['gambar'] ?>" alt="Produk 1">
                    <div class="cart-item-details">
                        <h5><?= $cart['produk'] ?></h5>
                        <p>Harga per item: Rp. <?= $cart['harga'] ?></p>
                    </div>
                    <div class="cart-item-price">
                        Rp. <?= $cart['harga'] ?>
                    </div>
                </div>
                <?php }  ?>
                
            </div>

            <!-- Total Section -->
            <div class="total-section">
                <h3>Total Harga:</h3>
                <div class="total-price">Rp. <?php $total=0; foreach ($carts as $cart) {
                    $total+=$cart['harga'];
                } ?><?= $total ?></div>
            </div>

            <!-- Pay Button -->
            <div style="text-align: center; margin-top: 30px;">
                <button class="pay-button">Bayar</button>
            </div>
        </div>

        <!-- Footer Section -->
        <footer>
            <div class="footer-container">
                <div class="footer-item">
                    <h2>Contact Us</h2>
                    <p>123 Thrift Street, Bandung</p>
                    <p>Phone: +62 812 3456 7890</p>
                    <p>Email: info@wethrift.com</p>
                </div>
                <div class="footer-item">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="cart">Market</a></li>
                        <li><a href="event">Event</a></li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 WeThrift. All rights reserved.</p>
            </div>
        </footer>

    </body>
</html>
