<?php
if( !function_exists('script_tag')){
    function script_tag($src, $language = 'javascript', $type = 'text/javascript'){
        $CI =& get_instance();
        if(is_array($src)){
            $script = "";
            foreach ($src as $key => $value) {
                $script .= script_tag($value, $language, $type);
            }
            return $script;
        }

        $script = '<script';

        if ( strpos($src, '://') !== FALSE) {
            $script .= ' src="'.$src.'" ';
        }
        else{
            $script .= ' src="'.$CI->config->slash_item('base_url').'public/'.$src.'" ';
        }

        $script .= " language='".$language."' type='".$type."' ></script>\n";
        return $script;
    }
}
else{
    echo "Warning! Cannot include script_tag helper: Function already exists";
}
if( !function_exists('link_tag')){
    /**
     * Generates a link tag
     * <link rel="stylesheet" type="text/css" media="screen" href="screen.css" />
     */
    function link_tag($src, $type = 'text/css', $media = "screen"){
        $CI =& get_instance();
        if(is_array($src)){
            $link = "";
            foreach ($src as $key => $value) {
                $link .= link_tag($value, $type, $media);
            }
            return $link;
        }

        $link = '<link rel="stylesheet"';

        if ( strpos($src, '://') !== FALSE) {
            $link .= ' href="'.$src.'" ';
        }
        else{
            $link .= ' href="'.$CI->config->slash_item('base_url').'public/'.$src.'" ';
        }

        $link .= " type='".$type."' media='".$media."'/>\n";
        return $link;

    }
}
else{
    echo "Warning! Cannot include link_tag helper: Function already exists";
}
