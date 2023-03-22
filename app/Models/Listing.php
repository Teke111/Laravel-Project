<?php

namespace App\Models;

class Listing
{
    //FUNCTION TO LIST ALL THE LISTINGS
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => "It is a long established fact that a reader will be distracted by the 
                readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                 distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                  their default model text, and a search for 'lorem ipsum' will 
                 uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, 
                sometimes on purpose (injected humour and the like)."
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => "It is a long established fact that a reader will be distracted by the 
                readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                 distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                  their default model text, and a search for 'lorem ipsum' will 
                 uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, 
                sometimes on purpose (injected humour and the like)."
            ]
        ];
    }

    //FUNCTION TO GET A SINGLE LISTING BY USING AN ID
    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}