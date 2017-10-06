<?php

namespace Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo;

use Mgallegos\LaravelJqgrid\Repositories\RepositoryInterface;

class DocsGridRepository implements RepositoryInterface {

  /**
   * Calculate the number of rows. It's used for paging the result.
   *
   * @param    array $filters
   *  An array of filters, example: array(array('field'=>'column index/name 1','op'=>'operator','data'=>'searched string column 1'), array('field'=>'column index/name 2','op'=>'operator','data'=>'searched string column 2'))
   *  The 'field' key will contain the 'index' column property if is set, otherwise the 'name' column property.
   *  The 'op' key will contain one of the following operators: '=', '<', '>', '<=', '>=', '<>', '!=','like', 'not like', 'is in', 'is not in'.
   *  when the 'operator' is 'like' the 'data' already contains the '%' character in the appropiate position.
   *  The 'data' key will contain the string searched by the user.
   * @return  integer
   *  Total number of rows
   */
  public function getTotalNumberOfRows(array $filters = array())
  {
      return 5;
  }

  /**
   * Get the rows data to be shown in the grid.
   *
   * @param    integer $limit
   *  Number of rows to be shown into the grid
   * @param    integer $offset
   *  Start position
   * @param    string $orderBy
   *  Column name to order by.
   * @param    array $sord
   *  Sorting order
   * @param    array $filters
   *  An array of filters, example: array(array('field'=>'column index/name 1','op'=>'operator','data'=>'searched string column 1'), array('field'=>'column index/name 2','op'=>'operator','data'=>'searched string column 2'))
   *  The 'field' key will contain the 'index' column property if is set, otherwise the 'name' column property.
   *  The 'op' key will contain one of the following operators: '=', '<', '>', '<=', '>=', '<>', '!=','like', 'not like', 'is in', 'is not in'.
   *  when the 'operator' is 'like' the 'data' already contains the '%' character in the appropiate position.
   *  The 'data' key will contain the string searched by the user.
   * @return  array
   *  An array of array, each array will have the data of a row.
   *  Example: array(array('row 1 col 1','row 1 col 2'), array('row 2 col 1','row 2 col 2'))
   */
  public function getRows($limit, $offset, $orderBy = null, $sord = null, array $filters = array(), $nodeId = null, $nodeLevel = null, $exporting)
  {
    return json_decode('[{"inv":"1","date":"2007-10-01","client":"Client 1","amount":"100.00","tax":"20.00","total":"120.00","notes":"note 1"},
    						 {"inv":"2","date":"2007-10-03","client":"Client 2","amount":"200.00","tax":"40.00","total":"240.00","notes":"note 2"},
    						 {"inv":"3","date":"2007-10-02","client":"Client 3","amount":"300.00","tax":"60.00","total":"360.00","notes":"note invoice 3 & and amp test"},
    						 {"inv":"4","date":"2007-10-04","client":"Client 4","amount":"150.00","tax":"0.00","total":"150.00","notes":"no tax"},
    						 {"inv":"5","date":"2007-10-05","client":"Client 5","amount":"100.00","tax":"0.00","total":"100.00","notes":"no tax at all"},
    						 {"inv":"6","date":"2007-10-05","client":"Client 6","amount":"50.00","tax":"10.00","total":"60.00","notes":""},
    						 {"inv":"7","date":"2007-10-05","client":"Client 7","amount":"120.00","tax":"12.00","total":"134.00","notes":null},
    						 {"inv":"8","date":"2007-10-06","client":"Client 9","amount":"200.00","tax":"0.00","total":"200.00","notes":null},
    						 {"inv":"9","date":"2007-10-06","client":"Client 9","amount":"200.00","tax":"40.00","total":"240.00","notes":null},
    						 {"inv":"10","date":"2007-10-06","client":"Client 10","amount":"100.00","tax":"20.00","total":"120.00","notes":null}
               ]'
    					 , true);
  }
}
