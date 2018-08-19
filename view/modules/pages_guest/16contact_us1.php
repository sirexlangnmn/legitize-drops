					<?php
						//Checking Submit Button
						if(filter_has_var(INPUT_POST, 'send')){
							echo 'Submitted';
						}

						if(filter_has_var(INPUT_POST, 'name')){
							$name = htmlentities($_POST['name']);
							$uc_name =	ucwords($name);
							echo 'Name: '. $uc_name;
						}else{
							echo 'Name NOT Found';
						} 

						echo '<br />';


						if(filter_has_var(INPUT_POST, 'email')){
							$email = htmlentities($_POST['email']);
							$trimmed_email = trim($email);
							$sanitize_email = filter_var($trimmed_email, FILTER_SANITIZE_EMAIL);
							$validate_email = filter_var($sanitize_email, FILTER_VALIDATE_EMAIL);
							echo 'Email: ' . $validate_email;
						}else{
							echo 'Email NOT Valid';
						} 

						echo '<br />';

						if(filter_has_var(INPUT_POST, 'message')){
							$message = htmlentities($_POST['message']);
							$trimmed_message = trim($message);
							$validate_message = filter_var($trimmed_message, FILTER_SANITIZE_SPECIAL_CHARS);
							echo 'Message: ' . $validate_message;
						}else{
							echo 'Message NOT Valid';
						} 


						echo '<br />';
						echo '<br />';
					?>