<?php

// namespace Alura\Banco\Modelo;

class Pessoa
{
use AcessoPropriedades;
protected string $nome;
private CPF $cpf;


public function __construct(string $nome, CPF $cpf)
{
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->validaNomeTitular($nome);
}
public function recuperaNome(): string 
{
    return $this->nome;
}
public function recuperaCpf(): string 
{
    return $this->cpf->recuperaNumero();;
}
protected function validaNomeTitular(string $nome)
{
 if (strlen($nome) < 5){
     echo "Nome não pode ser menor que 5 letras!";
     exit();
 }
}

}