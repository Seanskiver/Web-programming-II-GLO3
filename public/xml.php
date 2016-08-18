<?php 

    if (isset($_POST['action'])) {
        $action = $_POST['action'];
    } else if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    $xmlDir = "safe.xml";
    // Load in XML document
    $xml = new \DomDocument;
    $xml->formatOutput = true;
    $xml->validateOnParse = true;
    
    $xml->load($xmlDir);
    
    // Import DOM object in SimpleXMLElement
    $sxe = simplexml_import_dom($xml);
    
    echo json_encode($sxe);
    
    
    if($action == "add") {
        $author = $_GET['action'];
        $name = $_GET['name'];
        $description = $_GET['description'];
        
        $attr = [
            'author' => $author,
            'name'   => $name,
            'description' => $description
        ];
        
        // Add child with DOM
    }
    
?>