<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TQuestion{
	 /**
	 * The answer(s) that has been accepted as best, typically on a Question/Answer site. Sites vary in their selection mechanisms, e.g. drawing on community opinion and/or the view of the Question author.
	 * @var String $acceptedAnswer
	 */
	protected $acceptedAnswer;

	 /**
	 * The number of answers this question has received.
	 * @var String $answerCount
	 */
	protected $answerCount;

	 /**
	 * The number of downvotes this question, answer or comment has received from the community.
	 * @var String $downvoteCount
	 */
	protected $downvoteCount;

	 /**
	 * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
	 * @var String $suggestedAnswer
	 */
	protected $suggestedAnswer;

	 /**
	 * The number of upvotes this question, answer or comment has received from the community.
	 * @var String $upvoteCount
	 */
	protected $upvoteCount;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAcceptedAnswer($x){
		$this->acceptedAnswer = new Text('AcceptedAnswer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAnswerCount($x){
		$this->answerCount = new Text('AnswerCount',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDownvoteCount($x){
		$this->downvoteCount = new Text('DownvoteCount',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSuggestedAnswer($x){
		$this->suggestedAnswer = new Text('SuggestedAnswer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUpvoteCount($x){
		$this->upvoteCount = new Text('UpvoteCount',$x);
		return $this;
	}


}