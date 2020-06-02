<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Product;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TProductModel{
	 /**
	 * A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.
	 * @var String $isVariantOf
	 */
	protected $isVariantOf;

	 /**
	 * A pointer from a previous, often discontinued variant of the product to its newer variant.
	 * @var String $predecessorOf
	 */
	protected $predecessorOf;

	 /**
	 * A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
	 * @var String $successorOf
	 */
	protected $successorOf;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsVariantOf($x){
		$this->isVariantOf = new Text('isVariantOf',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPredecessorOf($x){
		$this->predecessorOf = new Text('predecessorOf',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSuccessorOf($x){
		$this->successorOf = new Text('successorOf',$x);
		return $this;
	}


}