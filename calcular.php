<?php
class Foo {
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';


    function aMemberFunc() {
        print 'Inside `aMemberFunc()`';
    }
}
$aluno = ['nome' => 'Lucas', 'idade' => 20];
$vencedor = $aluno;
$vencedor['nome'] = 'Pedro';
echo $vencedor['nome']."<br>".$aluno['nome']."<br>";

print_r($vencedor);
echo '<br>';
print_r($aluno);

/*$teste = new Foo();

$teste->aMemberFunc();*/


