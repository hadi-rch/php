<?php 
// function sayhello($name){
//     echo "Hello $name" . PHP_EOL;
// }

//default parameter value
function sayhello($name= "Anonymous"){
    echo "Hello $name" . PHP_EOL;
}

sayhello();

sayhello("hadi");