# WordPressTheme

from the udemy class

using filezilla as the server for wordpress, class uses mamp

blank wp theme at underscores.me
	 => much easier than writing it all out, can be edited 

plugins im learning to use on wp:
	- peepso
	- learndash

Currently working on Dr. W's site 

	->> saving css changes in extras.css

	
	-> with gecko theme in editor main background photo is set in theme -> body settings
		-> need to put separate pictures into additional css
		-> figure out how to make pictures scroll -> change to scroll
	-> highlight different sections then add to group to make group work
		-> figure out how to make color stretch across screen and not mess with side bar
	To Do:
	-> add  pictures -> stockphotos? how to on extras page 
	-> add icon -> S should be done with it soon, add it to header and back of title on title page
		-> make accordions with a read more section to make home page not super long
			-> don't think this is a good idea, have separate pages if it is going to be an issue
	-> add join now sections throughout page (3 or 4) not after every section
		-> make one good join here block to copy/paste
	-> members side bar or menu? 
	-> top menu will probably completely change
	-> 
	

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
