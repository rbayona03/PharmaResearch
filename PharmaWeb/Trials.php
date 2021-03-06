<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,intial-scale=1.0" />
    <meta name="Pharma" content="Basic Web page for Pharma Research associates" />
    <link rel="stylesheet" href="Stylesheet.css" />
    
    <title>Buisness Inquiry</title>
    </head>

    <body>

        
        <header>
            <a href="PharmaMain.html"><img class="logo" src="Images/logoH.png"></a>
            <nav class="navLinks">
                <ul>
                    <li><a href="PharmaMain.html">Home</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main class="frmCrd1">
            <div class="backshp"></div>
            <section class="frmCrd">
                <h1>Buisness Inquiry</h1>
                <form id="frm1" action="action.php" method="POST">
                    <label for="Name"> Company Name:  
                        <input type="text" placeholder="Company Name" required>
                    </label><br>
                    <label for="Name"> Rep Name:  
                        <input type="text" placeholder="Rep Name" required>
                    </label><br>
                    <label for="email">Email:
                        <input type="email" placeholder="Email" required>
                    </label><br>
                    <label for="Phone">Phone Number:
                        <input type="number" placeholder="Phone#" required>
                    </label><br>
                    <label for="Address">Address:
                        <input type="text" placeholder="address" required> 
                    </label><br>
                    
                    
                    
                    <label for="Preexisting">
                        What Type of study do you want to work on?<br>
                        <input type="checkbox" name="Condition" value="Diabetes">
                        <label for="Condition1"> Diabetes</label><br>
                        <input type="checkbox" name="Condition" value="Alzheimers w/ Dementia">
                        <label for="Condition2">Alzheimers w/ Dementia</label><br>
                        <input type="checkbox" name="Condition" value="Asthma">
                        <label for="Condition3">Asthma </label><br>
                        <input type="checkbox" name="Condition" value="RCDI">
                        <label for="Condition4"> RCDI</label><br>
                        <input type="checkbox" name="Condition" value="Parkinson Disease">
                        <label for="Condition5"> Parkinson Disease</label><br>
                        <input type="checkbox" name="Condition" value="Other">
                        <label for="Condition6"> Other</label><br>      
                    </label>
                    <textarea placeholder="Comments/More info"></textarea>
                    </form>
                    <input type="submit">
                </form>
            </section>
        </main>

        <footer id="footer">
            <div id="footerContact">
                <div class="top">
                    <ul class="contact">
                        <h4>Contact Us</h4>
                        <a href="tel:305-381-5319"><li>305.381.5319<br>
                            Hablabmos Espanol
                        </li></a>
                        <a href="https://goo.gl/maps/cYXrQhNGrgCGPsEf7" target="_blank"><li>7801 SW 24 street Suite 112 Westchester,FL 33155</li></a>
                        <a href="mailto:enroll@pharmaresearchtrials.com"><li>enroll@pharmaresearchtrials.com</li></a>
                        <li>Hours of opperation <br>Mon-Fri 10:00-5:00pm</li>
                    </ul>
                    <div class="faq">

                        <ul>
                            <h4>FAQ</h4>
                            <a href="Faq.html"><li>Clinical research defined</li></a>
                            <a href="Faq.html"><li>Benifits</li></a>
                            <a href="Faq.html"><li>Risks</li></a>
                            <a href="Faq.html"><li>Your Rights</li></a>
                        </ul>
                    </div>
                    <div class="social">
                        <h4>Join our <br>Growing Community</h4>
    
                        <ul>
                            <li><img class="fb"src="Images/facebook.png"></li>
                            <li><img class="ig"src="Images/insta.png"></li>
                        </ul>
                    </div>

                    <div class="location">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.667708760241!2d-80.32458738497934!3d25.74850018364274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b8f60bfff1d1%3A0x9aaf7b368dfee992!2s7801%20SW%2024th%20St%20%23112%2C%20Miami%2C%20FL%2033155!5e0!3m2!1sen!2sus!4v1613155367025!5m2!1sen!2sus" width="200" height="200" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                </div>
                    </div>
            </div>
        </footer>
        
        
    </body>