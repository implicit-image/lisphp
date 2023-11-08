<?php

define("HISTORY_FILE_NAME", "./hist_file.txt");


function add_to_history(string $line) {
    get_id = file_get_contents()
    if (file_put_contents(HISTORY_FILE_NAME, $line . "\n", LOCK_EX | FILE_APPEND) == FALSE) {
        echo("couldnt write history\n");
        return false;
    } else {
        echo("written $line to " . HISTORY_FILE_NAME . "\n");
        return true;
    }
}

// function read_history() {

// }

// function get_history() {

// }



echo("Lisphp version 0.0.0.0.1 \n"
     . "Press Ctrl+c to or write (exit) to exit \n");



while(1) {
    echo("Lisphp>");
    $line = trim(fgets(STDIN));

    add_to_history($line, HISTORY_FILE_NAME);
    echo("no your are $line \n");
}

?>
