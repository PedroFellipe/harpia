<?php

namespace Modulos\Seguranca\Database\Seeds;

use Illuminate\Database\Seeder;
use Modulos\Seguranca\Models\Permissao;

class PermissaoTableSeeder extends Seeder
{
    public function run()
    {
        /** Permisssoes do Módulo Segurança */

        $this->createPermissoesIndex();

        $this->createPermissoesModulo();

        $this->createPermissoesCategoriasRecursos();

        $this->createPermissoesRecursos();

        $this->createPermissoesPermissoes();

        $this->createPermissoesPerfis();

        $this->createPermissoesUsuarios();

        /** Permissoes do Módulo Geral */

        $this->createPermissoesGeralDashboard();

        $this->createPermissoesGeralPessoas();

        /** Permissoes do Módulo Acadêmico */

        $this->createPermissoesAcademicoIndex();

        $this->createPermissoesAcademicoPolo();

        $this->createPermissoesAcademicoDepartamentos();

        $this->createPermissoesAcademicoPeriodosLetivos();

        $this->createPermissoesAcademicoCursos();

        $this->createPermissoesAcademicoCentros();

        $this->createPermissoesAcademicoMatrizesCurriculares();

        $this->createPermissoesAcademicoOfertasCursos();

        $this->createPermissoesAcademicoGrupos();

        $this->createPermissoesAcademicoTurmas();

        $this->createPermissoesAcademicoModulosMatrizes();

        $this->createPermissoesAcademicoDisciplinas();

        $this->createPermissoesAcademicoVinculos();

        $this->createPermissoesAcademicoTutoresGrupos();

        $this->createPermissoesAcademicoTutores();

        $this->createPermissoesAcademicoAlunos();


        /** Permissões do Módulo Integração */

        $this->createPermissoesIntegracaoDashboard();

        /** Permissões do Módulo de Monitoramento */

        $this->createPermissoesMonitoramentoDashboard();
    }

    /** Permissões do Módulo Segurança */

    // 1 permissao
    private function createPermissoesIndex()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 1;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Dashboard';
        $permissao->save();
    }

    // 4 permissoes
    private function createPermissoesModulo()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 2;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso módulo da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 2;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso módulo da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 2;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso módulo da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 2;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso módulo da categoria segurança do módulo segurança';
        $permissao->save();
    }

    // 4 permissoes
    private function createPermissoesCategoriasRecursos()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 3;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso categorias de recursos da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 3;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso categorias de recursos da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 3;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso categorias de recursos da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 3;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso categorias de recursos da categoria segurança do módulo segurança';
        $permissao->save();
    }

    // 4 permissoes
    private function createPermissoesRecursos()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 4;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso recursos da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 4;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso recursos da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 4;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso recursos da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 4;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso recursos da categoria segurança do módulo segurança';
        $permissao->save();
    }

    // 4 permissoes
    private function createPermissoesPermissoes()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 5;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso permissoes da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 5;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso permissoes da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 5;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso permissoes da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 5;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso permissoes da categoria segurança do módulo segurança';
        $permissao->save();
    }

    // 5 permissoes
    private function createPermissoesPerfis()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 6;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso perfil da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 6;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso perfil da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 6;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso perfil da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 6;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso perfil da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 6;
        $permissao->prm_nome = 'atribuirpermissoes';
        $permissao->prm_descricao = 'Permissão de atribuir permissoes ao perfis do recurso perfil da categoria segurança do módulo segurança';
        $permissao->save();
    }

    // 6 permissoes
    private function createPermissoesUsuarios()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 7;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso usuario da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 7;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso usuario da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 7;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso usuario da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 7;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso usuario da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 7;
        $permissao->prm_nome = 'atribuirperfil';
        $permissao->prm_descricao = 'Permissão atribuirperfil do recurso usuario da categoria segurança do módulo segurança';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 7;
        $permissao->prm_nome = 'deletarperfil';
        $permissao->prm_descricao = 'Permissão deletarperfil do recurso usuario da categoria segurança do módulo segurança';
        $permissao->save();
    }

    /** Permissões do Módulo Geral */

    // 1 permissao
    private function createPermissoesGeralDashboard()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 8; // Recurso Dashboard
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Dashboard da Categoria Cadastros do módulo geral';
        $permissao->save();
    }

    // 5 permissoes
    private function createPermissoesGeralPessoas()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 9; // Recurso Pessoas
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Pessoas da categoria Cadastros do módulo Geral';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 9; // Recurso Pessoas
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Pessoas da categoria Cadastros do módulo Geral';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 9; // Recurso Pessoas
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso Pessoas da categoria Cadastros do módulo Geral';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 9; // Recurso Pessoas
        $permissao->prm_nome = 'show';
        $permissao->prm_descricao = 'Permissão show do recurso Pessoas da categoria Cadastros do módulo Geral';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 9; // Recurso Pessoas
        $permissao->prm_nome = 'verificapessoa';
        $permissao->prm_descricao = 'Permissão verificapessoa do recurso Pessoas da categoria Cadastros do módulo Geral';
        $permissao->save();
    }

    /** Permissões do Módulo Acadêmico */

    // 1 permissao
    private function createPermissoesAcademicoIndex()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 10;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Dashboard';
        $permissao->save();
    }

    // 4 permissoes
    private function createPermissoesAcademicoPolo()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 11;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso polos da categoria cadastro do módulo acadêmico';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 11;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso polos da categoria cadastro do módulo acadêmico';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 11;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso polos da categoria cadastro do módulo acadêmico';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 11;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso polos da categoria cadastro do módulo acadêmico';
        $permissao->save();
    }

    // 4 permissoes
    private function createPermissoesAcademicoDepartamentos()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 12;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Departamento';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 12;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Departamento';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 12;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso Departamento';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 12;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso Departamento';
        $permissao->save();
    }

    // 4 permissoes
    private function createPermissoesAcademicoPeriodosLetivos()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 13;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Período Letivo';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 13;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Período Letivo';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 13;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso Período Letivo';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 13;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso Período Letivo';
        $permissao->save();
    }

    // 4 permissoes
    private function createPermissoesAcademicoCursos()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 14;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Curso';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 14;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Curso';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 14;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso Curso';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 14;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso Curso';
        $permissao->save();
    }

    // 4 permissoes
    private function createPermissoesAcademicoCentros()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 15;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Centro';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 15;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Centro';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 15;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso Centro';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 15;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso Centro';
        $permissao->save();
    }

    // 5 permissoes
    private function createPermissoesAcademicoMatrizesCurriculares()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 16;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Matriz Curricular';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 16;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão index do recurso Matriz Curricular';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 16;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão index do recurso Matriz Curricular';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 16;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão index do recurso Matriz Curricular';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 16;
        $permissao->prm_nome = 'anexo';
        $permissao->prm_descricao = 'Permissão anexo do recurso Matriz Curricular';
        $permissao->save();
    }

    // 2 permissoes
    private function createPermissoesAcademicoOfertasCursos()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 17;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Ofertas de Cursos';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 17;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Ofertas de Cursos';
        $permissao->save();
    }

    // 4 permissoes
    private function createPermissoesAcademicoGrupos()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 18;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Grupo';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 18;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Grupo';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 18;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso Grupo';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 18;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso Grupo';
        $permissao->save();
    }

    // 4 permissoes
    private function createPermissoesAcademicoTurmas()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 19;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Turmas';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 19;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Turmas';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 19;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso Turmas';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 19;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso Turmas';
        $permissao->save();
    }

    // 5 permissoes
    private function createPermissoesAcademicoModulosMatrizes()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 20;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Módulos Matrizes';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 20;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Módulos Matrizes';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 20;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso Módulos Matrizes';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 20;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso Módulos Matrizes';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 20;
        $permissao->prm_nome = 'gerenciardisciplinas';
        $permissao->prm_descricao = 'Permissão gerenciar disciplinas do recurso Módulos Matrizes';
        $permissao->save();
    }

    // 4 permisssoes
    private function createPermissoesAcademicoDisciplinas()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 21;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Disciplinas';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 21;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Disciplinas';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 21;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso Disciplinas';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 21;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso Disciplinas';
        $permissao->save();
    }

    // 4 permisssoes
    private function createPermissoesAcademicoVinculos()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 22;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Vinculos';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 22;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Vinculos';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 22;
        $permissao->prm_nome = 'vinculos';
        $permissao->prm_descricao = 'Permissão vinculos do recurso Vinculos';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 22;
        $permissao->prm_nome = 'delete';
        $permissao->prm_descricao = 'Permissão delete do recurso Vinculos';
        $permissao->save();
    }

    // 3 permissoes
    private function createPermissoesAcademicoTutoresGrupos()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 23;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Tutores do Grupo';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 23;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Tutores do Grupo';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 23;
        $permissao->prm_nome = 'alterartutor';
        $permissao->prm_descricao = 'Permissão alterartutor do recurso Tutores do Grupo';
        $permissao->save();
    }

    // 4 permisssoes
    private function createPermissoesAcademicoAlunos()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 24;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Alunos';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 24;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Alunos';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 24;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso Alunos';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 24;
        $permissao->prm_nome = 'show';
        $permissao->prm_descricao = 'Permissão delete do recurso Alunos';
        $permissao->save();
    }

    // 4 permisssoes
    private function createPermissoesAcademicoTutores()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 25;
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Tutores';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 25;
        $permissao->prm_nome = 'create';
        $permissao->prm_descricao = 'Permissão create do recurso Tutores';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 25;
        $permissao->prm_nome = 'edit';
        $permissao->prm_descricao = 'Permissão edit do recurso Tutores';
        $permissao->save();

        $permissao = new Permissao();
        $permissao->prm_rcs_id = 25;
        $permissao->prm_nome = 'show';
        $permissao->prm_descricao = 'Permissão show do recurso Tutores';
        $permissao->save();
    }

    /** Permissões do Módulo Integração */

    // 1 permissao
    private function createPermissoesIntegracaoDashboard()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 26; // Recurso Dashboard
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Dashboard da Categoria Cadastros do módulo geral';
        $permissao->save();
    }

    /** Permissões do Módulo Integração */

    // 1 permissao
    private function createPermissoesMonitoramentoDashboard()
    {
        $permissao = new Permissao();
        $permissao->prm_rcs_id = 27; // Recurso Dashboard
        $permissao->prm_nome = 'index';
        $permissao->prm_descricao = 'Permissão index do recurso Dashboard da Categoria de Monitoramento do módulo de monitoramento';
        $permissao->save();
    }
}
