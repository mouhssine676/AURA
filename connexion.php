<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
           
            display: flex;
            flex-direction: column;
        }

        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            width: 100%;
            max-width: 1400px;
            margin: 60px auto;
            text-align: center;
            flex-grow: 1;
        }

        .login-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .login-subtitle {
            color: #666;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 14px;
            width: 100%;
            max-width: 400px;
            text-align: left;
        }

        .form-group input {
            width: 100%;
            max-width: 400px;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .forgot-password {
            text-align: right;
            margin-bottom: 25px;
            width: 100%;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .forgot-password a {
    color: #666;
    font-size: 12px;
    text-decoration: none;
    position: relative;
    display: inline-block;
    transition: color 0.3s ease;
}
.forgot-password a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 0;
    height: 1px;
    background-color: #666;
    transition: width 0.3s ease;
}
.forgot-password a:hover::after {
    width: 100%;
}



        .login-button {
            background-color: black;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            max-width: 400px;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 25px;
        }
        .login-button:hover {
    background-color: #333;       /* un noir un peu plus clair */
    color: #fff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4); /* effet d'élévation */
    transition: all 0.3s ease;
    transform: translateY(-2px);  /* léger effet de soulèvement */
}


        .create-account {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .create-account a {
            text-decoration: none;
            color: #000;
        }

        .benefits {
            display: flex;
            margin-left:130px;
            margin-top:140px;
            font-size: 20px;
            flex-wrap: wrap;
        }

        .benefit {
            text-align: center;
            width: 30%;
            min-width: 200px;
            margin-bottom: 15px;
        }

        .benefit-icon {
            font-size: 40px;
            margin-bottom: 10px;
            color: #333;
        }

        .benefit-title {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .benefit-subtitle {
    color: #888; /* Light grey */
    font-size: 14px;
}


        /* Newsletter styling */
        .newsletter-container {
            background-color:rgb(192, 191, 191);
            width: 100%;
            padding: 20px 0;
            margin-top: auto;
        }

        /* Header/Footer styling */
        header, footer {
            background-color: white;
            text-align: center;
            width: 100%;
        }

        
    </style>
</head>
<body>
    <header>
        <?php include('include/header.php'); ?>
    </header>

    <form action="verify_login.php" method="post" class="login-container">
        <div class="login-title">CONNEXION</div>
        <div class="login-subtitle">Please enter your email and password:</div>

        <div class="form-group">
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <div class="forgot-password">
            <a href="reset_request.php">Forgotten password?</a>
        </div>

        <button type="submit" class="login-button">Connection</button>

        <div class="create-account">
            <a href="register.php">CREATE AN ACCOUNT</a>
        </div>

        <div class="benefits">
    <div class="benefit">
        <div class="benefit-icon">
            <i class="fas fa-truck"></i>
        </div>
        <div class="benefit-title">FREE DELIVERY</div>
        <div class="benefit-subtitle">for all orders</div>
    </div>
    <div class="benefit">
        <div class="benefit-icon">
            <i class="fas fa-gift"></i>
        </div>
        <div class="benefit-title">FREE SAMPLES</div>
        <div class="benefit-subtitle">with every order</div>
    </div>
    <div class="benefit">
        <div class="benefit-icon">
            <i class="fas fa-lock"></i>
        </div>
        <div class="benefit-title">SECURE PAYMENT</div>
        <div class="benefit-subtitle">100% protected</div>
    </div>
</div>

    </form>

    <div class="newsletter-container">
        <?php include('include/newsletter.php'); ?>
    </div>

    <footer>
        <?php include('include/footer.php'); ?>
    </footer>
</body>
</html>
