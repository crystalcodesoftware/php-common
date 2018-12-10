<?php

namespace CrystalCode\Php\Common;

use Exception;
use Throwable;

class OperationException extends Exception
{

    /**
     *
     * @var string
     */
    private $name;

    /**
     * 
     * @param string $name
     * @param string $message
     * @param int $code
     * @param Throwable $previous
     */
    public function __construct(string $name, string $message = null, int $code = 0, Throwable $previous = null)
    {
        if ($message === null) {
            $message = vsprintf('The operation "%s" is invalid', [
                $name,
            ]);
        }

        parent::__construct($message, $code, $previous);
        $this->name = $name;
    }

    /**
     * 
     * @return string
     */
    final public function getName(): string
    {
        return $this->name;
    }

}
