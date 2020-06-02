<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\InteractAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCommunicateAction{
	 /**
	 * The subject matter of the content.<br> Inverse property: <a href="/subjectOf">subjectOf</a>.
	 * @var String $about
	 */
	protected $about;

	 /**
	 * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="/availableLanguage">availableLanguage</a>. Supersedes <a href="/language">language</a>.
	 * @var String $inLanguage
	 */
	protected $inLanguage;

	 /**
	 * A sub property of participant. The participant who is at the receiving end of the action.
	 * @var String $recipient
	 */
	protected $recipient;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAbout($x){
		$this->about = new Text('about',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInLanguage($x){
		$this->inLanguage = new Text('inLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecipient($x){
		$this->recipient = new Text('recipient',$x);
		return $this;
	}


}