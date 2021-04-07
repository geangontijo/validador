<?php

namespace geangontijo\Validador;

class ValidacaoException extends \Exception
{
    private $indiceInvalido;

    public function setIndiceInvalido(string $indiceInvalido): void
    {
        $this->indiceInvalido = $indiceInvalido;
    }

    public function getIndiceInvalido()
    {
        return $this->indiceInvalido;
    }
}
