<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPerson{
	 /**
	 * An additional name for a Person, can be used for a middle name.
	 * @var String $additionalName
	 */
	protected $additionalName;

	 /**
	 * Physical address of the item.
	 * @var String $address
	 */
	protected $address;

	 /**
	 * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
	 * @var String $affiliation
	 */
	protected $affiliation;

	 /**
	 * An organization that the person is an alumni of.<br> Inverse property: <a href="/alumni">alumni</a>.
	 * @var String $alumniOf
	 */
	protected $alumniOf;

	 /**
	 * An award won by or for this item. Supersedes <a href="/awards">awards</a>.
	 * @var String $award
	 */
	protected $award;

	 /**
	 * Date of birth.
	 * @var String $birthDate
	 */
	protected $birthDate;

	 /**
	 * The place where the person was born.
	 * @var String $birthPlace
	 */
	protected $birthPlace;

	 /**
	 * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
	 * @var String $brand
	 */
	protected $brand;

	 /**
	 * A <a href="https://en.wikipedia.org/wiki/Call_sign">callsign</a>, as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
	 * @var String $callSign
	 */
	protected $callSign;

	 /**
	 * A child of the person.
	 * @var String $children
	 */
	protected $children;

	 /**
	 * A colleague of the person. Supersedes <a href="/colleagues">colleagues</a>.
	 * @var String $colleague
	 */
	protected $colleague;

	 /**
	 * A contact point for a person or organization. Supersedes <a href="/contactPoints">contactPoints</a>.
	 * @var String $contactPoint
	 */
	protected $contactPoint;

	 /**
	 * Date of death.
	 * @var String $deathDate
	 */
	protected $deathDate;

	 /**
	 * The place where the person died.
	 * @var String $deathPlace
	 */
	protected $deathPlace;

	 /**
	 * The Dun &amp; Bradstreet DUNS number for identifying an organization or business person.
	 * @var String $duns
	 */
	protected $duns;

	 /**
	 * Email address.
	 * @var String $email
	 */
	protected $email;

	 /**
	 * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the name property.
	 * @var String $familyName
	 */
	protected $familyName;

	 /**
	 * The fax number.
	 * @var String $faxNumber
	 */
	protected $faxNumber;

	 /**
	 * The most generic uni-directional social relation.
	 * @var String $follows
	 */
	protected $follows;

	 /**
	 * A person or organization that supports (sponsors) something through some kind of financial contribution.
	 * @var String $funder
	 */
	protected $funder;

	 /**
	 * Gender of something, typically a <a class="localLink" href="/Person">Person</a>, but possibly also fictional characters, animals, etc. While http://schema.org/Male and http://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender. The <a class="localLink" href="/gender">gender</a> property can also be used in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not try to enumerate all possibilities. A mixed-gender <a class="localLink" href="/SportsTeam">SportsTeam</a> can be indicated with a text value of "Mixed".
	 * @var String $gender
	 */
	protected $gender;

	 /**
	 * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the name property.
	 * @var String $givenName
	 */
	protected $givenName;

	 /**
	 * The <a href="http://www.gs1.org/gln">Global Location Number</a> (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
	 * @var String $globalLocationNumber
	 */
	protected $globalLocationNumber;

	 /**
	 * A credential awarded to the Person or Organization.
	 * @var String $hasCredential
	 */
	protected $hasCredential;

	 /**
	 * The Person's occupation. For past professions, use Role for expressing dates.
	 * @var String $hasOccupation
	 */
	protected $hasOccupation;

	 /**
	 * Indicates an OfferCatalog listing for this Organization, Person, or Service.
	 * @var String $hasOfferCatalog
	 */
	protected $hasOfferCatalog;

	 /**
	 * Points-of-Sales operated by the organization or person.
	 * @var String $hasPOS
	 */
	protected $hasPOS;

	 /**
	 * The height of the item.
	 * @var String $height
	 */
	protected $height;

	 /**
	 * A contact location for a person's residence.
	 * @var String $homeLocation
	 */
	protected $homeLocation;

	 /**
	 * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
	 * @var String $honorificPrefix
	 */
	protected $honorificPrefix;

	 /**
	 * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
	 * @var String $honorificSuffix
	 */
	protected $honorificSuffix;

	 /**
	 * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used. Supersedes <a href="/interactionCount">interactionCount</a>.
	 * @var String $interactionStatistic
	 */
	protected $interactionStatistic;

	 /**
	 * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
	 * @var String $isicV4
	 */
	protected $isicV4;

	 /**
	 * The job title of the person (for example, Financial Manager).
	 * @var String $jobTitle
	 */
	protected $jobTitle;

	 /**
	 * The most generic bi-directional social/work relation.
	 * @var String $knows
	 */
	protected $knows;

	 /**
	 * Of a <a class="localLink" href="/Person">Person</a>, and less typically of an <a class="localLink" href="/Organization">Organization</a>, to indicate a topic that is known about - suggesting possible expertise but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or <a class="localLink" href="/JobPosting">JobPosting</a> descriptions.
	 * @var String $knowsAbout
	 */
	protected $knowsAbout;

	 /**
	 * Of a <a class="localLink" href="/Person">Person</a>, and less typically of an <a class="localLink" href="/Organization">Organization</a>, to indicate a known language. We do not distinguish skill levels or reading/writing/speaking/signing here. Use language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>.
	 * @var String $knowsLanguage
	 */
	protected $knowsLanguage;

	 /**
	 * A pointer to products or services offered by the organization or person.<br> Inverse property: <a href="/offeredBy">offeredBy</a>.
	 * @var String $makesOffer
	 */
	protected $makesOffer;

	 /**
	 * An Organization (or ProgramMembership) to which this Person or Organization belongs.<br> Inverse property: <a href="/member">member</a>.
	 * @var String $memberOf
	 */
	protected $memberOf;

	 /**
	 * The North American Industry Classification System (NAICS) code for a particular organization or business person.
	 * @var String $naics
	 */
	protected $naics;

	 /**
	 * Nationality of the person.
	 * @var String $nationality
	 */
	protected $nationality;

	 /**
	 * The total financial value of the person as calculated by subtracting assets from liabilities.
	 * @var String $netWorth
	 */
	protected $netWorth;

	 /**
	 * Products owned by the organization or person.
	 * @var String $owns
	 */
	protected $owns;

	 /**
	 * A parent of this person. Supersedes <a href="/parents">parents</a>.
	 * @var String $parent
	 */
	protected $parent;

	 /**
	 * Event that this person is a performer or participant in.
	 * @var String $performerIn
	 */
	protected $performerIn;

	 /**
	 * The publishingPrinciples property indicates (typically via <a class="localLink" href="/URL">URL</a>) a document describing the editorial principles of an <a class="localLink" href="/Organization">Organization</a> (or individual e.g. a <a class="localLink" href="/Person">Person</a> writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a <a class="localLink" href="/CreativeWork">CreativeWork</a> (e.g. <a class="localLink" href="/NewsArticle">NewsArticle</a>) the principles are those of the party primarily responsible for the creation of the <a class="localLink" href="/CreativeWork">CreativeWork</a>.<br><br>
	 * 
	 * While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a <a class="localLink" href="/funder">funder</a>) can be expressed using schema.org terminology.
	 * @var String $publishingPrinciples
	 */
	protected $publishingPrinciples;

	 /**
	 * The most generic familial relation.
	 * @var String $relatedTo
	 */
	protected $relatedTo;

	 /**
	 * A pointer to products or services sought by the organization or person (demand).
	 * @var String $seeks
	 */
	protected $seeks;

	 /**
	 * A sibling of the person. Supersedes <a href="/siblings">siblings</a>.
	 * @var String $sibling
	 */
	protected $sibling;

	 /**
	 * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	 * @var String $sponsor
	 */
	protected $sponsor;

	 /**
	 * The person's spouse.
	 * @var String $spouse
	 */
	protected $spouse;

	 /**
	 * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
	 * @var String $taxID
	 */
	protected $taxID;

	 /**
	 * The telephone number.
	 * @var String $telephone
	 */
	protected $telephone;

	 /**
	 * The Value-added Tax ID of the organization or person.
	 * @var String $vatID
	 */
	protected $vatID;

	 /**
	 * The weight of the product or person.
	 * @var String $weight
	 */
	protected $weight;

	 /**
	 * A contact location for a person's place of work.
	 * @var String $workLocation
	 */
	protected $workLocation;

	 /**
	 * Organizations that the person works for.
	 * @var String $worksFor
	 */
	protected $worksFor;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAdditionalName($x){
		$this->additionalName = new Text('additionalName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAddress($x){
		$this->address = new Text('address',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAffiliation($x){
		$this->affiliation = new Text('affiliation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAlumniOf($x){
		$this->alumniOf = new Text('alumniOf',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAward($x){
		$this->award = new Text('award',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBirthDate($x){
		$this->birthDate = new Text('birthDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBirthPlace($x){
		$this->birthPlace = new Text('birthPlace',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBrand($x){
		$this->brand = new Text('brand',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCallSign($x){
		$this->callSign = new Text('callSign',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setChildren($x){
		$this->children = new Text('children',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setColleague($x){
		$this->colleague = new Text('colleague',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContactPoint($x){
		$this->contactPoint = new Text('contactPoint',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDeathDate($x){
		$this->deathDate = new Text('deathDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDeathPlace($x){
		$this->deathPlace = new Text('deathPlace',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDuns($x){
		$this->duns = new Text('duns',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEmail($x){
		$this->email = new Text('email',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFamilyName($x){
		$this->familyName = new Text('familyName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFaxNumber($x){
		$this->faxNumber = new Text('faxNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFollows($x){
		$this->follows = new Text('follows',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFunder($x){
		$this->funder = new Text('funder',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGender($x){
		$this->gender = new Text('gender',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGivenName($x){
		$this->givenName = new Text('givenName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGlobalLocationNumber($x){
		$this->globalLocationNumber = new Text('globalLocationNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasCredential($x){
		$this->hasCredential = new Text('hasCredential',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasOccupation($x){
		$this->hasOccupation = new Text('hasOccupation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasOfferCatalog($x){
		$this->hasOfferCatalog = new Text('hasOfferCatalog',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasPOS($x){
		$this->hasPOS = new Text('hasPOS',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHeight($x){
		$this->height = new Text('height',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHomeLocation($x){
		$this->homeLocation = new Text('homeLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHonorificPrefix($x){
		$this->honorificPrefix = new Text('honorificPrefix',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHonorificSuffix($x){
		$this->honorificSuffix = new Text('honorificSuffix',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInteractionStatistic($x){
		$this->interactionStatistic = new Text('interactionStatistic',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsicV4($x){
		$this->isicV4 = new Text('isicV4',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setJobTitle($x){
		$this->jobTitle = new Text('jobTitle',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setKnows($x){
		$this->knows = new Text('knows',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setKnowsAbout($x){
		$this->knowsAbout = new Text('knowsAbout',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setKnowsLanguage($x){
		$this->knowsLanguage = new Text('knowsLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMakesOffer($x){
		$this->makesOffer = new Text('makesOffer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMemberOf($x){
		$this->memberOf = new Text('memberOf',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNaics($x){
		$this->naics = new Text('naics',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNationality($x){
		$this->nationality = new Text('nationality',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNetWorth($x){
		$this->netWorth = new Text('netWorth',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOwns($x){
		$this->owns = new Text('owns',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setParent($x){
		$this->parent = new Text('parent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPerformerIn($x){
		$this->performerIn = new Text('performerIn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPublishingPrinciples($x){
		$this->publishingPrinciples = new Text('publishingPrinciples',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRelatedTo($x){
		$this->relatedTo = new Text('relatedTo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeeks($x){
		$this->seeks = new Text('seeks',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSibling($x){
		$this->sibling = new Text('sibling',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSponsor($x){
		$this->sponsor = new Text('sponsor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSpouse($x){
		$this->spouse = new Text('spouse',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTaxID($x){
		$this->taxID = new Text('taxID',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTelephone($x){
		$this->telephone = new Text('telephone',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVatID($x){
		$this->vatID = new Text('vatID',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWeight($x){
		$this->weight = new Text('weight',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWorkLocation($x){
		$this->workLocation = new Text('workLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWorksFor($x){
		$this->worksFor = new Text('worksFor',$x);
		return $this;
	}


}