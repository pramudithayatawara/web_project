<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        body {
            display:flex ;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #loginForm {
            width: 30%;
            height: auto;
            padding-bottom: 25px;
            display: flex;
            justify-content: center;
            background-color: #a8a9a892;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
            border-radius: 10px;
        }
        #loginForm h3{
            text-align: center;
        }
        #loginForm label{
            margin-left: -10px;
            font-family: 'Times New Roman', Times, serif;
        }
        #loginForm input,select{
            width:250px;
            height: 25px;
            margin: 10px 0px 20px;
            border-radius: 5px;
            background-color: transparent;
        }
        #loginBtn input{
            width: 100px;
            justify-content: center;
            margin-left: 30%;
            margin-bottom: 0px;
        }
        #loginBtn a{
            margin-left: 25%;
        }
    </style>
</head>

<body>
    <div id="loginForm">
        <form action="./dashboard.php" method="POST">
            <h3>Login</h3>
            <label for="userName">User Name : </label> <br>
            <input type="text" name="userName" required> <br>
            <label for="password">Password : </label> <br>
            <input type="text" name="password" required> <br>
            <label for="type">Your Type</label> <br>
            <select name="type" id="type" required>
                <option value="" hidden></option>
                <option value="employee">Emplyee</option>
                <option value="doctor">Doctor</option>
            </select>
            <div id="loginBtn">
                <input type="submit" value="Login" name="Login"> <br>
                <a href="#">Create new account</a>
            </div>
        </form>
    </div>

</body>

</html>