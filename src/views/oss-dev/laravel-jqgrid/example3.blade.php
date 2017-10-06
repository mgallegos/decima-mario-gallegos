&lt;?php
use Illuminate\Database\Eloquent\Model;
use Mgallegos\LaravelJqgrid\Repositories\EloquentRepositoryAbstract;

class ExampleRepository extends EloquentRepositoryAbstract {

    public function __construct()
    {
        $this->Database = new YOUR_DATABASE_MODEL;

        $this->visibleColumns = array('column_1','column_2','column_3');

        $this->orderBy = array(array('id', 'asc'), array('name','desc'));
    }
}
