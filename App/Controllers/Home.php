<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction($teste)
    {

        View::renderStatic('Home/index.php', ['name' => 'John Doe', 
        'occupation' => 'gardener']);
    }
}
