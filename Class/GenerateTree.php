<?php

class GenerateTree extends ApiController
{
       public function buildTree($array) {
           $output = ' <ul>';
            foreach ($array as $key => $element){
                $output .= "<li id=".$key.">" . $element['category_name'] . $this->buildTree($element['childrens']) . '</li>';
            }
           $output .= '</ul>';
           return $output;
        }

       public function buildTreeList($array) {
        foreach ($array as $key => $element){
            echo $element['category_name'] . $this->buildTreeList($element['childrens']);
        }
    }
}