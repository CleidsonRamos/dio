<?php

//força a utilização e tipagem
declare(strict_types=1);

//Classes são representações de objetos
class ContaBancaria
{
    /* modificador de acesso defini a visibilidade: public, private, protect
        publico: qualquer elemento exeterno tem acesso.
        private: restringe o acesso aos elementos de fora da classe..
        protect: similar ao private, tem uma excessao quando usa herança.
    */
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    //O metodo contrutot é invocado sempre que a classe é instanciada
    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        //pra acessar um atributo ou metodo dentro da propria classe utiliza o this
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;        
    }

    // : vai retornar uma string
    public function obeterSaldo() : string
    {
        return 'Seu saldo atual é R$ '.$this->saldo;
    }

    //vai receber um float e  : vai retornar uma string
    public function depositar(float $valor) : string
    {
        $this->saldo += $valor;
        return 'Deposito realizado agora o seu saldo atual é R$ '.$this->saldo;
    }

    public function sacar(float $valor) : string
    {
        $this->saldo -= $valor;
        return 'Saque realizado agora o seu saldo atual é R$ '.$this->saldo;
    }
}


//objeto é uma instancia da classe
$conta = new ContaBancaria(
    'caixa',
    'cleidson',
    '6544',
    '6464-54',
    '3000'    
);

var_dump($conta);

echo'<br><br>';

echo($conta->obeterSaldo());

echo'<br><br>';

echo($conta->depositar(500));

echo'<br><br>';

echo($conta->sacar(2000));
