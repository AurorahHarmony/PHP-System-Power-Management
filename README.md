# PHP System Power Management
This script allows for the shutdown or reboot of Linux systems with buttons on a webpage in its simplest form.

### Setup
For the code to work, you must allow the www-data user full access to the shutdown and reboot commands.

First we must open up the sudoers file. On most versions of linux this can by done by typing
```
sudo visudo
```

After that we need to go to the bottom of the file and add two lines of text to allow no password access to the shutdown and reboot commands to www-data.
```
www-data ALL=(root) NOPASSWD: /sbin/shutdown
```
for shutdown privelages and
```
www-data ALL=(root) NOPASSWD: /sbin/reboot
```
for reboot.

Please note that doing this allows any applications within the www-data user group (php, nginx, apache) unlimited no password access to these commands. It is not ideal to use this method in a production environment. It is fine for home use.

After doing all this, you should find that clicking the buttons on the served web page will shutdown or restart the server respectively.