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
    <div>
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
        <div class="wrapper">
            <h2>Thank you for taking this initiative</h2>
            <form method="POST">
                <h4>Account</h4>
                <div class="input-group">
                    <div class="input-box">
                        <input type="text" placeholder="First Name" required class="bdms-name">
                        <!-- <i class="user-icon"></i> -->
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Last Name" required class="bdms-name">
                        <!-- <i class="user-icon"></i> -->
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <input type="email" placeholder="Email Address" required class="bdms-name">
                        <!-- <i class="user-icon"></i> -->
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <h4>Date Of Birth</h4>
                        <input type="text" placeholder="DD" class="dob">
                        <input type="text" placeholder="MM" class="dob">
                        <input type="text" placeholder="YYYY" class="dob">
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <h4>Gender</h4>
                        <input type="radio" id="b1" name="gender" checked class="radio">
                        <label for="b1">Male</label>
                        <input type="radio" id="b2" name="gender" checked class="radio">
                        <label for="b2">Female</label>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <h4>Payment Details</h4>
                        <input type="radio" name="pay" id="bc1" checked class="radio">
                        <label for="bc1"><span><i class="visa"></i>Credit Card</span></label>
                        <input type="radio" name="pay" id="bc2" checked class="radio">
                        <label for="bc1"><span><i class="paypal"></i>Paypal</span></label>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <input type="tel" placeholder="Card Number" required class="bdms-name">
                        <!-- <i class="creditcard"></i> -->
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <input type="tel" placeholder="Card CVC" required class="bdms-name">
                        <!-- <i class="fa fa-user"></i> -->
                    </div>
                    <div class="input-box">
                        <select>
                            <option>01 jun</option>
                            <option>02 jun</option>
                            <option>03 jun</option>
                        </select>
                        <select>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                        </select>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <button type="submit">PAY NOW</button>
                    </div>
                </div>
            </form>
        </div>


</body>

</html>