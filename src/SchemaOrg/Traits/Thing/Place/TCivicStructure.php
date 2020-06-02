<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Place;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCivicStructure{
	 /**
	 * The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.<br><br><ul>
	 * <li>Days are specified using the following two-letter combinations: <code>Mo</code>, <code>Tu</code>, <code>We</code>, <code>Th</code>, <code>Fr</code>, <code>Sa</code>, <code>Su</code>.</li>
	 * <li>Times are specified using 24:00 time. For example, 3pm is specified as <code>15:00</code>. </li>
	 * <li>Here is an example: <code>&lt;time itemprop="openingHours" datetime="Tu,Th 16:00-20:00"&gt;Tuesdays and Thursdays 4-8pm&lt;/time&gt;</code>.</li>
	 * <li>If a business is open 7 days a week, then it can be specified as <code>&lt;time itemprop="openingHours" datetime="Mo-Su"&gt;Monday through Sunday, all day&lt;/time&gt;</code>.</li>
	 * </ul>
	 * 
	 * @var String $openingHours
	 */
	protected $openingHours;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setOpeningHours($x){
		$this->openingHours = new Text('OpeningHours',$x);
		return $this;
	}


}