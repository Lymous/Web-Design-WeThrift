<!DOCTYPE html>
<html lang="id">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WeThrift - Sign Up</title>
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

            /* Styling for Sign Up Section */
            .signup-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                padding-top: 100px; /* Space for header */
                background-color: #f3f3f3; /* Light background for the entire page */
            }

            /* Wrapper for sign up*/
            .signup-wrapper {
                background: linear-gradient(135deg, #f8f8f8, #e0e0e0); /* Subtle gradient for depth */
                padding: 40px 30px;
                border-radius: 20px;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                width: 100%;
                text-align: center;
            }

            .signup-wrapper h2 {
                font-size: 24px;
                margin-bottom: 20px;
                color: #333;
            }

            .signup-wrapper input {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 10px;
                font-size: 16px;
            }

            .signup-wrapper button {
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

            .signup-wrapper button:hover {
                background: #ee1c47;
                transform: translateY(-3px); /* Slight lift on hover */
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

        <!-- Sign Up Section -->
        <div class="signup-container">
            <div class="signup-wrapper">
                <h2>Sign Up</h2>
                <form action="regist" method="post">
                    <input type="text" placeholder="First Name" name="first_name" required>
                    <input type="text" placeholder="Last Name" name="last_name" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <button type="submit">Register</button>
                </form>
                <a href="login">Already have an account? Login</a>
            </div>
        </div>

    </body>
</html>
