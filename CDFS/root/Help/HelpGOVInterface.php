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
            button#Table{
                height: 8vh; 
                width: 12vw; 
                border: 8px #90b493 solid; 
                font-family: NordHead;  
                color: #b2d4b6;
                background-color: #4b514a;
                font-size: 1.5vw;
            }

            button#Table:hover{
                background-color: #849782;
            }
            p#Format{
                margin: 0;
                width: 20%;
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

        <div style = "width: 100%; height: 8vh;"></div>
        <div id = "GOV" style = "margin-top: 2vh;">
            <div style = "display : flex; flex-direction: row-reverse;">
                <button id = "Table" style = "margin-right: 5vw; margin-left: 0.5vw; "> Completed </button>
                <button id = "Table" style = "margin-right: 0.5vw; margin-left: 2vw;"> Denied </button>
            </div>
            <div style = "width: 90vw; height: 75vh; background-color: #b2d4b6; margin-left: 5vw; margin-right: 5vw; margin-top: 2vh;">
                <div style = "background-color: #90b493; width: 100%; height: 8%; border-bottom: 0.5vw #728370 solid; display: flex; flex-direction: row-reverse; flex-wrap: nowrap; align-items: center;">    
                    <input type = "text" style = "border: 0; height: 45%; margin-right: 2%; background-color: #cde7ca;" placeholder = "Search...">
                    <p style = "width: 100%; margin: 0; margin-left: 1vw; font-size: 2.5vw;">Requests</p>
                </div>
                <div style = "width: 100%; height: 84%;">
                    <div style = "width: 100%; height: 8.4%; border-bottom: 0.2vw #728370 solid; display: flex; text-align: center; align-items: center;">
                        <p id = "Format"> User </p>
                        <p id = "Format">ID</p>
                        <p id = "Format" style = "font-size: 1.5vw;"> MM/DD/YYYY hh:mm:ss </p>
                        <p id = "Format"> District </p>
                        <p id = "Format" style = "display: none;"> Status <button style = "font-size: 2.4vmin; border: 3px black solid; cursor: pointer;">&#9998;</button></p>
                        <input type="text" placeholder = "Status" style = "width: 20%; height: 50%;">
                        <button style = "margin-left: 2vw; width: 3.5vw; color: green; border: 0px; background-color: #4b514a; font-size: 3.5vmin; cursor: pointer; height: 100%;">&#10003;</button>
                        <button style = "margin-left: 2vw; width: 3.5vw; color: red; border: 0px; background-color: #4b514a; font-size: 3.5vmin; cursor: pointer; height: 100%;">X</button>
                    </div>
                    <div style = "width: 100%; height: 8.4%; border-bottom: 0.2vw #728370 solid; display: flex; text-align: center; align-items: center;">
                        <p id = "Format"> User </p>
                        <p id = "Format">ID</p>
                        <p id = "Format" style = "font-size: 1.5vw;"> MM/DD/YYYY hh:mm:ss </p>
                        <p id = "Format"> District </p>
                        <p id = "Format" style = "display: none;"> Completed </p>
                        <p id = "Format" style = "display: block;"> Denied </p>
                        <p id = "Format" style = "font-size: 1.5vw;"> MM/DD/YYYY hh:mm:ss </p>
                    </div>
                </div>
                
                <div style = "background-color: #90b493; width: 100%; height: 8%; border-top: 0.5vw #728370 solid; display: flex; justify-content: center; align-items: center;">
                    <p>&#9664;</p>
                    <input type = "text" placeholder = "####" style = "width: 2%; height: 40%;">
                    <p>&#9654;</p>
                </div>
            </div>
        </div>
        <div id = "User">
        </div>

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
                    window.location.href = "../../Info/Information.php";
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
                    window.location.href = "./Help/HelpGOVInterface.php";
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