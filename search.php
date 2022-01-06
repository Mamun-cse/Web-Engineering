<?php
$books="";
if (file_exists('books.json')){
    $booksJson = file_get_contents('books.json');
    $books = json_decode($booksJson, true);
}
else{
    $books=arrar();
}

$search = $_POST['search'];
$result=array();

foreach ($books as $key => $value) {
    if($value['author']==$search){
        array_push($result,$value);
    }
}

?>
<html>
    <head>
    <style>
	    body{
			background-color:#FFEFD5;
		}
        table{
            border-collapse: collapse;
            width: 500px;
			
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
    <h1>Searching Result</h1>
   <table>
	<tr bgcolor="gray">
		<th> ID </th>
		<th> Title </th>
        <th> Author </th>
        <th> Available </th>
        <th> Pages </th>
		<th> Isbn </th>
		<th> Action </th>
        <th> Edit</th>

	</tr>
	<?php foreach ($result as $key => $book): ?>
	<tr bgcolor="#D3D3D3">
	    <td> <?php echo ($book['id']); ?></td>
		<td> <?php echo ($book['title']); ?></td>
        <td><?php echo ($book['author']); ?></td>
        <td><?php echo ($book['available']); ?>
        <td><?php echo ($book['pages']); ?></td>
		<td><?php echo ($book['isbn']); ?></td>
		</td>
		<td>
		    <a href="<?php echo 'delete.php?'.'id='.$key ?>">Delete</a>
		</td>
        <td><a href="edit.php">Edit</a></td>
	</tr>
	<?php endforeach; ?>
    </table>
    <form><button><a href="index.php">Home</a></button></form>
</body>
</html>