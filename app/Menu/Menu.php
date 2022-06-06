<?php

namespace App\Menu;

interface IMenu
{
    public function render();
}



class Category_Item implements IMenu
{
    private $text;
    private $url;
    private $class;
    
    public function __construct($text, $url, $class)
    {
        $this->text = $text;
        $this->url = $url;
        $this->class = $class;
    }
    
    public function render()
    {
        return '<a href="'.$this->url.'" class ="'.$this->class.'">'.$this->text.'</a>';
    }
}


class Menu implements IMenu
{
    private $items = [];
    
    private $text;
    private $url;
    private $class;
    private $class_li;
    private $class_ul;
    
    public function __construct($text = null,$url = null,  $class_ul, $class_li , $class)
    {
        $this->text = $text;
        $this->url = $url;
        $this->class = $class;
        $this->class_li = $class_li;
        $this->class_ul = $class_ul;
    }
    
    public function addChildren(IMenu $item)
    {
        array_push($this->items, $item);
    }
    
    public function render()
    {    
        $html = "";
        
        if($this->text && $this->url) {
            $html .= '<a href="'.$this->url.'" class ="'.$this->class.'">'.$this->text.'</a>';
        }
    
        $html .= '<ul class="'.$this->class_ul.'">';
        
        foreach($this->items as $item) {
            $html .= '<li class="'.$this->class_li.'">' . $item->render() . '</li>';
        }
        
        $html .= "</ul>";
        
        return $html;
    }
    
    public function getItems()
    {
        return $this->items;
    }
}