&lt;?php
use \Illuminate\Support\Facades\DB;
use Mgallegos\LaravelJqgrid\Repositories\EloquentRepositoryAbstract;

class ExampleRepository extends EloquentRepositoryAbstract {

    public function __construct()
    {
        $this->Database = DB::table('table_1')
                             ->join('table_2', 'table_1.id', '=', 'table_2.id');

        $this->visibleColumns = array('column_1','column_2','column_3');

        $this->orderBy = array(array('table_1.id', 'asc'), array('table_1.name', 'desc'));
    }
}
