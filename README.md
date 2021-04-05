# WordPressTheme

from the udemy class

using filezilla as the server for wordpress, class uses mamp

blank wp theme at underscores.me
	 => much easier than writing it all out, can be edited 

plugins im using on wp:
	- peepso
	- learndash -> has inbuilt paypal


Currently working on Dr. W's site 

	->>>>> need to figure out sign in with peepso & learndash course
		- also way to make it free for current patients
		-  use a passcode?
	->> saving css changes in extras.css
	->> with peepso: turning on comments literally a radio box on page
		-> polls appear to only be possible on activity stream, user profile, and in groups
		-> see if it can be stuck onto a page somewhere
	-> with gecko theme in editor main background photo is set in theme -> body settings
		-> need to put separate pictures into additional css
		-> figure out how to make pictures scroll -> change to scroll
	-> in peepso logo height has to be in px, not %
	-> figure out emails using peepso -> need the peepso plugin
		- current plan is to use learndash email section
	-> peepso needs to be updated every week
		-> need to buy new key every year probably
	-> figure out how to do payment for classes and free for current patients
	-> he uses inmotion web hosting
		
To Do:

	-> add the google fonts from email
		-> or the fonts that are included in gecko
	-> figure out tag system -> for weekly topics, can have multiple tags?
	-> finalize color scheme -> added yellow
		- need to do this this week, stopping the website from being completed
		-  - making 4/5 different color schemes and will send to dr w
	-> make forum links in class module
	-> get monthly topic articles from dr w
		-> add them to the course
	-> finish off 2 ssl settings
	-> cannot get the columns to match up on top on front page :(
		-> check how to fix this online
	-> get images/ video from dr w 
		-> plus confirmation on the images i picked
	-> fix layout of icon and login button on front page
		-> how? can't do it w/o messing up the icon centering
		-> could add more white to left side of icon?
		-> hard to scale with screen though
		-> make columns?
	-> get several more images for the front page
		-> waiting on dr w for confirmations and new images
	-> set up the tag pages
	-> fix the light text color
	-> make the groups 
		-> one for each of the header tabs
	-> setup backlog of weekily topics
	-> check link goes login page, not register page
	-> decide what the main page when they first login is going to be
	-> read through entire website for typos
		-> lots of little ones everywhere
	-> work on loading speed of front page, 
		-> img problem or server speed problem
	-> get word document from dr w
		-> needed to fill in all missing text everywhere

To do: 

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
