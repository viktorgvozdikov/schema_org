<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSpecialAnnouncement{
	 /**
	 * Indicates a specific <a class="localLink" href="/CivicStructure">CivicStructure</a> or <a class="localLink" href="/LocalBusiness">LocalBusiness</a> associated with the SpecialAnnouncement. For example, a specific testing facility or business with special opening hours. For a larger geographic region like a quarantine of an entire region, use <a class="localLink" href="/spatialCoverage">spatialCoverage</a>.
	 * @var String $announcementLocation
	 */
	protected $announcementLocation;

	 /**
	 * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	 * @var String $category
	 */
	protected $category;

	 /**
	 * Publication date of an online listing.
	 * @var String $datePosted
	 */
	protected $datePosted;

	 /**
	 * Information about disease prevention.
	 * @var String $diseasePreventionInfo
	 */
	protected $diseasePreventionInfo;

	 /**
	 * Statistical information about the spread of a disease, either as <a class="localLink" href="/WebContent">WebContent</a>, or
	 *   described directly as a <a class="localLink" href="/Dataset">Dataset</a>, or the specific <a class="localLink" href="/Observation">Observation</a>s in the dataset. When a <a class="localLink" href="/WebContent">WebContent</a> URL is
	 *   provided, the page indicated might also contain more such markup.
	 * @var String $diseaseSpreadStatistics
	 */
	protected $diseaseSpreadStatistics;

	 /**
	 * Information about getting tested (for a <a class="localLink" href="/MedicalCondition">MedicalCondition</a>), e.g. in the context of a pandemic.
	 * @var String $gettingTestedInfo
	 */
	protected $gettingTestedInfo;

	 /**
	 * governmentBenefitsInfo provides information about government benefits associated with a SpecialAnnouncement.
	 * @var String $governmentBenefitsInfo
	 */
	protected $governmentBenefitsInfo;

	 /**
	 * Indicates a page with news updates and guidelines. This could often be (but is not required to be) the main page containing <a class="localLink" href="/SpecialAnnouncement">SpecialAnnouncement</a> markup on a site.
	 * @var String $newsUpdatesAndGuidelines
	 */
	protected $newsUpdatesAndGuidelines;

	 /**
	 * Information about public transport closures.
	 * @var String $publicTransportClosuresInfo
	 */
	protected $publicTransportClosuresInfo;

	 /**
	 * Guidelines about quarantine rules, e.g. in the context of a pandemic.
	 * @var String $quarantineGuidelines
	 */
	protected $quarantineGuidelines;

	 /**
	 * Information about school closures.
	 * @var String $schoolClosuresInfo
	 */
	protected $schoolClosuresInfo;

	 /**
	 * Information about travel bans, e.g. in the context of a pandemic.
	 * @var String $travelBans
	 */
	protected $travelBans;

	 /**
	 * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
	 * @var String $webFeed
	 */
	protected $webFeed;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAnnouncementLocation($x){
		$this->announcementLocation = new Text('AnnouncementLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCategory($x){
		$this->category = new Text('Category',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDatePosted($x){
		$this->datePosted = new Text('DatePosted',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDiseasePreventionInfo($x){
		$this->diseasePreventionInfo = new Text('DiseasePreventionInfo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDiseaseSpreadStatistics($x){
		$this->diseaseSpreadStatistics = new Text('DiseaseSpreadStatistics',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGettingTestedInfo($x){
		$this->gettingTestedInfo = new Text('GettingTestedInfo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGovernmentBenefitsInfo($x){
		$this->governmentBenefitsInfo = new Text('GovernmentBenefitsInfo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNewsUpdatesAndGuidelines($x){
		$this->newsUpdatesAndGuidelines = new Text('NewsUpdatesAndGuidelines',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPublicTransportClosuresInfo($x){
		$this->publicTransportClosuresInfo = new Text('PublicTransportClosuresInfo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setQuarantineGuidelines($x){
		$this->quarantineGuidelines = new Text('QuarantineGuidelines',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSchoolClosuresInfo($x){
		$this->schoolClosuresInfo = new Text('SchoolClosuresInfo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTravelBans($x){
		$this->travelBans = new Text('TravelBans',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWebFeed($x){
		$this->webFeed = new Text('WebFeed',$x);
		return $this;
	}


}