<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCourse{
	 /**
	 * The identifier for the <a class="localLink" href="/Course">Course</a> used by the course <a class="localLink" href="/provider">provider</a> (e.g. CS101 or 6.001).
	 * @var String $courseCode
	 */
	protected $courseCode;

	 /**
	 * Requirements for taking the Course. May be completion of another <a class="localLink" href="/Course">Course</a> or a textual description like "permission of instructor". Requirements may be a pre-requisite competency, referenced using <a class="localLink" href="/AlignmentObject">AlignmentObject</a>.
	 * @var String $coursePrerequisites
	 */
	protected $coursePrerequisites;

	 /**
	 * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
	 * @var String $educationalCredentialAwarded
	 */
	protected $educationalCredentialAwarded;

	 /**
	 * An offering of the course at a specific time and place or through specific media or mode of study or to a specific section of students.
	 * @var String $hasCourseInstance
	 */
	protected $hasCourseInstance;

	 /**
	 * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
	 * @var String $numberOfCredits
	 */
	protected $numberOfCredits;

	 /**
	 * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
	 * @var String $occupationalCredentialAwarded
	 */
	protected $occupationalCredentialAwarded;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCourseCode($x){
		$this->courseCode = new Text('courseCode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCoursePrerequisites($x){
		$this->coursePrerequisites = new Text('coursePrerequisites',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEducationalCredentialAwarded($x){
		$this->educationalCredentialAwarded = new Text('educationalCredentialAwarded',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasCourseInstance($x){
		$this->hasCourseInstance = new Text('hasCourseInstance',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfCredits($x){
		$this->numberOfCredits = new Text('numberOfCredits',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOccupationalCredentialAwarded($x){
		$this->occupationalCredentialAwarded = new Text('occupationalCredentialAwarded',$x);
		return $this;
	}


}