<?php
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Type = (int)$_POST['Type'];
$eMail = $_POST['eMail'];
$Username = $_POST['Username'];
$Password = sha1($_POST['Password']);
    
  $db = new mysqli('68.178.217.43', 'paigeweber', 'Bison51#', 'paigeweber');
  if(!mysqli_connect_errno())
    {
         header("Location: index.php");
    }
  else
    {
    echo 'Connection to database failed:'.mysqli_connect_error();
    exit();
    }
    
    
    // PROBLEM HERE, getting the correct values but insert statement is not working
    // google about inserting only specific values? primary key userid is not being inserted because it should be created by a counter in the database
    // database login: go to this link https://p3nlmysqladm002.secureserver.net/grid55/203/index.php
    // username: paigeweber , password: Bison51#
    
    $query = "INSERT INTO User(Fname, Lname, Type, eMail, Username, Password) VALUES (?, ?, ?, ?, ?, ?);";
       $stmt = $db->prepare($query);
       $stmt->bind_param('ssssss', $Fname, $Lname, $Type, $eMail, $Username, $Password);
       $stmt->execute();
    //----------------------
       $db->close();
    
    
   

?>

