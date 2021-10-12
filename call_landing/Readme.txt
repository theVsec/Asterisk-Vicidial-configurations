In this folder you will find a piece of asterisk dialplan code and a script in PHP to be able to grab the last user who talked with the number calling.

To make the changes you should take these steps:

1.Create an ingroup for each user. The name of the ingroup should be the same as the username of the user.
  a. Make sure 'No Agents No Queueing:' is set to Y/NO_READY/NO_PAUSED
  b. Make sure 'No Agent No Queue Action:' is set to INGROUP
  c.Make sure the IGROUP is set to MainIngroup
2.Create an ingroup named MainIngroup in case of a failover (user not available) where all the calls will be routed.
3.Make sure the script ./call_landing/get_user.php is accessible from the asterisk server. (You can test it with the command : sudo curl -I http://x.x.x.x/get_user.php)
4.Configure your Dialplan as described in the file ./call_landing/dialplanConfiguration
  a.Replace 'changeme' to the phone number/regexp you need.
  b.Replace 'x.x.x.x' in line 4 to the ip location of the get_user.php
  c.Replace 'MainIngroup' in line 9 to the failover Ingroup
