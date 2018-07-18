<div align="center">
    <span>Listagem de Alunos</span>
</div>
<div>
    <a href="{{route('aluno.form')}}">Add</a>
    <table id="tabela" align="center" border="line">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Curso</th>
            <th>Semestre</th>
            <th>Ações</th>
        </tr>
        @foreach($alunos as $aluno)
            <tr>
                <td>{{$aluno->id_aluno}}</td>
                <td>{{$aluno->tx_nome}}</td>
                <td>{{$aluno->tx_sobrenome}}</td>
                <td>{{$aluno->tx_curso}}</td>
                <td>{{$aluno->nu_semestre}}</td>
                <td>Excluir</td>
            </tr>
        @endforeach
    </table>
</div>