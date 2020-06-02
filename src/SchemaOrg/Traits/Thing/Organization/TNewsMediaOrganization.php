<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TNewsMediaOrganization{
	 /**
	 * For a <a class="localLink" href="/NewsMediaOrganization">NewsMediaOrganization</a>, a link to the masthead page or a page listing top editorial management.
	 * @var String $masthead
	 */
	protected $masthead;

	 /**
	 * For a <a class="localLink" href="/NewsMediaOrganization">NewsMediaOrganization</a>, a statement on coverage priorities, including any public agenda or stance on issues.
	 * @var String $missionCoveragePrioritiesPolicy
	 */
	protected $missionCoveragePrioritiesPolicy;

	 /**
	 * For a <a class="localLink" href="/NewsMediaOrganization">NewsMediaOrganization</a> or other news-related <a class="localLink" href="/Organization">Organization</a>, a statement explaining when authors of articles are not named in bylines.
	 * @var String $noBylinesPolicy
	 */
	protected $noBylinesPolicy;

	 /**
	 * Disclosure about verification and fact-checking processes for a <a class="localLink" href="/NewsMediaOrganization">NewsMediaOrganization</a> or other fact-checking <a class="localLink" href="/Organization">Organization</a>.
	 * @var String $verificationFactCheckingPolicy
	 */
	protected $verificationFactCheckingPolicy;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setMasthead($x){
		$this->masthead = new Text('Masthead',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMissionCoveragePrioritiesPolicy($x){
		$this->missionCoveragePrioritiesPolicy = new Text('MissionCoveragePrioritiesPolicy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNoBylinesPolicy($x){
		$this->noBylinesPolicy = new Text('NoBylinesPolicy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVerificationFactCheckingPolicy($x){
		$this->verificationFactCheckingPolicy = new Text('VerificationFactCheckingPolicy',$x);
		return $this;
	}


}