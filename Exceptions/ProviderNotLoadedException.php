<?php
namespace HexGad\Auth\Exceptions;

class ProviderNotLoadedException extends \Exception
{

    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct("Module $message not installed", $code, $previous);
    }
}
