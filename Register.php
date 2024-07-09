<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>D.S Senanayaka M.M.V - Mirigama</title>
    <link rel="stylesheet" href="Regstyle.css">
</head>

<body>
    <header class="header">
        <div class="contact">
            <p><i style="margin-left: 20px; margin-right: 10px;" class="fa-solid fa-house"></i>Pasyala - Giriulla Rd,
                Mirigama,Sri Lanka</p>
            <p><i style="margin-left: 20px;  margin-right: 10px;" class="fa-solid fa-phone"></i>0332273231</p>
        </div>
        <div class="register">
            <a href="#"> <i style="margin-right: 10px;" class="fa-solid fa-arrow-right-to-bracket"></i>Sign in</a>
            <a href="index.html"> Home Page</a>
        </div>
    </header><br><br><br><br>
    <section class="logo" id="Home">
        <img class="img_logo" src="logo.jpg">
    </section>

    

    <script src="script.js"></script>


    <section class="reg_process">
        <div class="instruction">
            <h1 style="text-decoration: underline;">Instructions</h1>
            <p>We are pleased to welcome you to D.S. Senanayaka Central College's online registration portal. This page
                is designed to facilitate the registration process for our students, teachers, and staff members. Please
                follow the instructions below to complete your registration:</p><br>
            <div>
                <ul>
                    <li>
                        <p><b>Select Your Category : </b> Choose whether you are a student, teacher, or staff member.
                        </p>
                    </li>
                    <li>
                        <p><b>Fill in Your Details: </b> Enter your personal information accurately. Ensure that all
                            mandatory fields marked with an asterisk (*) are filled out.</p>
                    </li>
                    <li>
                        <p><b>Create a Username and Password: </b> For students, a unique username and a secure password
                            are required to access your account. Teachers and staff members should use their official
                            email addresses as their usernames. </p>
                    </li>
                    <li>
                        <p><b>Verify Your Information:</b> Double-check all the information you have entered to ensure
                            its accuracy.</p>
                    </li>
                    <li>
                        <p><b>Submit Your Form:</b> Once all the details are correctly filled in, click on the 'Submit'
                            button to complete your registration.</p>
                    </li>

                </ul><br>
                <b>
                    <p class="iNotes"><b>Important Notes:</b></p>
                    <p>1. Ensure your password is strong and includes a mix of letters, numbers, and special characters.
                    </p>
                    <p>2. Keep your login credentials secure and do not share them with others.</p>
                    <p>3. In case of any issues or queries, please contact the school's administration office for
                        assistance.</p>
                </b><br><br>
                <p style="text-align: center;">......Thank you for taking the time to register. We look forward to
                    having you as a part of our school
                    community......</p>

            </div>


        </div>
    </section>

    <section class="process">
        <div class="container">
            <h1 style="text-decoration: underline;">Registration Form</h1><br>
            <label for="role">Select your Role : </label>
            <select id="role" onchange="showForm()">
                <option class="input" value="">----Select Role----</option>
                <option class="input" value="Student">Student</option>
                <option class="input" value="Teacher">Teacher</option>
                <option class="input" value="Non-Academic Staff">Non-Academic Staff</option>
            </select>
        </div>
        <div id="form_fill_student">
            <form id="Registration_form" action = "Database_Reg.php" method="POST">
                <h1 style="text-align: center; width: 80%; margin-left: 10px;">Student Registration Form</h1><br>
                <label for="name" id="RegNo">Student Registration Number <sup>*</sup></label><br>
                <input type="text" name = "RegNo" placeholder="Enter your School Registration Number"><br><br>

                <label for="name" id="name">Full Name <sup>*</sup></label><br>
                <input type="text" name = "FullName" placeholder="Enter your full name"><br><br>

                <input type="hidden" name="userType" value="Student">

                <label for="name" id="name">Username <sup>*</sup></label><br>
                <input type="text" name = "username" placeholder="Enter your username"><br><br>

                <label for="name" id="name">Password <sup>*</sup></label><br>
                <input type="text" name = "password" placeholder="Enter your Password"><br><br>

                <label for="name" id="name">Confirm Password<sup>*</sup></label><br>
                <input type="text" name = "password2" placeholder="Re-enter your Password"><br><br>
                
                <div style = "text-align: center; width: 80%; margin-left: 10px;">
                    <input type="submit" id="submit" value="Register">
                </div>
            </form>


        </div>

        <div id="form_fill_teacher">
            <form action = "Database_Reg.php" method="POST" id="Registration_form">
                <h1 style="text-align: center; width: 80%; margin-left: 10px;">Teacher Registration Form</h1><br>
                <label for="name" id="RegNo">Teacher's Registration Number <sup>*</sup></label><br>
                <input type="text" name = "RegNo" placeholder="Enter your Teacher's ID Number"><br><br>

                <label for="name" id="name">Full Name <sup>*</sup></label><br>
                <input type="text" name = "FullName" placeholder="Enter your full name"><br><br>

                <input type="hidden" name="userType" value="Teacher">

                <label for="name" id="name">Username <sup>*</sup></label><br>
                <input type="text" name = "username"  placeholder="Enter your username"><br><br>

                <label for="name" id="name">Password <sup>*</sup></label><br>
                <input type="text" name = "password" placeholder="Enter your Password"><br><br>

                <label for="name" id="name">Confirm Password<sup>*</sup></label><br>
                <input type="text" name = "password2" placeholder="Re-enter your Password"><br><br>
                <div style = "text-align: center; width: 80%; margin-left: 10px;">
                    <input type="submit" id="submit" value="Register">
                </div>
            </form>


        </div>

        <div id="form_fill_staff">
            <form id="Registration_form" action = "Database_Reg.php" method="POST">
                <h1 style="text-align: center; width: 80%; margin-left: 10px;">Staff Registration Form</h1><br>
                <label for="name" id="RegNo">Employee Number <sup>*</sup></label><br>
                <input type="text" name = "RegNo" placeholder="Enter your Staff Id Number"><br><br>

                <label for="name" id="name">Full Name <sup>*</sup></label><br>
                <input type="text" name = "FullName" placeholder="Enter your full name"><br><br>

                <input type="hidden" name="userType" value="Staff">

                <label for="name" id="name">Username <sup>*</sup></label><br>
                <input type="text" name = "username" placeholder="Enter your username"><br><br>

                <label for="name" id="name">Password <sup>*</sup></label><br>
                <input type="text" name = "Password" placeholder="Enter your Password"><br><br>

                <label for="name" id="name">Confirm Password<sup>*</sup></label><br>
                <input type="text" name = "password2" placeholder="Re-enter your Password"><br><br>
                <div style = "text-align: center; width: 80%; margin-left: 10px;">
                    <input type="submit" id="submit" value="Register">
                </div>
            </form>


        </div>
    </section>



    <footer class="footer" id="Social">
        <p><a style="color:white;" href="https://web.facebook.com/DsSenanayakeCollegeMirigama/?_rdc=1&_rdr">Social
                Network <i style="color:white; margin-left: 20px;" class="fa-brands fa-facebook"></i></a></p>
        <p style="color:white; margin-left: 200px;"><i class="fa-regular fa-copyright"></i>Copyright 2024 — D.S
            SenanayakeCollege - Mirigama. All rights reserved. Website crafted by K.A.T Saranga.(Undergraduate in
            University of Jaffna)</p>
    </footer>
</body>

</html>