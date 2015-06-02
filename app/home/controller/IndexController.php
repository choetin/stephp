<?php
/**
 * IndexController.php
 *
 * @copyright    http://yanue.net/
 * @author        yanue <yanue@outlook.com>
 * @version        1.0.0 - 13-7-4
 */
namespace App\Home\Controller;

use Library\Core\Controller;
use Model\UserModel;
use service\UserManager;


class IndexController extends Controller
{
    public function indexAction()
    {
        echo $this->module;
//        $aa = $this->db->from('user')->where('id', 2);
        $this->view->setLayout('layout');
//        UserManager::init()->get();
//
//        print_r($aa->fetch());
//        $a = ;
//        print_r();
//        $u = new UserModel();
////        $b = $u->from('user')->fetch();
////        print_r($b);
//        $a = UserModel::findFirst('', 'name');
//        print_r($a);
    }

    public function testAction()
    {

        UserManager::init()->get();

    }

    public function numAction()
    {
        echo 'num action';
        echo $this->uri->getParam('id');
    }

    public function anyAction()
    {
        echo 'any action';
        echo $this->uri->getParam('sub');
    }

    public function regxAction()
    {
        echo 'regx action';
        echo $this->uri->getParam('id');
    }
}