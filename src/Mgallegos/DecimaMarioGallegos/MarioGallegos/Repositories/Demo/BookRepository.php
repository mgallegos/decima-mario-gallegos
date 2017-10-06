<?php

namespace Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo;

use Illuminate\Database\Eloquent\Model;

use Mgallegos\LaravelJqgrid\Repositories\EloquentRepositoryAbstract;

class BookRepository extends EloquentRepositoryAbstract {

	public function __construct(Model $Model)
	{
		$this->Database = $Model;
		$this->Database->setConnection('mariogallegos');

		$this->visibleColumns = array('id', 'name', 'description', 'author', 'publisher', 'language', 'length', 'asin');

		$this->orderBy = array(array('id', 'asc'));
	}

}
