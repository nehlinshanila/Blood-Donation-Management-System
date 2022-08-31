<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeSource Foundation</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <video autoplay loop muted plays-inline class="backvid">
        <source src="img/1videoplayback.mp4" type="video/mp4">
    </video>
    <div class="navbar">
        <nav>
            <li>
                <div class="verline"></div>
            </li>

            <a href="index.php"><img src="img/LifeSource Foundation-1 (2).png" alt="logo" height="50px"
                    width="200px"></a>
            <ul>
                <?php session_start();
                $userLoggedIn = false;
                if(isset($_SESSION['logged_in'])){
                    $userLoggedIn = true;
                    $uName = $_SESSION['username'];
                }
            ?>
                <li> <a href="index.php">HOME</a> </li>
                <li> <a href="about.php">ABOUT US</a></li>
                <li> <a href="donorpanel.php">INFORMATION</a> </li>
                <li> <a href="donationform.php">DONATE BLOOD</a> </li>
                <li> <a href="recieveform.php">RECIEVE BLOOD</a> </li>
                <li>
                    <p class="undersquare">________</p>
                </li>
                <li id="signUp">
                    <a href="SignUp.php">SIGN UP
                        <?php
                            if($userLoggedIn){
                                echo "
                                    <script language=javascript>
                                        var signUp = document.getElementById('signUp');
                                        
                                        signUp.style.visibility = 'hidden';
                                    </script>
                                ";
                            }else{
                                echo "
                                    <script language=javascript>
                                        var signUp = document.getElementById('signUp');
                                        signUp.style.visibility = 'visible';
                                    </script>
                                ";
                            }
                            
                        ?>
                    </a>
                </li>
                <li id="login">
                    <a href="Login.php">LOGIN
                        <?php
                            if($userLoggedIn){
                                echo "
                                    <script language=javascript>
                                        var login = document.getElementById('login');
                                        
                                        login.style.visibility = 'hidden';
                                    </script>
                                ";
                            }else{
                                echo "
                                    <script language=javascript>
                                        var login = document.getElementById('login');
                                        
                                        login.style.visibility = 'visible';
        
                                    </script>
                                ";
                            }
                            
                        ?>
                    </a>
                </li>
                <li id="UserName" onclick="profileMenu()">
                    <a href="">
                        <?php
                            if($userLoggedIn){
                                
                                echo "
                                    <script language=javascript>
                                        var uName = document.getElementById('UserName');
                                        uName.innerHTML = " . json_encode($uName) . ";
                                        uName.style.color = 'white';
                                        function profileMenu(){
                                            window.location.href='../welcome.php';
                                        }
                                    </script>
                                ";
                            }else{
                                echo "
                                    <script language=javascript>
                                        var uName = document.getElementById('UserName');
                                        signOut.style.visibility = 'hidden';
        
                                    </script>
                                ";
                            }
                            
                        ?>
                    </a>
                </li>
                <li id="SignOut" onclick="logOut()">Log Out
                    <?php
                    if($userLoggedIn){
                        echo "
                            <script language=javascript>
                                var signOut = document.getElementById('SignOut');
                                signOut.style.color = 'white';
                                function logOut(){
                                    window.location.href = 'action/logout.php';
                                }
                            </script>
                        ";
                    }else{
                        echo "
                            <script language=javascript>
                                var signOut = document.getElementById('SignOut');
                                signOut.innerHTML = 'SIGN OUT';
                                signOut.style.visibility = 'hidden';

                            </script>
                        ";
                    }
                            
                ?>
                </li>
            </ul>
        </nav>
    </div>
    <div>
        <div class="centerlogin">
            <h1 class="login">Log In:</h1>
            <form method="post" class="post" action="action/LoginCheck.php">

                <div class="textfield">
                    <input type="text" required name="email">
                    <span></span>
                    <label>Email</label>
                </div>
                <div class="textfield">
                    <input type="password" required name="password">
                    <label>Password</label>
                </div>
                <div class="pass">Forgot Password?</div>
                <input type="submit" value="Login">
                <div class="signuplink"> Not a member?
                    <a href="SignUp.php">Signup</a>
                </div>
            </form>

        </div>
    </div>

</body>

</html>