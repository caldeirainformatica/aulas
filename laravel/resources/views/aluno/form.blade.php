@extends('welcome')
@section('conteudo')
    <div class="row">
        <div class="col s12">
            <form method="post" action="{{route('aluno.salvarAluno')}}">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Formulário</span>
                        <br>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="id_aluno" value="{{ $aluno->id_aluno }}">
                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                                <input id="nome" type="text" name="tx_nome" placeholder="Nome"
                                       value="{{ $aluno->tx_nome }}">
                                <label for="nome">Nome</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                                <input type="text" id="sobrenome" name="tx_sobrenome"
                                       placeholder="Sobrenome"
                                       value="{{ $aluno->tx_sobrenome }}">
                                <label for="sobrenome">Sobrenome</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                                <input id="curso" type="text" name="tx_curso" placeholder="curso"
                                       value="{{ $aluno->tx_curso }}">
                                <label for="curso">Curso</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                                <input type="number" id="semestre" name="nu_semestre" placeholder="Semestre"
                                       value="{{ $aluno->nu_semestre }}">
                                <label for="semestre">Semestre</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-action right-align">
                        <a class="btn red white-text" href="{{ route("aluno.list") }}">
                            VOLTAR
                        </a>
                        <button type="submit" class="btn green white-text">
                            SALVAR
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection