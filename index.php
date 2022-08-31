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
    <div class="background">

        <!-- <img src="img/dark-purple-background.jpg" class="backvid" alt=""> -->
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

        <div class="LSF">
            <h1>LifeSource Foundation</h1>
        </div>

        <div class="main">
            <div class="floating">
                <!-- <div class="float_background"> -->

                <div class="longline"></div>
                <div class="wybt">
                    <h1>Curious About Your Blood Type? Click On Yours To Find Out More.</h1>
                </div>

                <div class="Aplus">
                    <a href="#Apositive"> <img src="img/pngwing.com (7).png" alt="Aplus" height="140px"
                            width="100px"></a>
                </div>

                <div class="Aminus">
                    <a href="#Anegative"> <img src="img/pngwing.com (2).png" alt="Aplus" height="140px"
                            width="100px"></a>
                </div>

                <div class="Bplus">
                    <a href="#Bpositive"> <img src="img/pngwing.com (8).png" alt="Aplus" height="140px"
                            width="100px"></a>
                </div>

                <div class="Bminus">
                    <a href="#Bnegative"> <img src="img/pngwing.com (3).png" alt="Aplus" height="140px"
                            width="100px"></a>
                </div>

                <div class="ABplus">
                    <a href="#ABpositive"> <img src="img/pngwing.com (9).png" alt="Aplus" height="140px"
                            width="100px"></a>
                </div>

                <div class="ABminus">
                    <a href="#ABnegative"> <img src="img/pngwing.com (5).png" alt="Aplus" height="140px"
                            width="100px"></a>
                </div>

                <div class="Oplus">
                    <a href="#Opositive"> <img src="img/pngwing.com (6).png" alt="Aplus" height="140px"
                            width="100px"></a>
                </div>

                <div class="Ominus">
                    <a href="#Onegative"> <img src="img/pngwing.com (4).png" alt="Aplus" height="140px"
                            width="100px"></a>
                </div>

                <div class="donatenow"><a href="#">DONATE NOW</a></div>
                <!-- </div> -->

            </div>
            <!-- articles start -->

            <div class="site-container">
                <div class="article-container">

                    <article class="article-card">

                        <div class="article-content">
                            <a
                                href="https://www.pghcitypaper.com/pittsburgh/donating-blood-can-improve-your-mental-health/Content?oid=22215855">
                                <figure class="article-image">
                                    <img src="img/covidBloodDonor-1213554544-770x553-1-650x428.jpg" alt="" height="100%"
                                        width="100%">
                                </figure>
                            </a>
                            <h3 class="card-title">Donating Blood Can Improve Your Mental Health</h3>
                            <p class="card-excerpt">"Volunteering to give blood is a simple way to
                                improve your health and happiness while helping those in need. Studies
                                have shown that volunteering can combat depression, increase self-confidence,
                                create a sense of fulfillment, and maybe most importantly, provide a sense of
                                purpose. This is due in great part to the “happiness effect” you experience
                                when your brain releases dopamine — a type of neurotransmitter that influences mood."
                            </p>
                        </div>
                    </article>

                    <article class="article-card">

                        <div class="article-content">
                            <a href="https://www.medicalnewstoday.com/articles/can-you-donate-blood-if-you-have-copd">
                                <figure class="article-image">
                                    <img src="img/donors-giving-blood-medical-hospital-collection-volunteers-characters-sitting-chair-donating-flat-vector-illustration-white-171326669.jpg"
                                        alt="" height="100%" width="100%">
                                </figure>
                            </a>
                            <h3 class="card-title">Can a person donate blood if they have COPD?</h3>
                            <p class="card-excerpt">"Chronic obstructive pulmonary disease (COPD)
                                does not prevent a person from donating blood, as long as they are
                                asymptomatic. Once the disease progresses and a person requires
                                medication to manage the symptoms, they will not be able to give blood."</p>
                        </div>
                    </article>

                    <article class="article-card">

                        <div class="article-content">
                            <a
                                href="https://unb.com.bd/m/category/Bangladesh/quantum-foundation-honours-300-voluntary-blood-donors/83461">
                                <figure class="article-image">
                                    <img src="img/illustration-people-donating-blood_23-2148250597.jpg" alt=""
                                        height="100%" width="100%">
                                </figure>
                            </a>
                            <h3 class="card-title">Quantum Foundation Honours 300 Voluntary Blood Donors</h3>
                            <p class="card-excerpt"> "According to the Quantum Foundation, only 26 percent of the annual
                                500,000 units of blood demand were met by voluntary, non-commercial blood donations in
                                Bangladesh.
                                In Bangladesh, only 0.4 people of a thousand donate blood voluntarily, which is 113 in
                                Switzerland and 60-80 in the countries in Europe.
                                The country could meet its annual need if only two of a thousand people donate blood."
                            </p>
                        </div>
                    </article>

                    <article class="article-card">

                        <div class="article-content">
                            <a
                                href="https://www.gettysburgtimes.com/life_entertainment/columns/article_18584501-7635-5fc2-96ec-b0ba570fe18b.html">
                                <figure class="article-image">
                                    <img src="img/images.png" alt="" height="100%" width="100%">
                                </figure>
                            </a>
                            <h3 class="card-title">Giving blood, help others and yourself</h3>
                            <p class="card-excerpt">"The benefit comes from lowering the level of iron
                                in the blood. This finding is backed up by similar studies in the Journal of
                                Transfusion and the Journal of the American Medical Association, which both show
                                strong evidence that blood donation lowers iron stores in the blood reducing blood
                                viscosity, thus placing less stress on the blood vessels and slowing blood clotting
                                that can cause heart attack and stroke. Wow!"</p>
                        </div>
                    </article>
                    <!-- articles end -->



                </div>
            </div>

            <div class="money">
                <h1>Would like to support our organization by contributing? If so then click on the link below:</h1>
                <a href="money.php">Your contribution means a lot to us!</a>
            </div>

            <!-- facts about your blood start -->
            <div class="factstext">
                <br>
                <h1>What Are The Rarest Blood Types?</h1>
                <br>
                <p>There are eight main blood types but some are rarer than others. The list below shows the
                    percentage of donors with each blood type:</p>
                <br>
                <li>O positive: 35%</li>
                <li>O negative: 13%</li>
                <li>A positive: 30%</li>
                <li>A negative: 8%</li>
                <li>B positive: 8%</li>
                <li>B negative: 2%</li>
                <li>AB positive: 2%</li>
                <li>AB negative: 1%</li>
                <br>
                <br>
                <h1>About Different Blood Types</h1>
                <br>
                <P>Find out more about your blood type.</P>

                <h6 id="Opositive">---</h6>
                <br>
                <h2>O Positive:</h2>
                <br>
                <p>
                    Your blood type is determined by genes inherited from your parents.
                    Whether your blood type is rare, common or somewhere in between,
                    your donations are vital in helping save and improve lives.
                    You can register online to give blood
                    <br>
                    How common is O positive blood?
                    <br>
                    1 in 3 donors is O positive O positive is the most
                    common blood type as around 35% of our blood donors have it.
                    The second most common blood type is A positive (30%),
                    while AB negative (1%) is the rarest.
                    <br>
                    Who can receive O positive blood?
                    <br>
                    Anyone with an Rh positive blood type
                    <br>
                    Anyone with an Rh positive blood type can receive O positive red blood cells
                    so that's A positive, B positive and AB positive as well as O positive.
                    That means 3 in 4 people, or around 76% of the population,
                    can benefit from your donation.
                    <br>
                    What blood can O positive people receive?
                    <br>
                    Blood from O positive and O negative donors
                    <br>
                    People with O positive blood can receive donations from:
                    <br>
                    O positive blood donors
                    O negative blood donors
                    <br>
                    Why is O positive blood important?
                    <br>
                    It’s always in demand
                    <br>
                    O positive is the blood type most commonly requested by hospitals so we need to make sure there is a
                    steady supply.
                </p>
                <br>

                <h6 id="Onegative">---</h6>
                <br>
                <h2>O Negative:</h2>
                <br>
                <p>

                    Your blood type is determined by genes inherited from your parents.
                    Whether your blood type is rare, common or somewhere in between,
                    your donations are vital in helping save and improve lives.
                    <br>
                    How rare is O negative blood?
                    <br>
                    Around 1 in 7 people have O negative blood.
                    Around 13% of our blood donors have O negative blood.
                    In comparison, 35% of donors have O positive blood.
                    <br>
                    Are you O negative?
                    <br>
                    As an O negative donor you are the lifeblood of the emergency services. You are a First Responder.
                    <br>
                    Who can receive O negative blood?
                    <br>
                    Everyone can receive O negative red blood cells.
                    O negative donors are often called 'universal donors' because anyone
                    can receive the red blood cells from their donations.
                    Although about 8% of the population has O negative blood, it accounts
                    for around 13% of hospital requests for red blood cells.
                    <br>
                    What blood can O negative people receive?
                    <br>
                    Only O negative blood. People with O negative blood can only receive red cell donations from O
                    negative donors.
                    <br>
                    Why is O negative blood important?
                    <br>
                    It's used in emergencies. O negative blood is often called the 'universal blood type'
                    because people of any blood type can receive it. This makes it vitally important
                    in an emergency or when a patient's blood type is unknown.
                </p>
                <br>

                <h6 id="Apositive">---</h6>
                <br>
                <h2>A Positive:</h2>
                <br>
                <p>
                    Your blood type is determined by genes inherited from your parents.
                    Whether your blood type is rare, common or somewhere in between, your
                    donations are vital in helping save and improve lives.
                    <br>
                    How rare is A positive blood?
                    <br>
                    1 in 3 donors is A positive
                    <br>A
                    round 30% of donors have A positive blood, making it the second most common blood type after O
                    positive (36%).
                    <br>
                    Who can receive A positive blood?
                    <br>
                    A positive and AB positive people.
                    <br>
                    A positive red blood cells can be given to people with:
                    <br>
                    A positive blood,
                    AB positive blood
                    <br>
                    What blood can A positive people receive?
                    <br>
                    Groups A and O
                    <br>
                    People with A positive blood can receive donations from:
                    <br>
                    A positive donors
                    A negative donors
                    O negative donors
                    O positive donors
                    <br>
                    Why is A positive blood important?
                    <br>
                    It's always in demand. A positive makes up almost a third of
                    requests for blood from hospitals so we need to maintain a regular supply.
                    Platelets from A positive donations are also important. Last year more
                    A positive platelets were issued to hospitals than any other blood type.
                </p>
                <br>

                <h6 id="Anegative">---</h6>
                <br>
                <h2>A Negative:</h2>
                <br>
                <p>

                    Your blood type is determined by genes inherited from your parents.
                    Whether your blood type is rare, common or somewhere in between,
                    your donations are vital in helping save and improve lives.
                    <br>
                    Is A negative blood rare?
                    <br>
                    1 in 13 donors is A negative.
                    Around 8% of donors have A negative blood.
                    In comparison, 30% of donors have A positive blood.
                    <br>
                    Who can receive A negative blood?
                    <br>
                    Group A and AB people
                    <br>
                    A negative red blood cells can be used to treat people with:
                    <br>
                    A negative blood
                    A positive blood
                    AB positive blood
                    AB negative blood
                    <br>
                    What blood can A negative people receive?
                    <br>
                    A negative and O negative
                    <br>
                    People with A negative blood can receive donations from:
                    <br>
                    A negative donors
                    O negative donors
                    Why is A negative blood important?
                    Anyone can receive A negative platelets
                    <br>
                    A negative red blood cells can be used to treat around 40% of the population.
                    However, A negative platelets are particularly important because they can be
                    given to people from all blood groups. That's why A negative platelets are
                    called the 'universal platelet type'.
                </p>
                <br>

                <h6 id="Bpositive">---</h6>
                <br>
                <h2>B Positive:</h2>
                <br>
                <p>
                    Your blood type is determined by genes inherited from your parents.
                    Whether your blood type is rare, common or somewhere in between, your
                    donations are vital in helping save and improve lives.
                    <br>
                    How rare is B positive blood?
                    <br>
                    1 in 13 donors is B positive This means only 8% of donors have B positive blood.
                    In total, 10% of people belong to blood group B, making it one of the least common blood groups.
                    <br>
                    Who can receive B positive blood?
                    <br>
                    B positive and AB positive people
                    <br>
                    B positive red blood cells can be given to people with:
                    <br>
                    B positive blood
                    AB positive blood
                    <br>
                    What blood can B positive people receive?
                    <br>
                    Blood from groups B and O
                    <br>
                    People with B positive blood can receive donations from:
                    <br>
                    B positive donors
                    B negative donors
                    O negative donors
                    O positive donors
                    <br>
                    Why is B positive blood important?
                    <br>
                    It helps treat sickle cell disease
                    br
                    B positive is an important blood type for treating people with sickle
                    cell disease and thalassaemia who need regular transfusions.These conditions
                    affect South Asian and Black communities where B positive blood is more common.
                    There is currently a very high demand for B positive donations with the subtype Ro.
                    Approximately 2% of donors have this rare subtype and we need more.
                </p>
                <br>

                <h6 id="Bnegative">---</h6>
                <br>
                <h2>B Negative:</h2>
                <br>
                <p>
                    Your blood type is determined by genes inherited from your parents. Whether your
                    blood type is rare, common or somewhere in between, your donations are vital
                    in helping save and improve lives.
                    <br>
                    How rare is B negative blood?
                    <br>
                    1 in 50 donors is B negative
                    B negative blood is one of the rarest blood types as just 2% of our blood donors have it.
                    In comparison, 36% of donors have O positive blood which is the most common type.
                    <br>
                    Who can receive B negative blood?
                    <br>
                    Group B and AB people
                    Around 1 in 8 people can receive red blood cells from B negative donors.
                    <br>
                    B negative blood can help people who are:
                    <br>
                    B negative
                    B positive
                    AB negative
                    AB positive
                    <br>
                    What blood can B negative people receive?
                    <br>
                    B negative and O negative blood
                    <br>
                    B negative people can receive red blood cells from:
                    <br>
                    B negative donors
                    O negative donors
                    Why is B negative blood important?
                    It’s one of the rarest blood types
                    <br>
                    B negative donors are immensely important to our lifesaving work.
                    As B negative is one of the rarest blood types, it is hard to find
                    new donors and to ensure we always collect enough blood.
                    We always need more B negative donors and rely heavily on the
                    support and commitment of existing donors to ensure patients receive the blood they need.
                </p>
                <br>

                <h6 id="ABpositive">---</h6>
                <br>
                <h2>AB Positive:</h2>
                <br>
                <p>

                    Your blood type is determined by genes inherited from your parents.
                    Whether your blood type is rare, common or somewhere in between,
                    your donations are vital in helping save and improve lives.
                    <br>
                    How rare is AB positive blood?
                    <br>
                    1 in 50 donors is AB positive
                    Just 2% of donors have AB positive blood making it one of the rarest blood types in the country.
                    <br>
                    Who can receive AB positive blood?
                    <br>
                    Only AB positive people
                    AB positive red blood cells can only be used to treat people with AB positive blood.
                    <br>
                    What blood can AB positive people receive?
                    <br>
                    All blood types are safe
                    <br>
                    People with AB positive blood can safely receive red blood cells
                    from any blood type. This means that demand for AB positive red
                    blood cells is at its lowest level in a decade.
                    <br>
                    Why is AB positive blood important?
                    <br>
                    It's rare
                    Although the need for AB positive red blood cells is falling, the demand for AB positive plasma
                    hasn’t changed.
                    To avoid wastage while ensuring the correct balance of plasma and red cells from AB positive donors,
                    we manage donations differently to other blood types.
                    Fresh frozen plasma is only produced from male donations.
                    This is because female donors (especially those who have been pregnant) can develop antibodies that,
                    while no danger to themselves, can prove life threatening to patients transfused with their plasma.
                    We can generally meet the demand for frozen plasma and most red cells from our male donors, which is
                    good news.
                    We encourage our male donors to donate as frequently as possible but ask that female donors wait to
                    donate until contacted directly by us.
                    There are occasions when demand for AB positive rises.
                    During these times we contact our female donors directly and rely on their support to ensure
                    patients continue to receive the blood and blood products they need
                </p>
                <br>

                <h6 id="ABnegative">---</h6>
                <br>
                <h2>AB Negative:</h2>
                <br>
                <p>

                    Your blood type is determined by genes inherited from your parents.
                    Whether your blood type is rare, common or somewhere in between,
                    your donations are vital in helping save and improve lives.
                    <br>
                    How rare is AB negative blood?
                    <br>
                    1 in 100 donors is AB negative
                    AB negative is the rarest blood type in the ABO blood group,
                    accounting for just 1% of our blood donors.
                    In total only 3% of donors belong to the AB blood group.
                    <br>
                    Who can receive AB negative blood?
                    <br>
                    AB negative and AB positive people
                    <br>
                    You can receive AB negative red blood cells if you are:
                    br
                    AB negative
                    AB positive
                    <br>
                    What blood can AB negative people receive?
                    Any Rh negative blood type
                    <br>
                    People with AB negative blood can receive donations from:
                    <br>
                    AB negative donors
                    O negative donors
                    A negative donors
                    B negative donors
                    <br>
                    Find out how the RH system works
                    <br>
                    Why is AB negative blood so important?
                    <br>
                    It’s the rarest blood type
                    AB negative donations are extremely versatile, but because it is the rarest blood type finding new
                    donors can be a challenge.
                    Plasma from AB negative donations can help treat patients of all blood types, however fresh frozen
                    plasma is only produced from male donations. This is because female donors (especially those who
                    have been pregnant) can develop antibodies that, while no danger to themselves, can prove life
                    threatening to patients transfused with their plasma.
                    To avoid waste and to achieve the balance of plasma and red cells required by patients, we manage AB
                    negative donations differently to other blood groups.
                    We encourage our male donors to donate as frequently as possible while asking female donors to wait
                    to donate until contacted directly by us.
                    As the scarcest blood type, relatively small changes in the number of donations collected or
                    requested by hospital can have a dramatic and immediate effect on the amount of AB negative we
                    store.
                    At these times, we rely on the support of all AB negative donors to help prevent waste and ensure
                    patients continue to receive the blood and blood products needed to save and improve lives.
                    We are looking for AB negative blood donors to switch to giving platelets. Each time you donate your
                    could help up to 3 adults or 12 children. Find out about donating platelets
                </p>

            </div>
            <!-- facts about your blood ends -->



        </div>

        <!-- Site footer -->
        <footer>
            <div class="content">
                <div class="left box">
                    <div class="upper">
                        <div class="topic">
                            <p>Who are we?</p>
                        </div>
                        <p>This organization is a trusted place by
                            thousands of users who are assisted every day
                            through this website. The process of managing the blood bag that is received
                            from the blood donation events needs a proper and systematic source. The
                            blood bag must be handled with care and treated thoroughly as it is related to
                            someone’s life. The focus is to find the blood donors in an emergency
                            situation and to provide direct link between the donor and the recipient.
                            Rare blood groups are not available all the time at all blood banks
                            and recipients find difficulties to track the right blood donor which
                            is also taken into consideration.
                        </p>
                    </div>
                    <div class="lower">
                        <div class="topic">
                            <p>Contact us</p>
                        </div>
                        <div class="phone">
                            <p>+8801710000000</p>
                        </div>
                        <div class="email">
                            <a href="#"><i class="fas fa-envelope"></i>
                                <p>abc@gmail.com</p>
                            </a>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="middle box">
                    <div class="topic">Our Services</div>
                    <div><a href="SignUp.php">Sign up to become a member</a></div>
                    <div><a href="Login.php">Log in if you're already a member</a></div>
                    <div><a href="patientpanel.php">Donate Blood now</a></div>
                    <div><a href="money.php">I would like to contribute</a></div>
                </div>
                <div class="right box">
                    <div class="topic">
                        <p>Subscribe to us for daily email</p>
                    </div>
                    <form action="#">
                        <input type="text" placeholder="Enter email address">
                        <input type="submit" name="" value="Send">
                    </form>
                </div>
            </div>
            <div class="bottom">
                <p>All rights reserved</p>
            </div>
        </footer>
    </div>




    <script src="index.js"></script>
</body>

</html>