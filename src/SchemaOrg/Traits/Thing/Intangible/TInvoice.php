<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TInvoice{
	 /**
	 * The identifier for the account the payment will be applied to.
	 * @var String $accountId
	 */
	protected $accountId;

	 /**
	 * The time interval used to compute the invoice.
	 * @var String $billingPeriod
	 */
	protected $billingPeriod;

	 /**
	 * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred. Supersedes <a href="/bookingAgent">bookingAgent</a>.
	 * @var String $broker
	 */
	protected $broker;

	 /**
	 * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	 * @var String $category
	 */
	protected $category;

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
	 * The minimum payment required at this time.
	 * @var String $minimumPaymentDue
	 */
	protected $minimumPaymentDue;

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
	 * The status of payment; whether the invoice has been paid or not.
	 * @var String $paymentStatus
	 */
	protected $paymentStatus;

	 /**
	 * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes <a href="/carrier">carrier</a>.
	 * @var String $provider
	 */
	protected $provider;

	 /**
	 * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
	 * @var String $referencesOrder
	 */
	protected $referencesOrder;

	 /**
	 * The date the invoice is scheduled to be paid.
	 * @var String $scheduledPaymentDate
	 */
	protected $scheduledPaymentDate;

	 /**
	 * The total amount due.
	 * @var String $totalPaymentDue
	 */
	protected $totalPaymentDue;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccountId($x){
		$this->accountId = new Text('AccountId',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBillingPeriod($x){
		$this->billingPeriod = new Text('BillingPeriod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroker($x){
		$this->broker = new Text('Broker',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCategory($x){
		$this->category = new Text('Category',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setConfirmationNumber($x){
		$this->confirmationNumber = new Text('ConfirmationNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCustomer($x){
		$this->customer = new Text('Customer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMinimumPaymentDue($x){
		$this->minimumPaymentDue = new Text('MinimumPaymentDue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPaymentDueDate($x){
		$this->paymentDueDate = new Text('PaymentDueDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPaymentMethod($x){
		$this->paymentMethod = new Text('PaymentMethod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPaymentMethodId($x){
		$this->paymentMethodId = new Text('PaymentMethodId',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPaymentStatus($x){
		$this->paymentStatus = new Text('PaymentStatus',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProvider($x){
		$this->provider = new Text('Provider',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReferencesOrder($x){
		$this->referencesOrder = new Text('ReferencesOrder',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setScheduledPaymentDate($x){
		$this->scheduledPaymentDate = new Text('ScheduledPaymentDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTotalPaymentDue($x){
		$this->totalPaymentDue = new Text('TotalPaymentDue',$x);
		return $this;
	}


}