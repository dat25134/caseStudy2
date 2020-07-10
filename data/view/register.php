<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/css/style_reg.css">
    <title>Register!!!</title>
</head>

<body>
    <div class="border">
        <div class="container">
            <div class="container_left">
                <h2>Learn to code by <br> watching others</h2>
                <p>
                    See how experienced developers solve problems in real-time. Watching scripted tutorials is great,
                    but understanding how developers think is invaluable.
                </p>
            </div>
            <div class="container_right">
                <button class=""> SIGN UP FOR FREE </button>
                <form action="../control/reg.php" method="POST">
                    <div class="First_Name">
                        <input type="text" name="first_name" id="First_Name" placeholder="First Name" class="input" required>
                        <img src="http://localhost/CODEGYM/caseStudy2/images/icon-error.svg" alt="" id="icon_error1" class="icon_error"><span id="note1" class="note"> First Name cannot be empty</span>
                    </div>
                    <div class="Last_Name">
                        <input type="text" name="last_name" id="Last_Name" placeholder="Last Name" class="input" required>
                        <img src="http://localhost/CODEGYM/caseStudy2/images/icon-error.svg" alt="" id="icon_error2" class="icon_error"><span id="note2" class="note"> Last Name cannot be empty</span>
                    </div>
                    <div class="email">
                        <input type="email" name="email" id="email" placeholder="Email Address" class="input" required>
                        <img src="http://localhost/CODEGYM/caseStudy2/images/icon-error.svg" alt="" id="icon_error3" class="icon_error"><span id="note3" class="note"> Email Address cannot be empty</span>
                    </div>
                    <div class="pass">
                        <input type="password" name="pass" id="pass" placeholder="Password" class="input" required>
                        <img src="http://localhost/CODEGYM/caseStudy2/images/icon-error.svg" alt="" id="icon_error4" class="icon_error"><span id="note4" class="note"> Password cannot be empty</span>
                    </div>
                    <input type="submit" name="submit" id="submit" value="SUBMIT" onclick="changeForm()">
                    <h6>By clicking the button, you are agreeing to our <span>Terms and Services</span></h6>
                </form>
            </div>
        </div>
    </div>

    <script>
        function changeForm() {
            let firstName = document.getElementById('First_Name').value;
            let lastName = document.getElementById('Last_Name').value;
            let email = document.getElementById('email').value;
            let pass = document.getElementById('pass').value;
            if (firstName === "") {
                document.getElementById("icon_error1").style.display = "block";
                document.getElementById("note1").style.display = "block";
            } else {
                document.getElementById("icon_error1").style.display = "none";
                document.getElementById("note1").style.display = "none";
            }
            if (lastName === "") {
                document.getElementById("icon_error2").style.display = "block";
                document.getElementById("note2").style.display = "block";
            } else {
                document.getElementById("icon_error2").style.display = "none";
                document.getElementById("note2").style.display = "none";
            }
            if (email === "") {
                document.getElementById("icon_error3").style.display = "block";
                document.getElementById("note3").style.display = "block";
            } else {
                document.getElementById("icon_error3").style.display = "none";
                document.getElementById("note3").style.display = "none";
            }
            if (pass === "") {
                document.getElementById("icon_error4").style.display = "block";
                document.getElementById("note4").style.display = "block";
            } else {
                document.getElementById("icon_error4").style.display = "none";
                document.getElementById("note4").style.display = "none";
            }
        }
    </script>
</body>

</html>