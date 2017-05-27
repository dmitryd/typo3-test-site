# TYPO3 Extension Test Site

This project contains a Docker-based TYPO3 installation to test extensions developed by Dmitry Dulepov.

This branch uses TYPO3 7.6 LTS.

## Requirements

* Docker installed
* `mysql` tool is available locally
* No or stopped local mysql server (this project uses port 3306 on the local machine)
* No or stopped local web server (this project uses port 80 on the local machine)

## Using

* Bring it up:
 * If you re on macOS, run `./develop up -d`
 * If you are on Linux, you need to find out the IP address of your computer and `XDEBUG_HOST=192.168.1.33 ./develop up -d`. `192.168.1.33` here is the IP address of the computer.
 * If you are on Windows, you can try Linux way but most likely you are doomed...
* Import the database using `mysql -u typo3dev -ptypo3dev -P 3306 -h 127.0.0.1 typo3dev < project/backup/typo3dev.sql` to import the database
* Add `127.0.0.1 typo3v87.dev` line to your `/etc/hosts` (Windows: `C:\Windows\System32\drivers\etc\hosts`)
* Open `http://typo3v87.dev/` in the browser

## XDebug configuration

* IDE key is PHPSTORM
* Site name is `typo3v87.dev` (not `typo3v76.dev`!!!)
* Mappings:
  * `project` to `/var/www/html`
  * `project/web/typo3` to `/var/www/html/vendor/typo3/cms/typo3`
  * `project/web/index.php` to `/var/www/html/vendor/typo3/cms/index.php`

Questions? You can find me in the realurl channel of the TYPO3 Slack group.
