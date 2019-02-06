<?php
include_once ('../class.php');
function connectDB()
{
    $link = new mysqli("127.0.0.1", "admin", "P@ssw0rd", "travelexperts");
    // $dbh               = mysqli_connect("127.0.0.1", "admin", "P@ssw0rd", "travelexperts");
    if ($link->connect_errno) {
        echo "Error number: " . $link->connect_error . PHP_EOL;
        exit;
    }
    return $link;
}

function closeDB($link)
{
    $link->close();
}

function insertIntoDB(agent $agent,$tblName)
{
    // $TableColoumnName  = "";
    // $TableColoumnValue = "";
    $link              = connectDB();
    $result;
    // Nested foreach to dynamic determin the amount of key=>value pair of the data.
    //1st foreach get the new row of data

    //generic insert replaced by final day exerice that required use  class
    // foreach ($tempArray as $i => $data) {
    //     //2nd foreach get the key=>value pair out of the row data.
    //     foreach ($data as $key => $value) {
    //         //format to SQL syntax with extra "," in the end.
    //         $TableColoumnName .= ($key . ",");
    //         $TableColoumnValue .= ("'" . $value . "',");

    //         //code to test before touch the real database
    //         // echo ("key:" . $key . "<br>");
    //         // echo ("coloumn:" . $TableColoumnName);
    //         // echo ("<br>");
    //         // echo ("value:" . $TableColoumnValue);
    //         // echo ("<br>");
    //     }
    //     //get rid of extra ","
    //     $TableColoumnName  = substr($TableColoumnName, 0, -1);
    //     $TableColoumnValue = substr($TableColoumnValue, 0, -1);

    $sqlName=$agent->nameToString();
    $sqlValue=$agent;
   
        $sql               = "INSERT INTO $tblName ($sqlName) VALUES($sqlValue)";
        //code for testing
        // echo $sql;
        // echo ("<br>**************<br>");

        //Reset string holder for next data row
        // $TableColoumnName  = "";
        // $TableColoumnValue = "";
        $result            = $link->query($sql);
    // }
    closeDB($link);
    return $result;
}
?>