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

    <div class="donateform">
        <h1>Profile Information</h1>
    </div>
    <div class="dform">
        <form class="dformm" method="get" action="classes/updateProfileInfo.php">
            <?php include 'classes/profileEntry.php'; ?>
            <br>
            <div id="dname">
                <h2 class="dname">Name</h2>
                <input class="dfirstname" type="text" name="first_name" value="<?php echo $firstName; ?>"> <br>
                <label class="dfirstlabel">First Name</label>
                <input class="dlastname" type="text" name="last_name" value="<?php echo $lastName; ?>"> <br>
                <label class="dlastlabel">Last Name</label>
            </div>
            <div id="ddob">
                <h2 class="ddob">Date Of Birth</h2>
                <input class="dmonth" type="text" name="month" value="<?php echo $mnth; ?>">
                <label class="dmonthlabel">Month</label>
                <input class="dday" type="number" name="day" value="<?php echo $day; ?>">
                <label class="ddaylabel">Day</label>
                <input class="dyear" type="number" name="year" value="<?php echo $year; ?>">
                <label class="dyearlabel">Year</label>
            </div>
            <h2 class="dname">Email Address</h2>
            <input disabled="disabled" class="demail" type="email" name="email_address" value="<?php echo $user->getemailID() ?>">

            <h2 class="dname">Phone Number</h2>
            <input class="dphone" type="number" name="phone_no" value="<?php echo $user->getPhoneNumber(); ?>">
            <br><br>
            <div id="dd">
                <h2 class="dd">Address</h2>
                <!-- <input class="daddress_road" type="number" name="address"> <br>
                <label class="daddresslabel_road">Road Number</label> -->
                <input class="hl" type="text" name="address" value="<?php echo $user->getAddress(); ?>"> <br>
                <label class="daddresslabel_road">Address</label>
            </div>
            <br><br>


            <h2 class="dbloodtype">Blood Type</h2>

            <select name="blood_type" class="doption">
                <option disabled="disabled" selected="selected">--Choose BloodType</option>
                <option>A+</option>
                <option>B+</option>
                <option>O+</option>
                <option>AB+</option>
                <option>A-</option>
                <option>B-</option>
                <option>O-</option>
                <option>AB-</option>
            </select>



            <button class="dsubmit">Save Your Information</button>
            <br><br>
        </form>
    </div>
</body>

</html>