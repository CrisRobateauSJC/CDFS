<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/x-icon" href="./Image/Radar.png">
        <link rel="stylesheet" href="../../../uni.css"> 
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

            p{
                font-size:20px
            }

            div-a{
                text-align: right;
            }
        </style>
    </head>
    <body>
        <div style = "width: 100%; height: 7vh; display: flex; background-color: #b2d4b6; border-bottom: 7.5px #728370 solid; position: fixed; z-index: 100;">
            <a href = "../../../index.php" style = "display: flex;"><img src = "./Image/Logo.png" style = "padding-left: 0.5vmin; cursor: pointer;"></a>
            <div style = "width: 100%; height: 100%; display: flex; flex-direction: row-reverse;">
                <img src = "./Image/Drop.png" style = "padding: 0.7vmin; cursor: pointer;" onclick = "menu()">
            </div>
        </div>

        <div id = "Menu" style = "position: fixed; display: none; right: 0vw; flex-direction: column; text-align: center; width: 15vw; top: 7.75vh; background-color: #4b514a; border-bottom: 7.5px #728370 solid; border-left: 7.5px #728370 solid;">
            <p id = "Pages" onclick = "subMenu(this)">Profile</p>
            <p id = "Pages" onclick = "subMenu(this)">Info</p>
            <p id = "Pages" onclick = "subMenu(this)">Disaster Relief</p>
            <p id = "Pages" onclick = "subMenu(this)">Statistics</p>
            <p id = "Pages" onclick = "subMenu(this)">Organizations</p>
            <p id = "Pages" onclick = "subMenu(this)">Donors</p>
            <p id = "Pages" onclick = "subMenu(this)">Help</p>
        </div>

        <div id = "SubMenu" style = "position: fixed; display: none; right: 15.4vw; flex-direction: column; text-align: center; width: 15vw; top: 7.75vh; background-color: #4b514a; border-bottom: 7.5px #728370 solid; border-left: 7.5px #728370 solid;">
            <p id = "Pages" onclick = "subMenu2(this)">Login</p>
            <p id = "Pages" onclick = "subMenu2(this)">Sign Up</p>
            <p id = "Pages" onclick = "subMenu2(this)">Profile</p>
        </div>

        <div id = "SubMenu2" style = "position: fixed; display: none; right: 15.4vw; flex-direction: column; text-align: center; width: 15vw; top: 19.75vh; background-color: #4b514a; border-bottom: 7.5px #728370 solid; border-left: 7.5px #728370 solid; border-top: 7.5px #728370 solid;">
            <p id = "Pages" onclick = "subMenu2(this)">Eligibility</p>
            <p id = "Pages" onclick = "subMenu2(this)">Relief Form</p>
        </div>

        <div id = "SubMenu3" style = "position: fixed; display: none; right: 15.4vw; flex-direction: column; text-align: center; width: 15vw; top: 26vh; background-color: #4b514a; border-bottom: 7.5px #728370 solid; border-left: 7.5px #728370 solid; border-top: 7.5px #728370 solid;">
            <p id = "Pages" onclick = "subMenu2(this)">Statistics Info</p>
            <p id = "Pages" onclick = "subMenu2(this)">Statistics Input</p>
        </div>

        <div style = "width: 100%; height: 7vh;"></div>

        <section class="information" style=margin:10px;>
            <h3>About CDFS</h3>
            <p>The Caribbean Disaster, Finance and Statistics program exists to record data on the damage 
                caused by natural disasters in the Caribbean, and assist in the recovery of affected countries' 
                populations. This program also exists to provide an avenue for citizens that have lost property 
                or belongings to request financial assistance from their local government. Government workers 
                can also utilize this program to assess the number of aid requests, and locate areas where 
                assistance is most needed.
            </p>

            <br>

            <div-a>
            <h3>Natural Disasters</h3>
            <p>The Caribbean region is affected by a variety of natural disasters, each with their own dangers 
                to human life and property. As islands make up the majority of the region, the effects of these 
                disasters can be even more severe than they would be on the mainland. Catastrophes such as 
                hurricanes and floods can be predicted and prepared for, but other disasters such as earthquakes 
                or mudslides may happen suddenly, without warning. Regardless of the time a country may have to 
                prepare, the aftermath of a disaster can be a difficult time for many.
            </p>
            </div-a>

            <br>

           <h3>Finance</h3>
            <p>Donations collected through the CDFS website are distributed to governments of countries recently 
                affected by confirmed disasters. Data from the aid request feature is also shared, to allow for 
                accurate allocation of these funds, as well as government funds allocated for disaster relief.
            </p>

            <br>

            <div-a>
            <h3>Funding</h3>
            <p>Funding for the CDFS program is provided by CARICOM. Donations received by CDFS go directly to 
                disaster victims in afflicted countries.
            </p>
            </div-a>

        </section>


        
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
                    window.location.href = "./Information.php";
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
                    window.location.href = "../../Organizations/Organizations.php";
                }
                else if (Menu.innerHTML == "Help"){
                    window.location.href = "../../Help/HelpGOVInterface.php";
                }
                else if (Menu.innerHTML == "Donors"){
                    window.location.href = "../../Donation/Donors.php";
                }
            }

            function subMenu2(Menu){
                if(Menu.innerHTML == "Login"){
                    window.location.href = "../../Access/Login/Login.php";
                }
                else if (Menu.innerHTML == "Sign Up"){
                    window.location.href = "../../Access/Sign Up/SignUp.php";
                }
                else if (Menu.innerHTML == "Profile"){
                    window.location.href = "../../Access/Profile/Profile.php";
                }
                else if (Menu.innerHTML == "Eligibility"){
                    window.location.href = "../../Eligibility/Eligible Info/Eligible.php";
                }
                else if (Menu.innerHTML == "Relief Form"){
                    window.location.href = "../../Eligibility/ReliefForm/ReliefForm.php";
                }
                else if (Menu.innerHTML == "Statistics Info"){
                    window.location.href = "../../Statistics/Statistics Info/StatInfo.php";
                }
                else if (Menu.innerHTML == "Statistics Input"){
                    window.location.href = "../../Statistics/Statistics Input/StatInput.php";
                }
            }
        </script>
    </body>
</html>