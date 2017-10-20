<?php

namespace BinarySearchTree;

class Node implements IdGenerator
{
//    protected $id;
    public $item;
    protected $left;
    protected $right;


    function __construct($item)
    {
        $this->item = $item;
    }

    /**
     * @param mixed $id
     * @return Node
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}