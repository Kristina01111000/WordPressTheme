# WordPressTheme

from the udemy class

using filezilla as the server for wordpress, class uses mamp

blank wp theme at underscores.me
	 => much easier than writing it all out, can be edited 

plugins im learning to use on wp:
	- peepso
	- learndash -> has inbuilt paypal
	- woocommerce -> not needed if learndash is being used

Currently working on Dr. W's site 

	->> saving css changes in extras.css
	->> with peepso: turning on comments literally a radio box on page
		-> polls appear to only be possible on activity stream, user profile, and in groups
		-> see if it can be stuck onto a page somewhere
	
	-> with gecko theme in editor main background photo is set in theme -> body settings
		-> need to put separate pictures into additional css
		-> figure out how to make pictures scroll -> change to scroll
	-> set up forwarded email with admin first name for dr w
	-> update php and wordpress on inmotion site in cpanel
		-> plugin add new issue and admin power issue solved by updating
		-> also allowed a backup to be made :)
		
		
	To Do:
	-> add join now sections throughout page (3 or 4) not after every section
		-> make one good join here block to copy/paste
	-> make archive pages(on header) -> like the personal growth page, not body awareness
		-> all the old daily topics
	-> make join here section look good
	-> look at site icon -> keep or change? background transparent? 
		-> check with him
	-> change blue headings to green
	-> add the google fonts from email
	-> add login section in front page -> sidebars gone 
		-> talk about adding singular sidebar with login or something, don't want to make it hard to login
	-> personal success bullets look wierd at different sizes  
		-> wierd formatting issue, probably just make a new section instead of trying to fix it
	-> make a landing page for each month
	-> add the word documents he just sent
	-> figure out tag system -> for weekly topics, can have multiple tags?
	-> change the colors to what was emailed

	

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
