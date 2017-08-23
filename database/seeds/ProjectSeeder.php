<?php

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProjectsTableSeeder::class);
        $this->command->info("Project Table seeded!");
    }
}

class ProjectsTableSeeder extends Seeder {

    public function run()
    {
        DB::table("projects")->delete();
        $projects = array(
        	array(
        		"name" => "EasySitter",
        		"headline" => "Placed: 1st",
        		"purpose" => "WeHack Hackathon",
        		"year" => 2015,
        		"technology_list" => "Javascript, Google Maps API",
        		"description" => "EasySitter is a project and idea I worked on during the WeHack/Southeast Cities Hackathon with my teammate Esmeralda Nava. EasySitter connects local babysitters with parents at any time. Babysitters can simply check a box saying that they're ready to provide service (like uber). This site runs on a credit based system, so that parents don't have to immediately pay if they don't have the money at the moment or are willing to babysit themselves at another time to make up the credits."
        	),
        	array(
        		"name" => "SB Hacks III",
        		"headline" => "Over 1600 registrants",
        		"purpose" => "Organizer & Developer",
        		"year" => 2016,
        		"technology_list" => "Ruby on Rails, PostgreSQL, Heroku, HTML/CSS",
        		"description" => "I became an organizer for SB Hacks III within a month of starting my first year at UCSB. I loved hackathons and had never tried organizing one, so I was excited for the ride. Coming on as a developer, I helped create the website that serviced many students in uploading their hackathon applications. We received 1649 applicants and hosted ~450 of them at Corwin Pavillion in UCSB for the 36 hour hackathon. I lead as the Co-Director/President and Developer Team Lead the following year. (SB Hacks IV). The old site is now viewable at http://sbhacksiii.herokuapp.com The actual domain for 'sbhacks.com' will be used for future iterations of sbhacks"
        	),
        	array(
        		"name" => "Productivity InFocus",
        		"download_link" => "https://chrome.google.com/webstore/detail/productivity-infocus/cojpnjecmfacepoflhodpnacpfhipbjf",
        		"github_link" => "https://github.com/dannycho7/Productivity-InFocus",
        		"headline" => "Released in Store",
        		"purpose" => "Product",
        		"year" => 2017,
        		"technology_list" => "JavaScript, HTML/CSS, Chart.js, Chrome Storage API",
        		"description" => "Productivity InFocus is a chrome extension that prevents procrastination!<br/>There I was, walking to my desk and ready to get some work done. I go on my laptop and open up tabs to facebook, youtube and gmail. The usual suspects. You can predict what happened next.<br/> We've all been there. Two days before a deadline, you motivate yourself to work the rest of the day. And somehow you end up watching DIY cooking videos, one after another and scrolling endlessly through your Facebook newsfeed. As students, we know this situation all too well. <br/> Productivity InFocus was originally inspired by my efforts to prevent this type of procrastination. At the start of the winter break, I dedicated myself to logging out of Facebook prior to closing the browser, and before I knew it I was only logging back on to Facebook once or twice a day to check messages. <br/> It seems that periodical reminders to stay on task can keep you in focus. By consistently asking you if watching an Entertainment video is the best choice 12 hours before a midterm, Productivity InFocus aims to reduce procrastination, even if by a little bit. Productivity InFocus will give warnings based on the category and metadata of the content being loaded by the browser and provide analytics based on the amount of time spent on non-educational videos<br/>
					General Functionalities: <br/>
					1. Reminds and alerts users when they're off task <br/>
					2. Blocks out thumbnails/clickbait along with preventing seamless youtube video streaming and facebook news feed scroll <br/>
					3. Scrapes Youtube and Facebook to hide comments on both platforms and videos on youtube based on categories
					4. Provides inspirational quotes throughout the blocking of information <br/>
					5. Provides analytics data visualization based on user activity via Chrome.storage API and Chart.js API <br/>"
        	),
        	array(
        		"name" => "Multi-View",
        		"github_link" => "https://github.com/dannycho7/Multithreaded-Multiview",
        		"headline" => "Data Visualization",
        		"purpose" => "HackTech",
        		"year" => 2017,
        		"technology_list" => "JavaScript, Node.js (Express), Socket.io, HTML/CSS",
        		"description" => "Data Visualization tool to observe runtime inefficiencies <br/> I built the server to receive data from python code interpreter, process the data, and emit messages to connected clients to display the data. <br/> Worked on with partner Eric Zhao from Caltech"
        	),
        	array(
        		"name" => "Percept",
        		"github_link" => "https://github.com/dannycho7/Percept",
        		"headline" => "Won Best UX Hack",
        		"purpose" => "LA Hacks",
        		"year" => 2017,
        		"technology_list" => "Node.js, Flickr API, Microsoft Computer Vision, Google Maps API",
        		"description" => "APIs Used: Flickr API, Microsoft Computer Vision, Datamuse API, Google Maps API <br/>
					Web app that provides users with inspiration for their next great photo using relevant photos based on specified locations & tags <br/>
					Set up backend server and routes to send and interpret asynchronous API calls and render content onto the client’s DOM<br/>
					Integrated the Flickr and Microsoft’s Computer Vision API to analyze photos and generate tags for the response<br/>
					Worked on with Victor Chen, Nic Calle, and Michael Yu"
        	),
        	array(
        		"name" => "Routepen",
        		"github_link" => "https://github.com/Routepen/ridelink",
        		"headline" => "Ride Share App",
        		"purpose" => "Rideshare improved",
        		"year" => 2017,
        		"technology_list" => "Node.js (Express), Google Maps API, MongoDB",
        		"description" => "Created a ridesharing solution that makes searching for rides better by aggregating data into one central platform (team of 3). Setup up backend and worked on route optimization algorithm/matching along with user signup flow. Currently in the works"
        	),
        	array(
        		"name" => "SB Hacks IV",
        		"download_link" => "http://sbhacks.com",
        		"headline" => "36 Hour Hackathon",
        		"purpose" => "Co-Director & Dev Lead",
        		"year" => 2017,
        		"technology_list" => "Node.js, React.js, express-form-post, MongoDB, and PostgreSQL",
        		"description" => "Organizing SB Hacks IV at UC Santa Barbara which hosts 450 students annually for a 36-hour hackathon. I will add a more in-depth description after the event! SB Hacks IV will take place on Jan 19-21 2018. If you are an interested sponsor feel free to reach out!"
        	),
        	array(
        		"name" => "express-form-post",
        		"download_link" => "https://www.npmjs.com/package/express-form-post",
        		"github_link" => "https://github.com/dannycho7/express-form-post",
        		"headline" => "Node.js Module",
        		"purpose" => "Developer Tool",
        		"year" => 2017,
        		"technology_list" => "Node.js, AWS-S3, Dropbox, Mocha",
        		"description" => "A simple and efficient solution to handling file uploading to disk, s3, or dropbox. More on this coming soon."
        	)
        );
		
		foreach($projects as $project) {
			Project::create($project);
		}
    }

}