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
		- paid membership pro, code word for free?
	-> he uses inmotion web hosting
	
		
To Do:

	-> finalize color scheme -> dark green, light green, yellow header, white
		-finish all the little spots
		- finalize the exact shade of yellow
	-> make forum links in class module
	-> finish off 2 ssl settings
	-> cannot get the columns to match up on top on front page :(
		-> check how to fix this online
	-> get several more images for the front page
		-> check on these pictures for vibes: 
			- 4E Psy -> zodiac wheels won't load, .eps not .jpeg or .png won't load onto wp
	- add 2 pictures to each of the header pages
		- got to holnut, figure out what the long list of pictures @ the end is for
	-> make the groups 
		-> one for each of the header tabs
	-> read through entire website for typos
		-> lots of little ones everywhere
	- change default user image
		-https://www.peepso.com/documentation/assets-overrides-customizing-peepso-images/ 
		- explains how to do it, need to figure out the default images we want
	- check on accessibilty 
		- add img descriptions
	- change header right pages to link to courses
	- add section to front page about the course
	- upgrade to ultimate peepso
		- edit settings so users can't make polls 
		- woocommerce
		- paidmembership pro
		- word filter
		- learndash integratation
	- add more pictures to front page
	- rename/check names of the peepso default pages 

Need from Dr. W:

	-> get monthly topic articles from dr w
		-> add them to the course
		-> make headings for each lesson in course be the names of the tags
		-> get schedule of topics and add month to title
	-> get images/ video from dr w 
		-> images in email document
		-> is he going to make videos?
	-> get word document from dr w
		-> needed to fill in all missing text everywhere 	
	- courses are going to be powerpoints w/ voice over	
	- polls need the user limits plugin to stop users from making them (higher bundle)
	- polls are available on group posts, community and profile streams (not anywhere else)
	 -> work on loading speed of front page, 
		-> img problem or server speed problem?
		- google points to server problem
	- score card stuff(added sentence to monthly topics)

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
