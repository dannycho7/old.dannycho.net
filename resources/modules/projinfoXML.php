<?php
	$projXML =
		"<?xml version='1.0' encoding='UTF-8'?>
		<projects>
			<project displayname='express-form-post' name='express-form-post' link='https://www.npmjs.com/package/express-form-post' github_link='https://github.com/dannycho7/express-form-post' accomplishment='Node.js Module' purpose='Developer Tool' year='2017'>
				<technologies>Node.js, AWS-S3, Dropbox, Mocha</technologies>
				<description><![CDATA[
					A simple and efficient solution to handling file uploading to disk, s3, or dropbox. More on this coming soon.
					]]></description>
			</project>
			<project displayname='Percept' name='Percept' github_link='https://github.com/dannycho7/Percept' accomplishment='Won Best UX Hack' purpose='LA Hacks' year='2017'>
				<technologies>Node.js, Express, JavaScript, HTML/CSS</technologies>
				<description><![CDATA[
					APIs Used: Flickr API, Microsoft Computer Vision, Datamuse API, Google Maps API <br/>
					Web app that provides users with inspiration for their next great photo using relevant photos based on specified locations & tags <br/>
					Set up backend server and routes to send and interpret asynchronous API calls and render content onto the client’s DOM<br/>
					Integrated the Flickr and Microsoft’s Computer Vision API to analyze photos and generate tags for the response<br/>
					Worked on with Victor Chen, Nic Calle, and Michael Yu
					]]></description>
			</project>
			<project displayname='Multi-view' name='Multithreaded' accomplishment='Data Visualization' purpose='HackTech' year='2017' github_link='https://github.com/dannycho7/Multithreaded-Multiview'>
				<technologies>JavaScript, Node.js, Express, Socket.io, HTML/CSS</technologies>
				<description><![CDATA[ Data Visualization tool to observe runtime inefficiencies <br/> I built the server to receive data from python code interpreter, process the data, and emit messages to connected clients to display the data. <br/> Worked on with partner Eric Zhao from Caltech
					]]></description>
			</project>
			<project displayname='Productivity InFocus' name='ProductivityInFocus' accomplishment='Released in Store' purpose='Product' year='2017' link='https://chrome.google.com/webstore/detail/productivity-infocus/cojpnjecmfacepoflhodpnacpfhipbjf'>
				<technologies>JavaScript, HTML/CSS, Chart.js API, Youtube SPF API, Chrome Storage API</technologies>
				<description><![CDATA[Productivity InFocus is a chrome extension that prevents procrastination!<br/>There I was, walking to my desk and ready to get some work done. I go on my laptop and open up tabs to facebook, youtube and gmail. The usual suspects. You can predict what happened next.<br/> We've all been there. Two days before a deadline, you motivate yourself to work the rest of the day. And somehow you end up watching DIY cooking videos, one after another and scrolling endlessly through your Facebook newsfeed. As students, we know this situation all too well. <br/> Productivity InFocus was originally inspired by my efforts to prevent this type of procrastination. At the start of the winter break, I dedicated myself to logging out of Facebook prior to closing the browser, and before I knew it I was only logging back on to Facebook once or twice a day to check messages. <br/> It seems that periodical reminders to stay on task can keep you in focus. By consistently asking you if watching an Entertainment video is the best choice 12 hours before a midterm, Productivity InFocus aims to reduce procrastination, even if by a little bit. Productivity InFocus will give warnings based on the category and metadata of the content being loaded by the browser and provide analytics based on the amount of time spent on non-educational videos<br/>
					General Functionalities: <br/>
					1. Reminds and alerts users when they're off task <br/>
					2. Blocks out thumbnails/clickbait along with preventing seamless youtube video streaming and facebook news feed scroll <br/>
					3. Scrapes Youtube and Facebook to hide comments on both platforms and videos on youtube based on categories
					4. Provides inspirational quotes throughout the blocking of information <br/>
					5. Provides analytics data visualization based on user activity via Chrome.storage API and Chart.js API <br/>
					]]></description>
			</project>
			<project displayname='Copcut' name='Copcut' accomplishment='Proof of Concept' purpose='Product' year='2016'>
				<technologies>JavaScript, Bootstrap, React.js, MySQL, Node.js</technologies>
				<description>I worked on Copcut as a potential product with my friends Victor Cheng and Ankush Rayabhari. Copcut is a web application that handles scheduling and payments for barbers. We aimed to help students at UC Santa Barbara handle their barber transactions as well as connect students to local barbers. Our payment system allows for a deposit to be made, so that barbers can implement a cancellation fee and not have their appointment no-shows waste their time. After completing about 70% of the app, our main barber contact was banned from cutting hair on campus, and the project was dropped.</description>
			</project>
			<project displayname='EasySitter' name='EasySitter' accomplishment='Placed: 1st' purpose='WeHack Hackathon' year='2015'>
				<technologies>Javascript, Blueberry, Google Maps API</technologies>
				<description>EasySitter is a project and idea I worked on during the WeHack/Southeast Cities Hackathon with my teammate Esmeralda Nava. EasySitter connects local babysitters with parents at any time. Babysitters can simply check a box saying that they're ready to provide service (like uber). This site runs on a credit based system, so that parents don't have to immediately pay if they don't have the money at the moment or are willing to babysit themselves at another time to make up the credits.</description>
			</project>
			<project displayname='Hashtag Selfie' name='HashtagSelfie' accomplishment='Placed: 2nd' purpose='OC Hacks i3' year='2015'>
				<technologies>Java, Java GUI</technologies>
				<description>Hashtag Selfie is a project that aimed to develop a photo editing platform with more freedom than the popular options such as Instagram. Alongside my teammates Kevin Lin, Edward Kim, and Eunice Huang, I developed the hex color editor portion for the photo editor.</description>
			</project>
			<project displayname='Personal Site' name='PersonalSite' accomplishment='Learned a lot' purpose='Displaying my work' year='2016'>
				<technologies>PHP, JavaScript, jQuery, AJAX, XML</technologies>
				<description>I created my personal website to display my work. Throughout this process, I learned a lot about best web development practices. Website is constantly being improved upon. Most recent changes involved utilizing AJAX and XML parsing.</description>
			</project>
			<project displayname='Gomoku' name='Gomoku' accomplishment='Very first project' purpose='Great Board Game' year='2015'>
				<technologies>Java, Greenfoot</technologies>
				<description>Gomoku is a game I developed alongside my friend, Mandy Tsai. We used Greenfoot and Java to code the algorithms necessary to create not only the game, but also the AI system that alternated between Easy, Medium, and Hard.</description>
			</project>
		</projects>";
	$projInfo = new SimpleXMLElement($projXML);
?>
