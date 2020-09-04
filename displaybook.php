
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","","lms");
if(!$conn)
{
	die("Connection Failed:".mysqli_connect_error());
}

$search=$_POST["search"];
$query="select * from book where book_name like '%$search%'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result))
{
?>
<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>
<th>Book_id</th>
<th>Book_Name</th>
<th>Author</th>
<th>Download Link</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["book_id"];?> </td>
<td><?php echo $row["book_name"];?> </td>
<td><?php echo $row["Author"];?> </td>
<td><a href="<?php echo $row["Download Link"];?>"> Download</a></td>
</tr>
<?php
}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
?>
</table>
</body>
</html>


