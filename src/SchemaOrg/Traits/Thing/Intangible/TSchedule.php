<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSchedule{
	 /**
	 * Defines the day(s) of the week on which a recurring <a class="localLink" href="/Event">Event</a> takes place. May be specified using either <a class="localLink" href="/DayOfWeek">DayOfWeek</a>, or alternatively <a class="localLink" href="/Text">Text</a> conforming to iCal's syntax for byDay recurrence rules
	 * @var String $byDay
	 */
	protected $byDay;

	 /**
	 * Defines the month(s) of the year on which a recurring <a class="localLink" href="/Event">Event</a> takes place. Specified as an <a class="localLink" href="/Integer">Integer</a> between 1-12. January is 1.
	 * @var String $byMonth
	 */
	protected $byMonth;

	 /**
	 * Defines the day(s) of the month on which a recurring <a class="localLink" href="/Event">Event</a> takes place. Specified as an <a class="localLink" href="/Integer">Integer</a> between 1-31.
	 * @var String $byMonthDay
	 */
	protected $byMonthDay;

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
	 * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to <em>December</em>. For media, including audio and video, it's the time offset of the end of a clip within a larger file.<br><br>
	 * 
	 * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	 * @var String $endTime
	 */
	protected $endTime;

	 /**
	 * Defines a <a class="localLink" href="/Date">Date</a> or <a class="localLink" href="/DateTime">DateTime</a> during which a scheduled <a class="localLink" href="/Event">Event</a> will not take place. The property allows exceptions to
	 *       a <a class="localLink" href="/Schedule">Schedule</a> to be specified. If an exception is specified as a <a class="localLink" href="/DateTime">DateTime</a> then only the event that would have started at that specific date and time
	 *       should be excluded from the schedule. If an exception is specified as a <a class="localLink" href="/Date">Date</a> then any event that is scheduled for that 24 hour period should be
	 *       excluded from the schedule. This allows a whole day to be excluded from the schedule without having to itemise every scheduled event.
	 * @var String $exceptDate
	 */
	protected $exceptDate;

	 /**
	 * Defines the number of times a recurring <a class="localLink" href="/Event">Event</a> will take place
	 * @var String $repeatCount
	 */
	protected $repeatCount;

	 /**
	 * Defines the frequency at which <a class="localLink" href="/Events">Events</a> will occur according to a schedule <a class="localLink" href="/Schedule">Schedule</a>. The intervals between
	 *       events should be defined as a <a class="localLink" href="/Duration">Duration</a> of time.
	 * @var String $repeatFrequency
	 */
	protected $repeatFrequency;

	 /**
	 * Indicates the timezone for which the time(s) indicated in the <a class="localLink" href="/Schedule">Schedule</a> are given. The value provided should be among those listed in the IANA Time Zone Database.
	 * @var String $scheduleTimezone
	 */
	protected $scheduleTimezone;

	 /**
	 * The start date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
	 * @var String $startDate
	 */
	protected $startDate;

	 /**
	 * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from <em>January</em> to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.<br><br>
	 * 
	 * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	 * @var String $startTime
	 */
	protected $startTime;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setByDay($x){
		$this->byDay = new Text('byDay',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setByMonth($x){
		$this->byMonth = new Text('byMonth',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setByMonthDay($x){
		$this->byMonthDay = new Text('byMonthDay',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDuration($x){
		$this->duration = new Text('duration',$x);
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
	public function setEndTime($x){
		$this->endTime = new Text('endTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExceptDate($x){
		$this->exceptDate = new Text('exceptDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRepeatCount($x){
		$this->repeatCount = new Text('repeatCount',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRepeatFrequency($x){
		$this->repeatFrequency = new Text('repeatFrequency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setScheduleTimezone($x){
		$this->scheduleTimezone = new Text('scheduleTimezone',$x);
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
	public function setStartTime($x){
		$this->startTime = new Text('startTime',$x);
		return $this;
	}


}