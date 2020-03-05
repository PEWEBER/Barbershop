<?php
session_start();
$UserID = $_SESSION['USERID'];
$Title = $_POST['Title'];
$Author = $_POST['Author'];
//$Paper = $_POST['Paper'];
if(isset($_POST['submit']))
{
	$file = $_FILES['Paper'];
	$fileName = $_FILES['Paper']['name'];
	$fileTempName = $_FILES['Paper']['tmp_name'];
	$fileSize = $_FILES['Paper']['size'];
	$fileError = $_FILES['Paper']['error'];
	$fileType = $_FILES['Paper']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('pdf', 'doc', 'docx', 'txt', 'zip');

	if(in_array($fileActualExt, $allowed))
	{
		if($fileError === 0)
		{
			if($fileSize < 500000) // 500000kb = 500mb
			{
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTempName, $fileDestination);
        $bool = 'true';
			}
			else
			{
				echo "Your file is too large.";
			}
		}
		else
		{
			echo "There was an error uploading the file";
		}

	}
	else
	{
		echo "Invalid file type.";
	}
}
  $db = new mysqli('68.178.217.43', 'paigeweber', 'Bison51#', 'paigeweber');
  if(mysqli_connect_errno())
    {
        echo 'Connection to database failed:'.mysqli_connect_error();
        exit();
    }

    $query = "INSERT INTO Papers(Title, Author, Paper, UserID) VALUES (?, ?, ?, ?);";
       $stmt = $db->prepare($query);
       $stmt->bind_param('ssss', $Title, $Author, $fileDestination, $UserID);
       $stmt->execute();
    //----------------------

       $db->close();

       if($bool === 'true')
       {
       		header("Location: main.php?uploadsuccess=true");
       }

?>
