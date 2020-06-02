<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TBlog{
	 /**
	 * A posting that is part of this blog. Supersedes <a href="/blogPosts">blogPosts</a>.
	 * @var String $blogPost
	 */
	protected $blogPost;

	 /**
	 * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
	 * @var String $issn
	 */
	protected $issn;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBlogPost($x){
		$this->blogPost = new Text('BlogPost',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIssn($x){
		$this->issn = new Text('Issn',$x);
		return $this;
	}


}