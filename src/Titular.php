
<?php


class Titular
{
    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNomeTitular($nome);
    }
    public function recuperaCpf(): string 
    {
        return $this->cpf->recuperaNumero();
    }
    public function recuperaNome(): string 
    {
        return $this->nome;
    }
    private function validaNomeTitular(string $nome)
   {
    if (strlen($nome) < 5){
        echo "Nome não pode ser menor que 5 letras!";
        exit();
    }
   }
}