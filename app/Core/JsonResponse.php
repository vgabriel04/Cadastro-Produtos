<?php

namespace App\Core;

class JsonResponse
{
  public static function send($dado, $codigo)
  {
    http_response_code($codigo);
    $retorno = json_encode($dado);
    echo $retorno;
  }
}
