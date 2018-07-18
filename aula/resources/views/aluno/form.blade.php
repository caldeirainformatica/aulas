<form method="post" action="{{route('aluno.salvarAluno')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" name="tx_nome" placeholder="Nome">
    <input type="text" name="tx_sobrenome" placeholder="Sobrenome">
    <input type="text" name="tx_curso" placeholder="curso">
    <input type="number" name="nu_semestre" placeholder="Semestre">
    <button type="submit">Submit</button>
</form>