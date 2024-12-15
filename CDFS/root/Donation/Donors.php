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

            .donorOutline{
                display: flex;
                height: 10vh;
                width: 12vw;
                background-color: #728370;
                text-align:center;
                border-style: solid;
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
        <section class="donation-displays" style="margin: 20px;">

        
        <div>
            <h2> Help Us Help Others</h2>
            <label> Donate today, and help CDFS aid victims of natural disasters in the Caribbean. 
                A donation of just $5 can improve the lives of families across the region. </label>
        <h3> Latest Donor</h3>
            <div class=donorOutline><p style="font-size:1.2vw; padding:4px">John Doe  $15  10/12/24</p></div>

        <div>
        <fieldset>
        <legend> <h3>Donation Form</h3> </legend>
        <form method="POST">
            <label for="fname" >First Name:</label>
            <input type="text" id="fname" name="fname"required>
            <label for="lname" style="padding-left: 20px">Last Name:</label>
            <input type="text" id="lname" name="lname"required>

            <br>
            <br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder=johnDoe@gmail.com required>
            <label for="payment" style="padding-left: 54px">Method of Payment:</label>
            <select id="payment"required>
            <option>Credit Card</option>
            <option>Debit Card</option>
            </select> 

            <br>
            <br>

            <label><b>Card Information</b></label>
            <br>
            <input type="text" id="card-num" name="card-num" max=16 placeholder=0000-0000-0000-0000 style='width:11vw'required>
            <input type="text" id="card-date" name="card-date" placeholder=MM/YY style='width:3.5vw' required>
            <input type="text" id="card-cvv" name="card-cvv" placeholder=000 style='width:2vw'required>

            <br>
            <br>

            <label><b>Donation Amount</b></label>
            <br>
            <label for="amount-5">$5</label>
            <input type="radio" id="amount-5" name="amount">

            <label for="amount-10">$10</label>
            <input type="radio" id="amount-10" name="amount">

            <label for="amount-20">$20</label>
            <input type="radio" id="amount-20" name="amount">

            <label for="amount-50">$50</label>
            <input type="radio" id="amount-50" name="amount">

            <label>or input amount ($)</label>
            <input type="text" style="width:4vw" id="amount-free" name="amount-free"required>

            <br>
            <br>

            <input type="submit" value="Donate" >
        </form>
        </fieldset>
        </div>   


        </main>
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
                    window.location.href = "../../Information.php";
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
                    window.location.href = "./Donors.php";
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