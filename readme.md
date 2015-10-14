# Test project build with ![laravel logo image] (http://laravel.com/assets/img/laravel-logo.png) Laravel 5.1 php framework

### Installation
 
#### Using Vagrant Homestead Virtual Machine
 
 * Install latest vagrant version from [Vagrant website] (http://vagrantup.com)
 
 * Clone homestead git repository
 
 ```
 git clone https://github.com/laravel/homestead.git <your folder for homestead>
 ```
 
 * Go to your homestead directory
 
 ```
 cd <your folder for homestea>
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
 * download the project files and place somewhere you want
 
 * Edit Homestead config file called Homestead.yaml .
It can be found in ~/.homestead (for Unix like OS)
 

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
 
