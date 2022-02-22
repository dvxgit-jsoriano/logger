<?php

namespace DvxgitJsoriano\Logger;

class Logger
{

    public $path;
    public $name;
    public $ext;

    public function __construct($path = null, $name = '_log', $ext = '.log')
    {
        $this->path = $path ?? '/var/log/logger/';
        $this->name = $name ?? '_log';
        $this->ext = $ext ?? '.log';
    }

    public function log($message = null, $payload = [])
    {

        $log_path = $this->path . date('Ym') . "/";
        $log_file = $this->path . date('Ym') . "/" . date('Ymd') . $this->name . $this->ext;
        /* file_put_contents($log_file, date('YmdHis') . ": " . $message . ", " . json_encode($payload) . PHP_EOL, FILE_APPEND); */

        if (file_exists($log_file)) {
            file_put_contents($log_file, date('YmdHis') . ": " . $message . ", " . json_encode($payload) . PHP_EOL, FILE_APPEND);
        } else {
            mkdir($log_path, 0777, true);
            //touch($log_file);
            $file = fopen($log_file, "w") or die("Unable to open file!");
            $text = "LOGGER INITIALIZED".PHP_EOL;
            fwrite($file, $text);
            fclose($file);
        }
    }
}
