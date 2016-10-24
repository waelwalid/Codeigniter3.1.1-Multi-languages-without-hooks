<?php 

/** 
 * Name         : Language_control
 * Discription  : Created to make more controls of Multilanguage applications 
 * Date         : 23/10/2016
 * path         : /application/libraries/Language_control.php
 * Auther       : Wael walid
 */

class Language_control{
    
    public function __construct(){
        
         /** codeigniter super object */
         $this->CI =& get_instance();
         
         /** load session lib */
         $this->CI->load->library('session');
         
         /** load language helper */ 
         $this->CI->load->helper('language');
         
         /** Required files in all languages **/
         $files = array('myfile_lang');
         
         /** Set Defualt language */
         if(!isset($this->CI->session->get_userdata()['site_lang'])){
            $this->CI->session->set_userdata('site_lang', 'english');                    
         }
          
         if(!empty($files)){
           $this->CI->lang->load($files,$this->CI->session->get_userdata()['site_lang']); 
         }                                         
    }
}
?>