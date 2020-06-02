<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\TradeAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TBuyAction{
	 /**
	 * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider. Supersedes <a href="/merchant">merchant</a>, <a href="/vendor">vendor</a>.
	 * @var String $seller
	 */
	protected $seller;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeller($x){
		$this->seller = new Text('Seller',$x);
		return $this;
	}


}