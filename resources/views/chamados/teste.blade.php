claudio é o foda mesmo
 namespace App\Http\Controllers;

use Vsmoraes\Pdf\Pdf;

class HomeController extends BaseControler
{
    private $pdf;

    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }

    public function teste()
    {
        $html = view('chamados.teste')->render();

        return $this->pdf
            ->load($html)
            ->show();
    }
}
