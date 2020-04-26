<?php
/**
*Trigger this file on plugin uninstall
* @package dave-plugin
*/

namespace inc\Api\Callbacks;

use inc\Base\BaseController;


class ManagerCallbacks extends BaseController{

    public function checkboxSanitize( $input ){
        
        $output = array();

        foreach( $this->managers as $key => $value){
            $output[$key] = (isset($input[$key]) ? true : false);
        }
        
        return $output;
         
    }	

    public function adminSectionManager(){
        echo 'Activate and deactivate woocommerce checkout fileds at will. Enjoy!';

    }
    

    public function checkboxFields( $args ){
        $name = $args['label_for'];
        $classes = $args['class']; 
        $option_name = $args['option_name'];
        $checkbox = get_option( $option_name );

            //var_dump($checkbox );

        $checked = isset($checkbox[$name]) ? ($checkbox[$name] ? true : false) : false;

        echo '<div class="'. $classes.'"><input type ="checkbox" id="'. $name . '" name="'. $option_name.'['. $name . ']" value = "1" class="' .  $classes . '" '. ( $checked ? 'checked' : '') . '><label for="' . $name.'"><div</div></label></div>';
        
    }
}