<?php

namespace v1;

class Say {

    function hello($to='world') {    	
        return "Hello v1 $to!";
        function other(){
        	return "Hello v1 other $to!";
        }
    }
    function hi($to) {
        return  "Hi v1 $to!";
    }
}
