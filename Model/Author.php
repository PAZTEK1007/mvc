<?php
class Author
{
    public int $id;
    public string $name;
    public ?string $lastName;
    public ?string $dateOfBirth;
    public ?string $picture;
    public ?string $description;

    public function __construct(?int $id, ?string $name, ?string $lastName, ?string $dateOfBirth, ?string $picture, ?string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->picture = $picture;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDateOfBirth($format = 'd-m-y')
    {
        $date = $this->dateOfBirth;
    
        if ($date !== null && $date !== '') {
            $dateTime = date_create($date);
    
            if ($dateTime !== false) {
                $formattedDate = date_format($dateTime, $format);
                return $formattedDate;
            } else {
                return 'Invalid Date';
            }
        } else {
            return 'No Date Available';
        }
    }
}
