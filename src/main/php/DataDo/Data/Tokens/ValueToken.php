<?php

namespace DataDo\Data\Tokens;


class ValueToken extends AbstractToken
{
    private $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getName()
    {
        return 'Value';
    }

    public function getSource()
    {
        return $this->value;
    }
}