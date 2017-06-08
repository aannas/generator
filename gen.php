<?php
ERROR_REPORTING(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysql($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'A' ORDER BY RAND() LIMIT 1";
$sql2 = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'B' ORDER BY RAND() LIMIT 1";
$sql3 = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'A' ORDER BY RAND() LIMIT 1";
$sql4 = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'B' ORDER BY RAND() LIMIT 1";
$sql5 = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'A' ORDER BY RAND() LIMIT 1";
$sql6 = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'B' ORDER BY RAND() LIMIT 1";
$sql7 = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'A' ORDER BY RAND() LIMIT 1";
$sql8 = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'B' ORDER BY RAND() LIMIT 1";
$sql9 = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'C' ORDER BY RAND() LIMIT 1";
$sql10 = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'C' ORDER BY RAND() LIMIT 1";
$sql11 = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'D' ORDER BY RAND() LIMIT 1";
$sql12 = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'C' ORDER BY RAND() LIMIT 1";
$sql13 = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'C' ORDER BY RAND() LIMIT 1";
$sql14 = "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = 'D' ORDER BY RAND() LIMIT 1";


$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);
$result5 = $conn->query($sql5);
$result6 = $conn->query($sql6);
$result7 = $conn->query($sql7);
$result8 = $conn->query($sql8);
$result9 = $conn->query($sql9);
$result10 = $conn->query($sql10);
$result11 = $conn->query($sql11);
$result12 = $conn->query($sql12);
$result13 = $conn->query($sql13);
$result14 = $conn->query($sql14);

while ($result == $result3)
{
    "SELECT * FROM zin, letter WHERE zin.letter_idletter = letter.idletter AND letter.letter = ORDER BY RAND() LIMIT 1";

}





if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["zin"]. "<br>";
    }
} else {
    echo "0 results";
}

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["zin"]. "<br>";
    }
} else {
    echo "0 results";
}

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo $row2["zin"]. "<br>";
    }
} else {
    echo "0 results";
}
if ($result3->num_rows > 0) {
    // output data of each row
    while($row3 = $result3->fetch_assoc()) {
        echo $row3["zin"]."<br>";
    }
} else {
    echo "0 results";
}
if ($result4->num_rows > 0) {
    // output data of each row
    while($row4 = $result4->fetch_assoc()) {
        echo $row4["zin"]."<br>";
    }
} else {
    echo "0 results";
}
if ($result5->num_rows > 0) {
    // output data of each row
    while($row5 = $result5->fetch_assoc()) {
        echo  $row5["zin"].  "<br>";
    }
} else {
    echo "0 results";
}
if ($result6->num_rows > 0) {
    // output data of each row
    while($row6 = $result6->fetch_assoc()) {
        echo  $row6["zin"]. "<br>";
    }
} else {
    echo "0 results";
}
if ($result7->num_rows > 0) {
    // output data of each row
    while($row7 = $result7->fetch_assoc()) {
        echo $row7["zin"]."<br>";
    }
} else {
    echo "0 results";
}
if ($result8->num_rows > 0) {
    // output data of each row
    while($row8 = $result8->fetch_assoc()) {
        echo $row8["zin"]. "<br>";
    }
} else {
    echo "0 results";
}
if ($result9->num_rows > 0) {
    // output data of each row
    while($row9 = $result9->fetch_assoc()) {
        echo $row9["zin"]. "<br>";
    }
} else {
    echo "0 results";
}
if ($result10->num_rows > 0) {
    // output data of each row
    while($row10 = $result10->fetch_assoc()) {
        echo $row10["zin"]. "<br>";
    }
} else {
    echo "0 results";
}
if ($result11->num_rows > 0) {
    // output data of each row
    while($row11 = $result11->fetch_assoc()) {
        echo  $row11["zin"]. "<br>";
    }
} else {
    echo "0 results";
}
if ($result12->num_rows > 0) {
    // output data of each row
    while($row12 = $result12->fetch_assoc()) {
        echo $row12["zin"]. "<br>";
    }
} else {
    echo "0 results";
}
if ($result13->num_rows > 0) {
    // output data of each row
    while($row13 = $result13->fetch_assoc()) {
        echo $row13["zin"]. "<br>";
    }
} else {
    echo "0 results";
}
if ($result14->num_rows > 0) {
    // output data of each row
    while($row14 = $result14->fetch_assoc()) {
        echo $row14["zin"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>