<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Episode;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTVEpisode{
	 /**
	 * The country of the principal offices of the production company or individual responsible for the movie or program.
	 * @var String $countryOfOrigin
	 */
	protected $countryOfOrigin;

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
	 * @param $x
	 * @return $this
	 */
	public function setCountryOfOrigin($x){
		$this->countryOfOrigin = new Text('countryOfOrigin',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSubtitleLanguage($x){
		$this->subtitleLanguage = new Text('subtitleLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTitleEIDR($x){
		$this->titleEIDR = new Text('titleEIDR',$x);
		return $this;
	}


}