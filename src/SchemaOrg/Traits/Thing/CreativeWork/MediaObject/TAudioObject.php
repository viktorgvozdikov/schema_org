<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\MediaObject;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAudioObject{
	 /**
	 * The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the <a class="localLink" href="/encodingFormat">encodingFormat</a>.
	 * @var String $caption
	 */
	protected $caption;

	 /**
	 * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
	 * @var String $transcript
	 */
	protected $transcript;


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
	public function setTranscript($x){
		$this->transcript = new Text('Transcript',$x);
		return $this;
	}


}