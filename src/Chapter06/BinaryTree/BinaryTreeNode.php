<?php

declare(strict_types=1);

namespace BorysZielonka\Php7DataStructuresAlgorithms\Chapter06\BinaryTree;

class BinaryTreeNode {

    public $data;
    public ?BinaryTreeNode $left;
    public ?BinaryTreeNode $right;

    public function __construct(string $data = NULL)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }

    public function addChildren(BinaryTreeNode $left, BinaryTreeNode $right): void
    {
        $this->left = $left;
        $this->right = $right;
    }
}
