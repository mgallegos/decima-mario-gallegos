<?php

namespace Mgallegos\DecimaMarioGallegos\MarioGallegos\Repositories\Demo;

use Eloquent;

class EloquentBook {

	/**
	 * Book Eloquent Model
	 *
	 * @var Book
	 *
	 */
    protected $Book;

    public function __construct()
    {
        $this->Book = new Book();
        $this->Book->setConnection('mariogallegos');
    }

     /**
     * Create a new book
     *
     * @param array $data
     * 	An array as follows: array('name'=>$name, 'description'=>$description, 'author'=>$author, 'publisher'=>$publisher, 'language'=>$language, 'length'=>$length, 'asin'=>$asin);
     *
     * @return boolean
     */
    public function create(array $data)
    {
      $data['length'] = str_replace(',', '', $data['length']);

      try
      {
        $this->Book->setConnection('mariogallegos')->create($data);
      }
      catch (Exception $e)
      {
        return json_encode(array('success' => false, 'message' => 'Something went wrong, please try again later.'));
      }

      return json_encode(array('success' => true, 'message' => 'Book successfully saved!'));
    }

    /**
     * Update an existing book
     *
     * @param int $id Book id
     * @param array $data
     * 	An array as follows: array('name'=>$name, 'description'=>$description, 'author'=>$author, 'publisher'=>$publisher, 'language'=>$language, 'length'=>$length, 'asin'=>$asin);
     *
     * @return boolean
     */
    public function update($id, array $data)
    {
      $Book = $this->Book->setConnection('mariogallegos')->find($id);

      $data['length'] = str_replace(',', '', $data['length']);

    	foreach ($data as $key => $value)
    	{
    		$Book->$key = $value;
    	}

      try
      {
        $Book->save();
      }
      catch (Exception $e)
      {
        return json_encode(array('success' => false, 'message' => 'Something went wrong, please try again later.'));
      }

      return json_encode(array('success' => true, 'message' => 'Book successfully updated!'));
    }

    /**
     * Delete an existing book
     *
     * @param int id
     *
     * @return boolean
     */
    public function delete($id)
    {
      try
      {
        // $this->Book->setConnection('mariogallegos')->destroy($id);
        $Book = $this->Book->setConnection('mariogallegos')->find($id);
        $Book->delete();
      }
      catch (Exception $e)
      {
        return json_encode(array('success' => false, 'message' => 'Something went wrong, please try again later.'));
      }

      return json_encode(array('success' => true, 'message' => 'Book successfully deleted!'));
    }
}
