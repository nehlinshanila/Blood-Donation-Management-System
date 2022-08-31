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
                        if($userLoggedIn)
                        {
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
        <!-- after logging in they reach the welcome page -->
        <div class="welcomeback">

            <div class="welcome">

                <h1>Welcome back</h1>

                <h2><a href="Bloodinfo.php">Check Blood</a></h2>
                <h2><a href="Patient.php">Patient Info</a></h2>
                <h2><a href="volunteer.php">Volunteer Info</a></h2>


                <h6>Would you also like to:
                    <br><br>
                    <a href="donationform.php">Donate Blood To People In Need?</a>
                    <br><br>
                    <a href="recieveform.php">In Need Of Blood?</a>
                    <br><br>
                    <a href="money.php">Contribute To Our Organization?</a>
                    <br>

                </h6>

            </div>
        </div>

        <div class="proinfo">

            <div class="proinfoo">

                <h1>Profile Information</h1>
            </div>
            <form>
                <div><br>
                    <?php include 'classes/profileEntry.php' 
                        
                    ?>
                    <h3>User Name: <?php echo $user->getUserName();  ?></h3> <br>
                    <h3>ID: <?php echo $user->getId() ;?></h3>
                    <h3>Name: <?php echo $user->getName();  ?></h3> <br>
                    <br>
                    <br>
                </div>
                <div>
                    <h3>Date Of Birth: <?php echo $user->getDoB();  ?></h3>
                    <br><br>
                </div><br>
                <h2>Email Address:<?php echo $user->getemailId(); ?> </h2>
                <br><br>

                <h3>Phone Number: <?php echo $user->getPhoneNumber(); ?></h3>
                <br>
                <br>
                <div>
                    <h3>Address: <?php echo $user->getAddress(); ?></h3>
                    
                </div>
                <br>


                <h3>Blood Type: <?php echo $user->getBloodGroup(); ?></h3>
                
                <br><br>
                <button class="toprofile"><a href="profile.php">EDIT PROFILE INFORMATION</a></button>
            </form>
        </div>





    </div>
</body>

</html>