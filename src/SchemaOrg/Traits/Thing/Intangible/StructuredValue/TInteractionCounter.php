<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TInteractionCounter{
	 /**
	 * The WebSite or SoftwareApplication where the interactions took place.
	 * @var String $interactionService
	 */
	protected $interactionService;

	 /**
	 * The Action representing the type of interaction. For up votes, +1s, etc. use <a class="localLink" href="/LikeAction">LikeAction</a>. For down votes use <a class="localLink" href="/DislikeAction">DislikeAction</a>. Otherwise, use the most specific Action.
	 * @var String $interactionType
	 */
	protected $interactionType;

	 /**
	 * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
	 * @var String $userInteractionCount
	 */
	protected $userInteractionCount;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setInteractionService($x){
		$this->interactionService = new Text('InteractionService',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInteractionType($x){
		$this->interactionType = new Text('InteractionType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUserInteractionCount($x){
		$this->userInteractionCount = new Text('UserInteractionCount',$x);
		return $this;
	}


}