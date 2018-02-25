<?php

namespace App\Exceptions;

use Throwable;

class TripControllerException extends \Exception
{
    protected $message;

    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function render()
    {
        if (strpos($this->message, 'Undefined index') !== false) {
            return redirect()->route('trip.index')->with('error', 'No breweries are close enough...');
        }
        if ($this->message == 'No breweries are close enough...') {
            return redirect()->route('trip.index')->with('error', $this->message);
        }
        return redirect()->route('trip.index')->with('error', 'Whoops, something went wrong :)');
    }
}
