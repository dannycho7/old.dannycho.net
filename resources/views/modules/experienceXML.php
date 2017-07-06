<?php 
	$experienceXML = 
		"<?xml version='1.0' encoding='UTF-8'?>
			<experiences>
				<experience>
					<name>SmartRG Inc.</name>
					<position>Software Engineer Intern</position>
					<time>Fall 2016 - Present</time>
					<url>http://www.smartRG.com</url>
				</experience>
				<experience>
					<name>SB Hacks</name>
					<position>Developer &amp; Organizer</position>
					<time>Fall 2016 - Present</time>
					<url>http://www.sbhacks.com</url>
				</experience>
				<experience>
					<name>Coders SB</name>
					<position>Freshman Officer</position>
					<time>Fall 2016 - Present</time>
					<url>http://coderssb.com</url>
				</experience>
				<experience>
					<name>ACM</name>
					<position>Industry Chair</position>
					<time>Winter 2017 - Present</time>
					<url></url>
				</experience>
			</experiences>
		";
	$experienceInfo = new SimpleXMLElement($experienceXML);
?>