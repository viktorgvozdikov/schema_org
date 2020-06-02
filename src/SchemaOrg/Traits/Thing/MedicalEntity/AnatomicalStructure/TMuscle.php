<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\MedicalEntity\AnatomicalStructure;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMuscle{
	 /**
	 * The muscle whose action counteracts the specified muscle.
	 * @var String $antagonist
	 */
	protected $antagonist;

	 /**
	 * The blood vessel that carries blood from the heart to the muscle.
	 * @var String $bloodSupply
	 */
	protected $bloodSupply;

	 /**
	 * The place of attachment of a muscle, or what the muscle moves.
	 * @var String $insertion
	 */
	protected $insertion;

	 /**
	 * The movement the muscle generates.
	 * @var String $muscleAction
	 */
	protected $muscleAction;

	 /**
	 * The underlying innervation associated with the muscle.
	 * @var String $nerve
	 */
	protected $nerve;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAntagonist($x){
		$this->antagonist = new Text('antagonist',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBloodSupply($x){
		$this->bloodSupply = new Text('bloodSupply',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInsertion($x){
		$this->insertion = new Text('insertion',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMuscleAction($x){
		$this->muscleAction = new Text('muscleAction',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNerve($x){
		$this->nerve = new Text('nerve',$x);
		return $this;
	}


}