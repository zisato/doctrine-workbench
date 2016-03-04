<?php

$fixtures = array();

$f1 = array(
    'name' => 'blog',
    'schema' => '{"entities":[{"x":104,"y":61,"fields":[{"relations":[],"id":"hagc4f660d83ba0h4255","name":"id","tableName":"id","length":0,"pk":true,"nn":false,"type":"integer","default":null,"strategy":"AUTO"},{"relations":["bc1bcfgfgb24dc55afd4"],"id":"5f4g0153bf48chfch6af","name":"post","tableName":"post","length":0,"pk":false,"nn":false,"type":"","default":null}],"relations":["bc1bcfgfgb24dc55afd4"],"id":"f7a112fb4f1g962h49f8","entityName":"Categoria","tableName":"categoria","namespace":"AppBundle\\Entity"},{"x":409,"y":66,"fields":[{"relations":[],"id":"83651995dhhhb8fb39a0","name":"id","tableName":"id","length":0,"pk":true,"nn":false,"type":"integer","default":null,"strategy":"AUTO"},{"relations":["bc1bcfgfgb24dc55afd4"],"id":"8586bb33b839c707caeb","name":"categoria","tableName":"categoria","length":0,"pk":false,"nn":false,"type":"","default":null},{"relations":["8a160970g7bc98fg47e8"],"id":"f0b3b8efcb6075d5f2f4","name":"tag","tableName":"tag","length":0,"pk":false,"nn":false,"type":"","default":null}],"relations":["bc1bcfgfgb24dc55afd4","8a160970g7bc98fg47e8"],"id":"4dfaff91c6f95e730g68","entityName":"Post","tableName":"post","namespace":"AppBundle\\Entity"},{"x":752,"y":60,"fields":[{"relations":[],"id":"3c499a3h931g25bb962h","name":"id","tableName":"id","length":0,"pk":true,"nn":false,"type":"integer","default":null,"strategy":"AUTO"},{"relations":["8a160970g7bc98fg47e8"],"id":"ed7g5c250c79b4cec38h","name":"post","tableName":"post","length":0,"pk":false,"nn":false,"type":"","default":null}],"relations":["8a160970g7bc98fg47e8"],"id":"a8h57385c713a760bf59","entityName":"Tag","tableName":"tag","namespace":"AppBundle\\Entity"}],"relations":[{"connectionId":"bc1bcfgfgb24dc55afd4","name":"One to many","type":2,"hoverClass":"oneToManyHover","cascadeOptions":[],"sourceEntityId":"f7a112fb4f1g962h49f8","targetEntityId":"4dfaff91c6f95e730g68","sourceFieldId":"5f4g0153bf48chfch6af","targetFieldId":"8586bb33b839c707caeb","sourceField":{"relations":["bc1bcfgfgb24dc55afd4"],"id":"5f4g0153bf48chfch6af","name":"post","tableName":"post","length":0,"pk":false,"nn":false,"type":"","default":null},"targetField":{"relations":["bc1bcfgfgb24dc55afd4"],"id":"8586bb33b839c707caeb","name":"categoria","tableName":"categoria","length":0,"pk":false,"nn":false,"type":"","default":null},"targetRelatedFieldId":"83651995dhhhb8fb39a0"},{"connectionId":"8a160970g7bc98fg47e8","name":"Many to many","type":3,"hoverClass":"manyToManyHover","cascadeOptions":[],"sourceEntityId":"4dfaff91c6f95e730g68","targetEntityId":"a8h57385c713a760bf59","sourceFieldId":"f0b3b8efcb6075d5f2f4","targetFieldId":"ed7g5c250c79b4cec38h","sourceField":{"relations":["8a160970g7bc98fg47e8"],"id":"f0b3b8efcb6075d5f2f4","name":"tag","tableName":"tag","length":0,"pk":false,"nn":false,"type":"","default":null},"targetField":{"relations":["8a160970g7bc98fg47e8"],"id":"ed7g5c250c79b4cec38h","name":"post","tableName":"post","length":0,"pk":false,"nn":false,"type":"","default":null},"targetRelatedFieldId":"3c499a3h931g25bb962h","tableName":"post_tag","sourceRelatedFieldId":"83651995dhhhb8fb39a0"}]}',
    'zoom' => 1
);

return array(
    $f1
);