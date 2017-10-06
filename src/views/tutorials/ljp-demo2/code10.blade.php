Route::post('/crud', function()
{
  $EloquentBook = new EloquentBook();

  switch (Input::get('oper'))
  {
    case 'add':
      return $EloquentBook->create(Input::except('id', 'oper'));
      break;
    case 'edit':
      return $EloquentBook->update(Input::get('id'), Input::except('id', 'oper'));
      break;
    case 'del':
      return  $EloquentBook->delete(Input::get('id'));
      break;
  }
});
