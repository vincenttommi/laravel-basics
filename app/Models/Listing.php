<?php 
namespace App\Models; // exporting class to another location

class Listing{


public static function all() {

return [

    [
        'id' => 1,
        'title' => 'Listing one',
        'description' => 'you can do it vincent come on',

    ],

    [
        'id' => 2,
        'title' => 'Listing two',
        'description' => 'programming is easy to learn',
    ],
];
}

//function that brings in single listing

public  static function find($id){


$listings =self::all();

foreach($listings as $listing){
if($listing['id']== $id){
 return $listing;   



}
}
}
}


