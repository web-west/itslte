<?php
$data = [
  [
    "id" => 1,
    "text" => 'Категория 1',
    "selectable" => false,
    "state" => [
      "expanded" => false,
      "checked" => false,
      "disabled" => false,
      "selected" => false,
    ],
    "nodes" => [
      [
        "id" => 2,
        "text" => 'Категория 1.1',
        "selectable" => false,
        "state" => [
          "checked" => true,
        ],
      ],
      [
        "id" => 3,
        "text" => 'Категория 1.2',
        "selectable" => false,
        "state" => [
          "checked" => true,
        ],
      ],
      [
        "id" => 4,
        "text" => 'Категория 1.3',
        "selectable" => false,
        "state" => [
          "checked" => true,
        ],
      ]
    ]
  ],
  [
    "id" => 5,
    "text" => 'Категория 2',
    "selectable" => false,
    "state" => [
      "checked" => true,
      "expanded" => false,
    ],
    "nodes" => [
      [
        "id" => 6,
        "text" => 'Категория 2.1',
        "selectable" => false,
        "state" => [
          "checked" => false,
        ],
      ],
      [
        "id" => 7,
        "text" => 'Категория 2.2',
        "selectable" => false,
        "state" => [
          "checked" => false,
        ],
      ],
      [
        "id" => 8,
        "text" => 'Категория 2.3',
        "selectable" => false,
        "state" => [
          "checked" => false,
        ],
      ]
    ]
  ]    
];

print json_encode($data);
?>