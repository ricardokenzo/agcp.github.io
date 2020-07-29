<?php
//login authentication file
//initiate session
session_start();
//open xml file with account information
$mydata = simplexml_load_file("accounts.xml");

$login = "";
$password = "";
$loginname = "";
//run through the file to check login and password values
for($i = 0; $i < count($mydata); $i++){

    $login = $mydata->login_details[$i]->login;
    $password = $mydata->login_details[$i]->password;
    $loginname = $mydata->login_details[$i]->login_name;


    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        $_SESSION['error']='Please fill in both username and password';
        exit(header("Location:index.php"));
    }

    //if the username and password matches with the xml:
    if(($_POST["username"] == $login) && ($_POST["password"] == $password)){
        //set logged in
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
        //unset password no need to include that
        unset($mydata->login_details[$i]->password);

        //json encode the user stuff from the xml
        $_SESSION['user_details'] = json_encode($mydata->login_details[$i]);

        //redirect to homepage
        exit(header("Location: index.php"));

    } 
}
$_SESSION['error']='Invalid username or password';
exit(header("Location:index.php"));
?> 