<?php 
    (string)$domainname = $_POST['domainname'];

    $myfile = fopen("/Applications/XAMPP/htdocs/plik/$domainname.zone", "w") or die("Unable to open file!");

    (string)$result ="{\$origin\": \"$domainname.org.\",
    \"\$ttl\": 3600,
    \"soa\": {
        \"name\": \"ns1.$domainname.org.\",
        \"name\": \"admin.$domainname.org.\",
        \"serial\": \"{time}\",
        \"refresh\": 3600,
        \"retry\": 600,
        \"expire\": 604800,
        \"minimum\": 86400
    },
    \"ns\":[
        { \"host\": \"ns1.$domainname.org.\" },
        { \"host\": \"ns2.$domainname.org.\" }
    ],
    \"a\": [
        { \"name\": \"@\", \"ttl\": 400, \"value\": \"255.255.255.255\" },
        { \"name\": \"@\", \"ttl\": 400, \"value\": \"127.0.0.1\" },
        { \"name\": \"@\", \"ttl\": 400, \"value\": \"127.0.0.1\" }
    ]
    }";

    fwrite($myfile, $result);

    fclose($myfile);
    echo "Dodano";
    header('Location: index.php');
?>

