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
        <h2>Key Disaster Relief Organizations in the Caribbean</h2>
        <p>The Caribbean region is prone to natural disasters such as hurricanes, earthquakes, and floods. A variety of regional and international organizations work together to provide assistance and recovery support to affected communities. Below are some key organizations that play vital roles in disaster relief efforts across the Caribbean.</p>
        
        <section>
            <h3>1. <a href="https://www.cdema.org" target="_blank">Caribbean Disaster Emergency Management Agency (CDEMA)</a></h3>
            <p><strong>Role:</strong> CDEMA is the lead regional disaster response agency in the Caribbean. It coordinates the regional efforts of Caribbean countries in disaster response and recovery. CDEMA provides both technical and financial assistance to affected nations, facilitates resource mobilization, and enhances the disaster resilience of the region.</p>
            <p><strong>Key Responsibilities:</strong></p>
            <ul>
                <li>Emergency response coordination across member states.</li>
                <li>Development of disaster preparedness programs.</li>
                <li>Support for risk reduction initiatives in the region.</li>
            </ul>
            <p>For more information, visit the <a href="https://www.cdema.org" target="_blank">CDEMA website</a>.</p>
        </section>

        <section>
            <h3>2. <a href="http://www.acs-aec.org" target="_blank">Association of Caribbean States (ACS)</a></h3>
            <p><strong>Role:</strong> ACS is a regional body focused on fostering cooperation among Caribbean states for sustainable development, including disaster management. The ACS facilitates the mobilization of resources for disaster relief and encourages collaboration between the public and private sectors for better disaster resilience.</p>
            <p><strong>Key Responsibilities:</strong></p>
            <ul>
                <li>Promotion of regional collaboration for disaster risk management.</li>
                <li>Organization of training and capacity-building programs for disaster response.</li>
                <li>Coordination of cross-border relief operations during major disasters.</li>
            </ul>
            <p>Learn more by visiting the <a href="http://www.acs-aec.org" target="_blank">ACS website</a>.</p>
        </section>

        <section>
            <h3>3. <a href="http://www.rss.org.bb" target="_blank">Regional Security System (RSS)</a></h3>
            <p><strong>Role:</strong> RSS is a regional security organization that provides support during natural disasters, especially with search and rescue operations and the transportation of relief supplies. The RSS plays a critical role in ensuring that the affected countries receive timely help and that the delivery of relief goods is efficient.</p>
            <p><strong>Key Responsibilities:</strong></p>
            <ul>
                <li>Coordinating security and logistics during disaster response.</li>
                <li>Providing air and sea transport for relief efforts.</li>
                <li>Supporting disaster recovery through joint military-civilian operations.</li>
            </ul>
            <p>Visit the <a href="http://www.rss.org.bb" target="_blank">RSS website</a> for additional information.</p>
        </section>

        <section>
            <h3>4. <a href="https://www.paho.org/en/topics/emergencies-and-disasters" target="_blank">Pan American Health Organization (PAHO)</a></h3>
            <p><strong>Role:</strong> PAHO is a specialized international organization that supports disaster health services across the Americas. PAHO assists with healthcare provision during and after disasters, focusing on providing medical supplies, deploying health professionals, and ensuring that the regional health infrastructure remains intact.</p>
            <p><strong>Key Responsibilities:</strong></p>
            <ul>
                <li>Providing emergency healthcare teams to disaster-affected areas.</li>
                <li>Coordinating health-related logistics and resources.</li>
                <li>Developing post-disaster health recovery strategies, including vaccination and disease control programs.</li>
            </ul>
            <p>For further details, check the <a href="https://www.paho.org/en/topics/emergencies-and-disasters" target="_blank">PAHO disaster management page</a>.</p>
        </section>

        <section>
            <h3>5. <a href="https://www.redcross.org" target="_blank">Caribbean Red Cross Societies</a></h3>
            <p><strong>Role:</strong> The Caribbean Red Cross Societies offer humanitarian aid and emergency assistance in the wake of natural disasters. They are often among the first responders, providing food, water, medical care, and shelter to affected populations. The organization is also involved in long-term recovery efforts to restore the well-being of disaster-stricken communities.</p>
            <p><strong>Key Responsibilities:</strong></p>
            <ul>
                <li>Immediate disaster relief (food, shelter, medical care).</li>
                <li>Psychosocial support and health services during emergencies.</li>
                <li>Disaster preparedness and training for local communities.</li>
            </ul>
            <p>Visit the <a href="https://www.redcross.org" target="_blank">Caribbean Red Cross website</a> for more information.</p>
        </section>

        <section>
            <h3>6. <a href="http://www.unocha.org" target="_blank">United Nations Office for the Coordination of Humanitarian Affairs (OCHA)</a></h3>
            <p><strong>Role:</strong> OCHA coordinates international humanitarian response efforts across the world, including the Caribbean region. The office provides logistical support, facilitates the deployment of relief teams, and ensures the effective use of resources to assist affected countries.</p>
            <p><strong>Key Responsibilities:</strong></p>
            <ul>
                <li>Coordinating international disaster relief efforts and humanitarian response.</li>
                <li>Ensuring the allocation of funds and resources for disaster relief operations.</li>
                <li>Monitoring and evaluating the effectiveness of disaster response efforts globally.</li>
            </ul>
            <p>Find out more on the <a href="http://www.unocha.org" target="_blank">OCHA website</a>.</p>
        </section>

    </main>
    <footer>
        <p>&copy; 2024 Caribbean Disaster Finance and Statistics. All rights reserved.</p>
    </footer>

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
                    window.location.href = "./Organizations.php";
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
