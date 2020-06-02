<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TOccupation{
	 /**
	 * Educational background needed for the position or Occupation.
	 * @var String $educationRequirements
	 */
	protected $educationRequirements;

	 /**
	 * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
	 * @var String $estimatedSalary
	 */
	protected $estimatedSalary;

	 /**
	 * Description of skills and experience needed for the position or Occupation.
	 * @var String $experienceRequirements
	 */
	protected $experienceRequirements;

	 /**
	 * The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.
	 * @var String $occupationLocation
	 */
	protected $occupationLocation;

	 /**
	 * A category describing the job, preferably using a term from a taxonomy such as <a href="http://www.onetcenter.org/taxonomy.html">BLS O*NET-SOC</a>, <a href="https://www.ilo.org/public/english/bureau/stat/isco/isco08/">ISCO-08</a> or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.<br><br>
	 * 
	 * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
	 * @var String $occupationalCategory
	 */
	protected $occupationalCategory;

	 /**
	 * Specific qualifications required for this role or Occupation.
	 * @var String $qualifications
	 */
	protected $qualifications;

	 /**
	 * Responsibilities associated with this role or Occupation.
	 * @var String $responsibilities
	 */
	protected $responsibilities;

	 /**
	 * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill this role or to work in this occupation.
	 * @var String $skills
	 */
	protected $skills;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setEducationRequirements($x){
		$this->educationRequirements = new Text('EducationRequirements',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEstimatedSalary($x){
		$this->estimatedSalary = new Text('EstimatedSalary',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExperienceRequirements($x){
		$this->experienceRequirements = new Text('ExperienceRequirements',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOccupationLocation($x){
		$this->occupationLocation = new Text('OccupationLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOccupationalCategory($x){
		$this->occupationalCategory = new Text('OccupationalCategory',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setQualifications($x){
		$this->qualifications = new Text('Qualifications',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setResponsibilities($x){
		$this->responsibilities = new Text('Responsibilities',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSkills($x){
		$this->skills = new Text('Skills',$x);
		return $this;
	}


}