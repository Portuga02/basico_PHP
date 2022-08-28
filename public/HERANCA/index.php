<?php

class Post
{
    private int $id;
    private int $likes = 0;


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLikes($n)
    {
        $this->likes = $n;
    }

    public  function getLikes()
    {
        return $this->likes;
    }
}
class Foto extends Post
{
    private $url;    // esta classe está se extenddo da classe acima sendo assim a funcionalidade da herança


    public function __construct($id)
    {
        $this->setId($id);
    }
    public function setUrl($u)
    {
        $this->url = $u;
    }
    public function getUrl()
    {
        return $this->url;
    }
}
$foto  = new Foto(20);
$foto->setLikes(20);
$foto->setUrl('ABC');

echo "FOTO #" . $foto->getId() . "---" . $foto->getLikes() . "likes - " . $foto->getUrl();
