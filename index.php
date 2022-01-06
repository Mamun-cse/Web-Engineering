<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bookstore</title>
<style>
	    body{
			background-color:#FFDEAD;
		}
        table{
            border-collapse: collapse;
            width: 600px;
			
        }
        table,th,td{
            border:1px solid black;
        }
        td{
            text-align: center;
        }
    
    </style>
</head>

<body>
<?php
	$booksJson = file_get_contents('books.json');
	$books = json_decode($booksJson, true);
?>
<form action="search.php" method="post" align="center">
	Search:
	<input type="text" name="search"  placeholder="search by author" Required id="search">
	<input  type ="submit">
	Create New:
	<button><a href="create.php">create</a></button>
</form>
<table align="center">
	<br> 
	<tr bgcolor="gray">
		<th> ID </th>
		<th> Title </th>
		<th> Author </th>
		<th> Available </th>
		<th> Pages </th>
		<th> Isbn </th>
		<th> Action </th>
		<th>Edit</th>

	</tr>
	<?php foreach ($books as $key => $book): ?>
	<tr bgcolor="#D3D3D3">
	    <td><?php echo ($book['id']); ?></td>
		<td><?php echo ($book['title']); ?></td>
		<td><?php echo ($book['author']); ?></td>
		<td><?php echo ($book['available']); ?></td>
		<td><?php echo ($book['pages']); ?></td>
		<td><?php echo ($book['isbn']); ?></td>
		<td>
		   <a href="<?php echo 'delete.php?' . 'id=' .$key; ?>"> Delete</a>
		</td>
		<td><a href="edit.php">Edit</a></td>
	</tr>
	<?php endforeach; ?>
	
</table>
</body>
</html>