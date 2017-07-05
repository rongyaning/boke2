<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DataCollector;

use Symfony\Component\Debug\Exception\SilencedErrorContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;

/**
 * LogDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LoggerDataCollector extends DataCollector implements LateDataCollectorInterface
{
    private $logger;
    private $containerPathPrefix;

    public function __construct($logger = null, $containerPathPrefix = null)
    {
        if (null !== $logger && $logger instanceof DebugLoggerInterface) {
            $this->logger = $logger;
        }

        $this->containerPathPrefix = $containerPathPrefix;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        // everything is done as late as possible
    }

    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        if (null !== $this->logger) {
<<<<<<< HEAD
            $containerDeprecationLogs = $this->getContainerDeprecationLogs();
            $this->data = $this->computeErrorsCount($containerDeprecationLogs);
=======
            $this->data = $this->computeErrorsCount();

            $containerDeprecationLogs = $this->getContainerDeprecationLogs();
            $this->data['deprecation_count'] += count($containerDeprecationLogs);
>>>>>>> 7821e311558fa509ed52939f62e4b27d3aefcc3b
            $this->data['compiler_logs'] = $this->getContainerCompilerLogs();
            $this->data['logs'] = $this->sanitizeLogs(array_merge($this->logger->getLogs(), $containerDeprecationLogs));
            $this->data = $this->cloneVar($this->data);
        }
    }

    /**
     * Gets the logs.
     *
     * @return array An array of logs
     */
    public function getLogs()
    {
        return isset($this->data['logs']) ? $this->data['logs'] : array();
    }

    public function getPriorities()
    {
        return isset($this->data['priorities']) ? $this->data['priorities'] : array();
    }

    public function countErrors()
    {
        return isset($this->data['error_count']) ? $this->data['error_count'] : 0;
    }

    public function countDeprecations()
    {
        return isset($this->data['deprecation_count']) ? $this->data['deprecation_count'] : 0;
    }

    public function countWarnings()
    {
        return isset($this->data['warning_count']) ? $this->data['warning_count'] : 0;
    }

    public function countScreams()
    {
        return isset($this->data['scream_count']) ? $this->data['scream_count'] : 0;
    }

    public function getCompilerLogs()
    {
        return isset($this->data['compiler_logs']) ? $this->data['compiler_logs'] : array();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'logger';
    }

    private function getContainerDeprecationLogs()
    {
        if (null === $this->containerPathPrefix || !file_exists($file = $this->containerPathPrefix.'Deprecations.log')) {
            return array();
        }

<<<<<<< HEAD
        $bootTime = filemtime($file);
        $logs = array();
        foreach (unserialize(file_get_contents($file)) as $log) {
            $log['context'] = array('exception' => new SilencedErrorContext($log['type'], $log['file'], $log['line'], $log['trace'], $log['count']));
=======
        $stubs = array();
        $bootTime = filemtime($file);
        $logs = array();
        foreach (unserialize(file_get_contents($file)) as $log) {
            $log['context'] = array('exception' => new SilencedErrorContext($log['type'], $log['file'], $log['line']));
>>>>>>> 7821e311558fa509ed52939f62e4b27d3aefcc3b
            $log['timestamp'] = $bootTime;
            $log['priority'] = 100;
            $log['priorityName'] = 'DEBUG';
            $log['channel'] = '-';
            $log['scream'] = false;
            $logs[] = $log;
        }

        return $logs;
    }

    private function getContainerCompilerLogs()
    {
        if (null === $this->containerPathPrefix || !file_exists($file = $this->containerPathPrefix.'Compiler.log')) {
            return array();
        }

        $logs = array();
        foreach (file($file, FILE_IGNORE_NEW_LINES) as $log) {
            $log = explode(': ', $log, 2);
            if (!isset($log[1]) || !preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*+(?:\\\\[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*+)++$/', $log[0])) {
                $log = array('Unknown Compiler Pass', implode(': ', $log));
            }

            $logs[$log[0]][] = array('message' => $log[1]);
        }

        return $logs;
    }

    private function sanitizeLogs($logs)
    {
        $sanitizedLogs = array();

        foreach ($logs as $log) {
            if (!$this->isSilencedOrDeprecationErrorLog($log)) {
                $sanitizedLogs[] = $log;

                continue;
            }

<<<<<<< HEAD
            $message = $log['message'];
            $exception = $log['context']['exception'];

            if ($exception instanceof SilencedErrorContext) {
                if (isset($silencedLogs[$h = spl_object_hash($exception)])) {
                    continue;
                }
                $silencedLogs[$h] = true;

                if (!isset($sanitizedLogs[$message])) {
                    $sanitizedLogs[$message] = $log + array(
                        'errorCount' => 0,
                        'scream' => true,
                    );
                }
                $sanitizedLogs[$message]['errorCount'] += $exception->count;

                continue;
            }

            $errorId = md5("{$exception->getSeverity()}/{$exception->getLine()}/{$exception->getFile()}\0{$message}", true);
=======
            $exception = $log['context']['exception'];
            $errorId = md5("{$exception->getSeverity()}/{$exception->getLine()}/{$exception->getFile()}\0{$log['message']}", true);
>>>>>>> 7821e311558fa509ed52939f62e4b27d3aefcc3b

            if (isset($sanitizedLogs[$errorId])) {
                ++$sanitizedLogs[$errorId]['errorCount'];
            } else {
                $log += array(
                    'errorCount' => 1,
<<<<<<< HEAD
                    'scream' => false,
=======
                    'scream' => $exception instanceof SilencedErrorContext,
>>>>>>> 7821e311558fa509ed52939f62e4b27d3aefcc3b
                );

                $sanitizedLogs[$errorId] = $log;
            }
        }

        return array_values($sanitizedLogs);
    }

    private function isSilencedOrDeprecationErrorLog(array $log)
    {
        if (!isset($log['context']['exception'])) {
            return false;
        }

        $exception = $log['context']['exception'];

        if ($exception instanceof SilencedErrorContext) {
            return true;
        }

        if ($exception instanceof \ErrorException && in_array($exception->getSeverity(), array(E_DEPRECATED, E_USER_DEPRECATED), true)) {
            return true;
        }

        return false;
    }

<<<<<<< HEAD
    private function computeErrorsCount(array $containerDeprecationLogs)
    {
        $silencedLogs = array();
=======
    private function computeErrorsCount()
    {
>>>>>>> 7821e311558fa509ed52939f62e4b27d3aefcc3b
        $count = array(
            'error_count' => $this->logger->countErrors(),
            'deprecation_count' => 0,
            'warning_count' => 0,
            'scream_count' => 0,
            'priorities' => array(),
        );

        foreach ($this->logger->getLogs() as $log) {
            if (isset($count['priorities'][$log['priority']])) {
                ++$count['priorities'][$log['priority']]['count'];
            } else {
                $count['priorities'][$log['priority']] = array(
                    'count' => 1,
                    'name' => $log['priorityName'],
                );
            }
            if ('WARNING' === $log['priorityName']) {
                ++$count['warning_count'];
            }

            if ($this->isSilencedOrDeprecationErrorLog($log)) {
<<<<<<< HEAD
                $exception = $log['context']['exception'];
                if ($exception instanceof SilencedErrorContext) {
                    if (isset($silencedLogs[$h = spl_object_hash($exception)])) {
                        continue;
                    }
                    $silencedLogs[$h] = true;
                    $count['scream_count'] += $exception->count;
=======
                if ($log['context']['exception'] instanceof SilencedErrorContext) {
                    ++$count['scream_count'];
>>>>>>> 7821e311558fa509ed52939f62e4b27d3aefcc3b
                } else {
                    ++$count['deprecation_count'];
                }
            }
        }

<<<<<<< HEAD
        foreach ($containerDeprecationLogs as $deprecationLog) {
            $count['deprecation_count'] += $deprecationLog['count'];
        }

=======
>>>>>>> 7821e311558fa509ed52939f62e4b27d3aefcc3b
        ksort($count['priorities']);

        return $count;
    }
}
