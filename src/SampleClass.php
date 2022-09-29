<?php

namespace sample;

class SampleClass
{
    private $some_string;

    public function __construct(string $string = null)
    {
        $this->some_string = $string;
    }

    public function getString(): string
    {
        return $this->some_string;
    }

}