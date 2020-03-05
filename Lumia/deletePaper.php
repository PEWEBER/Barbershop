<?php

$db = new mysqli('68.178.217.43', 'paigeweber', 'Bison51#', 'paigeweber');
if(mysqli_connect_errno())
  {
      echo 'Connection to database failed:'.mysqli_connect_error();
      exit();
  }

$PaperID = $_GET['PaperID'];

   $checkQuery = "select * from Papers where PaperID = ".$PaperID.";";

    $checkResult = $db->query($checkQuery);

    if ($checkResult)

    {

        if ($db->affected_rows > 0)

        {

            $query = "delete from Papers where PaperID = ".$PaperID.";";

            //run the query and store in $result

            $result = $db->query($query);



            //lets you know how many rows were inserted into the database or an error if there was an error

            if ($result)

            {

                header("Location: archive.php?success=true");

            }

        }



    }

    else

    {

        header("Location: archive.php?success=false");

    }

?>
