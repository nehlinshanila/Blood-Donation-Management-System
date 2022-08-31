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
        <h1>Blood Donation Form</h1>
    </div>
    <div class="dform">

        <form class="dformm" method="post" action="action/ForDonationform.php">
            <br>

            <div id="dname">
                <h2 class="dname">Name</h2>
                <input class="dfirstname" type="text" name="first_name" required><br>
                <label class="dfirstlabel">First Name</label>
                <input class="dlastname" type="text" name="last_name" required> <br>
                <label class="dlastlabel">Last Name</label>
            </div>
            <div id="ddob">
                <h2 class="ddob">Date Of Birth</h2>
                <input class="dmonth" type="text" name="month" min="1" max="12" required>
                <label class="dmonthlabel">Month</label>
                <input class="dday" type="number" name="day" min="1" max="31" required>
                <label class="ddaylabel">Day</label>
                <input class="dyear" type="number" name="year" min="1980" max="2022" required>
                <label class="dyearlabel">Year</label>
            </div>
            <h2 class="dname">Email Address</h2>
            <input class="demail" type="email" name="email_address">

            <h2 class="dname">Phone Number</h2>
            <input class="dphone" type="number" name="phone_no" required>
            <br><br>
            <div id="dd">
                <h2 class="dd">Address</h2>
                <input class="daddress_road" type="number" name="road_no" required> <br>
                <label class="daddresslabel_road">Road Number</label>
                <input class="daddress_house" type="number" name="house_no" required> <br>
                <label class="daddresslabel_house">House Number</label>
                <input class="daddress_zip" type="number" name="zip_code" required> <br>
                <label class="daddresslabel_zip">Zip Code</label>
                <input class="daddress_city" type="text" name="city" required> <br>
                <label class="daddresslabel_city">City</label>
            </div>
            <br><br>
            <div id="dhw">
                <h2 class="dhw">Height (in ft & inches)</h2>
                <div class="dhww">
                    <input class="dfeet" type="range" name="dfeet" id="range_dfeet" value="5" min="4" max="7"
                        oninput="range_dfeet_disp.value = range_dfeet.value" step="1">
                    <output id="range_dfeet_disp"></output>
                    <label class="dfeetlabel">feet</label>
                    <input class="dinch" type="range" name="dinch" id="range_dinch" value="5" min="0" max="12"
                        oninput="range_dinch_disp.value = range_dinch.value" step="1">
                    <output id="range_dinch_disp"></output>
                    <label class="dinchlabel">inch</label>

                </div>


                <div class="dhwww">
                    <h2 class="dhw">Weight (in kg)</h2>
                </div>
                <div class="dhwwww">
                    <input class="dweight" type="range" name="dweight" id="range_dweight" value="5" min="50" max="200"
                        oninput="range_dweight_disp.value = range_dweight.value" step="1">
                    <output id="range_dweight_disp"></output>
                    <label class="dweightlabel">kg</label>
                </div>

                <!-- <input class="dheight" type="range" min="0" max="11" name="Height_ft" > <br> -->
                <!-- <label class="dheightlabel">Height</label> -->
                <!-- <input class="dweight" type="number" name="last_name"> <br>
                            <label class="dweightlabel">Weight</label> -->
            </div>

            <h2 class="dbloodtype">Blood Type</h2>

            <select name="blood_type" class="doption" required>
                <option disabled="disabled" selected="selected">--Choose BloodType</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="O+">O+</option>
                <option value="AB+">AB+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="O-">O-</option>
                <option value="AB-">AB-</option>
            </select>

            <h2 id="ddonate">Did you donate blood before?</h2>
            <label class="dradio">
                <input class="dradio-one" type="radio" checked="checked" name="hasDonate">
                <span class="checkmark"></span>
                Yes
            </label>
            <label class="dradio">
                <input class="dradio-two" type="radio" name="hasDonate">
                <span class="checkmark"></span>
                No
            </label>
            <br>
            <br>

            <h2 id="ddonate">Are you:</h2>
            <select name="gender" class="doption" required>
                <option disabled="disabled" selected="selected">-->Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>

            </select>
            <div id="ddisease">
                <h2 class="ddisease">Please write down if you had any previous diseases:</h2>
                <input class="dddisease" type="text" name="disease"> <br>

            </div>


            <button class="dsubmit">Register To Donate Blood</button>
            <br><br>
        </form>
    </div>


</body>

</html>