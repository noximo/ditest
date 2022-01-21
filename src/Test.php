<?php

namespace App;

final class Test
{
    /**
     * @var OtherClass
     */
    private $otherClass;

    public function __construct(OtherClass $otherClass)
    {
        $this->otherClass = $otherClass;
    }

    public function go(): void
    {
        $this->otherClass->go();
    }
}
