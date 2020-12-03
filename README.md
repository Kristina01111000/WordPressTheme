# WordPressTheme

from the udemy class

using filezilla as the server for wordpress, class uses mamp

blank wp theme at underscores.me
	 => much easier than writing it all out, can be edited 

upload theme to wordpress by going to:

	themes => add new => upload zip file
	
		- if you do this you need to reupload it everytime you change it
		
	Adding the folder manually will work better => only if you know where it is, 
	Or use theme editor in wordpress dashboard
	
	- Need use the root  to add the assets folder to the theme => not sure if img folder got added
		- server is filezilla => username and password are saved in it
			- the css can be updated on the wordpress theme editor
			- do it somewhere else first so that error checking is easier

To do: 
	
	- put php extensions into pictures in css in wordpress when pw problem is fixed
		- done on github
	- having problem putting functions into underscores function.php
	- problem in the header array 
		- partially fixed, it shows up but the the dropdown is still not working
		- need to add the menu in the menu tab on wordpress appearance section
			- partially fixed, button is visible when screen is small, not when big
				- need to get the menu inside it
				
	- switch all files to php for wordpress
	
	- add all basic php files to website -> some need names to be changed, some parts in multiple files
		- archive
		- comment
		- search
		- sidebar
		- single
	
	- add all the pages to the website => switch to my website, not just classes
		- blog
		- contact
		- index
		- post
		- resources
	
	
	- edit the css file
		- lots of excess css, some is overwriting my css
		- margin is still being overwritten, moving on for now
		- leaving specific things, like accessibility
		

Notes:

	- Not putting downloaded code or pictures online
	- css file is called style.css on wordpress, not custom.css
	- several files have different names between wordpress and initial html
