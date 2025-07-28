<?php

declare(strict_types=1);

namespace App\HF\Exceptions;

use App\Exception\InfrastructureAbstractException;

final class DbException extends InfrastructureAbstractException
{
    public function __construct(string $message = "Ошибка при работе с базой данных", int $code = 0, ?\Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
