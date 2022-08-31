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

    <div class="aboutusback">
        <div class="aboutus">
            <h1>About Us:</h1>
            <br>
            <h6>
                This website helps the users to
                keep the information of different blood types and how they can be utilized in the
                blood bank to help several clients that are in need. This project will have a login
                system which will help different admins to sign in separately. Admins and clients
                will use their own personal email address to sign in or register. New clients can use
                the Register system to register themselves as blood doners. Admins will receive
                requests from both the patients and clients for blood bags. Then they will use
                Records to search which blood type and how many bags are needed and extract
                them accordingly and send to the patients in need. Admins will monitor the entire
                system whereas clients will only use the webpage to donate blood.
                <br>
                <br>
                Donating blood is a vital way to help protect
                lives which is why it
                ’s extremely important
                to donate blood in this day and age. A single
                donation can save someone’s life and can
                benefit the community to a great extent
                .
                This organization is a trusted place by
                thousands of users who are assisted every day
                through this website. This website will have
                a login system which will help different
                admins to sign in separately. Admins and
                clients will use their own personal email
                address to sign in or register. New clients can
                use the Register system to register
                themselves as blood doners. Admins will
                receive requests from both the patients and
                clients for blood bags. Then they will use
                Records to search which blood type and how
                many bags are needed and extract them
                accordingly and send to the patients in need.
                Admins will monitor the entire system
                whereas clients will only use the webpage to
                donate blood.
            </h6>
            <br>

        </div>
    </div>


</body>

</html>