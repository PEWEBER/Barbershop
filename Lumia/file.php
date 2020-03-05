<?php
    session_start();

    $db = new mysqli('68.178.217.43', 'paigeweber', 'Bison51#', 'paigeweber');
    if(mysqli_connect_errno())
      {
          echo 'Connection to database failed:'.mysqli_connect_error();
          exit();
      }
    
    $userID = $_SESSION['USERID'];
    // if youre an admin
       $query = "SELECT Title, Author, Paper FROM Papers";
           $result = $db-> query($query);
           if($result -> num_rows > 0)
           {
               while ($row = $result->fetch_assoc()) {
                   $field1name = $row["Title"];
                   $field2name = $row["Author"];
                   $field3name = $row["Paper"];
                   $field4name = $row["Reviewer"];
                   
                   echo '<tr>
                   <td>'.$field1name.'</td>
                   <td>'.$field2name.'</td>
                   <td>'.$field4name.'</td>
                   </tr>';
                   //echo $field3name;
             $file = $field3name; //Let say If I put the file name Bang.png
             echo "<a href='download.php?nama=".$file."'>download</a> ";
        
    
      // if you are a presenter
           $query = "SELECT Title, Author, Paper FROM Papers where UserID=".$userID.";";
            $result = $db-> query($query);
            if($result -> num_rows > 0)
            {
                while ($row = $result->fetch_assoc()) {
                    $field1name = $row["Title"];
                    $field2name = $row["Author"];
                    $field3name = $row["Paper"];
                    $field4name = $row["Reviewer"];
                    
                    echo '<tr>
                    <td>'.$field1name.'</td>
                    <td>'.$field2name.'</td>
                     <td>'.$field4name.'</td>
                    </tr>';
                    //echo $field3name;
              $file = $field3name; //Let say If I put the file name Bang.png
                    echo "<a href='download.php?nama=".$file."'>download</a> ";
                }
            }
         
     // if you are a reviewer
       $query = "SELECT Title, Author, Paper FROM Papers where ReviewerID=".$userID.";";
        $result = $db-> query($query);
        if($result -> num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                $field1name = $row["Title"];
                $field2name = $row["Author"];
                $field3name = $row["Paper"];
                $field4name = $row["Reviewer"];
                                       
                echo '<tr>
                    <td>'.$field1name.'</td>
                    <td>'.$field2name.'</td>
                    </tr>';
                                       //echo $field3name;
                $file = $field3name; //Let say If I put the file name Bang.png
                echo "<a href='download.php?nama=".$file."'>Download Paper</a> ";
                
            }
    }

?>
