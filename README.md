# Laravel API example

Repository to support [Laravel Homestead: debug an API with Xdebug and cURL in Sublime Text](http://blog.osteel.me/posts/2015/05/23/laravel-homestead-debug-an-api-with-xdebug-and-curl-in-sublime-text.html "Laravel Homestead: debug an API with Xdebug and cURL in Sublime Text").

This is an extremely simple API for illustration purpose only.

## Get it running

This is assuming [Homestead is already installed](http://laravel.com/docs/master/homestead "Laravel Homestead - Documentation") on your machine. If you are confused by the documentation, [this free Laracast](https://laracasts.com/series/laravel-5-fundamentals/episodes/2) might help.

Clone this repository in a directory of your choice (you probably already have one containing your Laravel projects):

    git clone git@github.com:osteel/xdebug-api-blog-tutorial.git xdebug-api
    
Add the site in your `~/.homestead/Homestead.yaml` file:

	sites:
    	- map: xdebug-api.local
      	  to: /home/vagrant/path/to/xdebug-api/public
      	  
Where `/path/to/` should be replaced with the path to the project on your Homestead box.
    
Match the Homestead IP address with "xdebug-api.local" in your local `hosts` file (`/etc/hosts` on a Mac) (of course, adapt the IP address if you changed the default one):

	192.168.10.10 xdebug-api.local

You should now re-provision your Homestead box. Go to `~/Homestead/` and run `vagrant provision` if the box is already running, or `vagrant up --provision` if it needs to be started.

You should now be able to access [http://xdebug-api.local](http://xdebug-api.local), which should display the Laravel welcome page.

For the full tutorial, please visit [Laravel Homestead: debug an API with Xdebug and cURL in Sublime Text](http://blog.osteel.me/posts/2015/05/23/laravel-homestead-debug-an-api-with-xdebug-and-curl-in-sublime-text.html "Laravel Homestead: debug an API with Xdebug and cURL in Sublime Text").

I also wrote a [short guide on how to set up a basic PHP/MySQL project on Homestead](/posts/2015/04/23/how-to-start-a-new-laravel5-project-with-homestead-quick-reference.html "How to start a new Laravel 5 project with Homestead - quick reference"). 