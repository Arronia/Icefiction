<?php

namespace Cielo\API30;

/**
 * Class Merchant
 *
 * @package Cielo\API30
 */
class Merchant
{
    private $id;
    private $key;

    /**
     * Merchant constructor.
     *
     * @param $id
     * @param $key
     */
    public function __construct($id, $key)
    {
        $this->id  = $id;
        $this->key = $key;
    }

    
}
