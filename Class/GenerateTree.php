<?php

class GenerateTree extends ApiController
{
        //index.php
       public function  buildTree($array) {
           $output = ' <ul>';
            foreach ($array as $key => $element){
                $output .= "<li id=".$key.">" . $element['category_name'] . $this->buildTree($element['childrens']) . '</li>';
            }
           $output .= '</ul>';
           return $output;
        }
        //List.php
       public function buildTreeList($array) {
        foreach ($array as $key => $element){
            echo $element['category_name'] . $this->buildTreeList($element['childrens']);
        }
    }
}