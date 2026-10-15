<?php

//src/Filmes.php

class Filme
{
    
private string $titulo;
private string $genero;
private int $ano;
private string $direcao;


  
  public function ehClassico(): bool
  {

      return $this->ano < 2000;
  }

/* Métodos getters: permitem ACESSO/LEITURA (ler dados)*/
public function getTitulo()
{
    return$this->titulo;
}

  public function getGenero()
  {
    return$this->genero;
    
  }

  public function getAno(): int
  {
    return $this->ano;
  }

  public function getdirecao( )
  {
    return $this->direcao;
  }



/* Métodosos setters: permitem ACESSO (colocar dados)*/
/* Setters recebem através de parâmetros os dados a serem colocados nas propriedades */

public function setTitulo(string $titulo): void
{
  $this->titulo = $titulo;
  }

  public function setGenero(string $genero): void
  {
    $this->genero = $genero;
    
  }

  public function setAno(int $ano): void
  {
    $this->ano = $ano;
  }

  public function setdirecao(string $direcao):void
  {
    $this->direcao = $direcao;
  }

}
  