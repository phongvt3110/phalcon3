<?php

class UsersController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        echo '<h1>Hello users</h1>';
        $user = Users::findFirst(['id' => 1]);
        if(isset($user)){
            echo $user->getName() . '<br>';
            echo $user->getEmail() . '<br>';
            echo $user->getPhone() . '<br>';
            echo $user->getCreatedAt() . '<br>';
            echo $user->getUpdatedAt() . '<br>';
        }
    }

}

