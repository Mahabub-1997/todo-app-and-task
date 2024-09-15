<?php


class ConsoleLogin implements LoginInterface {
    public function log(string $message): void {
        echo $message . "\n";
    }
}
?>
