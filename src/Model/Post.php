<?php
/**
 * Created by PhpStorm.
 * User: raphael-edouardlaurence
 * Date: 2019-01-02
 * Time: 08:52
 */

namespace App\Model;


class Post
{
    private $id;
    private $title;
    private $content;
    private $dateCrea;

    public function __construct($values = null)
    {
        if ($values != null) {
            $this->hydrate($values);
        }

    }

    public function hydrate(array $values)
    {
        foreach ($values as $key => $value) {
            $elements = explode ('_', $key);
            $newKey = '';
            foreach ($elements as $el) {
                $newKey .= ucfirst ($el);
            }

            $method = 'set'.ucfirst ($newKey);
            if(method_exists ($this,$method)){

                $this->$method($value);
            }
        }
    }

    public function getId (): ?int
    {
        return $this->id;
    }


    public function setId (int $id): void
    {
        $this->id = $id;
    }


    public function getTitle (): ?string
    {
        return $this->title;
    }


    public function setTitle (string $title): void
    {
        $this->title = $title;
    }


    public function getContent (): ?string
    {
        return $this->content;
    }


    public function setContent (string $content): void
    {
        $this->content = $content;
    }


    public function getDateCrea ()
    {
        return $this->dateCrea;
    }


    public function setDateCrea ($dateCrea): void
    {
        $this->dateCrea = $dateCrea;
    }
}