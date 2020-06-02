<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPublicationIssue{
	 /**
	 * Identifies the issue of publication; for example, "iii" or "2".
	 * @var String $issueNumber
	 */
	protected $issueNumber;

	 /**
	 * The page on which the work ends; for example "138" or "xvi".
	 * @var String $pageEnd
	 */
	protected $pageEnd;

	 /**
	 * The page on which the work starts; for example "135" or "xiii".
	 * @var String $pageStart
	 */
	protected $pageStart;

	 /**
	 * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
	 * @var String $pagination
	 */
	protected $pagination;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setIssueNumber($x){
		$this->issueNumber = new Text('IssueNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPageEnd($x){
		$this->pageEnd = new Text('PageEnd',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPageStart($x){
		$this->pageStart = new Text('PageStart',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPagination($x){
		$this->pagination = new Text('Pagination',$x);
		return $this;
	}


}