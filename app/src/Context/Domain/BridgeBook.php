<?php

namespace Bridge\Context\Domain;

/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 29/05/2018
 * Time: 1:11
 */
abstract class BridgeBook
{
    private $bbAuthor;
    private $bbTitle;
    private $bbImp;

    function __construct($author_in, $title_in, $choice_in)
    {
        $this->bbAuthor = $author_in;
        $this->bbTitle = $title_in;
        if ('STARS' == $choice_in) {
            $this->bbImp = new BridgeBookStarsImp();
        } else {
            $this->bbImp = new BridgeBookCapsImp();
        }
    }

    function showAuthor()
    {
        return $this->bbImp->showAuthor($this->bbAuthor);
    }

    function showTitle()
    {
        return $this->bbImp->showTitle($this->bbTitle);
    }
}