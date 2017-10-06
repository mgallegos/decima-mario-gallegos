Route::get('/', function()
{
  return View::make('myview');
});

Route::post('/grid-data', function()
{
    GridEncoder::encodeRequestedData(new ExampleRepository(), Input::all());
});
{{--
use BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Mgallegos\LaravelJqgrid\Encoders\RequestedDataInterface;

class AppController extends BaseController {

    protected $GridEncoder;

    public function __construct(RequestedDataInterface $GridEncoder)
    {
        $this->GridEncoder = $GridEncoder;
    }

    public function getIndex()
    {
        return View::make('myview');
    }

    public function postGridData()
    {
        $this->GridEncoder->encodeRequestedData(new ExampleRepository(), Input::all());
    }
}
--}}
