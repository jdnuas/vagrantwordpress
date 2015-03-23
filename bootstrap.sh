#!/usr/bin/env bash

sudo apt-get update

echo -e "\e[31m=====INSTALLING APACHE=====\e[0m"
sudo apt-get install -y apache2=2.2.22-1ubuntu1.8

echo -e "\e[31m=====INSTALLING MYSQL=====\e[0m"
sudo debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password password vagrant'
sudo debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password_again password vagrant'
sudo apt-get install -y mysql-server=5.5.41-0ubuntu0.12.04.1 libapache2-mod-auth-mysql
sudo mysql_install_db

echo -e "\e[31m=====INSTALLING PHP 5.5 AND MODULES=====\e[0m"
sudo apt-get install -y python-software-properties
sudo add-apt-repository ppa:ondrej/php5-oldstable
sudo apt-get update
sudo apt-get install -y php5=5.4.38-1+deb.sury.org~precise+2 
sudo apt-get install -y php5-mysql php5-curl php5-mcrypt php5-gd libapache2-mod-php5

echo -e "\e[31m=====CHANGING DEFAULT WEBROOT=====\e[0m"
sudo chmod -R 777 /etc/apache2/sites-available/

sed -i.bak 's/.DocumentRoot \/var\/www.*/DocumentRoot \/var\/www\/wordpress/' /etc/apache2/sites-available/default

sed -i.bak 's/.<Directory \/var\/www.*>/<Directory \/var\/www\/wordpress>/' /etc/apache2/sites-available/default

sed -i.bak 's/.Options Indexes FollowSymLinks MultiViews.*/Options FollowSymLinks MultiViews/' /etc/apache2/sites-available/default

if ! [ -L /var/www ]; then
        rm -rf /var/www
	ln -fs /vagrant /var/www
fi

echo -e "\e[31m=====ENABLING MOD REWRITE CONF=====\e[0m"
sudo a2enmod rewrite

echo -e "\e[31m=====RESTART APACHE=====\e[0m"
sudo service apache2 restart

echo -e "\e[31m=====INSTALLING UNZIP=====\e[0m"
sudo apt-get install -y unzip

echo -e "\e[31m=====INSTALLING WORDPRESS=====\e[0m"
mysqladmin -uroot -pvagrant < /vagrant/wordpress/vme_wp_db.sql

echo -e "\e[31m=====VM DEPLOYED=====\e[0m"
