<?php
declare(strict_types=1);


namespace Invert;

class BinaryTree
{
	public $value = null; // node value
	public $left = null; // left child
	public $right = null; // right child

	public function __construct($value) {
		$this->value = $value;
	}
}