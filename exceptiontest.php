<?php	
	class NameException extends Exception { }
	class EmailException extends Exception { }
$name = "test";
$email= "";
try {
		if (empty($name)) {
			throw new NameException();
			}
		elseif (empty($email)) {
			throw new EmailException();
			}
else {
		echo "Name is " . $name . "<br>";
		echo "Email is " . $email;
		}
		}
		catch (NameException $n) {
			echo "A name was not provided.";
			error_log($n->getTraceAsString());
		}
		catch (EmailException $e) {
			echo "An email address was not provided.";
			error_log($e->getTraceAsString());
		}
