<html>
    <head>
        <title>Cafe Librew - Sign in</title>
        <link rel="stylesheet" type="text/css" href="../css/sign_in.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,600&display=swap" rel="stylesheet">
        <link rel="icon" href ="..\main assests\logo.png" type="image/x-icon"> <!-- Logo of Website -->
    </head>
    <body>
        <div class ="container">
            <div class="row">
                <div class="left">
                    <img class="sidepic" src="../main assests/collage.jpg"><br>
                    <img class="sidepic" src="../main assests/collage.jpg">
                </div>
                <div class="center">
                    <table>
                        <tr>
                            <td>
                                <a href="main.php"><img class="logo" src="../main assests/logo1.png"></a>
                            </td>
                            <td>
                                <h1>CAFE LIBREW</h1>
                                <h3>RESERVATION SYSTEM</h3>
                            </td>
                        </tr>
                    </table>
                    <p>Please sign in to continue</p>
                    <div class="divform">
                        <form action="#" method="POST" >
                                <label for="username" class="label">Username:</label> <br>
                                <input type="text" class="textbox" id="username" name="username"> <br> 
                            
                                <label for="password" class="label">Password:</label><br>
                                <input type="password" class="textbox" id="password" name="password"> <br>
                                
                                <button class="sign_in" name="log_in_button"><a href="#">SIGN IN</a></button> <br>
                                <button class="have_an_acc" name="with_acc"><a href="log_in.php" class="a2">Already have an account</a></button>
                        </form>
                    </div>
                    
                </div>
                <div class="right">
                    <img class="sidepic" src="../main assests/collage.jpg">
                    <img class="sidepic" src="../main assests/collage.jpg">
                </div>
            </div>
        </div>
    </body>
</html>