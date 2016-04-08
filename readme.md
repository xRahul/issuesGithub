### Get number of open issues in a github repo.

A simple [Laravel](http://laravel.com) app to get number of open issues in a github repository using the github v3 api.

App is currently live on [http://issuesgithub.herokuapp.com/](http://issuesgithub.herokuapp.com/)

* For UI, [bootstrap](http://getbootstrap.com) has been used
* It is a single page application, using only the PagesController and homepage view.
* User just has to enter URL of the github repository (eg. [https://github.com/mrdoob/three.js](https://github.com/mrdoob/three.js))
* Errors in URL entered are handled, and different kinds of errors give different messages for easier debugging.


The data displayed for a repository is-

* Total number of open issues   
* Number of open issues that were opened in the last 24 hours
* Number of open issues that were opened more than 24 hours ago but less than 7 days ago
* Number of open issues that were opened more than 7 days ago   

#### How I did it

* used the package [GrahamCampbell/Laravel-GitHub](https://github.com/GrahamCampbell/Laravel-GitHub) for easier integration of github api with laravel.
* Validated the URL entered as being a GitHub URL containing a valid username/repository format
* used [nesbot/carbon](http://carbon.nesbot.com/) to convert ISO 8601 formatted UTC date returned by the api to UTC carbon instance for easier date-time manipulation.
* Used the [List issues for a repository](https://developer.github.com/v3/issues/) api to get 100 issues (maximum allowed per request) per api request to get all the open issues in a repository.
* Comparing the 'created_at' for an issue with now minus 24 hours and now minus 7 days to get the data required.
* displaying the data in tabular format.


#### Improvements Roadmap

* on Clicking the number of issues in each stat, display the list of those Issues with links to their github pages in tabular format.
* Give user power to sort the issues display...ed in various keys like date etc.
* Giving users a field where they can enter their own github key to use this api, to make each request truly theirs.
* and I'm open to any more suggestions