<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Debug\Exception;

/**
 * Data Object that represents a Silenced Error.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class SilencedErrorContext implements \JsonSerializable
{
<<<<<<< HEAD
    public $count = 1;

    private $severity;
    private $file;
    private $line;
    private $trace;

    public function __construct($severity, $file, $line, array $trace = array(), $count = 1)
=======
    private $severity;
    private $file;
    private $line;

    public function __construct($severity, $file, $line)
>>>>>>> 7821e311558fa509ed52939f62e4b27d3aefcc3b
    {
        $this->severity = $severity;
        $this->file = $file;
        $this->line = $line;
<<<<<<< HEAD
        $this->trace = $trace;
        $this->count = $count;
=======
>>>>>>> 7821e311558fa509ed52939f62e4b27d3aefcc3b
    }

    public function getSeverity()
    {
        return $this->severity;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function getLine()
    {
        return $this->line;
    }

<<<<<<< HEAD
    public function getTrace()
    {
        return $this->trace;
    }

=======
>>>>>>> 7821e311558fa509ed52939f62e4b27d3aefcc3b
    public function JsonSerialize()
    {
        return array(
            'severity' => $this->severity,
            'file' => $this->file,
            'line' => $this->line,
<<<<<<< HEAD
            'trace' => $this->trace,
            'count' => $this->count,
=======
>>>>>>> 7821e311558fa509ed52939f62e4b27d3aefcc3b
        );
    }
}
