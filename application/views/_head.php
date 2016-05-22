<title>Justin Challenger | Home</title>

<?php
if(isset($php_to_js)){
    echo "<script>\n";
    echo "// Following are variables passed from PHP to JS";
    foreach($php_to_js as $key => $val){
        echo "var " . $key . " = " . json_encode($val) . ";\n";
    }
    echo "</script>";
}

echo script_tag( 'https://code.jquery.com/jquery-1.12.4.min.js');

echo script_tag( 'third_party/bootstrap/js/bootstrap.js');
echo link_tag(   'third_party/bootstrap/css/bootstrap.css');

echo link_tag(   'css/custom.css');
