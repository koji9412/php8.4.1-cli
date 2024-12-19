<?php

class MyClass {
    public private(set) string $data = '秘密の情報'; // 型情報が必須

    public function internalSetData($value) {
        $this->data = $value;
    }
}

$instance = new MyClass();
echo $instance->data; // 秘密の情報
// $instance->data = '新しい情報'; // PHP Fatal error:  Uncaught Error: Cannot modify private(set) property MyClass::$data from global scope
$instance->internalSetData('新しい情報'); // 内部的な書き込みは可能
echo $instance->data; // 新しい情報
