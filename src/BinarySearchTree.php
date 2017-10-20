<?php

namespace BinarySearchTree;

class BinarySearchTree
{
    /** @var object */
    protected $root;

    /**
     * 
     */
    protected $idGenerator;

    /**
     * $idGenerator generates a numeric id from the node
     * TODO: maybe generate a default value if nothing is passed
     * 
     * @param callable $idGenerator
     */
    function __construct(callable $idGenerator) {
        $this->idGenerator = $idGenerator;
    }

    function add($item) {
        $node = new Node($item);

        if (!$this->root) {
            $this->root = $node;
        } else {
            if (call_user_func_array($this->idGenerator, [$item, ]))
        }
    }

}