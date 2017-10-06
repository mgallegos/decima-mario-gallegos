Route::post('/invoice-grid', function()
{
  GridEncoder::encodeRequestedData(new InvoiceRepository(new Invoice()), Input::all());
});
