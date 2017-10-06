Route::post('/books-grid', function()
{
    GridEncoder::encodeRequestedData(new BookRepository(new Book()), Input::all());
});
