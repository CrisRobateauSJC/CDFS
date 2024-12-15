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

        <div style="margin: 40px">
        <fieldset>
        <legend><h2> Relief Request Form </h2></legend>

        <label><b> Personal Information </b></label>

        <br>

        <label for="fname" >First Name:</label>
        <input type="text" id="fname" name="fname"required>
        <label for="lname" style="padding-left: 20px">Last Name:</label>
        <input type="text" id="lname" name="lname"required>

        <br>
        <br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
        
        <label for="email" style="padding-left: 20px">Email:</label>
        <input type="text" id="email" name="email" required>

        <br>
        <br>

        <label for="address"> Home Address:</label>
        <input type="text" id="address" name="address" required>

        <label for="country" style="padding-left: 20px">Country of Residence:</label>
            <select id="country" required>
            <option>Anguilla</option>
            <option>Antigua and Barbuda</option>
            <option>Aruba</option>
            <option>The Bahamas</option>
            <option>Barbados</option>
            <option>Bay Islands</option>
            <option>Belize</option>
            <option>Bermuda</option>
            <option>Bonaire</option>
            <option>British Virgin Islands</option>
            <option>Cayman Islands</option>
            <option>Cuba</option>
            <option>Curaçao</option>
            <option>Dominica</option>
            <option>Dominican Republic</option>
            <option>French Guiana</option>
            <option>Grenada</option>
            <option>Guadeloupe</option>
            <option>Guyana</option>
            <option>Haiti</option>
            <option>Jamaica</option>
            <option>Martinique</option>
            <option>Monserrat</option>
            <option>St. Barts</option>
            <option>St. Kitts and Nevis</option>
            <option>St. Lucia</option>
            <option>St. Martin</option>
            <option>St. Vincent and the Grenadines</option>
            <option>Trinidad and Tobago</option>
            <option>US Virgin Islands</option>
            </select> 

        
        <br>
        <br>
        
        <label><b> Documentation </b></label> 

        <br>

        <label for="damage"> Official damage assessment: </label>
        <input type="file" id="damage" name="damage" required>

        <label for="personal-id"> Proof of citizenship (SS card, passport, etc.): </label>
        <input type="file" id="personal-id" name="personal-id" required>

        <br>
        <br>

        <label for="income"> Proof of income (job letter, recent pay slip): </label>
        <input type="file" id="income" name="income" required>

        <label for="disaster" style="padding-left: 20px">Disaster:</label>
            <select id="disaster" required>
            <option>Hurricane</option>
            <option>Flood</option>
            <option>Earthquake</option>
        </select>

        <br>
        <br>

        <label><b> Banking Information </b></label>

        <br>

        <label for="bank"> Bank Name: </label>
        <input type="text" id="bank" name="bank" required>

        
        <label for="account" style="padding-left: 20px"> Account Number: </label>
        <input type="text" id="account" name="account" required>
        <br>
        <br>
        <input type="submit" value="Request Assistance" >

        </fieldset>
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
                    window.location.href = "../../../Info/Information.php";
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
                    window.location.href = "../../../Organizations/Organizations.php";
                }
                else if (Menu.innerHTML == "Help"){
                    window.location.href = "../../../Help/HelpGOVInterface.php";
                }
                else if (Menu.innerHTML == "Donors"){
                    window.location.href = "../../../Donation/Donors.php";
                }
            }

            function subMenu2(Menu){
                if(Menu.innerHTML == "Login"){
                    window.location.href = "../../../Access/Login/Login.php";
                }
                else if (Menu.innerHTML == "Sign Up"){
                    window.location.href = "../../../Access/Sign Up/SignUp.php";
                }
                else if (Menu.innerHTML == "Profile"){
                    window.location.href = "../../../Access/Profile/Profile.php";
                }
                else if (Menu.innerHTML == "Eligibility"){
                    window.location.href = "../../../Eligibility/Eligible Info/Eligible.php";
                }
                else if (Menu.innerHTML == "Relief Form"){
                    window.location.href = "./ReliefForm.php";
                }
                else if (Menu.innerHTML == "Statistics Info"){
                    window.location.href = "../../../Statistics/Statistics Info/StatInfo.php";
                }
                else if (Menu.innerHTML == "Statistics Input"){
                    window.location.href = "../../../Statistics/Statistics Input/StatInput.php";
                }
            }
        </script>
    </body>
</html>