<?php

// new generic object
$output = new stdClass();

$output->members = array();

$records = array(
	"CGD123" => array(
		'firstname' => "John", 
		'lastname' => "Smith", 
		'carmake' => "Ford", 
		'carmodel' => "Focus", 
		'year' => "2007", 
		'miles' => "112000", 
		'registration' => "ABC1234", 
		'annualprice' => "658.49", 
		'monthlyprice' => "64.00"
	),
	"DVD123" => array(
		'firstname' => "Joey", 
		'lastname' => "Diaz", 
		'carmake' => "Audi", 
		'carmodel' => "A3", 
		'year' => "2010", 
		'miles' => "80000", 
		'registration' => "JDZ4321",
		'annualprice' => "838.99", 
		'monthlyprice' => "75.00"
	)
);

// Search records list for a matching key
if( isset( $_REQUEST["reference"] ) && isset( $records[ $_REQUEST["reference"] ] ) )
{
	$output->members[0] = $records[ $_REQUEST["reference"] ];
}

echo json_encode($output);
?>