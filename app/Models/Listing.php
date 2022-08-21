<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                      Arcu felis bibendum ut tristique et egestas quis ipsum suspendisse.
                                      Ullamcorper sit amet risus nullam eget felis. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget.
                                      Auctor eu augue ut lectus arcu. Habitant morbi tristique senectus et netus et malesuada fames ac.'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'something else'
                ]
            ];
        }

        public static function find($id) {
            $listings = self::all();

            foreach($listings as $listing) {
                if($listing['id'] == $id) {
                    return $listing;
                }
            }
        }
    }