# Joomla! Bootstrap4 Template
**A Joomla! 3 Site template for Bootstrap 4 (Alpha 5)**

## About this Joomla! template
Out of the box Joomla! shipps with Bootstrap version 2.
Right now the Bootstrap contributors work on Bootstrap version 4, which is getting closer and closer to be released.
As we like Joomla! and Bootstrap! we wanted to bring the latest versions of both products together.
Therefore we built this template.
The template adds the typical look & feel of Bootstrap 4 to your Joomla! 3 site.
Various components and modules have been integrated into the template. Therefore you don't need to create overrides.
Just install the template and try it out.

### How it works & supported Joomla! UI elements
The template is based on the standard Bootstrap 4 look & feel and uses HTML overrides for the Joomla! user interface elements where possible. For forms we added a little javascript to add the missing CSS classes to avoid core-hacks.
The following user interface elements are supported right now:
Components:
* com_content --> Articles
* com_contact --> Contacts
* com_finder --> Smart Search
* com_tags --> Tags
* com_users --> Users
Modules:
* mod_breadcrumbs --> Breadcrumb Navigation
* mod_finder --> Smart Search
* mod_languages --> Language Switcher
* mod_menu --> Menu Navigation
* and a lot of other ui elements like System Messages, Pagination, etc.
You can also check the details here: https://github.com/sniggle/joomla-bootstrap4-template/tree/master/bootstrap4/html
If you are missing components, modules or other UI elements, which are not compatible with bootstrap 4, just let us know. We can then add them and provide a new version of the template.

### jQuery compatibility
The minimal jQuery version required for Bootstrap 4 (Alpha 5) is 1.9.1. Joomla! 3.6.4 shipps with jQuery v1.12.4. Therefore you don't need to worry about jQuery version conflicts. The template just uses the Joomla! jQuery. For the ones who are interested in the details: Just check the Bootstrap 4 Javascript dependencies here: https://v4-alpha.getbootstrap.com/getting-started/javascript/#dependencies 

### Bootstrap 2 and Bootstrap 4 in one site?
As Joomla! 3 shipps with Bootstrap 2.3.2, it automatically loads the bootstrap framework where needed. The Javascript files of Bootstrap 2 and Bootstrap 4 loaded at the same time can result in strange UI behaviors. (e.g. Dropdowns don't load correctly or after several seconds, etc.)
To avoid this conflict we developed a little plugin to disable the Joomla! UI Bootstrap version in the front-end of your site. Just get it here https://github.com/sniggle/joomla-disable-jui-bootstrapand and install it with the template to have the best user experience. 

## Demo of this template
You just want to have a look how the Joomla! Boostrap4 template works?
Just visit https://www.theaterverein-mastershausen.de/. The site is using our template.

## Download the latest release
You can always find the latest compiled version of the template here: https://github.com/sniggle/joomla-bootstrap4-template/releases
Alternatively you can also just download the "bootstrap" folder of the repository, zip it and install it in your site to get the latest commits.

## Let us improve this Bootstrap 4 template
We are happy for any kind of feedback:
* Did we miss a Joomla! component, module or layout?
* Do you have improvement ideas in the existing overrides?
Just create an issue here on github and let us know! :-)

### Create your own version of the Joomla! Bootstrap 4 template
The template is very close the Joomla! 3 standard and Bootstrap 4 standard behavior. You can also use it as a starting point for your own Bootstrap 4 template. Just use the existing overrides and change your index.php according to your design ideas. :-)

## License of this Joomla! template
The template is based on a famous Joomla! 3 template called Protostar.
We just kept the license information in all source files and chose a compatible license here on github.
The template contains the following libraries
* Bootstrap v4.0.0-alpha.5 (http://getbootstrap.com)
* Font Awesome 4.6.3 by @davegandy - http://fontawesome.io
* Tether version 1.3.3 - http://tether.io/



