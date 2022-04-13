<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body background="login.jpg">
        <div class="b">
    <a href="Home.html" style="color:#ffffff"> Back</a>
</div>
        <center>
            <div id="headerSection">
            <h1 style="text-shadow: 0 0 15px #000000; color:white;">VoteBuddy</h1>  
            </div>
            <hr>
            </center>
            <div id="reg"> 
           <center> <h2  style="color:#c0e6f0; text-shadow: 0 0 10px #002366;">Registration</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="color:#c0e6f0; width: 40%; text-shadow: 0 0 10px #002366;">
                        Upload image: <input type="file"  id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="color:#c0e6f0; width: 40%; text-shadow: 0 0 10px #002366;">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Candidate</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    <p style="color:#C9DDEE"> Already user? <a href="../" style="text-shadow: 0 0 3px #000000; color:white">Login here</a>
</p> </form></center>
</div>
            
    </body>
</html>