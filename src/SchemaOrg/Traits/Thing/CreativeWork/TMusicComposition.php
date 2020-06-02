<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMusicComposition{
	 /**
	 * The person or organization who wrote a composition, or who is the composer of a work performed at some event.
	 * @var String $composer
	 */
	protected $composer;

	 /**
	 * The date and place the work was first performed.
	 * @var String $firstPerformance
	 */
	protected $firstPerformance;

	 /**
	 * Smaller compositions included in this work (e.g. a movement in a symphony).
	 * @var String $includedComposition
	 */
	protected $includedComposition;

	 /**
	 * The International Standard Musical Work Code for the composition.
	 * @var String $iswcCode
	 */
	protected $iswcCode;

	 /**
	 * The person who wrote the words.
	 * @var String $lyricist
	 */
	protected $lyricist;

	 /**
	 * The words in the song.
	 * @var String $lyrics
	 */
	protected $lyrics;

	 /**
	 * An arrangement derived from the composition.
	 * @var String $musicArrangement
	 */
	protected $musicArrangement;

	 /**
	 * The type of composition (e.g. overture, sonata, symphony, etc.).
	 * @var String $musicCompositionForm
	 */
	protected $musicCompositionForm;

	 /**
	 * The key, mode, or scale this composition uses.
	 * @var String $musicalKey
	 */
	protected $musicalKey;

	 /**
	 * An audio recording of the work.<br> Inverse property: <a href="/recordingOf">recordingOf</a>.
	 * @var String $recordedAs
	 */
	protected $recordedAs;


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
	public function setFirstPerformance($x){
		$this->firstPerformance = new Text('FirstPerformance',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIncludedComposition($x){
		$this->includedComposition = new Text('IncludedComposition',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIswcCode($x){
		$this->iswcCode = new Text('IswcCode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLyricist($x){
		$this->lyricist = new Text('Lyricist',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLyrics($x){
		$this->lyrics = new Text('Lyrics',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMusicArrangement($x){
		$this->musicArrangement = new Text('MusicArrangement',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMusicCompositionForm($x){
		$this->musicCompositionForm = new Text('MusicCompositionForm',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMusicalKey($x){
		$this->musicalKey = new Text('MusicalKey',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecordedAs($x){
		$this->recordedAs = new Text('RecordedAs',$x);
		return $this;
	}


}