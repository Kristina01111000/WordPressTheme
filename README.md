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
	-> with gecko theme in editor main background photo is set in theme -> body settings
		-> need to put separate pictures into additional css
		-> figure out how to make pictures scroll -> change to scroll
	-> in peepso logo height has to be in px, not %
	-> figure out emails using peepso -> need the peepso plugin
		- current plan is to use learndash email section
		- will get the peepso plugin w/ ultimate bundle
	-> figure out how to do payment for classes and free for current patients
	-> he uses inmotion web hosting
	-> learndassh grid addon allows sorting courses by tags
		-does it work for individual lessons?
		- start a support request?
			- https://www.learndash.com/support/docs/add-ons/course-grid/
			- https://www.learndash.com/support/docs/core/courses/course-settings/#course-taxonomies-categories-tags
		
To Do:

	-> figure out tag system -> for weekly topics can only have one tag
	-> finalize color scheme -> dark green, light green, yellow header, white
		-finish all the little spots
		- check the yellow, it looks really bright on other computers
	-> make forum links in class module
	-> get monthly topic articles from dr w
		-> add them to the course
		-> make headings for each lesson in course be the names of the tags
	-> finish off 2 ssl settings
	-> cannot get the columns to match up on top on front page :(
		-> check how to fix this online
	-> get images/ video from dr w 
		-> images in email document
		-> is he going to make videos?
	-> get several more images for the front page
		-> check on these pictures for vibes: 
			- Practical benefits img
			- 4E Psy -> zodiac wheels won't load, .eps not .jpeg or .png won't load onto wp
			- Mission/vision picture
			- holistic nut page, put 2, pick one?
			- got to holnut, figure out what the long list of pictures @ the end is for
			- add images every 4-5 paragraphs


	-> make the groups 
		-> one for each of the header tabs
	-> setup backlog of weekily topics
	-> check link goes login page, not register page
	-> decide what the main page when they first login is going to be
		- user profile currently
	-> read through entire website for typos
		-> lots of little ones everywhere
	-> work on loading speed of front page, 
		-> img problem or server speed problem?
		- google points to server problem
	-> get word document from dr w
		-> needed to fill in all missing text everywhere 
	- courses are going to be powerpoints w/ voice over
	- put monthly topics into headings in course
	- change default user image
	- change recent activity to what's new?
	- set up read more for tag pages
	- change lesson to mini lesson?
	- check on accessibilty -> does gecko automarically do it?
		- add img descriptions
	- remove "Tag: " from tag page? if possible
	- check on where polls can be put
	 	- disable polls for users other than admins
	- change spacing on header pages, add small tab
	- put in first module
	 	- 5 question quiz for it
	- change header pages titles to dark green	
	- change header right pages to link to courses
	
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
