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
        <h1>Emergency Blood Requirement Form:</h1>
    </div>
    <div class="dform">
        <form class="dformm" method="post" action="action/requestBlood.php">
            <br>
            <div id="dname">
                <h2 class="dname">Name</h2>
                <input class="dfirstname" type="text" name="first_name"> <br>
                <label class="dfirstlabel">First Name</label>
                <input class="dlastname" type="text" name="last_name"> <br>
                <label class="dlastlabel">Last Name</label>
            </div>
            <div id="ddob">
                <h2 class="ddob">Date Of Birth</h2>
                <input class="dmonth" type="text" name="month">
                <label class="dmonthlabel">Month</label>
                <input class="dday" type="number" name="day">
                <label class="ddaylabel">Day</label>
                <input class="dyear" type="number" name="year">
                <label class="dyearlabel">Year</label>
            </div>
            <h2 class="dname">Email Address</h2>
            <input class="demail" type="email" name="email_address">

            <h2 class="dname">Phone Number</h2>
            <input class="dphone" type="number" name="phone_no">
            <br>
            <div id="dd">
                <h2 class="dd">Hospital Location</h2>
                <input class="hl" type="text" name="address"> <br>
                <label class="daddresslabel_road">Address</label>

            </div>
            <br>

            <h2 class="dnew">We Hope That You Are Doing Well And The Blood That You Will Recieve Will
                Help You A Lot. We Wish You All The Best Now Please State Your Blood Type:
            </h2><br>


            <h2 class="dbloodtype">Blood Type</h2>

            <select name="blood_type" class="doption" required>
                <option disabled="disabled" selected="selected">Choose BloodType That You Need:</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="O+">O+</option>
                <option value="AB+">AB+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="O-">O-</option>
                <option value="AB-">AB-</option>
            </select>



            <br>
            <br>

            <h2 id="ddonate">Are you:</h2>
            <label class="dradio">
                <input class="dradio-one" type="radio" name="gender" value="Male">
                <span class="checkmark"></span>
                Male
            </label>
            <label class="dradio">
                <input class="dradio-two" type="radio" name="gender" value="Female">
                <span class="checkmark"></span>
                Female
            </label>
            <div id="ddisease">
                <h2 class="ddisease">Please write down why you are in need of blood:</h2>
                <input class="dddisease" type="text" name="disease"> <br>

            </div>
            <button class="dsubmit">Register To Recieve Blood</button>
            <br><br>
        </form>
    </div>


</body>

</html>