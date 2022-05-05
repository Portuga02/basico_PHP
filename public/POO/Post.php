<?php

class Post {

    public int $id;
    public int $likes = 0;
    private  string $author;

    public function aumentarLikes() {
        $this->likes++;
    }

    public function setAuthor( $n ) {
        $this->author = ucfirst( $n );
    }

    public function getAuthor() {
        return $this->author;
    }

}
$post1 = new Post();

$post1->setAuthor( 'Sávio' );

$post2 = new Post();
$post2->setAuthor( 'Gomes' );

echo 'POST1'.$post1->likes.'likes -'.$post1->getAuthor().'<br>';

echo 'POST2'.$post2->likes.'likes -'.$post1->getAuthor().'<br>';
?>