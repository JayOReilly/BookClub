<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Books
 *
 * @ORM\Table(name="books")
 * @ORM\Entity
 */
class Books
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="book1", type="string", length=255, nullable=false)
     */
    private $book1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBook1(): ?string
    {
        return $this->book1;
    }

    public function setBook1(string $book1): self
    {
        $this->book1 = $book1;

        return $this;
    }


}
