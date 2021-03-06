<?php
class Comment
{
    private $cnum;
    private $blogNum;
    private $text;
    private $user;
    private $created;

    public function __construct($cnum, $blogNum, $text, $user, $created)
    {
        $this->setCnum($cnum);
        $this->setBlogNum($blogNum);
        $this->setText($text);
        $this->setUser($user);
        $this->setCreated($created);
    }

    public function getCnum()
    {
        return $this->cnum;
    }

    public function setCnum($cnum)
    {
        $this->cnum = (int)$cnum;
    }

    public function getBlogNum()
    {
        return $this->blogNum;
    }

    public function setBlogNum($blogNum)
    {
        $this->blogNum = (int)$blogNum;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = strip_tags($text);
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = strip_tags($user);
    }

    public function getCreated()
    {
        return $this->created;
    }
    
    public function setCreated($created)
    {
        $this->created = date('l jS \of F Y h:i:sa', $created);
    }
}