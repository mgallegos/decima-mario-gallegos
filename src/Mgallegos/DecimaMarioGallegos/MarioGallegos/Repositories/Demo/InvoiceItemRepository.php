<?php

namespace Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo;

use Illuminate\Database\DatabaseManager as DatabaseManager;

use Mgallegos\LaravelJqgrid\Repositories\EloquentRepositoryAbstract;


class InvoiceItemRepository extends EloquentRepositoryAbstract {

	public function __construct(DatabaseManager $DatabaseManager)
	{
		$this->Database = $DatabaseManager->setConnection('mariogallegos')
																			->table('DEMO_Invoice_Item')
								                      ->join('DEMO_Invoice', 'DEMO_Invoice_Item.invoice', '=', 'DEMO_Invoice.id');

		$this->visibleColumns = array('number','description', 'unitCost', 'quantity', 'total','DEMO_Invoice.id', 'country', 'category');

		$this->orderBy = array(array('DEMO_Invoice_Item.id', 'asc'));
	}

}
