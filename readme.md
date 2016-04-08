### Get number of open issues in a github repository.

A [Laravel](http://laravel.com) app to get number of open issues in a github repository using github v3 api.

App is currently live on [http://issuesgithub.herokuapp.com/](http://issuesgithub.herokuapp.com/)

#### Technical Details

* App is using [Bootstrap](http://getbootstrap.com) for UI.
* It is a single page application, using only the PagesController and a homepage view.
* User has to enter the URL of the github repository (eg. [https://github.com/mrdoob/three.js](https://github.com/mrdoob/three.js)) to get the stats of its issues.
* Errors in URL entered are handled, and different kinds of errors give different messages for easier debugging.
* Using package [GrahamCampbell/Laravel-GitHub](https://github.com/GrahamCampbell/Laravel-GitHub) for easier integration of github api with laravel.
* Using [nesbot/carbon](http://carbon.nesbot.com/) package to convert ISO 8601 formatted UTC date returned by the api to UTC carbon instance for easier date-time manipulation.
* Using the [List issues for a repository](https://developer.github.com/v3/issues/) api to get 100 issues (maximum allowed per request) per api request to get all the open issues in a repository.
* Comparing the 'created_at' timestamp for an issue with now minus 24 hours and now minus 7 days to get the data required.


The data displayed for a repository is-

* Total number of open issues.
* Number of open issues that were opened in the last 24 hours.
* Number of open issues that were opened more than 24 hours ago but less than 7 days ago.
* Number of open issues that were opened more than 7 days ago.  



#### Improvements Roadmap

* On clicking the number of issues in each stat, display the list of those issues with links to their github pages.
* Classification and sorting of issues based on labels, creation date, importance (calculated via multiple factors like comments, last updated etc.)