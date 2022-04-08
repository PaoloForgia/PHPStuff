<?php

class Form
{
    public string $name;
    public string $action;
    public string $method;

    public function __construct(string $name, string $action = '?', string $method = 'POST')
    {
        $this->name = $name;
        $this->action = $action;
        $this->method = $method;
    }

    public function openForm()
    {
        echo "<form action='$this->action' name='$this->name' method='$this->method'>";
    }

    public function addInput($name, $type = "text", $className = null, $value = null)
    {
        echo "<input type='$type' id='$name' name='$name' value='$value' placeholder='$name' class='$className' />";
    }

    public function addTextArea($name, $rows, $cols, $className = null, $value = null)
    {
        echo "<textarea id='$name' name='$name' rows='$rows' cols='$cols' class='$className' placeholder='$name'>$value</textarea>";
    }

    public function addSubmit($label, $className = null)
    {
        echo $this->addInput(null, "submit", $className, $label);
    }

    public function addSelect($name, $data)
    {
        echo "<select id='$name' name='$name'>";

        foreach ($data as $value => $label) {
            echo "<option value='$value'>$label</option>";
        }

        echo "</select>";
    }

    public function closeForm()
    {
        echo '</form>';
    }

    public static function GET($value)
    {
        return filter_input(INPUT_GET, $value, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    public static function POST($value)
    {
        return filter_input(INPUT_POST, $value, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
