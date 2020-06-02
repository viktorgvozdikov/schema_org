<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TJobPosting{
	 /**
	 * The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be in a physical office. Note: This should not be used for citizenship or work visa requirements.
	 * @var String $applicantLocationRequirements
	 */
	protected $applicantLocationRequirements;

	 /**
	 * Contact details for further information relevant to this job posting.
	 * @var String $applicationContact
	 */
	protected $applicationContact;

	 /**
	 * The base salary of the job or of an employee in an EmployeeRole.
	 * @var String $baseSalary
	 */
	protected $baseSalary;

	 /**
	 * Publication date of an online listing.
	 * @var String $datePosted
	 */
	protected $datePosted;

	 /**
	 * Educational background needed for the position or Occupation.
	 * @var String $educationRequirements
	 */
	protected $educationRequirements;

	 /**
	 * The legal requirements such as citizenship, visa and other documentation required for an applicant to this job.
	 * @var String $eligibilityToWorkRequirement
	 */
	protected $eligibilityToWorkRequirement;

	 /**
	 * A description of the employer, career opportunities and work environment for this position.
	 * @var String $employerOverview
	 */
	protected $employerOverview;

	 /**
	 * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
	 * @var String $employmentType
	 */
	protected $employmentType;

	 /**
	 * Indicates the department, unit and/or facility where the employee reports and/or in which the job is to be performed.
	 * @var String $employmentUnit
	 */
	protected $employmentUnit;

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
	 * Organization offering the job position.
	 * @var String $hiringOrganization
	 */
	protected $hiringOrganization;

	 /**
	 * Description of bonus and commission compensation aspects of the job. Supersedes <a href="/incentives">incentives</a>.
	 * @var String $incentiveCompensation
	 */
	protected $incentiveCompensation;

	 /**
	 * The industry associated with the job position.
	 * @var String $industry
	 */
	protected $industry;

	 /**
	 * Description of benefits associated with the job. Supersedes <a href="/benefits">benefits</a>.
	 * @var String $jobBenefits
	 */
	protected $jobBenefits;

	 /**
	 * An indicator as to whether a position is available for an immediate start.
	 * @var String $jobImmediateStart
	 */
	protected $jobImmediateStart;

	 /**
	 * A (typically single) geographic location associated with the job position.
	 * @var String $jobLocation
	 */
	protected $jobLocation;

	 /**
	 * A description of the job location (e.g TELECOMMUTE for telecommute jobs).
	 * @var String $jobLocationType
	 */
	protected $jobLocationType;

	 /**
	 * The date on which a successful applicant for this job would be expected to start work. Choose a specific date in the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.
	 * @var String $jobStartDate
	 */
	protected $jobStartDate;

	 /**
	 * A category describing the job, preferably using a term from a taxonomy such as <a href="http://www.onetcenter.org/taxonomy.html">BLS O*NET-SOC</a>, <a href="https://www.ilo.org/public/english/bureau/stat/isco/isco08/">ISCO-08</a> or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.<br><br>
	 * 
	 * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
	 * @var String $occupationalCategory
	 */
	protected $occupationalCategory;

	 /**
	 * A description of the types of physical activity associated with the job. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
	 * @var String $physicalRequirement
	 */
	protected $physicalRequirement;

	 /**
	 * Specific qualifications required for this role or Occupation.
	 * @var String $qualifications
	 */
	protected $qualifications;

	 /**
	 * The Occupation for the JobPosting.
	 * @var String $relevantOccupation
	 */
	protected $relevantOccupation;

	 /**
	 * Responsibilities associated with this role or Occupation.
	 * @var String $responsibilities
	 */
	protected $responsibilities;

	 /**
	 * The currency (coded using <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a> ) used for the main salary information in this job posting or for this employee.
	 * @var String $salaryCurrency
	 */
	protected $salaryCurrency;

	 /**
	 * A description of any security clearance requirements of the job.
	 * @var String $securityClearanceRequirement
	 */
	protected $securityClearanceRequirement;

	 /**
	 * A description of any sensory requirements and levels necessary to function on the job, including hearing and vision. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
	 * @var String $sensoryRequirement
	 */
	protected $sensoryRequirement;

	 /**
	 * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill this role or to work in this occupation.
	 * @var String $skills
	 */
	protected $skills;

	 /**
	 * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
	 * @var String $specialCommitments
	 */
	protected $specialCommitments;

	 /**
	 * The title of the job.
	 * @var String $title
	 */
	protected $title;

	 /**
	 * The number of positions open for this job posting. Use a positive integer. Do not use if the number of positions is unclear or not known.
	 * @var String $totalJobOpenings
	 */
	protected $totalJobOpenings;

	 /**
	 * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
	 * @var String $validThrough
	 */
	protected $validThrough;

	 /**
	 * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
	 * @var String $workHours
	 */
	protected $workHours;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setApplicantLocationRequirements($x){
		$this->applicantLocationRequirements = new Text('applicantLocationRequirements',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setApplicationContact($x){
		$this->applicationContact = new Text('applicationContact',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBaseSalary($x){
		$this->baseSalary = new Text('baseSalary',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDatePosted($x){
		$this->datePosted = new Text('datePosted',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEducationRequirements($x){
		$this->educationRequirements = new Text('educationRequirements',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEligibilityToWorkRequirement($x){
		$this->eligibilityToWorkRequirement = new Text('eligibilityToWorkRequirement',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEmployerOverview($x){
		$this->employerOverview = new Text('employerOverview',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEmploymentType($x){
		$this->employmentType = new Text('employmentType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEmploymentUnit($x){
		$this->employmentUnit = new Text('employmentUnit',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEstimatedSalary($x){
		$this->estimatedSalary = new Text('estimatedSalary',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExperienceRequirements($x){
		$this->experienceRequirements = new Text('experienceRequirements',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHiringOrganization($x){
		$this->hiringOrganization = new Text('hiringOrganization',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIncentiveCompensation($x){
		$this->incentiveCompensation = new Text('incentiveCompensation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIndustry($x){
		$this->industry = new Text('industry',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setJobBenefits($x){
		$this->jobBenefits = new Text('jobBenefits',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setJobImmediateStart($x){
		$this->jobImmediateStart = new Text('jobImmediateStart',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setJobLocation($x){
		$this->jobLocation = new Text('jobLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setJobLocationType($x){
		$this->jobLocationType = new Text('jobLocationType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setJobStartDate($x){
		$this->jobStartDate = new Text('jobStartDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOccupationalCategory($x){
		$this->occupationalCategory = new Text('occupationalCategory',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPhysicalRequirement($x){
		$this->physicalRequirement = new Text('physicalRequirement',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setQualifications($x){
		$this->qualifications = new Text('qualifications',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRelevantOccupation($x){
		$this->relevantOccupation = new Text('relevantOccupation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setResponsibilities($x){
		$this->responsibilities = new Text('responsibilities',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSalaryCurrency($x){
		$this->salaryCurrency = new Text('salaryCurrency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSecurityClearanceRequirement($x){
		$this->securityClearanceRequirement = new Text('securityClearanceRequirement',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSensoryRequirement($x){
		$this->sensoryRequirement = new Text('sensoryRequirement',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSkills($x){
		$this->skills = new Text('skills',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSpecialCommitments($x){
		$this->specialCommitments = new Text('specialCommitments',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTitle($x){
		$this->title = new Text('title',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTotalJobOpenings($x){
		$this->totalJobOpenings = new Text('totalJobOpenings',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidThrough($x){
		$this->validThrough = new Text('validThrough',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWorkHours($x){
		$this->workHours = new Text('workHours',$x);
		return $this;
	}


}