Route::post('/invoice-item-grid', function() use ($app)
{
  GridEncoder::encodeRequestedData(new InvoiceItemRepository($app['db']), Input::all());
});
