&lt;?php
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
    }

     /**
     * Creates a new book
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
        $this->Book->create($data);
      }
      catch (Exception $e)
      {
        return json_encode(array('success' => false, 'message' => 'Something went wrong, please try again later.'));
      }

      return json_encode(array('success' => true, 'message' => 'Book successfully saved!'));
    }

    /**
     * Updates an existing book
     *
     * @param int $id Book id
     * @param array $data
     * 	An array as follows: array('name'=>$name, 'description'=>$description, 'author'=>$author, 'publisher'=>$publisher, 'language'=>$language, 'length'=>$length, 'asin'=>$asin);
     *
     * @return boolean
     */
    public function update($id, array $data)
    {
      $Book = $this->Book->find($id);

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
     * Deletes an existing book
     *
     * @param int id
     *
     * @return boolean
     */
    public function delete($id)
    {
      try
      {
        $this->Book->destroy($id);
      }
      catch (Exception $e)
      {
        return json_encode(array('success' => false, 'message' => 'Something went wrong, please try again later.'));
      }

      return json_encode(array('success' => true, 'message' => 'Book successfully deleted!'));
    }
}
