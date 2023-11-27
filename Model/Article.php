<?php

declare(strict_types=1);

class Article
{
    public int $id;
    public string $title;
    public ?string $description;
    public ?string $publishDate;
    public ?string $author;
    public ?string $imgSrc;

    public function __construct(?int $id, ?string $title, ?string $description, ?string $author, ?string $imgSrc, ?string $publishDate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
        $this->author = $author;
        $this->imgSrc = $imgSrc;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getImgSrc()
    {
        return $this->imgSrc;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function getPublishDate($format = 'd-m-y')
    {
        // TODO: return the date in the required format
        
        $date = $this->publishDate;
        $date = date_create($date);
        $date = date_format($date, $format);

        return $date;
    }

}