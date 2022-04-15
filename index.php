<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body background="login.jpg">
        <div class="b">

    <a href="Home.html" style="color:#ffffff" >Back To Home</a>
</div>
            <center>
            <div id="headerSection">
            <h1 style="text-shadow: 0 0 15px #000000; color:white;">VoteBuddy</h1>  
            </div>
            <hr>
</center>
             
            <div id="loginSection">
            <center>  <h2 style="color:#c0e6f0; text-shadow: 0 0 10px #002366;">Login</h2>
               <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 25%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Candidate</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    <p style="color:#C9DDEE">New user? <a href="routes/register.php" style="text-shadow: 0 0 3px #000000; color:white" >Register here</a>
</p>
                </form>
</center>
            </div>


    </body>
</html>