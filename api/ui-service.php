<?php
require_once __DIR__ . '/../core/lib/Mustache/Autoloader.php';
Mustache_Autoloader::register();

class UI_Service {

    private $m;

    public function __construct($config = array()) {

        $patternPaths = __DIR__ . '/../source/ui/';

        $this->m = new Mustache_Engine(array(
            'pragmas' => array(Mustache_Engine::PRAGMA_BLOCKS),
            'loader' => new Mustache_Loader_FilesystemLoader($patternPaths),
            'partials_loader' => new Mustache_Loader_FilesystemLoader($patternPaths),
        ));
    }

    public function render($module_name, $data = array()) {
        return $this->m->render($module_name, $data);
    }
}