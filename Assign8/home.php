<head>
    <script type="text/javascript">
    var baseUrl = 'http://localhost/assign8/database/';

    function ConfirmDelete() {
        if (confirm("Delete Account?"))
            location.href = baseUrl + '/delete.php';
    }
    </script>


</head>
<?php
session_start();
ini_set('display_errors', 1);
error_reporting(-1);
// include 'login_chk.php';
// echo 'je';
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email = $_SESSION['email'];
// echo $empID;
?>
<html>

<body>
    <div width="100% " height="200px"> 
        <div style="float:left; margin-left:30px" width="50%">
            Hello 
            <?php
            echo($fname." ".$lname);
            ?>
	    </div>
	    <div style="float:right ; margin-right:30px ; height:1000px" width="50%">
            Email:
            <?php
            echo($email);
            ?>
            <div style="padding:20px">
                <?php
                echo '<button type="button" onclick="ConfirmDelete()">DELETE ACCOUNT</button>';?>
                <form action="logout.php" style="margin:20px">
                    <button type="submit">
                        Log out
                    </button>
                </form>
            </div>

        </div>
    </div>
<br>
<center>
    <form action="change.php" method="post">
<h3>change name</h3>
        <h3><label for="fname">First Name</label>

            <input type="text" name="fname" placeholder="first name"><br>
        </h3>
        <h3>
            <label for="lname">Last name</label>
            <input type="text" name="lname" placeholder="last name"><br>
        </h3>
        <br>
        <button type="submit">Change  Name</button>
    </form>
    <br>
    <h3>change password</h3>
    <form action="change_pswd.php" method="post">
        <h3><label for="password">Password</label>

            <input type="password" name="password" placeholder="password"><br>
        </h3>
        <h3><label for="cnfpassword"> Confirm Password</label>

            <input type="password" name="cnfpassword" placeholder="Confirm password"><br>
        </h3>
        <br>
        <button type="submit">Change  Password</button>
    </form>
    </center>
</body>

</html>
