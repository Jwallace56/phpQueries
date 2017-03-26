<?php
/*example if session was used to gather user ID e.g. from a login*/
session_start();
require_once ($_SERVER['DOCUMENT_ROOT'] . "/exampleUsage.php");
?>

<html>
<head>
<title>Example usage of displaying messages</title>
</head>
<body>
<?php


/*example using getMessages function from exampleUsage.php*/


/*call the class from exampleUsage.php*/
$messages = new Messages();

/*this calls the getMessages function from exampleUsage.php referencing the class then finding the function within*/
$messageArray = $messages->getMessages($_SESSION['userID']);


/*this creates an example list looping through all of the messages for the user in the database*/
echo '<ul>';
    for($i = 0; $i < count($messageArray); $i++)
    {
       echo '<li><b>Message: </b>'. $messageArray[$i]["message_text"] . '</li>';
    }
echo '</ul>';
?>
</body>
</html>
