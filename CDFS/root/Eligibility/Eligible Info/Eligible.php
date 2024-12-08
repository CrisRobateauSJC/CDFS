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
        <main>
        <section class="eligibility-section">
            <h2>Eligibility Criteria for Financial Assistance</h2>
            <p>To qualify for financial assistance from the Caribbean Disaster Finance and Statistics (CDFS) program, applicants must meet specific criteria based on the nature of the disaster and their individual circumstances. Below are the key eligibility requirements:</p>
            
            <h3>General Criteria</h3>
            <ul>
                <li>Applicants must be residents of one of the Caribbean member states affected by a natural disaster.</li>
                <li>The applicant must demonstrate that their household or business has suffered damage as a result of the disaster.</li>
                <li>Verification of income, housing, and property damage may be required as proof of need.</li>
                <li>Assistance is only available to individuals and businesses directly impacted by recognized disasters (hurricanes, floods, earthquakes, etc.).</li>
            </ul>

            <h3>Income and Property Criteria</h3>
            <p>For individuals and households, financial assistance is typically based on the following:</p>
            <ul>
                <li>Annual income level: Applicants must meet a specified income threshold to demonstrate financial need.</li>
                <li>Property damage assessment: A detailed report of damage must be submitted to support the assistance request.</li>
            </ul>

            <h3>Disaster-Specific Criteria</h3>
            <p>Each disaster type may have additional criteria, such as:</p>
            <ul>
                <li><strong>Hurricanes:</strong> Assistance may include temporary housing, food, and medical aid.</li>
                <li><strong>Floods:</strong> Damage to infrastructure and homes must be demonstrated through photographs or government assessments.</li>
                <li><strong>Earthquakes:</strong> Financial aid may cover rebuilding costs and medical expenses related to injuries from the event.</li>
            </ul>

            <h3>Required Documentation</h3>
            <p>Applicants will need to provide the following documentation:</p>
            <ul>
                <li>A valid government-issued ID or proof of citizenship.</li>
                <li>Damage assessments from local authorities or disaster relief organizations.</li>
                <li>Proof of income (for financial aid purposes).</li>
                <li>Bank account information for the transfer of funds.</li>
            </ul>
        </section>

        <section class="eligibility-section">
            <h2>How to Apply for Financial Assistance</h2>
            <p>The application process is simple, but requires careful attention to detail. Follow the steps below to apply for assistance:</p>
            <ol>
                <li>Visit the CDFS online application portal (link provided at the end of this page).</li>
                <li>Complete the eligibility form with accurate personal information.</li>
                <li>Upload the required documents for verification.</li>
                <li>Submit the application for review. You will receive an acknowledgment of receipt within 48 hours.</li>
                <li>Once approved, funds will be distributed based on the assessment of the damages and the eligibility criteria.</li>
            </ol>
            <p>If you have any questions or need assistance with the application process, please contact our support team at <a href="mailto:support@cdfs.org">support@cdfs.org</a>.</p>
        </section>

        <section class="eligibility-section">
            <h2>Important Notes</h2>
            <p>Here are some important things to keep in mind when applying for financial assistance:</p>
            <ul>
                <li>Applications are processed on a first-come, first-served basis.</li>
                <li>Once your application is approved, assistance may be provided in the form of a one-time payment or a series of payments depending on the severity of the damages.</li>
                <li>All funds provided must be used specifically for disaster recovery efforts and not for other personal expenses.</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Caribbean Disaster Finance and Statistics. All rights reserved.</p>
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
                    window.location.href = "./Eligible.php";
                }
                else if (Menu.innerHTML == "Relief Form"){
                    window.location.href = "../../../Eligibility/ReliefForm/ReliefForm.php";
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
