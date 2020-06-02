<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TOrder{
	 /**
	 * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
	 * @var String $acceptedOffer
	 */
	protected $acceptedOffer;

	 /**
	 * The billing address for the order.
	 * @var String $billingAddress
	 */
	protected $billingAddress;

	 /**
	 * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred. Supersedes <a href="/bookingAgent">bookingAgent</a>.
	 * @var String $broker
	 */
	protected $broker;

	 /**
	 * A number that confirms the given order or payment has been received.
	 * @var String $confirmationNumber
	 */
	protected $confirmationNumber;

	 /**
	 * Party placing the order or paying the invoice.
	 * @var String $customer
	 */
	protected $customer;

	 /**
	 * Any discount applied (to an Order).
	 * @var String $discount
	 */
	protected $discount;

	 /**
	 * Code used to redeem a discount.
	 * @var String $discountCode
	 */
	protected $discountCode;

	 /**
	 * The currency of the discount.<br><br>
	 * 
	 * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
	 * @var String $discountCurrency
	 */
	protected $discountCurrency;

	 /**
	 * Was the offer accepted as a gift for someone other than the buyer.
	 * @var String $isGift
	 */
	protected $isGift;

	 /**
	 * Date order was placed.
	 * @var String $orderDate
	 */
	protected $orderDate;

	 /**
	 * The delivery of the parcel related to this order or order item.
	 * @var String $orderDelivery
	 */
	protected $orderDelivery;

	 /**
	 * The identifier of the transaction.
	 * @var String $orderNumber
	 */
	protected $orderNumber;

	 /**
	 * The current status of the order.
	 * @var String $orderStatus
	 */
	protected $orderStatus;

	 /**
	 * The item ordered.
	 * @var String $orderedItem
	 */
	protected $orderedItem;

	 /**
	 * The order is being paid as part of the referenced Invoice.
	 * @var String $partOfInvoice
	 */
	protected $partOfInvoice;

	 /**
	 * The date that payment is due. Supersedes <a href="/paymentDue">paymentDue</a>.
	 * @var String $paymentDueDate
	 */
	protected $paymentDueDate;

	 /**
	 * The name of the credit card or other method of payment for the order.
	 * @var String $paymentMethod
	 */
	protected $paymentMethod;

	 /**
	 * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
	 * @var String $paymentMethodId
	 */
	protected $paymentMethodId;

	 /**
	 * The URL for sending a payment.
	 * @var String $paymentUrl
	 */
	protected $paymentUrl;

	 /**
	 * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider. Supersedes <a href="/merchant">merchant</a>, <a href="/vendor">vendor</a>.
	 * @var String $seller
	 */
	protected $seller;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAcceptedOffer($x){
		$this->acceptedOffer = new Text('acceptedOffer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBillingAddress($x){
		$this->billingAddress = new Text('billingAddress',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroker($x){
		$this->broker = new Text('broker',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setConfirmationNumber($x){
		$this->confirmationNumber = new Text('confirmationNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCustomer($x){
		$this->customer = new Text('customer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDiscount($x){
		$this->discount = new Text('discount',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDiscountCode($x){
		$this->discountCode = new Text('discountCode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDiscountCurrency($x){
		$this->discountCurrency = new Text('discountCurrency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsGift($x){
		$this->isGift = new Text('isGift',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOrderDate($x){
		$this->orderDate = new Text('orderDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOrderDelivery($x){
		$this->orderDelivery = new Text('orderDelivery',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOrderNumber($x){
		$this->orderNumber = new Text('orderNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOrderStatus($x){
		$this->orderStatus = new Text('orderStatus',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOrderedItem($x){
		$this->orderedItem = new Text('orderedItem',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPartOfInvoice($x){
		$this->partOfInvoice = new Text('partOfInvoice',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPaymentDueDate($x){
		$this->paymentDueDate = new Text('paymentDueDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPaymentMethod($x){
		$this->paymentMethod = new Text('paymentMethod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPaymentMethodId($x){
		$this->paymentMethodId = new Text('paymentMethodId',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPaymentUrl($x){
		$this->paymentUrl = new Text('paymentUrl',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeller($x){
		$this->seller = new Text('seller',$x);
		return $this;
	}


}