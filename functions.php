<?php
    function wp_indent($delegate, $number) {
        ob_start(function($text) use ($number)
        {
            $lines = explode("\n", $text);
            $out = array_shift($lines) . "\n";
            foreach ($lines as $line) {
                for ($i = 0; $i < $number; $i++) {
                    $out .= "    ";
                }
                $out .= $line . "\n";
            }

            return $out;
        });

        call_user_func($delegate);

        ob_end_flush();
    }