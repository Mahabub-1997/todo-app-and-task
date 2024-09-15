<?php


class FileLogin implements LoginInterface {
    private $filePath;

    public function __construct(string $filePath) {
        $this->filePath = $filePath;
    }

    public function log(string $message):
    void {
        file_put_contents($this->filePath, $message . "\n", FILE_APPEND);
    }
}
?>
