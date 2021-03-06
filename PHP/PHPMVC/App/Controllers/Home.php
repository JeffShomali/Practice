<?php

namespace App\Controllers;

/**
 * Home controller
 *
 * PHP Version 5.4
 */
class Home extends \Core\Controller
{
     /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
       // This is good technic to check if user is logged in before start do other thing
        echo "(before) ";
        return false;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        echo " (after)";
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        echo 'Hello from the index action in the Home controller!';
    }

}//end class
