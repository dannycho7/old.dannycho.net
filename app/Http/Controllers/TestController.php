<?php 

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showProfile($id)
    {
        return view("welcome");
    }

}

?>