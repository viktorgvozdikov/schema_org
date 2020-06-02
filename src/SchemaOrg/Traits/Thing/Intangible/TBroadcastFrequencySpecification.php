<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TBroadcastFrequencySpecification{
	 /**
	 * The frequency in MHz for a particular broadcast.
	 * @var String $broadcastFrequencyValue
	 */
	protected $broadcastFrequencyValue;

	 /**
	 * The modulation (e.g. FM, AM, etc) used by a particular broadcast service
	 * @var String $broadcastSignalModulation
	 */
	protected $broadcastSignalModulation;

	 /**
	 * The subchannel used for the broadcast.
	 * @var String $broadcastSubChannel
	 */
	protected $broadcastSubChannel;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroadcastFrequencyValue($x){
		$this->broadcastFrequencyValue = new Text('broadcastFrequencyValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroadcastSignalModulation($x){
		$this->broadcastSignalModulation = new Text('broadcastSignalModulation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroadcastSubChannel($x){
		$this->broadcastSubChannel = new Text('broadcastSubChannel',$x);
		return $this;
	}


}