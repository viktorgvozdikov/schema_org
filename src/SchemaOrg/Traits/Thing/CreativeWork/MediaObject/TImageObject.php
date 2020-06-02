<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\MediaObject;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TImageObject{
	 /**
	 * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the <a class="localLink" href="/encodingFormat">encodingFormat</a>.
	 * @var String $caption
	 */
	protected $caption;

	 /**
	 * exif data for this object.
	 * @var String $exifData
	 */
	protected $exifData;

	 /**
	 * Indicates whether this image is representative of the content of the page.
	 * @var String $representativeOfPage
	 */
	protected $representativeOfPage;

	 /**
	 * Thumbnail image for an image or video.
	 * @var String $thumbnail
	 */
	protected $thumbnail;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCaption($x){
		$this->caption = new Text('Caption',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExifData($x){
		$this->exifData = new Text('ExifData',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRepresentativeOfPage($x){
		$this->representativeOfPage = new Text('RepresentativeOfPage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setThumbnail($x){
		$this->thumbnail = new Text('Thumbnail',$x);
		return $this;
	}


}