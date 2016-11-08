<?php
namespace lib\view\html;

/**
 * Represents name value pair of attribute for HTML elements
 * 
 * @author Zilvinas Vaira
 *
 */
class Attribute implements HtmlElement{
    
    /**
     * 
     * @var string
     */
    private $name;
    
    /**
     * 
     * @var string
     */
    private $value;
    
    /**
     * 
     * @param string $name
     * @param string $value
     */
    public function __construct($name, $value){
        $this->name = str_replace('"', '', $name);
        $this->value = str_replace('"', '', $value);
    }
    
    public function __toString(){
        if(!empty($this->name) && !empty($this->value)){
            return ' ' . $this->name . '="' . $this->value . '"';
        }else{
            return '';
        }
    }
}
