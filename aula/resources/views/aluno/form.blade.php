<form method="post" action="{{route('aluno.salvarAluno')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="id_aluno" value="{{ $aluno->id_aluno }}">
    <input type="text" name="tx_nome" placeholder="Nome" value="{{ $aluno->tx_nome }}">
    <input type="text" name="tx_sobrenome" placeholder="Sobrenome" value="{{ $aluno->tx_sobrenome }}">
    <input type="text" name="tx_curso" placeholder="curso" value="{{ $aluno->tx_curso }}">
    <input type="number" name="nu_semestre" placeholder="Semestre" value="{{ $aluno->nu_semestre }}">
    <button type="submit">Submit</button>
</form>