<?php

echo "Olá, mundo!\n";

class Main
{
    private string $name;

    public function __construct()
    {
        echo "Hello\n";
    }

    /**
     * just a test
     *
     * @param string $name
     * @return void
     */
    public function teste(string $name): void
    {
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this -> name;
    }

    /**
     * Set the values of name
     * 
     * @return self
     */
    public function setName($name)
    {
        $this -> name = $name;

        return $this;
    }
}

