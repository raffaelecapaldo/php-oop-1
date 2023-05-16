<?php
class Genre {
    public $name;
    
    /**
     * Genre constructor.
     * @param string $name The name of the genre.
     */

    function __construct(string $name)
    {
        $this->name = $name;
    }
}