<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TEntryPoint{
	 /**
	 * An application that can complete the request. Supersedes <a href="/application">application</a>.
	 * @var String $actionApplication
	 */
	protected $actionApplication;

	 /**
	 * The high level platform(s) where the Action can be performed for the given URL. To specify a specific application or operating system instance, use actionApplication.
	 * @var String $actionPlatform
	 */
	protected $actionPlatform;

	 /**
	 * The supported content type(s) for an EntryPoint response.
	 * @var String $contentType
	 */
	protected $contentType;

	 /**
	 * The supported encoding type(s) for an EntryPoint request.
	 * @var String $encodingType
	 */
	protected $encodingType;

	 /**
	 * An HTTP method that specifies the appropriate HTTP method for a request to an HTTP EntryPoint. Values are capitalized strings as used in HTTP.
	 * @var String $httpMethod
	 */
	protected $httpMethod;

	 /**
	 * An url template (RFC6570) that will be used to construct the target of the execution of the action.
	 * @var String $urlTemplate
	 */
	protected $urlTemplate;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setActionApplication($x){
		$this->actionApplication = new Text('ActionApplication',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setActionPlatform($x){
		$this->actionPlatform = new Text('ActionPlatform',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContentType($x){
		$this->contentType = new Text('ContentType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEncodingType($x){
		$this->encodingType = new Text('EncodingType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHttpMethod($x){
		$this->httpMethod = new Text('HttpMethod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUrlTemplate($x){
		$this->urlTemplate = new Text('UrlTemplate',$x);
		return $this;
	}


}