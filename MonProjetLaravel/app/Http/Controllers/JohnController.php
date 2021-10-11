<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JohnController extends Controller
{
private array $users = [
        [
            "name" => "Piette",
            "firstname" => "Johnny"
        ],
        [
            "name" => "Piette",
            "firstname" => "Gabriel"
        ],
        [
            "name" => "Dupont",
            "firstname" => "Philip"
        ],
        [
            "name" => "Colin",
            "firstname" => "Stéphane"
        ],
        [
            "name" => "Jacques",
            "firstname" => "Véronique"
        ],
        [
            "name" => "Larock",
            "firstname" => "Jacques"
        ]
    ];

    public function hi($name)
    {
        return view("Hi", ['name' => $name]);
    }

    public function getUsersList()
    {
        return view('results', ['users' => $this->users]);
    }

    public function getUsersByName($name)
    {
        $array = $this->Search('name', $name);
        return view('results', ['users' => $array]);
    }

    public function getUsersByFirstname($firstname)
    {
        return view('results', ['users' => $this->Search('firstname', $firstname)]);
    }

    public function getUsersBySomething($thing)
    {
        $arrayNames = $this->Search('name', $thing);
        $arrayFirstNames = $this->Search('firstname', $thing);
        $array = array_merge($arrayNames, $arrayFirstNames);
        return view('results', ['users' => $array]);
    }

    private function search($champ, $valeur): array
    {
        $array = [];
        foreach ($this->users as $user) {
            if (strtolower($user[$champ]) === strtolower($valeur)) {
                array_push($array, $user);
            }
        }
        return $array;
    }
}
