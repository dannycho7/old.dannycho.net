<?php 

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Project;

class ProjectController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showAll()
    {
    	$projects = Project::all()->sortByDesc('id');
        return view("projects")->with('projects', $projects);
    }

    public function projectDescription($id) 
    {
    	$projects = Project::find($id);
    	if($projects == NULL) {
    		return 'No such project exists';
    	}
    	return $projects['description'];
    }

}

?>