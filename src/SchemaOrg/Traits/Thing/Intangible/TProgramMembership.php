<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TProgramMembership{
	 /**
	 * The organization (airline, travelers' club, etc.) the membership is made with.
	 * @var String $hostingOrganization
	 */
	protected $hostingOrganization;

	 /**
	 * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals. Supersedes <a href="/members">members</a>, <a href="/musicGroupMember">musicGroupMember</a>.<br> Inverse property: <a href="/memberOf">memberOf</a>.
	 * @var String $member
	 */
	protected $member;

	 /**
	 * A unique identifier for the membership.
	 * @var String $membershipNumber
	 */
	protected $membershipNumber;

	 /**
	 * The number of membership points earned by the member. If necessary, the unitText can be used to express the units the points are issued in. (e.g. stars, miles, etc.)
	 * @var String $membershipPointsEarned
	 */
	protected $membershipPointsEarned;

	 /**
	 * The program providing the membership.
	 * @var String $programName
	 */
	protected $programName;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHostingOrganization($x){
		$this->hostingOrganization = new Text('HostingOrganization',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMember($x){
		$this->member = new Text('Member',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMembershipNumber($x){
		$this->membershipNumber = new Text('MembershipNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMembershipPointsEarned($x){
		$this->membershipPointsEarned = new Text('MembershipPointsEarned',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProgramName($x){
		$this->programName = new Text('ProgramName',$x);
		return $this;
	}


}