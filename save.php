<?php
$booksJson = file_get_contents('books.json');
$books = json_decode($booksJson, true);
if($_GET['title']){
   $new_book=array($_GET);
$books = array_merge($books,$new_book);
$booksJson = json_encode($books);
file_put_contents('books.json', $booksJson);
header('Location: index.php');
exit();
}

?>
