<?php

namespace DvxgitJsoriano\Logger;

class Logger
{
    public static $path;
    public static $name;
    public static $ext;

    public function __construct($path = null, $name = '_log', $ext = '.log')
    {
        $this->path = $path ?? '/var/log/logger/';
        $this->name = $name ?? '_log';
        $this->ext = $ext ?? '.log';
    }

    public static function configure($path = null, $name = null, $ext = null) {
        self::$path = $path ?? config('jsoriano-logger.path');
        self::$name = $name ?? config('jsoriano-logger.name');
        self::$ext = $ext ?? config('jsoriano-logger.ext');
    }

    public function jlog($message = null, $payload = [])
    {
        $log_path = $this->path . date('Ym') . "/";
        $log_file = $this->path . date('Ym') . "/" . date('Ymd') . $this->name . $this->ext;

        if (!file_exists($log_file)) {
            if(!is_dir($log_path)) mkdir($log_path, 0777, true);
            //touch($log_file);
            $file = fopen($log_file, "w") or die("Unable to open file!");
            $text = "LOGGER INITIALIZED".PHP_EOL;
            fwrite($file, $text);
            fclose($file);
        }

        file_put_contents($log_file, date('YmdHis') . ": " . $message . ", " . json_encode($payload) . PHP_EOL, FILE_APPEND);
    }

    public static function log($message = null, $payload = []) {
        $log_path = self::$path . date('Ym') . "/";
        $log_file = $log_path . date('Ymd') . self::$name . self::$ext;

        if (!file_exists($log_file)) {
            if(!is_dir($log_path)) mkdir($log_path, 0777, true);
            $file = fopen($log_file, "w") or die("Unable to open file!");
            $text = date('YmdHis') . ": " . "LOGGER INITIALIZED" . PHP_EOL;
            fwrite($file, $text);
            fclose($file);
        }

        file_put_contents($log_file, date('YmdHis') . ": " . $message . ", " . json_encode($payload) . PHP_EOL, FILE_APPEND);
    }
}
