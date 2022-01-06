<?php
$books="";
if (file_exists('books.json')){
    $booksJson = file_get_contents('books.json');
    $books = json_decode($booksJson, true);
}
else{
    $books=arrar();
}
//print_r($books);


$key = $_GET['id'];

array_splice($books, $key, 1);


$db_enc = json_encode($books);
file_put_contents('books.json', $db_enc);
header('Location: index.php');
exit();
?>
