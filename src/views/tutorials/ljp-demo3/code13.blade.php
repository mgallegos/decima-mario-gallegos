Route::post('/new', function()
{
  $input = Input::json()->all();
  unset($input['id'], $input['_token']);

  $EloquentBook = new EloquentBook();

  return $EloquentBook->create($input);
});

Route::post('/edit', function()
{
  $input = Input::json()->all();
  $id = $input['id'];
  unset($input['id'], $input['_token']);

  $EloquentBook = new EloquentBook();

  return $EloquentBook->update($id, $input);
});

Route::post('/delete', function()
{
  $EloquentBook = new EloquentBook();

  return $EloquentBook->delete(Input::json()->get('id'));
});
