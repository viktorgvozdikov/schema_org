<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TEducationalOccupationalProgram{
	 /**
	 * The date at which the program stops collecting applications for the next enrollment cycle.
	 * @var String $applicationDeadline
	 */
	protected $applicationDeadline;

	 /**
	 * The date at which the program begins collecting applications for the next enrollment cycle.
	 * @var String $applicationStartDate
	 */
	protected $applicationStartDate;

	 /**
	 * The day of the week for which these opening hours are valid.
	 * @var String $dayOfWeek
	 */
	protected $dayOfWeek;

	 /**
	 * A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
	 * @var String $educationalCredentialAwarded
	 */
	protected $educationalCredentialAwarded;

	 /**
	 * Similar to courseMode, The medium or means of delivery of the program as a whole. The value may either be a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
	 * @var String $educationalProgramMode
	 */
	protected $educationalProgramMode;

	 /**
	 * The end date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
	 * @var String $endDate
	 */
	protected $endDate;

	 /**
	 * A financial aid type or program which students may use to pay for tuition or fees associated with the program.
	 * @var String $financialAidEligible
	 */
	protected $financialAidEligible;

	 /**
	 * The maximum number of students who may be enrolled in the program.
	 * @var String $maximumEnrollment
	 */
	protected $maximumEnrollment;

	 /**
	 * The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
	 * @var String $numberOfCredits
	 */
	protected $numberOfCredits;

	 /**
	 * A category describing the job, preferably using a term from a taxonomy such as <a href="http://www.onetcenter.org/taxonomy.html">BLS O*NET-SOC</a>, <a href="https://www.ilo.org/public/english/bureau/stat/isco/isco08/">ISCO-08</a> or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.<br><br>
	 * 
	 * Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
	 * @var String $occupationalCategory
	 */
	protected $occupationalCategory;

	 /**
	 * A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
	 * @var String $occupationalCredentialAwarded
	 */
	protected $occupationalCredentialAwarded;

	 /**
	 * An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use <a class="localLink" href="/businessFunction">businessFunction</a> to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a <a class="localLink" href="/Demand">Demand</a>. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.<br> Inverse property: <a href="/itemOffered">itemOffered</a>.
	 * @var String $offers
	 */
	protected $offers;

	 /**
	 * Prerequisites for enrolling in the program.
	 * @var String $programPrerequisites
	 */
	protected $programPrerequisites;

	 /**
	 * The type of educational or occupational program. For example, classroom, internship, alternance, etc..
	 * @var String $programType
	 */
	protected $programType;

	 /**
	 * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes <a href="/carrier">carrier</a>.
	 * @var String $provider
	 */
	protected $provider;

	 /**
	 * The expected salary upon completing the training.
	 * @var String $salaryUponCompletion
	 */
	protected $salaryUponCompletion;

	 /**
	 * The start date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
	 * @var String $startDate
	 */
	protected $startDate;

	 /**
	 * The amount of time in a term as defined by the institution. A term is a length of time where students take one or more classes. Semesters and quarters are common units for term.
	 * @var String $termDuration
	 */
	protected $termDuration;

	 /**
	 * The number of times terms of study are offered per year. Semesters and quarters are common units for term. For example, if the student can only take 2 semesters for the program in one year, then termsPerYear should be 2.
	 * @var String $termsPerYear
	 */
	protected $termsPerYear;

	 /**
	 * The time of day the program normally runs. For example, "evenings".
	 * @var String $timeOfDay
	 */
	protected $timeOfDay;

	 /**
	 * The expected length of time to complete the program if attending full-time.
	 * @var String $timeToComplete
	 */
	protected $timeToComplete;

	 /**
	 * The estimated salary earned while in the program.
	 * @var String $trainingSalary
	 */
	protected $trainingSalary;

	 /**
	 * The number of credits or units a full-time student would be expected to take in 1 term however 'term' is defined by the institution.
	 * @var String $typicalCreditsPerTerm
	 */
	protected $typicalCreditsPerTerm;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setApplicationDeadline($x){
		$this->applicationDeadline = new Text('applicationDeadline',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setApplicationStartDate($x){
		$this->applicationStartDate = new Text('applicationStartDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDayOfWeek($x){
		$this->dayOfWeek = new Text('dayOfWeek',$x);
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
	public function setEducationalProgramMode($x){
		$this->educationalProgramMode = new Text('educationalProgramMode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEndDate($x){
		$this->endDate = new Text('endDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFinancialAidEligible($x){
		$this->financialAidEligible = new Text('financialAidEligible',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaximumEnrollment($x){
		$this->maximumEnrollment = new Text('maximumEnrollment',$x);
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
	public function setOccupationalCategory($x){
		$this->occupationalCategory = new Text('occupationalCategory',$x);
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

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOffers($x){
		$this->offers = new Text('offers',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProgramPrerequisites($x){
		$this->programPrerequisites = new Text('programPrerequisites',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProgramType($x){
		$this->programType = new Text('programType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProvider($x){
		$this->provider = new Text('provider',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSalaryUponCompletion($x){
		$this->salaryUponCompletion = new Text('salaryUponCompletion',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStartDate($x){
		$this->startDate = new Text('startDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTermDuration($x){
		$this->termDuration = new Text('termDuration',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTermsPerYear($x){
		$this->termsPerYear = new Text('termsPerYear',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTimeOfDay($x){
		$this->timeOfDay = new Text('timeOfDay',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTimeToComplete($x){
		$this->timeToComplete = new Text('timeToComplete',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTrainingSalary($x){
		$this->trainingSalary = new Text('trainingSalary',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTypicalCreditsPerTerm($x){
		$this->typicalCreditsPerTerm = new Text('typicalCreditsPerTerm',$x);
		return $this;
	}


}