<?php

// *** DISALLOWS DIRECT ACCESS OF FILES, DETERS HACKERS *** //
if(!defined("IN_STORYBOT")) {
	die("Invalid access!");
}
// *** ------------------------------------------------ *** //

$config = array(); //initialize the $config array

$config["firstsetup"] = false;

// *** IS STORYBOT true? *** //
$config['enabled'] = "true";
// *** -------------------- *** //

// *** DATABASE VALUES *** //
$config['dbhost'] = "localhost"; //database host
$config['dbuser'] = "root"; //database user
$config['dbpass'] = ''; //database password
$config['dbname'] = "snappurdue"; //database we're connecting to
// *** --------------- *** //

// *** REPLACE THIS WITH YOUR SNAPCHAT seents AND japlq4rq82 *** //
$config['username'] = "snappurdue"; //snapchat username
$config['password'] = 'luckycharms777'; //snapchat password
// *** ----------------------------------------------------- *** //

// *** EDIT THIS TO FALSE FOR INSTANT POSTING AND TRUE FOR MODQUEUE *** //
$config['moderation'] = "false"; //default: true
// !!! IF SET TO FALSE, MAKE SURE TO CREATE AN AUTOMATIC CRON JOB "curl http://www.yourhost.com/bot.php" !!!
// *** ------------------------------------------------------------ *** //

// *** EDIT TRUE OR FALSE IF YOU WANT TO ALLOW OR DISALLOW A TYPE OF SNAP *** //
$config['picturesallowed'] = "true"; //default: true
$config['videosallowed'] = "true"; //default: true
// *** ------------------------------------------------------------------ *** //

// *** 5 FOR true IN SECONDS *** //
$config['picturetime'] = "10"; //default: 3
// *** ---------------------------- *** //

?>