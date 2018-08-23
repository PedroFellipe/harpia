<?php

namespace Modulos\Monitoramento\Http\Controllers;

use Illuminate\Http\Request;
use Configuracao;
use App\Http\Controllers\Controller;
use Modulos\Integracao\Models\AmbienteVirtual;
use Modulos\Academico\Repositories\CursoRepository;
use Modulos\Integracao\Repositories\AmbienteVirtualRepository;

class TempoOnlineController extends Controller
{
    protected $cursoRepository;
    protected $ambientevirtualRepository;

    public function __construct(CursoRepository $cursoRepository, AmbienteVirtualRepository $ambientevirtualRepository)
    {
        $this->cursoRepository = $cursoRepository;
        $this->ambientevirtualRepository = $ambientevirtualRepository;
    }

    public function getIndex()
    {
        $ambientes = AmbienteVirtual::all()->filter(function ($value) {
            $servicos = $value->ambienteservico;

            // Retorna somente os ambientes com plugin de monitoramento configurado
            foreach ($servicos as $servico) {
                if ($servico->asr_ser_id == 1) {
                    return $value;
                }
            }
        });

        return view('Monitoramento::tempoonline.index', compact('ambientes'));
    }

    public function getMonitorar($idAmbiente)
    {
        $ambiente = $this->ambientevirtualRepository->find($idAmbiente);

        if (is_null($ambiente)) {
            flash()->error('Ambiente não existe!');
            return redirect()->back();
        }

        $servicos = $ambiente->ambienteservico;

        $monitoramento = $servicos->filter(function ($value) {
            if ($value->asr_ser_id == 1) {
                return $value;
            }
        })->first();

        $timeclicks = 1200;
        $cursos = $this->cursoRepository->getCursosByAmbiente($idAmbiente);

        $wsfunction = 'local_monitor_get_tutor_online_time';

        return view('Monitoramento::tempoonline.monitorar', compact('cursos', 'ambiente', 'timeclicks', 'wsfunction', 'monitoramento'));
    }

    public function getPdf(Request $request)
    {
        $dados = $request->except('_token');
//        dd($request);


        $tabledata = json_decode($dados['data'], true);
        // dd($tabledata);

        $mpdf = new \mPDF();
        $mpdf->mirrorMargins = 1;
        $mpdf->SetTitle('Tempo Online');
        $mpdf->addPage('P');
        $mpdf->WriteHTML(view('Monitoramento::tempoonline.print', compact('dados', 'tabledata'))->render());
        $mpdf->Output();
        exit;
    }
}
