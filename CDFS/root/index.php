<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content ="width=device-width, initial-scale=1.0">
        <!-- link for google font icon -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward_ios" />
        <!-- link for carosel -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <link rel="icon" type="image/x-icon" href="./Image/Radar.png">
        <link rel="stylesheet" href="uni.css"> 
        <link rel="stylesheet" href="./Miscalleanous/style.css">
        <title>CDFS</title>
        <style>
            p#Pages{
                color: #b2d4b6;
                border-bottom: 4px #728370 solid;
                margin: 0;
                padding: 0.5vw;
                font-size: 2vw;
                cursor: pointer;
            }

            p#Pages:hover{
                background-color: #849782;
            }
        </style>
    </head>
    <body>
        <div style = "width: 100%; height: 7vh; display: flex; background-color: #b2d4b6; border-bottom: 7.5px #728370 solid; position: fixed; z-index: 300;">
            <a href = "./index.php" style = "display: flex;"><img src = "./Image/Logo.png" style = "padding-left: 0.5vmin; cursor: pointer;"></a>
            <div style = "width: 100%; height: 100%; display: flex; flex-direction: row-reverse;">
                <img src = "./Image/Drop.png" style = "padding: 0.7vmin; cursor: pointer;" onclick = "menu()">
            </div>
        </div>

        <div id = "Menu" style = "position: fixed; z-index: 200; display: none; right: 0vw; flex-direction: column; text-align: center; width: 15vw; top: 7.75vh; background-color: #4b514a; border-bottom: 7.5px #728370 solid; border-left: 7.5px #728370 solid;">
            <p id = "Pages" onclick = "subMenu(this)">Profile</p>
            <p id = "Pages" onclick = "subMenu(this)">Info</p>
            <p id = "Pages" onclick = "subMenu(this)">Disaster Relief</p>
            <p id = "Pages" onclick = "subMenu(this)">Statistics</p>
            <p id = "Pages" onclick = "subMenu(this)">Organizations</p>
            <p id = "Pages" onclick = "subMenu(this)">Donors</p>
            <p id = "Pages" onclick = "subMenu(this)">Help</p>
        </div>

        <div id = "SubMenu" style = "position: fixed; z-index: 200; display: none; right: 15.4vw; flex-direction: column; text-align: center; width: 15vw; top: 7.75vh; background-color: #4b514a; border-bottom: 7.5px #728370 solid; border-left: 7.5px #728370 solid;">
            <p id = "Pages" onclick = "subMenu2(this)">Login</p>
            <p id = "Pages" onclick = "subMenu2(this)">Sign Up</p>
            <p id = "Pages" onclick = "subMenu2(this)">Profile</p>
        </div>

        <div id = "SubMenu2" style = "position: fixed; z-index: 200; display: none; right: 15.4vw; flex-direction: column; text-align: center; width: 15vw; top: 19.75vh; background-color: #4b514a; border-bottom: 7.5px #728370 solid; border-left: 7.5px #728370 solid; border-top: 7.5px #728370 solid;">
            <p id = "Pages" onclick = "subMenu2(this)">Eligibility</p>
            <p id = "Pages" onclick = "subMenu2(this)">Relief Form</p>
        </div>

        <div id = "SubMenu3" style = "position: fixed; z-index:200; display: none; right: 15.4vw; flex-direction: column; text-align: center; width: 15vw; top: 26vh; background-color: #4b514a; border-bottom: 7.5px #728370 solid; border-left: 7.5px #728370 solid; border-top: 7.5px #728370 solid;">
            <p id = "Pages" onclick = "subMenu2(this)">Statistics Info</p>
            <p id = "Pages" onclick = "subMenu2(this)">Statistics Input</p>
        </div>

    <section class="header">
        <div class="text-box">
            <h1>Caribbean Disaster Finance and Statistics</h1>
            <p>Strengthening Resilience, Guiding Recovery with Data-Driven Solutions.</p>
            <a href="" class="hero-btn">Learn more about our mission</a>

        </div>

    </section>

    <section class="mission">
        <h1>Our Mission </h1>
        <p>Our mission is to empower Caribbean communities by providing a comprehensive platform 
        for identifying and addressing the impacts of natural disasters. 
        Through innovative use of technology and real-time data integration, we aim to offer localized 
        and regional statistics that guide informed decision-making, support disaster relief efforts, 
        and enable direct communication with relevant authorities. By creating user-friendly interfaces 
        for citizens, administrators, and stakeholders, we strive to streamline data collection, enhance 
        collaboration, and open pathways for timely assistance. This initiative seeks to build a resilient 
        future for the Caribbean by leveraging unified databases and cutting-edge tools to ensure accurate, 
        accessible, and actionable insights</p>
    </section>

    <div class="carosel">
        <div class="slider-intro">
            <h1>Natural Disaster Overview</h1>
            <p>Take a look at different natural disasters that impact the Caribbean.</p>
        </div>
            <div class="container swiper">
                <div class="card-wrapper">
                    <ul class="card-list swiper-wrapper"> 
                        <li class="card-item swiper-slide">
                            <a href="./Info/Information.php" class="card-link">
                                <img src="Image/earthquake.jpg" alt="earthquake" class="card-image">
                                <p class="badge">Earthquakes</p>
                                <h2 class="card-title">Sudden and intense shaking of the ground caused by movements along lines beneath the Earth’s surface. They 
                                can lead to structural damage and tsunamis.</h2>
                                <button class="card-button material-symbols-outlined">arrow_forward_ios</button> 
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="Image/flooding.jpg" alt="flood" class="card-image">
                                <p class="badge flood">Floods</p>
                                <h2 class="card-title">An overflow of water that submerges land, often caused by heavy rainfall, storm surges, or blocked drainage systems. 
                                Flooding can severely impact agriculture, infrastructure, and homes.</h2>
                                <button class="card-button material-symbols-outlined">arrow_forward_ios</button> 
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="Image/hurricane.jpg" alt="hurricane" class="card-image">
                                <p class="badge hurr">Hurricanes</p>
                                <h2 class="card-title">A powerful tropical storm with strong winds, heavy rain, and storm surges.  
                                They are a common, devastating phenomenon known for causing widespread destruction.</h2>
                                <button class="card-button material-symbols-outlined">arrow_forward_ios</button> 
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="Image/landslide.jpg" alt="lslide" class="card-image">
                                <p class="badge lslide">Landslides</p>
                                <h2 class="card-title">The movement of rock, earth, or debris down a slope, often triggered by heavy rain, earthquakes, or volcanic activity. 
                                    Landslides can destroy roads, homes, and farmlands.</h2>
                                <button class="card-button material-symbols-outlined">arrow_forward_ios</button> 
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="Image/rain.jpg" alt="rain" class="card-image">
                                <p class="badge rain">Torrential rains</p>
                                <h2 class="card-title">Intense and prolonged rainfall that can lead to flooding, landslides, and soil erosion. 
                                Torrential rains in the Caribbean often accompany tropical storms and hurricanes, exacerbating their impact.</h2>
                                <button class="card-button material-symbols-outlined">arrow_forward_ios</button> 
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="Image/volcano.jpg" alt="volcano" class="card-image">
                                <p class="badge volcano">Volcaic Activity</p>
                                <h2 class="card-title">Eruptions or seismic activity from the region's active volcanoes. 
                                Volcanic activity can cause lava flows, ash clouds, and significant environmental and economic disruption.</h2>
                                <button class="card-button material-symbols-outlined">arrow_forward_ios</button> 
                            </a>
                        </li>swiper-slide-button 
                    </ul>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-slide-button swiper-button-prev"></div>
                    <div class="swiper-slide-button swiper-button-next"></div>
                </div>

            </div>
    </div>
    <section class="map">
        <h1>Interactive Map!</h1>
        <p>Coming Soon!</p>
    </section>

        <!-- link for carosel func -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="./Miscalleanous/script.js"></script>

        <script> 
            function menu(){
                if (document.querySelector("#Menu").style.display == "none"){
                    document.querySelector("#Menu").style.display = "flex";
                }
                else if(document.querySelector("#Menu").style.display == "flex"){
                    document.querySelector("#Menu").style.display = "none";
                }
            }

            function subMenu(Menu){
                if(Menu.innerHTML == "Info"){
                    window.location.href = "./Info/Information.php";
                }
                else if (Menu.innerHTML == "Profile"){
                    document.querySelector("#SubMenu").style.display = "flex";
                    setTimeout(function(){document.querySelector("#SubMenu").style.display = "none";}, 1300);
                }
                else if (Menu.innerHTML == "Disaster Relief"){
                    document.querySelector("#SubMenu2").style.display = "flex";
                    setTimeout(function(){document.querySelector("#SubMenu2").style.display = "none";}, 1300);
                }
                else if (Menu.innerHTML == "Statistics"){
                    document.querySelector("#SubMenu3").style.display = "flex";
                    setTimeout(function(){document.querySelector("#SubMenu3").style.display = "none";}, 1300);
                }
                else if (Menu.innerHTML == "Organizations"){
                    window.location.href = "./Organizations/Organizations.php";
                }
                else if (Menu.innerHTML == "Help"){
                    window.location.href = "./Help/HelpGOVInterface.php";
                }
                else if (Menu.innerHTML == "Donors"){
                    window.location.href = "./Donation/Donors.php";
                }
            }

            function subMenu2(Menu){
                if(Menu.innerHTML == "Login"){
                    window.location.href = "./Access/Login/Login.php";
                }
                else if (Menu.innerHTML == "Sign Up"){
                    window.location.href = "./Access/Sign Up/SignUp.php";
                }
                else if (Menu.innerHTML == "Profile"){
                    window.location.href = "./Access/Profile/Profile.php";
                }
                else if (Menu.innerHTML == "Eligibility"){
                    window.location.href = "./Eligibility/Eligible Info/Eligible.php";
                }
                else if (Menu.innerHTML == "Relief Form"){
                    window.location.href = "./Eligibility/ReliefForm/ReliefForm.php";
                }
                else if (Menu.innerHTML == "Statistics Info"){
                    window.location.href = "./Statistics/Statistics Info/StatInfo.php";
                }
                else if (Menu.innerHTML == "Statistics Input"){
                    window.location.href = "./Statistics/Statistics Input/StatInput.php";
                }
            }
        </script>
    </body>
</html>