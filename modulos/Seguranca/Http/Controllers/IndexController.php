<?php

namespace Modulos\Seguranca\Http\Controllers;

use App\Http\Controllers\Controller;
use Harpia\Providers\ActionButton\TButton;

use Modulos\Seguranca\Models\Modulo;

/**
 * Class IndexController.
 */
class IndexController extends Controller
{
    protected $actionButton = array();

    /**
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        $novo = new TButton();
        $novo->setName('Novo')->setAction('seguranca/index/create')->setIcon('fa fa-plus')->setStyle('btn btn-app bg-olive');

        $imprimir = new TButton();
        $imprimir->setName('Imprimir')->setAction('seguranca/index/print')->setIcon('fa fa-file-pdf-o')->setStyle('btn btn-app bg-blue');

        array_push($this->actionButton,$imprimir,$novo);


        $modulos = Modulo::paginate(10);
        
        return view('Seguranca::index.index',array('actionButton' => $this->actionButton, 'modulos' => $modulos));
    }
}