<?php

class Autenticador
{

    public function tentaLogin(Autenticavel $autenticavel, string $senha)
    {
        if ($autenticavel->podeAutenticar($senha)){
            echo "Ok, usuario logado com sucesso!";
        }else{
            echo "Ops. Senha incorreta";
        }
    }
}

