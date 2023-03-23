# Magento 2.4.6 - Fresh Docker Install

Greetings!

You can use this repository to install a fresh magento 2.4.6 with NGinx in docker.

This work is largely based on the awesome tutorial I found here : https://medium.com/@steve_64977/how-to-setup-magento-2-4-5-on-your-local-machine-in-no-time-dd9bc24b8630


# Installation steps
## Install Docker
You will need docker and docker-compose to run the project.

> `sudo apt-get update && sudo apt-get install docker-ce docker-ce-cli containerd.io docker-compose`

## Build the containers

> `docker-compose up -d`

## Install the sources
You will need your magento access keys. They can be found in your Magento marketplace account at https://marketplace.magento.com/customer/accessKeys/. You will need a free account to access these.

Exec into the fpm container, install the sources
> `docker-compose exec fpm bash`

> `composer install`

and fill in the username (public key) and the password (secret key) when prompted.

## Set correct filesystem permissions
> `find var generated vendor pub/static pub/media app/etc -type f -exec chmod g+w {} +`

> `find var generated vendor pub/static pub/media app/etc -type d -exec chmod g+ws {} +`

> `chown -R :www-data .`

> `chmod u+x bin/magento`

## Add the website url to /etc/hosts
Add 
> `127.0.0.1 local.magento246.com`

to you /etc/hosts file (you will need admin access to edit this file)

## And voilà!
You should now be able to access your website at local.magento246.com

# Troubleshooting