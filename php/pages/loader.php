<?php 
 	/* -- Code Presenter - http://www.codepresenter.net --
	A simple, educational tool to engage student participation through real-time code sharing and presentation in the classroom
	An open source project coded by Charles McCrary https://github.com/McCraryCharles/ */	
	
	// This file loads the correct page based on the URL / Host cookie
	
	if(isset($_GET['roomCode'])) { // If an room is was entered
		$roomCode = $_GET['roomCode']; // Set the room id variable
		include_once "php/db/dbLibrary.php"; // Include database library
		$roomId = getRoomId($roomCode); // Get the room id, if code is invalid will set to false
		if (isset($_COOKIE['hostId'])) { // If a host cookie is set
			$hostId = $_COOKIE['hostId'];
			$hostIdRoom = checkHost($hostId); // Verify the id
			if ($hostIdRoom == $roomCode) { // If host id is for the set room
				include_once 'php/pages/host/host.php'; // Load host page
			}
			else { // If there is a key mismatch
				setcookie('hostId', 0, time() - (60), "/"); // Expire host cookie to one min ago
				include_once 'php/pages/home.php'; // Load homepage
			}
		}
		else { // If host cookie is not set
			if (checkRoom($roomCode)) { // If room id is valid
				include_once 'php/pages/user/user.php'; // Load room
			}
			else { // If room id does not exist
				$connectError = "Room not found, please check your code.";
				include_once 'php/pages/home.php'; // Load homepage
			}
		}
	}
	else { // If no room id was set
		include_once 'php/pages/home.php'; // Load homepage
	}
?>