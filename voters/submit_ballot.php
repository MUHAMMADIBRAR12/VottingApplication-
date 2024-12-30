<?php
	include 'includes/session.php';
	include 'includes/slugify.php';
	include'../sendsms.php';
	if(isset($_POST['vote'])){
		if(count($_POST) == 1){
			$_SESSION['error'][] = 'Please vote atleast one candidate';
		}
		else{
			$_SESSION['post'] = $_POST;
			$seat=$_POST['seat'];
			$sql = "SELECT * FROM nationalpositions";
			$query = $conn->query($sql);
			$error = false;
			$sql_array = array();
			while($row = $query->fetch_assoc()){
				$position = slugify($row['description']);
				$pos_id = $row['id'];
				if(isset($_POST[$position])){
					if($row['max_vote'] > 1){
						if(count($_POST[$position]) > $row['max_vote']){
							$error = true;
							$_SESSION['error'][] = 'You can only choose '.$row['max_vote'].' candidates for '.$row['description'];
						}
						else{
							foreach($_POST[$position] as $key => $values){
								
								$sql_array[] = "INSERT INTO national_votes (voters_id, candidate_id, position_id) VALUES ('".$voter['id']."', '$values', '$seat')";
							}

						}
						
					}
					else{
						$candidate = $_POST[$position];
						$sql_array[] = "INSERT INTO national_votes (voters_id, candidate_id, position_id) VALUES ('".$voter['id']."', '$candidate', '$seat')";
					}
					// $client->messages->create(
     //          // the number you'd like to send the message to
     //        '+923036772585',
     //        [
     //          // A Twilio phone number you purchased at twilio.com/console
     //          'from' => '+19085437254',
     //          // the body of the text message you'd like to send
     //            'body' => 'THANKS FOR YOUR CAST YOUR VOTE'
     //        ]);

				}
				
			}

			if(!$error){
				foreach($sql_array as $sql_row){
					$conn->query($sql_row);
				}

				unset($_SESSION['post']);
				$_SESSION['success'] = 'Ballot Submitted';

			}

		}

	}
	else{
		$_SESSION['error'][] = 'Select candidates to vote first';
	}

	header('location: home.php');

?>