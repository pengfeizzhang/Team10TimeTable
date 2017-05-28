<?php
    include_once("includes/config.php");

    if (isset($_GET['first']))
    {
        $firstname = $_GET['first'];
        $sql = "SELECT * FROM users WHERE firstname='$firstname'";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
                echo '<h1>'.$row["firstname"]."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["id"].'</td></tr>';
                echo '<tr><td>Avatar:</td><td><img src="'.$row["avatar"].'" width="100px" /></td></tr>';
                echo '<tr><td>Firstname:</td><td>'.$row["firstname"].'</td></tr>';
                echo '<tr><td>Lastname:</td><td>'.$row["lastname"].'</td></tr>';
                echo '<tr><td>Country:</td><td>'.$row["country"].'</td></tr>';
                echo '<tr><td>Background Colour:</td><td>'.$row["bgcolour"].'</td></tr>';
            }
            echo '</table>';
            echo '<form action="/CompSciProject(Timetable)/Team10TableVert.php" method="get"> <button type="submit" value="'.$row["firstname"].'" name="Name" />Go to '.$row["firstname"].'s Profile</button></form>';
        }
        else {
           echo "0 results";
        }
    }
    else {

        echo '<h2>All our members:</h2>';include_once("includes/config.php");

        $sql = "SELECT * FROM users";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
   
            while($row = $result->fetch_assoc()) {
                
                echo '<hr />';
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["id"].'</td></tr>';
                echo '<tr><td>Avatar:</td><td><img src="'.$row["avatar"].'" width="100px" /></td></tr>';
                echo '<tr><td>Firstname:</td><td>'.$row["firstname"].'</td></tr>';
                echo '<tr><td>Lastname:</td><td>'.$row["lastname"].'</td></tr>';
                echo '<tr><td>Country:</td><td>'.$row["country"].'</td></tr>';
                echo '<tr><td>BG Colour:</td><td>'.$row["bgcolour"].'</td></tr>';
                echo '</table>';
                echo '<form action="/CompSciProject(Timetable)/Team10TableVert.php" method="get"> <button type="submit" value="'.$row["firstname"].'" name="Name" />Go to '.$row["firstname"].'s Profile</button></form>';

            }
        }
        else {
           echo "0 results";
        }
    }
    
    include_once("includes/menu.php");
?>