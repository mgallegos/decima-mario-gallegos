<?php

namespace Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo;

use Illuminate\Database\Eloquent\Model;

use Mgallegos\LaravelJqgrid\Repositories\EloquentRepositoryAbstract;

class InvoiceRepository extends EloquentRepositoryAbstract {

	public function __construct(Model $Model)
	{
		$this->Database = $Model;
		$this->Database->setConnection('mariogallegos');

		$this->visibleColumns = array('id', 'number', 'date', 'client', 'country');

		$this->orderBy = array(array('id', 'asc'), array('client','desc'));
	}

}
