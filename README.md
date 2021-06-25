# Grocery shopping Inventory Management System
It is developed using python, MySQL, php(was used only to run python script) and html. No prerequites required to run the respective code. But just to import the sql file to store the data accordingly. 

If this project is made to execute in local machine then, php files are not required. Just we need to change the path in each and every file from .php to .py. and replace the first line with these lines in all python files :

#!path/to/pythonshell

print("Content-type: text/html\n")

import cgi

form = cgi.FieldStorage()

form.getvalue("name")


First line clearly depicts that it is an interpreter file, to run rest of the script, second line is used to run CGI(Common Gateway Interface) scripts. These things are mandatory if the the interpreter file is made to run in python shell of physical machine.

If this project is deployed in any platform it is mandatory to include ProcFile(how the platform should start while opening the deployed web app), runtime.txt(contains version of python shell) and requirements.txt(contains libraries including its version). And all python files are executed in php using shell command.

We have merged all these changes, in all the files so that it works in both environments, therefore it is not required to change anything. Above statement was just to make clear why php was used.
