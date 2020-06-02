<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TEvent{
	 /**
	 * The subject matter of the content.<br> Inverse property: <a href="/subjectOf">subjectOf</a>.
	 * @var String $about
	 */
	protected $about;

	 /**
	 * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/actors">actors</a>.
	 * @var String $actor
	 */
	protected $actor;

	 /**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * @var String $aggregateRating
	 */
	protected $aggregateRating;

	 /**
	 * A person or organization attending the event. Supersedes <a href="/attendees">attendees</a>.
	 * @var String $attendee
	 */
	protected $attendee;

	 /**
	 * An intended audience, i.e. a group for whom something was created. Supersedes <a href="/serviceAudience">serviceAudience</a>.
	 * @var String $audience
	 */
	protected $audience;

	 /**
	 * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
	 * @var String $composer
	 */
	protected $composer;

	 /**
	 * A secondary contributor to the CreativeWork or Event.
	 * @var String $contributor
	 */
	protected $contributor;

	 /**
	 * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/directors">directors</a>.
	 * @var String $director
	 */
	protected $director;

	 /**
	 * The time admission will commence.
	 * @var String $doorTime
	 */
	protected $doorTime;

	 /**
	 * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
	 * @var String $duration
	 */
	protected $duration;

	 /**
	 * The end date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
	 * @var String $endDate
	 */
	protected $endDate;

	 /**
	 * The eventAttendanceMode of an event indicates whether it occurs online, offline, or a mix.
	 * @var String $eventAttendanceMode
	 */
	protected $eventAttendanceMode;

	 /**
	 * Associates an <a class="localLink" href="/Event">Event</a> with a <a class="localLink" href="/Schedule">Schedule</a>. There are circumstances where it is preferable to share a schedule for a series of
	 *       repeating events rather than data on the individual events themselves. For example, a website or application might prefer to publish a schedule for a weekly
	 *       gym class rather than provide data on every event. A schedule could be processed by applications to add forthcoming events to a calendar. An <a class="localLink" href="/Event">Event</a> that
	 *       is associated with a <a class="localLink" href="/Schedule">Schedule</a> using this property should not have <a class="localLink" href="/startDate">startDate</a> or <a class="localLink" href="/endDate">endDate</a> properties. These are instead defined within the associated
	 *       <a class="localLink" href="/Schedule">Schedule</a>, this avoids any ambiguity for clients using the data. The property might have repeated values to specify different schedules, e.g. for different months
	 *       or seasons.
	 * @var String $eventSchedule
	 */
	protected $eventSchedule;

	 /**
	 * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
	 * @var String $eventStatus
	 */
	protected $eventStatus;

	 /**
	 * A person or organization that supports (sponsors) something through some kind of financial contribution.
	 * @var String $funder
	 */
	protected $funder;

	 /**
	 * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="/availableLanguage">availableLanguage</a>. Supersedes <a href="/language">language</a>.
	 * @var String $inLanguage
	 */
	protected $inLanguage;

	 /**
	 * A flag to signal that the item, event, or place is accessible for free. Supersedes <a href="/free">free</a>.
	 * @var String $isAccessibleForFree
	 */
	protected $isAccessibleForFree;

	 /**
	 * The location of for example where the event is happening, an organization is located, or where an action takes place.
	 * @var String $location
	 */
	protected $location;

	 /**
	 * The total number of individuals that may attend an event or venue.
	 * @var String $maximumAttendeeCapacity
	 */
	protected $maximumAttendeeCapacity;

	 /**
	 * The maximum physical attendee capacity of an <a class="localLink" href="/Event">Event</a> whose <a class="localLink" href="/eventAttendanceMode">eventAttendanceMode</a> is <a class="localLink" href="/OfflineEventAttendanceMode">OfflineEventAttendanceMode</a> (or the offline aspects, in the case of a <a class="localLink" href="/MixedEventAttendanceMode">MixedEventAttendanceMode</a>).
	 * @var String $maximumPhysicalAttendeeCapacity
	 */
	protected $maximumPhysicalAttendeeCapacity;

	 /**
	 * The maximum physical attendee capacity of an <a class="localLink" href="/Event">Event</a> whose <a class="localLink" href="/eventAttendanceMode">eventAttendanceMode</a> is <a class="localLink" href="/OnlineEventAttendanceMode">OnlineEventAttendanceMode</a> (or the online aspects, in the case of a <a class="localLink" href="/MixedEventAttendanceMode">MixedEventAttendanceMode</a>).
	 * @var String $maximumVirtualAttendeeCapacity
	 */
	protected $maximumVirtualAttendeeCapacity;

	 /**
	 * An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use <a class="localLink" href="/businessFunction">businessFunction</a> to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a <a class="localLink" href="/Demand">Demand</a>. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.<br> Inverse property: <a href="/itemOffered">itemOffered</a>.
	 * @var String $offers
	 */
	protected $offers;

	 /**
	 * An organizer of an Event.
	 * @var String $organizer
	 */
	protected $organizer;

	 /**
	 * A performer at the event—for example, a presenter, musician, musical group or actor. Supersedes <a href="/performers">performers</a>.
	 * @var String $performer
	 */
	protected $performer;

	 /**
	 * Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
	 * @var String $previousStartDate
	 */
	protected $previousStartDate;

	 /**
	 * The CreativeWork that captured all or part of this Event.<br> Inverse property: <a href="/recordedAt">recordedAt</a>.
	 * @var String $recordedIn
	 */
	protected $recordedIn;

	 /**
	 * The number of attendee places for an event that remain unallocated.
	 * @var String $remainingAttendeeCapacity
	 */
	protected $remainingAttendeeCapacity;

	 /**
	 * A review of the item. Supersedes <a href="/reviews">reviews</a>.
	 * @var String $review
	 */
	protected $review;

	 /**
	 * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	 * @var String $sponsor
	 */
	protected $sponsor;

	 /**
	 * The start date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
	 * @var String $startDate
	 */
	protected $startDate;

	 /**
	 * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference. Supersedes <a href="/subEvents">subEvents</a>.<br> Inverse property: <a href="/superEvent">superEvent</a>.
	 * @var String $subEvent
	 */
	protected $subEvent;

	 /**
	 * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.<br> Inverse property: <a href="/subEvent">subEvent</a>.
	 * @var String $superEvent
	 */
	protected $superEvent;

	 /**
	 * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
	 * @var String $translator
	 */
	protected $translator;

	 /**
	 * The typical expected age range, e.g. '7-9', '11-'.
	 * @var String $typicalAgeRange
	 */
	protected $typicalAgeRange;

	 /**
	 * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
	 *        Specific subproperties are available for workPerformed (e.g. a play), or a workPresented (a Movie at a ScreeningEvent).
	 * @var String $workFeatured
	 */
	protected $workFeatured;

	 /**
	 * A work performed in some event, for example a play performed in a TheaterEvent.
	 * @var String $workPerformed
	 */
	protected $workPerformed;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAbout($x){
		$this->about = new Text('About',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setActor($x){
		$this->actor = new Text('Actor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAggregateRating($x){
		$this->aggregateRating = new Text('AggregateRating',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAttendee($x){
		$this->attendee = new Text('Attendee',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAudience($x){
		$this->audience = new Text('Audience',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setComposer($x){
		$this->composer = new Text('Composer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContributor($x){
		$this->contributor = new Text('Contributor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDirector($x){
		$this->director = new Text('Director',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDoorTime($x){
		$this->doorTime = new Text('DoorTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDuration($x){
		$this->duration = new Text('Duration',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEndDate($x){
		$this->endDate = new Text('EndDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEventAttendanceMode($x){
		$this->eventAttendanceMode = new Text('EventAttendanceMode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEventSchedule($x){
		$this->eventSchedule = new Text('EventSchedule',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEventStatus($x){
		$this->eventStatus = new Text('EventStatus',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFunder($x){
		$this->funder = new Text('Funder',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInLanguage($x){
		$this->inLanguage = new Text('InLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsAccessibleForFree($x){
		$this->isAccessibleForFree = new Text('IsAccessibleForFree',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLocation($x){
		$this->location = new Text('Location',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaximumAttendeeCapacity($x){
		$this->maximumAttendeeCapacity = new Text('MaximumAttendeeCapacity',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaximumPhysicalAttendeeCapacity($x){
		$this->maximumPhysicalAttendeeCapacity = new Text('MaximumPhysicalAttendeeCapacity',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaximumVirtualAttendeeCapacity($x){
		$this->maximumVirtualAttendeeCapacity = new Text('MaximumVirtualAttendeeCapacity',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOffers($x){
		$this->offers = new Text('Offers',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOrganizer($x){
		$this->organizer = new Text('Organizer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPerformer($x){
		$this->performer = new Text('Performer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPreviousStartDate($x){
		$this->previousStartDate = new Text('PreviousStartDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecordedIn($x){
		$this->recordedIn = new Text('RecordedIn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRemainingAttendeeCapacity($x){
		$this->remainingAttendeeCapacity = new Text('RemainingAttendeeCapacity',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReview($x){
		$this->review = new Text('Review',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSponsor($x){
		$this->sponsor = new Text('Sponsor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStartDate($x){
		$this->startDate = new Text('StartDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSubEvent($x){
		$this->subEvent = new Text('SubEvent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSuperEvent($x){
		$this->superEvent = new Text('SuperEvent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTranslator($x){
		$this->translator = new Text('Translator',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTypicalAgeRange($x){
		$this->typicalAgeRange = new Text('TypicalAgeRange',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWorkFeatured($x){
		$this->workFeatured = new Text('WorkFeatured',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWorkPerformed($x){
		$this->workPerformed = new Text('WorkPerformed',$x);
		return $this;
	}


}