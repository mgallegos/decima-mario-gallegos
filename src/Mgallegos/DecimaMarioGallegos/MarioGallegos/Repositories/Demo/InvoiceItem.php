<?php

namespace Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo;

use Eloquent;

class InvoiceItem extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'DEMO_Invoice_Item';


	public function invoice()
	{
		return $this->belongs_to('Invoice', 'id');
	}

}
