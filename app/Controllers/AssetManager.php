<?php
namespace MyApp\Controllers;

class AssetManager {
    private $cssBasePath;
    private $jsBasePath;
    private $imgBasePath;

    public function __construct($cssBasePath, $jsBasePath, $imgBasePath) {
        $this->cssBasePath = $cssBasePath;
        $this->jsBasePath = $jsBasePath;
        $this->imgBasePath = $imgBasePath;
    }

    public function getCssLink($filename) {
        return $this->cssBasePath . $filename;
    }

    public function getJsScript($filename) {
        return $this->jsBasePath . $filename;
    }

    public function getImgSrc($filename) {
        return $this->imgBasePath . $filename;
    }
}
