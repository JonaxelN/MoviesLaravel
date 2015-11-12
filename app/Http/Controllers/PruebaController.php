<?php

namespace Blockbuster\Http\Controllers;

use Blockbuster\User;
use Blockbuster\Http\Controllers\Controller;

class PruebaController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return 'Hola desde PruebaController';
    }
}