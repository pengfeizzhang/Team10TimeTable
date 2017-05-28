<form action="delete.php" method="post" enctype="multipart/form-data">
    <table>
    <tr><td>Firstname of user to delete:</td><td><input type="text" name="first" value="" placeholder="" size="20"></td></tr>
    </table>
    <input type="submit" value="Delete" name="submit">
</form>

<?php
    include_once("includes/config.php");

    if (isset($_POST['first']))
    {
        $firstname = $_POST['first'];
        
        $sql = "DELETE FROM users WHERE firstname='$firstname'";
        
        if ($conn->query($sql) === TRUE) {
			echo "User deleted!<br />";
		}
		else {
			echo "User wasn't deleted.<br />";
		}
    }
    include_once("includes/menu.php");
?>