# WordPressTheme

from the udemy class

using filezilla as the server for wordpress, class uses mamp

blank wp theme at underscores.me
	 => much easier than writing it all out, can be edited 

plugins im using on wp:
	- peepso
	- learndash 
	- paid memberships pro
	- woocommerce -> removed it

Currently working on Dr. W's site 

	->>>>> need to figure out payment works
		- also way to make it free for current patients
		-  use a passcode?
		-  using paid membershippro 
	->> saving css changes in extras.css
	-> with gecko theme in editor main background photo is set in theme -> body settings
		-> need to put separate pictures into additional css
		-> figure out how to make pictures scroll -> change to scroll
	-> in peepso logo height has to be in px, not %
	-> he uses inmotion web hosting
	
		
To Do:

	-> update resume with this project
	-> finish off 2 ssl settings
	- add 2 pictures to each of the header pages
		- figure out what the long list of pictures @ the end is for
		- add to three other pages
	-> make the groups 
		-> one for each of the header tabs
	-> read through entire website for typos
		-> lots of little ones everywhere
	- change default user image
		-https://www.peepso.com/documentation/assets-overrides-customizing-peepso-images/ 
		- explains how to do it, need to figure out the default images we want
	- add section to front page about the course
	- add these plugins:
		- paidmembership pro -> also makes sure it uses woocommerce, else take woocommerce off
		- word filter -> figure out list of words to add
		- learndash integration - check if anything needs to change to use it
		- email digest plugin -> figure out how it works, decide if learndash is better
	- add images to class pages?

Need from Dr. W:

	-> get monthly topic order from dr w
		-> get schedule of topics and add month to title
	-> get word document from dr w
		-> needed to fill in all missing text everywhere 	
	- courses are going to be powerpoints w/ voice over	
	- score card stuff(added sentence to monthly topics, need info on everything else)

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
