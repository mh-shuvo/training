<?php

namespace Atova\Eshoper\Abstract;

class Routing
{
    private static bool $noMatch = true;

    public static function get($route, $resolve): void
    {
        if ($_SERVER['REQUEST_METHOD'] != "GET") {
            echo sprintf("Unsupported method: %s", $_SERVER['REQUEST_METHOD']);
        }
        self::process($route, $resolve);
    }

    public static function post($route, $resolve): void
    {
        if ($_SERVER['REQUEST_METHOD'] != "POST") {
            echo sprintf("Unsupported method: %s", $_SERVER['REQUEST_METHOD']);
        }
        self::process($route, $resolve);
    }

    public static function delete($route, $resolve): void
    {
        if ($_SERVER['REQUEST_METHOD'] != "DELETE") {
            echo sprintf("Unsupported method: %s", $_SERVER['REQUEST_METHOD']);
        }
        self::process($route, $resolve);
    }

    protected static function process($route, $resolve): void
    {
        $pattern = "~^$route$~";
        $params = self::getMatches($pattern);

        if ($params) {
            self::$noMatch = false;
            $functionArguments = array_slice($params, 1);

            if (is_callable($resolve)) {
                $resolve(...$functionArguments);
            } elseif (is_array($resolve)) {
                $className = $resolve[0];
                $cls = new $className();
                $cls->{$resolve[1]}(...$functionArguments);
            } else {
                echo "Invalid Argument Passed By the Routes";
            }
        }
    }

    private static function getUrl()
    {
        return $_SERVER['REQUEST_URI'];
    }

    private static function getMatches($pattern): array|bool
    {
        $uri = self::getUrl();

        if (preg_match($pattern, $uri, $match)) {
            return $match;
        }
        return false;
    }

    public static function notFound(): void
    {
        if (self::$noMatch) {
            echo "<h1>Not Found</h1><p>The requested URL was not found on this server.</p>";
            exit();
        }
    }
}
