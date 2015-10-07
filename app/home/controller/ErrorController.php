<?php
/**
 * ErrorController.php
 * 
 * @copyright	http://yanue.net/
 * @author 		yanue <yanue@outlook.com>
 * @date        2013-07-29
 */

namespace App\Home\Controller;

use Library\Core\Controller;
use Library\Core\Exception;
use Library\Util\Debug;

class Error1Controller extends Controller{



    public function indexAction(){
        echo 'You have reached the error page!';
        $this->uri->setUrl('a=b');
    }

}