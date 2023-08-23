<html>
<head>  
    <title>MyDoctor</title>
    <style>
        * {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  font-family: 'Open Sans', sans-serif;
  background: #f1f1f1;
}

.login-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.login-box {
  width: 400px;
  background: #fff;
  padding: 40px;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

h1 {
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 2.5rem;
  color: #333;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 10px;
  color: #333;
}

input[type="text"], input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  border-radius: 5px;
  background-color: #f2f2f2;
  color: #333;
  font-size: 1.1rem;
}

input[type="submit"] {
  width: 100%;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 15px;
  margin-top: 20px;
  font-size: 1.2rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #222;
}

.links {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
}

a {
  color: #333;
  text-decoration: none;
  font-size: 1.1rem;
  transition: color 0.3s ease;
}

a:hover {
  color: #222;
}


    </style>
    
</head>
<body>

    <div class="login-wrapper">
        <div class="login-box div">
            <h1>Login</h1>
            <form method="POST" action="../controller/logincheck.php" onsubmit="return validateLoginForm()">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="" placeholder="Enter username">

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" value="">

                <input type="submit" name="submit" value="Login">
            </form>
            <div class="links">
                <a href="forgotpassword.php">Forgot password?</a>
                <a href="registation.php">Sign up</a>
                <a href="../view/homepage.php"> Back </a>
            </div>
        </div>
    </div>

    <script>
        function validateLoginForm() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username.trim() === '') {
                alert('Please enter a username');
                return false;
            }

            if (password.trim() === '') {
                alert('Please enter a password');
                return false;
            }
            return true;
        }
    </script>
</body>

</html>