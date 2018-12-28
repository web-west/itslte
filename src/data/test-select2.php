<?php
    function array_find($needle, array $haystack, $column) {
        $keys = [];
        foreach($haystack as $key => $value) {
            if (strpos(strtolower($value[$column]), strtolower($needle)) !== false) {
                $keys[] = $value;
            }
        }
        return $keys;
    }
    $data = [
        [
            "id" =>1,
            "text" => "Option 1",
        ],
        [
            "id" => 2,
            "text" => "Option 2",
        ],
        [
            "id" => 3,
            "text" => "Option 3",
        ],
        [
            "id" => 4,
            "text" => "Option 4",
        ],
        [
            "id" => 5,
            "text" => "Option 5",
        ],
        [
            "id" => 6,
            "text" => "Option 6",
        ],
        [
            "id" => 7,
            "text" => "Option 7",
        ],
        [
            "id" => 8,
            "text" => "Option 8",
        ],
    ];

    $results = array_find($_REQUEST['q'], $data, 'text'); 
    
    print json_encode(['results' => $results]);
?>