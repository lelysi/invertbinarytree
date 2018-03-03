<?php
declare(strict_types=1);

namespace Invert;

class TreeInverter 
{
	public function invertTree(BinaryTree $tree = null)
	{
		if (is_null($tree))
			return $tree;

		if (!is_null($tree->left) || !is_null($tree->right))
		{
			$saveNode = $this->invertTree($tree->left);
			$tree->left = $this->invertTree($tree->right);
			$tree->right = $saveNode;
		}
		return $tree;
	}
}