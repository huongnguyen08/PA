    <?php
    $data = '<?xml version = "1.0" encoding = "utf-8"?>
        <tutorialspoint>
            <course category = "HTML">
                <title lang = "en">
                    <name a="23456789876543">huong</name>
                    <age>121</age>
                </title>
                <tutor>raju</tutor>
                <duration>5</duration>
                <price>$50</price>
            </course>
        
            <course category = "WEB">
                <title lang = "en">Web Technologies</title>
                <tutor>Javed</tutor>
                <duration>10</duration>
                <price>$60</price>
            </course>
        </tutorialspoint>';

    // $xml = simplexml_load_string($data) or die("Error: Cannot create object");
    // foreach($xml->children()->children() as $books) { 
    //     echo $books->name['a']; 
    // }

    $xml = simplexml_load_file('https://vnexpress.net/rss/suc-khoe.rss') or die('err');
    foreach($xml->children() as $books) { 
        $item = $books->item; 
        foreach($item as $i){
            echo "<pre>";
            print_r($i);
        }
    }
    ?>