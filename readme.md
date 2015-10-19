# Test project build with ![laravel logo image] (http://laravel.com/assets/img/laravel-logo.png) Laravel 5.1 php framework

### Requirements

* *NIX operation system for comfortable work, using bash/zsh ;
* PHP 5.6+ or PHP 7 ;
* MySQL server 5.1+ ;
* Git VCS ;
* VirtualBox (if vagrant homestead is used) ;
* Composer (global install prefered) ;

### Installation

#### Using Vagrant Homestead Virtual Machine

 * Install latest vagrant version from [Vagrant website] (http://vagrantup.com)

 * Clone homestead git repository

 ```
 git clone https://github.com/laravel/homestead.git <your folder for homestead>
 ```

 * Go to your homestead directory

 ```
 cd <your folder for homestead
 ```

 * Run
 ```
 vagrant up
 ```
 and wait until virtualbox image will be downloaded. If something fails you can manually add homestead box to your vagrant installation using
 ```
 vagrant box add laravel/homestead
 ```
  or
 ```
 vagrant box add laravel/homestead https://atlas.hashicorp.com/laravel/boxes/homestead
 ```

 * Edit Homestead config file called Homestead.yaml . It can be found in ~/.homestead (for Unix like OS)


        sites:

        - map: homestead.app

        to: /home/vagrant/Code/Laravel/public

 or

      sites:

        - map: homestead.app

        to: /home/vagrant/Code/Laravel/public

        hhvm: true


  if you would like to use [HHVM] (http://hhvm.com/)

* You must to map folders to access site from both a vagrant machine and host OS

        folders:

         - map: ~/Code

         to: /home/vagrant/Code

  or

        folders:

         - map: ~/Code

         to: /home/vagrant/Code

         type: "nfs"

 if you prefer [nfs filesystem](http://docs.vagrantup.com/v2/synced-folders/nfs.html)
 
  * Clone project to your site folder
  ```
  git clone https://github.com/bein92/LaravelApp.git
  ```
 
  * Run ``` comoser update ``` command to add missing dependencies
 
  * Edit ``.env`` file for your DB connection
 
  * Run ``php artisan migrate`` to create DB schema

#### Using Local Apache Php Mysql

 * Install composer using:

 ```
 curl -sS https://getcomposer.org/installer | php &&  sudo mv composer.phar /usr/local/bin/composer
 ```

 * Clone project to your local webserver folder using git
 ```
 git clone https://github.com/bein92/LaravelApp.git
 ```

 * Run ``` comoser update ``` command to add missing dependencies

 * Edit ``.env`` file for your DB connection

 * Run ``php artisan migrate`` to create DB schema
 
