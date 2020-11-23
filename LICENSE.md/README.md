# README #

This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

This repository is personally made for startup company.

### How do I get set up? ###

### FILE STRUCTURE ###

runningph

* -- _controllers
* -- _models
* -- _views
* ------ admin -> All admin views were stored
* ------ front - > all front views were stored
* ------ hook_footer -> Javacript query per module were stored
* ------ partials -> Partials designs like Header, Sidebar and Footer
* -- assets
* ---- dist 
* ---- extra-libs
* ---- images
* ---- libs
* -- helpers
* -- uploads

### Local Setup ###

To setup locally, you need to setup this using virtualhost.

### How to setup Virtual Host ###

* Go to your local server and open http.conf
* Locate #LoadModule vhost_alias_module modules/mod_vhost_alias.so
* Remove # and then save.
* In your local server, locate httpd-vhost.conf and add this line
 <br/> <VirtualHost *:80>
 <br/>   DocumentRoot "/Applications/MAMP/htdocs/foldername/"
 <br/>  ServerName localdomain.test --> 'runningph.test' </VirtualHost>
* The save.
<br/><br/>
Now, locate your hosts file.
* Edit your hosts file by adding this line.
127.0.0.1  runningph.test (note: runningph.test should be the same with the localdomain you have put in httpd.vhost.conf)


### Contribution guidelines ###

* Writing tests
* Code review
* Other guidelines

### Who do I talk to? ###

* Repo owner or admin
* Other community or team contact
