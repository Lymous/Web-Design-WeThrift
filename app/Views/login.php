<!DOCTYPE html>
<html lang="id">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WeThrift - Login</title>
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
                background-color: #fff;
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

            /* Styling for Login Section */
            .login-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                padding-top: 100px; /* Space for header */
                background-color: #f3f3f3; /* Light background for the entire page */
            }

            /* Wrapper for login box */
            .login-wrapper {
                background: linear-gradient(135deg, #f8f8f8, #e0e0e0); /* Subtle gradient for depth */
                padding: 40px 30px;
                border-radius: 20px;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                width: 100%;
                text-align: center;
            }

            .login-wrapper h2 {
                font-size: 24px;
                margin-bottom: 20px;
                color: #333;
            }

            .login-wrapper input {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 10px;
                font-size: 16px;
            }

            .login-wrapper a {
                color: #000;
                font-size: 14px;
                text-decoration: none;
                display: inline-block;
                margin: 10px 0;
            }

            .login-wrapper a:hover {
                color: #ee1c47;
            }

            .login-wrapper button {
                width: 100%;
                padding: 12px;
                background: black;
                color: white;
                border: none;
                border-radius: 10px;
                font-size: 16px;
                cursor: pointer;
                transition: background 0.3s ease, transform 0.2s;
            }

            .login-wrapper button:hover {
                background: #ee1c47;
                transform: translateY(-3px); /* Slight lift on hover */
            }

            .login-wrapper .signup {
                margin-top: 15px;
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

                <div id="menu-icon"></div>
            </div>
        </header>

        <!-- Login Section -->
        <div class="login-container">
            <div class="login-wrapper">
                <h2>Login</h2>
                <form action="logging" method="post">
                    <input type="email" placeholder="Email" name="email" required>
                    <div class="invalid-feedback"><?= isset($validation['email']) ? $validation['email'] : ''; ?></div>
                    <input type="password" placeholder="Password" name="password" required>
                    <div class="invalid-feedback"><?= isset($validation['password']) ? $validation['password'] : ''; ?></div>
                    <a href="#">Forgot password?</a>
                    <button type="submit">Login</button>
                </form>
                <a href="register" class="signup">Sign up</a>
            </div>
        </div>

    </body>
</html>
