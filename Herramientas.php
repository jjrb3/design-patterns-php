<?php

/**
 * Class Herramientas
 */
class Herramientas
{
    /**
     * @var bool
     */
    public static $runInEclipse = true;

    /**
     * @var string
     */
    public static $eclipse_charset = 'UTF-8';

    /**
     * @var
     */
    private static $outCharset;

    /**
     * @var
     */
    private static $outHandle;

    /**
     * @param $haystack
     * @param $needle
     * @return bool
     */
    public static function strStartWith($haystack, $needle)
    {
        return ($needle === '') || (strpos($haystack, $needle) === 0);
    }

    /**
     * @param string $prompt
     * @return false|string
     */
    public static function readln($prompt = '')
    {
        if (PHP_OS == 'WINNT')
        {
            Herramientas::prt($prompt);
            $handle = fopen("php://stdin", "r");
            $line = stream_get_line($handle, 1024, PHP_EOL);
            Herramientas::detectCharset();
            if (Herramientas::$outCharset != 'UTF-8') {
            $line = iconv(Herramientas::$outCharset, 'UTF-8', $line);
           }
           fclose($handle);
        }
        else
        {
            $line = readline($prompt);
        }
        return $line;
    }

    /**
     * @param string $str
     */
    public static function prt($str = '')
    {
        if ($str != '')
        {
            Herramientas::detectCharset();

            $str = str_replace("\r", '', $str);
            $str = str_replace("\n", PHP_EOL, $str);

            if (Herramientas::$outCharset != 'UTF-8') {
            $str = iconv('UTF-8', Herramientas::$outCharset, $str);
            }

            if (!isset(Herramientas::$outHandle)) {
                Herramientas::$outHandle = fopen("php://stdout", "w");
            }

            fprintf(Herramientas::$outHandle, $str);
            fflush(Herramientas::$outHandle);
        }
    }

    /**
     * @param string $str
     */
    public static function println($str = '')
    {
        Herramientas::prt($str . "\n");
    }


    private static function detectCharset() {
        if (!isset(Herramientas::$outCharset)) {
            if (Herramientas::$runInEclipse) {
                Herramientas::$outCharset =
                    Herramientas::$eclipse_charset;
            } else {
                if (PHP_OS == 'WINNT') {
                    // La mayor parte del tiempo se usa
                    // el encoding CP850. Por tanto, vamos a usarlo
                    // por defecto (si la detección no funciona)
                    Herramientas::$outCharset = 'CP850';
                    exec('chcp', $output);
                    $pos = stripos($output[0], ':');
                    $cp = trim(substr($output[0], $pos + 1));
                    if ($cp < 2000) {
                        Herramientas::$outCharset = 'CP' . $cp;
                    }
                } else {
                    // En Unix, es posible tener
                    // varios juegos de caracteres diferentes
                    $local = setlocal(LC_CTYPE, 0);
                    Herramientas::$outCharset = substr($local, 6);
                    if (empty(Herramientas::$outCharset)) {
                        Herramientas::$outCharset = 'ISO-8859-1';
                    } else {
                        switch(Herramientas::$outCharset) {
                            case 'euro':
                                Herramientas::$outCharset =
                                    'ISO-8859-15';
                                    break;
                        }
                    }
                }
                // Pide a iconv ignorar los caracteres no
                // soportados por el juego de caracteres de salida
                Herramientas::$outCharset .= '//TRANSLIT';
            }
        }
    }
}