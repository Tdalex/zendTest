<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\Response;


class IndexController extends AbstractActionController
{
	protected $container;
	
	public function __constructor($container){
		$this->container = $container;
	}
	
    public function indexAction()
    {
		$variables = [];
        return new ViewModel($variables);
    }
}
