<!DOCTYPE html>
<html>
<head>
    <title>PHP login system</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        #frm {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border: solid gray 1px;
    width: 25%;
    border-radius: 2px;
    background: rgba(255, 255, 255, 0.7);
    padding: 50px;
    z-index: 10;
}
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow: hidden; /* Prevent scrolling on smaller screens */
        }

        #hero {
            position: relative;
            height: 100vh; /* Make hero cover the viewport */
        }

        #hero video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Push the video behind other content */
            object-fit: cover;
        }

        #frm {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: solid gray 1px;
            width: 25%;
            border-radius: 2px;
            background: rgba(255, 255, 255, 0.7); /* Transparent white background */
            padding: 50px;
            z-index: 10; /* Ensure form is above the video */
        }

        #btn {
            color: #fff;
            background: #337ab7;
            padding: 7px;
            margin-left: 70%;
        }
    </style>
</head>
<body>

<video autoplay loop muted>
    <source src="video.mp4" type="video/mp4">
</video>

<div id="frm">
    <h1>Login</h1>
    <form name="f1" action="authentication.php" onsubmit="return validation()" method="POST">
        <p>
            <label> User Name: </label>
            <input type="text" id="user" name="user"/>
        </p>
        <p>
            <label> Password : </label>
            <input type="password" id="pass" name="pass"/>
        </p>
        <p>
            <input type="submit" id="btn" value="Login"/>
        </p>
    </form>
</div>

<script>
    function validation() {
        var id = document.f1.user.value;
        var ps = document.f1.pass.value;
        if (id.length == "" && ps.length == "") {
            alert("User Name and Password fields are empty");
            return false;
        } else {
            if (id.length == "") {
                alert("User Name is empty");
                return false;
            }
            if (ps.length == "") {
                alert("Password field is empty");
                return false;
            }
        }
    }
</script>

</body>
</html>
