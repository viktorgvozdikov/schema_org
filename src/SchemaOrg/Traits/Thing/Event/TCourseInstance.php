<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Event;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCourseInstance{
	 /**
	 * The medium or means of delivery of the course instance or the mode of study, either as a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or as a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
	 * @var String $courseMode
	 */
	protected $courseMode;

	 /**
	 * The amount of work expected of students taking the course, often provided as a figure per week or per month, and may be broken down by type. For example, "2 hours of lectures, 1 hour of lab work and 3 hours of independent study per week".
	 * @var String $courseWorkload
	 */
	protected $courseWorkload;

	 /**
	 * A person assigned to instruct or provide instructional assistance for the <a class="localLink" href="/CourseInstance">CourseInstance</a>.
	 * @var String $instructor
	 */
	protected $instructor;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCourseMode($x){
		$this->courseMode = new Text('CourseMode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCourseWorkload($x){
		$this->courseWorkload = new Text('CourseWorkload',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInstructor($x){
		$this->instructor = new Text('Instructor',$x);
		return $this;
	}


}