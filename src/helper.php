<?php
namespace Src;
class Helper
{
    private static $variables = null;
    private static $Path = null;
    /**
     * The search file to use. Instance
     *
     * @var /\Dotenv/\Repository/\Adapter/\ReaderInterface
     */
    private static $Instance = array();
    /**
     * The reader to use.
     *
     * @var /\Dotenv/\Repository/\Adapter/\ReaderInterface
     */
    private $reader;

    /**
     * The writer to use.
     *
     * @var /\Dotenv/\Repository/\Adapter/\WriterInterface
     */
    private $writer;
    /**
     * The entry name.
     *
     * @var string
     */
    private $name;

    /**
     * The entry value.
     *
     * @var /\Dotenv\Parser\Value|null
     */
    private $value;

    /**
     * Create a new entry instance.
     *
     * @param string                    $name
     * @param \Dotenv\Parser\Value|null $value
     *
     * @return void
     */
    /**
     * Create a new adapter repository instance.
     *
     * @param /\Dotenv/\Repository/\Adapter/\ReaderInterface $reader
     * @param /\Dotenv/\Repository/\Adapter/\WriterInterface $writer
     *
     * @return void
     */
    public static function _CreateVars()
    {
        self::$Path = "src/.env";
        self::load(self::$Path);
    }
    /**
     * Summary of load
     * @param mixed $path
     * @return void function load
     */

    /** ENV FILE
     * Environment variables offer information on the process's operating environment
     * (producton, development, build pipeline, and so on). Environment variables in
     * Node are used to store sensitive data such as passwords, API credentials, 
     * and other information that should not be written directly in code. 
     * Environment variables must be used to configure any variables or configuration 
     * details that may differ between environments.
     */
    private static function load($path): void
    {
        if (!is_readable($path)) {
            echo ("File not readable: {$path}");
        }
        /**
         * @var mixed $lines
         */
        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) {
                continue;
            }
            /**
             * Load the given entries into the repository.
             *
             * We'll substitute any nested variables, and send each variable to the
             * repository, with the effect of actually mutating the environment.
             *
             * @param /\Dotenv\Repository\/RepositoryInterface $repository
             * @param /\Dotenv\Parser\Entry[]                 $entries
             *
             * @return array<string,string|null>
             */
            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value, "\x00..\x1F\"");
            self::$variables[$name] = $value;

            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                putenv(sprintf('%s=%s', $name, $value));
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }

    public function Construct_Req($reader, $writer)
    {
        $this->reader = $reader;
        $this->writer = $writer;
    }

    /**
     * Determine if the given environment variable is defined.
     *
     * @param string $name
     *
     * @return bool
     */
    public function has(string $name)
    {
        return '' !== $name && $this->reader->read($name)->isDefined();
    }

    /**
     * Get an environment variable.
     *
     * @param string $name
     *
     * @throws \InvalidArgumentException
     *
     * @return string|null
     */
    public function get(string $name)
    {
        if ('' === $name) {
            throw new \InvalidArgumentException('Expected name to be a non-empty string.');
        }

        return $this->reader->read($name)->getOrElse(null);
    }

    /**
     * Set an environment variable.
     *
     * @param string $name
     * @param string $value
     *
     * @throws \InvalidArgumentException
     *
     * @return bool
     */
    public function set(string $name, string $value)
    {
        if ('' === $name) {
            throw new \InvalidArgumentException('Expected name to be a non-empty string.');
        }

        return $this->writer->write($name, $value);
    }

    /**
     * Clear an environment variable.
     *
     * @param string $name
     *
     * @throws \InvalidArgumentException
     *
     * @return bool
     */
    public function clear(string $name)
    {
        if ('' === $name) {
            throw new \InvalidArgumentException('Expected name to be a non-empty string.');
        }

        return $this->writer->delete($name);
    }
}

if (count(get_included_files()) == 1) {

    header('Location: /404');
    die();

} else {

}