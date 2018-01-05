<?php
	
$name = $_REQUEST['name'];
$comments = $_REQUEST['comments'];
$email = $_REQUEST['email'];


require("db/db.php");

mysqli_query($con, "INSERT INTO comments(name, comments, email) VALUES('$name','$comments','$email')");

$result = mysqli_query($con, "SELECT * FROM comments ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<h1>" . $row['name'] . "</h1>";
echo "<h2>" . $row['date_publish'] . "</h2></br></br>";
echo "<h3>" . $row['comments'] . "</h3>";
echo "<h1>" . $row['email'] . "</h1></br>";
echo "<h4><a href='delete.php?id=" . $row['id'] . "'>DELETE</a></h4>";
echo "</div>";
}
mysqli_close($con);
?>