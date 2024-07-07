<?php

declare(strict_types=1);

namespace BorysZielonka\Tests\Php7DataStructuresAlgorithms\Chapter06\BinaryTree;

use BorysZielonka\Php7DataStructuresAlgorithms\Chapter06\BinaryTree\BinaryTreeNode;
use PHPUnit\Framework\TestCase;

class BinaryTreeNodeTest extends TestCase
{
    public function testAddChildren(): void
    {
        $grandDaughter = new BinaryTreeNode('grand_daughter');
        $grandSon = new BinaryTreeNode('grand_son');
        $firstSon = new BinaryTreeNode('first_son');
        $secondSon = new BinaryTreeNode('second_son');
        $father = new BinaryTreeNode('father');
        $aunt = new BinaryTreeNode('aunt_father\'s_sister');
        $grandMother = new BinaryTreeNode('grand_mother');

        $grandMother->addChildren($aunt, $father);
        $father->addChildren($firstSon, $secondSon);
        $firstSon->addChildren($grandDaughter, $grandSon);

        self::assertEquals($grandDaughter->data, $grandMother?->right?->left?->left->data);
        self::assertEquals($grandSon->data, $grandMother?->right?->left?->right?->data);
    }
}