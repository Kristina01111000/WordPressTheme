# WordPressTheme



plugins im using on dr ws site:

	- peepso
		- removed video plugin (it had malware in it) 
	- learndash 
	- paid memberships pro
	- woocommerce -> removed it(not necessary)
	- real simple ssl
	- Forget About Shortcode button 
	- aksimet
	- total upkeep
	- widget context -> for choosing which pages widgets appear/ not appear on

Currently working on Dr. W's site 


	->> saving css changes in extras.css
	-> with gecko theme in editor main background photo is set in theme -> body settings
		-> need to put separate background pictures into additional css
		-> figure out how to make pictures scroll -> change to scroll
			- normal pictures can just be put in using image in page builder
	-> in peepso logo height has to be in px, not %
	-> he uses inmotion web hosting
		- auto updates work now
			- not peepso or any of the its plugins
				- need to check it for updates every few days, it updates often
			- or wordpress itself -> probably keep this way 
	- non-members cannot get access to courses, can view the headings -> fixed it in learndash settings
		
To Do:


	-> update resume with this project
	- change default user image
		-https://www.peepso.com/documentation/assets-overrides-customizing-peepso-images/ 
		- explains how to do it, need to figure out the default images we want
	- test email plugin -> set it to go out @ 4 today, 
		- did not go out, need to check whats up
		- figure out how to force send one, peepso confirmation email works
		- error shows up in the site health status page, still not working
		- will need to contact peepso support
	- figure out where in peepso the button to stop non members from viewing the website is
	->>>>> using paid membershippro 
		- set up 2 groups (patients + paid) $29
		- got api certificates from him
		- set it up
		- ?make different url for patients group?
	-  make sure everything automatically updates
		- so far only peepso is not updating automatically 
		- can't get the main peepso to auto update, everything else won't update if it doesn't
	- add cost into to course section
	- add links to the other monthly topics course pages
	- fix the login button/ menu  spacing
	-  new email topics:
		- does he like centered sidebar text
		- does he like the new frontpage side bar, what about the login button, leave it, remove it?
		- did he add pictures to the front page? there are spots for img, but no img
		- does he like the button background?
		- Does he like the added text at top of registration page talking about the cost

Need from Dr. W:


	-> additional text	
	- score card stuff(added sentence to monthly topics, need info on everything else)
		- just an excel file i think? google doc?
	- sent email to him with what he needs to do to get site running
		- confirmation on all pictures
		- ssl still not working right on his old computer?
		- a video for the beginning of the front page
		- a video for words from dr w section, do you still want one here?
		- Do you want another picture of yourself for the  words from dr wsection? or just the video
		- list of what month each monthly topic will be in

from the udemy class

using filezilla as the server for wordpress, class uses mamp

blank wp theme at underscores.me
	 => much easier than writing it all out, can be edited 
	 
is it worth making a theme when elementor exists

To do: 

	- learn to use elementor, appears to let you do tons w/o active coding
	- on index page, numbers dont lie section css not working
		- circles not showing and background not white, weird picture not up also
	- having problem with putting functions into function.php
	- problem in the header array 
		- partially fixed, it shows up but the the dropdown is still not working
		- need to add the menu in the menu tab on wordpress appearance section
			- partially fixed, button is visible when screen is small, not when big
				- need to get the menu inside it

	- add all basic php files to website -> some need names to be changed, some parts in multiple files
		- archive
		- comment
		- search
		- sidebar
		- single
	
	- add all the pages to the website => switch to my website, not just classes
		- blog
		- contact
		- post
		- resources	
	
	- edit the css file
		- lots of excess css, some is overwriting my css
		- margin is still being overwritten, moving on for now
		- leaving specific things, like accessibility
		
		
Open Issues:
	- margin being overwritten by initial css
		

upload theme to wordpress by going to:

	themes => add new => upload zip file
	
		- if you do this you need to reupload it everytime you change it
		
	Adding the folder manually will work better => only if you know where it is, 
	Or use theme editor in wordpress dashboard
	
	- Need use the root  to add the assets folder to the theme => not sure if img folder got added
		- server is filezilla => username and password are saved in it
			- the css can be updated on the wordpress theme editor
			- do it somewhere else first so that error checking is easier

Notes:

	- Not putting downloaded code or pictures online
	- css file is called style.css on wordpress, not custom.css
	- several files have different names between wordpress and initial html
	- had to put background pictures in inline, would not work in css file
		- figure out how to make them addable in the css editor, not the file, so they are easy to change
