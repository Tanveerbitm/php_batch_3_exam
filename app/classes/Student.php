<?php


namespace App\classes;
use App\classes\Data;


class Student extends Data
{
    public function getAllStudent($searchKey='')
    {
        if($searchKey===''){
        return $this->data;}
        else{
            return array_filter($this->data,function($element) use($searchKey){
            if($element['name'] === $searchKey){
                return $element;
            }
            });
        }

    }
}