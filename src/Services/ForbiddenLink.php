<?php

namespace App\Services;

class ForbiddenLink
{
    private $forbiddenLink;

    public function __construct($forbiddenLink)
    {
        $this->forbiddenLink = $forbiddenLink;
    }

    public function getContents($data)
    {
        if ($this->forbiddenLink == $data) {
            var_dump('XXX');

            return false;
        }

        return $data;
    }
}
