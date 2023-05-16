<?php

function redirect($page = FALSE, $message = NULL, $message_type = NULL)
{
    if(is_string($page))
    {
        // use $page as is
        $location = $page;
    }
    else{
        // get current script name
        $location = $_SERVER['SCRIPT_NAME'];
    }
    
    //CHECK FOR MESSAGE
    if($message != NULL)
    {
        //SET MESSAGE
        $_SESSION['message'] = $message;
    }

    //CHECK FOR TYPE
    if($message_type != NULL)
    {
        //SET MESSAGE TYPE
        $_SESSION['message_type'] = $message_type;
    }

    //REDIRECT
    header("Location: " . $location);
    exit;
}

//DISPLAY MESSAGE
function displayMessage()
{
    if(!empty($_SESSION['message']))
    {
        //ASSIGN MESSAGE VAR
        $message = $_SESSION['message'];

        //ASSIGN TYPE VAR
        $message_type = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : '';

        //CREATE OUTPUT
        if($message_type == 'error')
        {
            echo '<div class="alert alert-danger">' . $message . '</div>';
        }else{
            echo '<div class="alert alert-success">' . $message . '</div>';
        }

        //CLEAR MESSAGE AND MESSAGE_TYPE SESSION VARIABLES
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    }
}