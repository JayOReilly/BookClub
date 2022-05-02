<?php

namespace App\Util;

class BookList
{


    private string $nameOfBook;
    private string $authorOfBook;
    private string $numOfPages;

    /**
     * @return string
     */
    public function getNameOfBook(): string
    {
        return $this->nameOfBook;
    }

    /**
     * @param string $nameOfBook
     */
    public function setNameOfBook(string $nameOfBook): void
    {
        $this->nameOfBook = $nameOfBook;
    }

    /**
     * @return string
     */
    public function getAuthorOfBook(): string
    {
        return $this->authorOfBook;
    }

    /**
     * @param string $authorOfBook
     */
    public function setAuthorOfBook(string $authorOfBook): void
    {
        $this->authorOfBook = $authorOfBook;
    }

    /**
     * @return string
     */
    public function getNumOfPages(): string
    {
        return $this->numOfPages;
    }

    /**
     * @param string $numOfPages
     */
    public function setNumOfPages(string $numOfPages): void
    {
        $this->numOfPages = $numOfPages;
    }

}