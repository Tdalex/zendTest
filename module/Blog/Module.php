<?php 

namespace Blog;

class Module{
	const VERSION = "1.0.0";
	
	public function getAutoloaderConfig(){
		return [
			'Zend\Loader\StandardAutoLoader' => [
				'namespaces' => [
					__NAMESPACE__ => __DIR__ . '/src/',
				],
			],
		];
	}
	public function getConfig(){
		return include __DIR__ . '/config/module.config.php';
	}
}