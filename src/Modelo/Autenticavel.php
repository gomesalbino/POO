<?php
interface Autenticavel
{
   public function podeAutenticar(string $senha): bool;
}