<?php

include('includes/config.php'); // Using database connection file here


// construct the delete statement
$sql = 'DELETE FROM tblpurchases
        WHERE BookingId = :bookid';

// prepare the statement for execution
$query = $dbh->prepare($sql);
$query->bindParam(':bookid', $bookid, PDO::PARAM_STR);
$query-> execute();
// execute the statement
//if ($statement->execute()) {
	//echo 'publisher id ' . $publisher_id . ' was deleted successfully.';
//}

?>



