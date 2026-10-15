<?php

//src/Filmes.php

class Filme
{
    // Propriedades: caracteristicas
private string $titulo;
private string $genero;
private int $ano;
private string $direcao;


    // Métodos: comportamentos (funções)
  public function ehClassico(): bool
  {
      // É um clássico SE ano for menor que 2000 
      // $this->ano procura a propriedade na classe local
      return $this->ano < 2000;
  }
}