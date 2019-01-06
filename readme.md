### Get number of open issues in a github repository.

[![Build Status](https://travis-ci.org/xRahul/issuesGithub.svg?branch=master)](https://travis-ci.org/xRahul/issuesGithub)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/fa7ea8b966d246ce99d6209510721b5c)](https://www.codacy.com/app/xRahul/issuesGithub?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=xRahul/issuesGithub&amp;utm_campaign=Badge_Grade)
[![Maintainability](https://api.codeclimate.com/v1/badges/5734dc642cf3cfaddf96/maintainability)](https://codeclimate.com/github/xRahul/issuesGithub/maintainability)
[![codebeat badge](https://codebeat.co/badges/65cc5424-2ba9-4527-ba29-45a43a244510)](https://codebeat.co/projects/github-com-xrahul-issuesgithub-master)
[![CodeFactor](https://www.codefactor.io/repository/github/xrahul/issuesgithub/badge)](https://www.codefactor.io/repository/github/xrahul/issuesgithub)
[![libraries.io](https://img.shields.io/librariesio/github/xRahul/issuesGithub.svg)](https://libraries.io/github/xRahul/issuesGithub)

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