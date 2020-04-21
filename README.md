# Joomla! Bootstrap4 Template
**A Joomla! 3 Site template for Bootstrap 4**
 
## About this Joomla! template
Out of the box Joomla! ships with Bootstrap version 2 but the latest version is Bootsrap version 4.
As we like Joomla! and Bootstrap! we wanted to bring the latest versions of both products together.
Therefore we built this template.
The template adds the typical look & feel of Bootstrap 4 to your Joomla! 3 site.
Various components and modules have been integrated into the template. Therefore you don't need to create overrides.
Just install the template and try it out.

### How it works & supported Joomla! UI elements
The template is based on the standard Bootstrap 4 look & feel and uses HTML overrides for the Joomla! user interface elements where possible. For forms we added a little javascript to add the missing CSS classes to avoid core-hacks.
The following user interface elements are supported right now:
Components:
* com_content --> Articles, Blogs, Featured Articles
* com_contact --> Contacts
* com_finder --> Smart Search
* com_tags --> Tags
* com_users --> Users
Modules:
* mod_breadcrumbs --> Breadcrumb Navigation
* mod_finder --> Smart Search
* mod_menu --> Menu Navigation. Offers menu class suffixes for styling options (e.g. ' flex-column' for vertical layouts). To ease usability predefined module layouts are available for
  * Navbar
  * Pills
  * Tabs

Plugins:
* plg_content_vote --> Joomla Voting & Rating System
* plg_content_pagenavigation --> Joomla Content Plugin to show "Previous" and "Next" buttons under articles
* and a lot of other ui elements like System Messages, Pagination, ReadMore, etc.
You can also check the details here: https://github.com/sniggle/joomla-bootstrap4-template/tree/master/bootstrap4/html
If you are missing components, modules or other UI elements, which are not compatible with bootstrap 4, just let us know. We can then add them and provide a new version of the template.

### Template Parameters
The template offers some parameters to configure it based on your needs. You can configure it under "Advanced" settings in the Template Style:
* Description: Optional text shown as a sub-heading
* Favicon: Set your own Favicon for your website
* Custom CSS-File: Integrate your own CSS file for further styling
* Fluid Layout: Use Bootstraps fluid (full screen width) or static (fixed breakpoints depending on window size) container layout. (Both are responsive)

### Language Support
Right now the following languages for the Joomla backend are supported in this template:
* Dutch (nl-NL)
* English (en-GB)
* German (de-DE)
* Russian (ru-RU)
* Slovak (sk-SK)
* Spanish (es-ES)

:sunny: If you want to contribute to the template, feel free to add further languages! Two files are needed with in total roughly 22 translations. You can either fork the project and create a pull request or just create a ticket with the file-attachments (just drag&drop into the text-field). Starting point for new languages: https://github.com/sniggle/joomla-bootstrap4-template/tree/master/bootstrap4/language/en-GB

### jQuery compatibility
The minimal jQuery version required for Bootstrap 4 is 1.9.1. Joomla! 3.8 shipps with jQuery v1.12.4. Therefore you don't need to worry about jQuery version conflicts. The template just uses the Joomla! jQuery. For the ones who are interested in the details: Just check the Bootstrap 4 Javascript dependencies here: https://getbootstrap.com/docs/4.1/getting-started/javascript/#dependencies 

### Bootstrap 2 and Bootstrap 4 in one site?
As Joomla! 3 shipps with Bootstrap 2.3.2, it automatically loads the bootstrap framework where needed. The Javascript files of Bootstrap 2 and Bootstrap 4 loaded at the same time can result in strange UI behaviors. (e.g. Dropdowns don't load correctly or after several seconds, etc.)
To avoid this conflict we developed a little plugin to disable the Joomla! UI Bootstrap version in the front-end of your site. Just get it here https://github.com/sniggle/joomla-disable-jui-bootstrap and install it with the template to have the best user experience. 

## Demo of this template
You just want to have a look how the Joomla! Boostrap4 template works?
Just visit https://www.theaterverein-mastershausen.de/. The site is using our template.

## Download the latest release
You can always find the latest compiled version of the template here: https://github.com/sniggle/joomla-bootstrap4-template/releases
Alternatively you can also just download the "bootstrap" folder of the repository, zip it and install it in your site to get the latest commits.

## Let us improve this Bootstrap 4 template
We are happy for any kind of feedback and support:
* Did we miss a Joomla! component, module or layout?
* Do you have improvement ideas in the existing overrides?

:sunny: You can contribute by either creating an issue or a pull request here on github to support the development of this template! :-)

### Create your own version of the Joomla! Bootstrap 4 template
The template is very close the Joomla! 3 standard and Bootstrap 4 standard behavior. You can also use it as a starting point for your own Bootstrap 4 template. Just use the existing overrides and change your index.php according to your design ideas. :-)

## License of this Joomla! template
The template is based on a famous Joomla! 3 template called Protostar.
We just kept the license information in all source files and chose a compatible license here on github.
The template contains the following libraries
* Bootstrap v4.4.1 (https://getbootstrap.com)
* Font Awesome 4.7.0 by @davegandy - http://fontawesome.io
* Popper.js 1.16.0 - https://popper.js.org/

## Fontawesome 4.7 vs. Fontawesome 5
Recently Fontawesome 5 has been released. It offers a lot of new fonts and also font styles (brands, solid, regular light): https://fontawesome.com/how-to-use/upgrading-from-4
Unfortunately that change resulted in new CSS class names (e.g. far for regular). Upgrading the Bootstrap 4 template to Fontawesome 5 would mean, that the old "fa" prefix does not work any longer on the mid-term.
Currently the Joomla 4 development is shooting for Bootstrap 4 + Fontawesome 4.7: https://github.com/joomla/joomla-cms/blob/4.0-dev/templates/cassiopeia/css/template.min.css . Moving to Fontawesome 5 already would make it difficult for all sites using our template difficult again to benefit from the standard Joomla 4.x styling when moving back to a template closer to Joomla standard. Therefore right now we will not migrate to Fontawesome 5. To clarify the question there is an issue in the Joomla cms project: https://github.com/joomla/joomla-cms/issues/20099
