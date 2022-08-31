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
    </div>
    <div class="donate">
        <h1>Donate Blood And Save A Life</h1>
    </div>
    <div class="donorfloating">
        <div class="donorfloatbackground">
            <div class="donortext">
                <h1>TYPES OF BLOOD DONATION</h1>
                <br>
                <p> There are four ways to donate: plasma, platelets, red cells, and whole blood.
                    Those different components in our blood have many uses. During and after a
                    donation, we are able to separate those components, to give a recipient
                    exactly what they need. Keep in mind, the process can vary based on the type
                    of donation. Eligibility varies too. We require certain qualifications to give
                    plasma and platelets, compared to red cells and whole blood. Ask your phlebotomist
                    what you're eligible to donate.</p>
                <br>
                <br>
                <h3>Whole Blood</h3>
                <p>Whole blood donation is the most common and traditional method. A pint of
                    blood is drawn that contains red and white cells, platelets, and plasma.
                    It's mainly used for trauma and surgery. Shelf life is 21-35 days, and
                    you can donate every 56 days. This is the quickest and easiest donation.
                </p>
                <li>Atleast 110 lbs</li>
                <li>Must be atleast 16(with signed parental consent form) or above 17 years old</li>
                <li>Always eat and drink before giving</li>
                <li>Donation process takes around 45 minutes</li>
                <br>
                <h3>Platelets</h3>
                <p>Platelets are small cell fragments in the blood that helps stop or prevent bleeding.
                    It is made in our bone marrow and its shelf life is only 5 days! They are used for
                    surgeries, transplants, and to help cancer patients get through chemo. You can
                    donate every seven days, only at our centers.</p>

                <li>Females must be tested for HLA if they have ever been pregnant</li>
                <li> Must be 17+ years old</li>
                <li>Platelet count must be at least 150 depending on blood volume</li>
                <li>Donation process takes 2 hours</li>
                <br>
                <h3>Plasma</h3>
                <p>Plasma is the liquid portion of your blood that transports water and nutrients
                    to your body's tissues. Donations can last up to 1 year, and are used to help
                    burn victims and those with bleeding disorders. You can donate every 28 days,
                    only at our centers.</p>

                <li>Females must be tested for HLA if they have ever been pregnant</li>
                <li>Must be 17+ years old</li>
                <li>Donation process takes 1.5 hours</li>
                <br>
                <h3>Double Red Cells</h3>
                <p>Double red cells donation is when only red cells are collected, not the
                    other blood components. The donation lasts up to 42 days. Red cells are used
                    for trauma, surgery, anemia, blood loss and disorders. You can donate every
                    112 days, in centers and select mobiles.
                </p>
                <li>Must be 17+ years old</li>
                <li>Hemoglobin must be at 13.3</li>
                <li>Donation process takes 1.5 hours</li>
                <br>
                <br>

                <h1>BLOOD POINTS</h1>
                <br>
                <p>
                <h3>Whole Blood Donations</h3>
                <p>If you are a whole blood, platelet or plasma donor, points are earned on
                    this schedule, per donation, within a calendar year:</p>
                <li>Visit 1 = 100 points</li>
                <li>Visit 2 = 125 points</li>
                <li>Visit 3 = 150 points</li>
                <li>Visit 4 = 175 points</li>
                <br>
                <h3>Double Red Blood Cell Donations</h3>
                <p>If you donate double red blood cells (DRBC), points are earned on this
                    schedule, per donation, within a calendar year:</p>
                <li>DRBC Visit 1 = 200 points</li>
                <li>DRBC Visit 2 = 225 points</li>
                <li>DRBC Visit 3 = 250 points</li>
                <br>
                <h3>Platelet Donations</h3>
                <p>If you are a platelet donor, points are earned on this schedule,
                    per donation, within a calendar year:</p>
                <li>Visit 1 = 100 points x number of components donated</li>
                <li>Visit 2 = 125 points x number of components donated</li>
                <li>Visit 3 = 150 points x number of components donated</li>
                <li>Visit 4+ = 175 points x number of components donated</li>
                <br>
                <h3>Plasma Donations</h3>
                <p>If you are a plasma donor, points are earned on this schedule,
                    per donation, within a calendar year:</p>
                <li>Visit 1 = 100 points x number of components donated</li>
                <li>Visit 2 = 125 points x number of components donated</li>
                <li>Visit 3 = 150 points x number of components donated</li>
                <li>Visit 4 = 175 points x number of components donated</li>
                <br>
                <h3>Bonus Points!</h3>
                <p>In order to incentivize donations when and where we most need
                    them most for patients, we are offering additional points for
                    all donation types according to the following breakdown:</p>
                <li>Center Visit = 50 points</li>
                <li>Appointment Scheduled and Kept = 25 points</li>
                <li>Time of Day (12:00 p.m. - 2:00 p.m., +/- 10 minutes) = 25 points</li>

                </p>
                <br>
                <h1>DONATION REQUIREMENTS & ELIGIBILITY CRITERIA</h1>
                <br>
                <p>
                <h3>Age & Weight:</h3>
                <br>
                <p> To donate blood or platelets, you must be in good general health, weigh
                    at least 110 pounds, and be at least 16 years old. Parental consent is
                    required for blood donation by 16 year olds; 16 year olds are NOT
                    eligible to donate platelets. No parental consent is required for
                    those who are at least 17 years old. If you are 76 or older,
                    you will need your doctor's written approval for blood or
                    platelet donation.</p>
                <br>
                <br>
                <h3>Health:</h3>
                <br>
                <p>Good health means that you feel well and are able to carry
                    out normal daily activities. If you have a chronic medical
                    condition such as diabetes or high blood pressure, you may
                    still be eligible as long as you are receiving treatment
                    to control your condition.</p>
                <br>
                <br>
                <h3>Travel:</h3>
                <p>Travel to areas where mosquito-borne infections are endemic,
                    e.g. malaria, dengue and Zika virus infections, may result
                    in a temporary deferral. Many countries also implemented
                    the policy to defer blood donors with a history of travel
                    or residence for defined cumulative exposure periods in
                    specified countries or areas, as a measure to reduce the
                    risk of transmitting variant Creutzfeldt-Jakob Disease
                    (vCJD) by blood transfusion.</p>
                <br>
                <br>
                <h3>Pregnancy and breastfeeding:</h3>
                <br>
                <p>Following pregnancy, the deferral period should last as
                    many months as the duration of the pregnancy. It is not
                    advisable to donate blood while breast-feeding. Following
                    childbirth, the deferral period is at least 9 months
                    (as for pregnancy) and until 3 months after your baby
                    is significantly weaned (i.e. getting most of his/her
                    nutrition from solids or bottle feeding)</p>
                <br>
                <br>
                <h3>What Conditions Would Make You Ineligible to Be a Donor?</h3>
                <br>
                <p>You will not be eligible to donate blood or platelets if you:</p>
                <li>Have tested positive for hepatitis B or hepatitis C, lived
                    with or had contact in the past 12 months with anyone who
                    has hepatitis B or symptomatic hepatitis C</li>
                <li>Had a tattoo in the past 3 months or received a blood
                    transfusion (except with your own blood) in the past 3 months</li>
                <li>Have ever had a positive test for the AIDS virus.</li>
                <li>Have used injectable drugs, including anabolic steroids,
                    unless prescribed by a physician in the past 3 months.</li>
                <li>Have traveled in the past 3 months, or lived in the past three
                    years, in an area where malaria is endemic.</li>
                <li>You must not donate blood If you do not meet the
                    minimum haemoglobin level for blood Donation.
                </li>
                <li>You cannot donate if you have a cold, flu, sore
                    throat, cold sore, stomach bug or any other infection.</li>
                <br>
                </p>
                <br>
                <h1>PATIENT INFO</h1>
                <p>The information we need from patients before blood donation are:</p>
                <li>Age</li>
                <li>Weight</li>
                <li>Gender</li>
                <li>Previous Diseases</li>
                <Li>Eligibility Criteria</Li>
                <br>
                <p></p>
                <br>
            </div>
            <br>
            <br>
            <a href="donationform.php" class="readytodonate">I Am Ready To Donate</a>
            <br>
            <a href="recieveform.php" class="readytorecieve">I Am Ready To Recieve</a>


        </div>
    </div>
    </div>
</body>

</html>