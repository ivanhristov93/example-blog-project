<?php
function inputValidation($name, $validation, $list, $defaultValue = null){
    if( isset($list[$name]) )
    {
        if( $validation == "int"){
            $value = $list[$name]*1;
            if($value > 0 )
            {
                return $value;
            }
        }
        else if( $validation == "str" )
        {
            $value = strip_tags(trim($list[$name]));
            return $value;
        }
    }
    return $defaultValue;

}

function inputGet($name, $validation, $defaultValue = null)
{
    return inputValidation($name, $validation, $_GET, $defaultValue);
}

function inputPost($name, $validation, $defaultValue = null)
{
    return inputValidation($name, $validation, $_POST, $defaultValue);
}