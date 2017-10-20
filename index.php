<?php

use BinarySearchTree\BinarySearchTree;
use BinarySearchTree\Node;

require __DIR__ . '/vendor/autoload.php';

$bst = new BinarySearchTree(function($a, $b) {
    return $a < $b;
});

$bst->add(new Node('Hello'));