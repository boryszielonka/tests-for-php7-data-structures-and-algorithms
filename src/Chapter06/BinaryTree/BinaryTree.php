<?php

declare(strict_types=1);

namespace BorysZielonka\Php7DataStructuresAlgorithms\Chapter06\BinaryTree;

class BinaryTree
{
    public function __construct(private readonly BinaryTreeNode $root)
    {
    }

    public function isEmpty(): bool
    {
        return $this->root === NULL;
    }

    public function traverse(BinaryTreeNode $node, int $level = 0): void
    {

        if ($node) {
            echo str_repeat("-", $level);
            echo $node->data . "\n";

            if ($node->left)
                $this->traverse($node->left, $level + 1);

            if ($node->right)
                $this->traverse($node->right, $level + 1);
        }
    }
}
