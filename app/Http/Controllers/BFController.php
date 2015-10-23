<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Badcow\LoremIpsum\Generator;
use \Faker\Factory;

class BFController extends Controller {


    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to GET /books
    */
    public function getTextResults(Request $request) {
        $pnum = $request->input('pnum');
        $generator = new Generator();
        $paragraphs = $generator->getParagraphs($pnum);

        return view('text.results')->with(['paragraphs' => $paragraphs]);

    }

    /**
     * Responds to requests to GET /users/results
     */
    public function getUsersResults(Request $request) {
        $unum = $request->input('unum');
        $faker = Factory::create();
        $users = array();
        $seed = rand(0,5000);
        For ($j = 0; $j < $unum; $j++) {
          $user['name'] = $faker->name('female');
          $bdt = $faker->dateTimeBetween($startDate = '-100 years', $endDate = '-50 years');
          $user['dob'] = date_format($bdt, 'Y-m-d');
          //$arr = explode(" ", $bdt, 2);

          $users[$j] = $user;
        }
        return view('users.results')->with(['users' => $users]);
    }

    
}
