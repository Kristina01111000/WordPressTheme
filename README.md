# WordPressTheme



plugins im using on dr ws site:

	- peepso
	- learndash 
	- paid memberships pro
	- woocommerce -> removed it(not necessary)
	- real simple ssl
	- button one

Currently working on Dr. W's site 

	->>>>> need to figure out payment works
		- also way to make it free for current patients
		-  use a passcode?
		-  using paid membershippro 
	->> saving css changes in extras.css
	-> with gecko theme in editor main background photo is set in theme -> body settings
		-> need to put separate background pictures into additional css
		-> figure out how to make pictures scroll -> change to scroll
			- normal pictures can just be put in using image in page builder
	-> in peepso logo height has to be in px, not %
	-> he uses inmotion web hosting
		- can't get the auto updates to work for some odd reason
	
		
To Do:

	-> update resume with this project
	- add 2 pictures to each of the header pages
		- figure out what the long list of pictures @ the end is for --> this probably?
		- add to three other pages
			- outdoor
			- body
			- growth
	-> make the groups 
		-> one for each of the header tabs
	-> read through entire website for typos
		-> lots of little ones everywhere
		-> do one page at a time
	- change default user image
		-https://www.peepso.com/documentation/assets-overrides-customizing-peepso-images/ 
		- explains how to do it, need to figure out the default images we want
	- add section to front page about the course
		- copy from somewhere else?
		- add bullets of titles
		- add additional image
	- add these plugins:
		- paidmembership pro -> also makes sure it uses woocommerce, else take woocommerce off
		- word filter -> figure out list of words to add
		- learndash integration - check if anything needs to change to use it
		- email digest plugin -> figure out how it works, decide if learndash is better
			- need to test it, the 1 day email did not send
	- get wp to automatically update (on server)
	- test email plugin

Need from Dr. W:

	-> get monthly topic order from dr w
		-> get schedule of topics and add month to title
	-> get word document from dr w
		-> needed to fill in all missing text everywhere 	
	- score card stuff(added sentence to monthly topics, need info on everything else)
		- just an excel file i think? google doc?





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
