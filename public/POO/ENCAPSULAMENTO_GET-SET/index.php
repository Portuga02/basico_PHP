<?php
include "./Post.php";

$post1 = new Post();

$post1->setAuthor( 'Sávio' );

$post2 = new Post();
$post2->setAuthor( 'Gomes' );

echo 'POST1'.$post1->likes.'likes -'.$post1->getAuthor().'<br>';

echo 'POST2'.$post2->likes.'likes -'.$post1->getAuthor().'<br>';
?>