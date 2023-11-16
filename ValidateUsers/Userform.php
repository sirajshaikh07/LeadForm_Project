<?php
if (isset($_POST['submit'])) {
    include("conn.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

   


    $query = "SELECT * FROM users WHERE userfirst='$username'and Password='$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)>0)
    {
        
        session_start();
        $_SESSION["username"]=$username;
        $query1="SELECT userrole,userfirst  from users where userfirst='$username' ";
        $checkresult=mysqli_query($conn,$query1);

        while($user_role=mysqli_fetch_assoc($checkresult))
        {
            if($user_role['userrole']=="agent")
            {
             $user=$user_role['userfirst'];
            
             $getleadername= "SELECT leader_name FROM leadform WHERE agent_name='$user'";
             $result=mysqli_query($conn,$getleadername);
             if($result)
             {
                while($leader=mysqli_fetch_assoc($result))
                {
                    $_SESSION['leader']=$leader['leader_name'];
                    
                }
             }
             header("Location:Agent.php");
            }
            elseif($user_role['userrole']=="leader")
            {
                header("Location:Leader.php");  
            } 
            else 
            {
                header("Location:Manager.php");
            }

        }


    }
    else
    {

        echo"Invalid username";
        header("LOcation:UserForm.php");

    }



    if ($result) {
        while ($data = mysqli_fetch_assoc($result)) {
            echo $data['UserName'];
            print_r($username);
            exit;
        }
    }
}













?>















<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }

        .login-form {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .login-form label {
            display: block;
            margin-bottom: 8px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form action="Userform.php" id="loginForm" method="post" class="login-form">
        <div class="d-flex justify-content-center p-3">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">
        </div>
        <div class="d-flex justify-content-center p-3">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>
        <!-- <div class="d-flex justify-content-center p-3">
            <label for="role">Role:</label>
            <select id="role" name="role">
                <option value="manager">Manager</option>
                <option value="leader">Leader</option>
                <option value="agent">Agent</option>
            </select>
        </div> -->
        <div class="d-flex justify-content-center pb-5">
            <button type="submit" name="submit">Login</button>
        </div>
    </form>
</body>

</html>