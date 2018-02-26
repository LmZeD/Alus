<?php

namespace App\Exceptions;

use Throwable;

class NoBreweriesFoundException extends \Exception
{
    protected $message;

    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function render()
    {
        return redirect()->route('trip.index')->with('error', 'No breweries are close enough...');
    }
}
