<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMovie{
	 /**
	 * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/actors">actors</a>.
	 * @var String $actor
	 */
	protected $actor;

	 /**
	 * The country of the principal offices of the production company or individual responsible for the movie or program.
	 * @var String $countryOfOrigin
	 */
	protected $countryOfOrigin;

	 /**
	 * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes <a href="/directors">directors</a>.
	 * @var String $director
	 */
	protected $director;

	 /**
	 * The duration of the item (movie, audio recording, event, etc.) in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>.
	 * @var String $duration
	 */
	protected $duration;

	 /**
	 * The composer of the soundtrack.
	 * @var String $musicBy
	 */
	protected $musicBy;

	 /**
	 * The production company or studio responsible for the item e.g. series, video game, episode etc.
	 * @var String $productionCompany
	 */
	protected $productionCompany;

	 /**
	 * Languages in which subtitles/captions are available, in <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard format</a>.
	 * @var String $subtitleLanguage
	 */
	protected $subtitleLanguage;

	 /**
	 * An <a href="https://eidr.org/">EIDR</a> (Entertainment Identifier Registry) <a class="localLink" href="/identifier">identifier</a> representing at the most general/abstract level, a work of film or television.<br><br>
	 * 
	 * For example, the motion picture known as "Ghostbusters" has a titleEIDR of  "10.5240/7EC7-228A-510A-053E-CBB8-J". This title (or work) may have several variants, which EIDR calls "edits". See <a class="localLink" href="/editEIDR">editEIDR</a>.<br><br>
	 * 
	 * Since schema.org types like <a class="localLink" href="/Movie">Movie</a> and <a class="localLink" href="/TVEpisode">TVEpisode</a> can be used for both works and their multiple expressions, it is possible to use <a class="localLink" href="/titleEIDR">titleEIDR</a> alone (for a general description), or alongside <a class="localLink" href="/editEIDR">editEIDR</a> for a more edit-specific description.
	 * @var String $titleEIDR
	 */
	protected $titleEIDR;

	 /**
	 * The trailer of a movie or tv/radio series, season, episode, etc.
	 * @var String $trailer
	 */
	protected $trailer;


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
	public function setCountryOfOrigin($x){
		$this->countryOfOrigin = new Text('CountryOfOrigin',$x);
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
	public function setDuration($x){
		$this->duration = new Text('Duration',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMusicBy($x){
		$this->musicBy = new Text('MusicBy',$x);
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
	public function setSubtitleLanguage($x){
		$this->subtitleLanguage = new Text('SubtitleLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTitleEIDR($x){
		$this->titleEIDR = new Text('TitleEIDR',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTrailer($x){
		$this->trailer = new Text('Trailer',$x);
		return $this;
	}


}