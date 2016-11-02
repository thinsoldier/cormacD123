<?php
(isset($_POST["reference"]))?
    $parameter_ref = $_POST["reference"]:
    $parameter_ref = $_GET["reference"];
    
    if ($parameter_ref === "CGD123")
        $arr[0] = array('firstname' => "John", 'lastname' => "Smith", 'carmake' => "Ford", 'carmodel' => "Focus", 'year' => "2007", 'miles' => "112000", 'registration' => "ABC1234", 'annualprice' => "658.49", 'monthlyprice' => "64.00");
    else if ($parameter_ref === "DVD123")
            $arr[0] = array('firstname' => "Joey", 'lastname' => "Diaz", 'carmake' => "Audi", 'carmodel' => "A3", 'year' => "2010", 'miles' => "80000", 'registration' => "JDZ4321", 'annualprice' => "838.99", 'monthlyprice' => "75.00");

echo '{"members":'.json_encode($arr).'}';

?>