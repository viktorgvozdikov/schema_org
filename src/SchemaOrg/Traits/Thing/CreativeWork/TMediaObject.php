<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMediaObject{
	 /**
	 * A NewsArticle associated with the Media Object.
	 * @var String $associatedArticle
	 */
	protected $associatedArticle;

	 /**
	 * The bitrate of the media object.
	 * @var String $bitrate
	 */
	protected $bitrate;

	 /**
	 * File size in (mega/kilo) bytes.
	 * @var String $contentSize
	 */
	protected $contentSize;

	 /**
	 * Actual bytes of the media object, for example the image file or video file.
	 * @var String $contentUrl
	 */
	protected $contentUrl;

	 /**
	 * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
	 * @var String $duration
	 */
	protected $duration;

	 /**
	 * A URL pointing to a player for a specific video. In general, this is the information in the <code>src</code> element of an <code>embed</code> tag and should not be the same as the content of the <code>loc</code> tag.
	 * @var String $embedUrl
	 */
	protected $embedUrl;

	 /**
	 * The CreativeWork encoded by this media object.<br> Inverse property: <a href="/encoding">encoding</a>.
	 * @var String $encodesCreativeWork
	 */
	protected $encodesCreativeWork;

	 /**
	 * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to <em>December</em>. For media, including audio and video, it's the time offset of the end of a clip within a larger file.<br><br>
	 * 
	 * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	 * @var String $endTime
	 */
	protected $endTime;

	 /**
	 * The height of the item.
	 * @var String $height
	 */
	protected $height;

	 /**
	 * Player type required—for example, Flash or Silverlight.
	 * @var String $playerType
	 */
	protected $playerType;

	 /**
	 * The production company or studio responsible for the item e.g. series, video game, episode etc.
	 * @var String $productionCompany
	 */
	protected $productionCompany;

	 /**
	 * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in <a href="http://en.wikipedia.org/wiki/ISO_3166">ISO 3166 format</a>.
	 * @var String $regionsAllowed
	 */
	protected $regionsAllowed;

	 /**
	 * Indicates if use of the media require a subscription  (either paid or free). Allowed values are <code>true</code> or <code>false</code> (note that an earlier version had 'yes', 'no').
	 * @var String $requiresSubscription
	 */
	protected $requiresSubscription;

	 /**
	 * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from <em>January</em> to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.<br><br>
	 * 
	 * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
	 * @var String $startTime
	 */
	protected $startTime;

	 /**
	 * Date when this media object was uploaded to this site.
	 * @var String $uploadDate
	 */
	protected $uploadDate;

	 /**
	 * The width of the item.
	 * @var String $width
	 */
	protected $width;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAssociatedArticle($x){
		$this->associatedArticle = new Text('AssociatedArticle',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBitrate($x){
		$this->bitrate = new Text('Bitrate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContentSize($x){
		$this->contentSize = new Text('ContentSize',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContentUrl($x){
		$this->contentUrl = new Text('ContentUrl',$x);
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
	public function setEmbedUrl($x){
		$this->embedUrl = new Text('EmbedUrl',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEncodesCreativeWork($x){
		$this->encodesCreativeWork = new Text('EncodesCreativeWork',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEndTime($x){
		$this->endTime = new Text('EndTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHeight($x){
		$this->height = new Text('Height',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPlayerType($x){
		$this->playerType = new Text('PlayerType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProductionCompany($x){
		$this->productionCompany = new Text('ProductionCompany',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRegionsAllowed($x){
		$this->regionsAllowed = new Text('RegionsAllowed',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRequiresSubscription($x){
		$this->requiresSubscription = new Text('RequiresSubscription',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStartTime($x){
		$this->startTime = new Text('StartTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUploadDate($x){
		$this->uploadDate = new Text('UploadDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWidth($x){
		$this->width = new Text('Width',$x);
		return $this;
	}


}