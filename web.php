<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home',["title" => "Home", "kategori" => "1"]);
});

Route::get('/data', function () {

$artikel = [

    [
            "judul" => "Robert Downey Jr",
            "author" => "Raymond",
            "kategori" => "1",
            "isi" => "Robert Downey Jr. has evolved into one of the most respected actors in Hollywood. With an amazing list of credits to his name, he has managed to stay new and fresh even after over four decades in the business.
            Downey was born April 4, 1965 in Manhattan, New York, the son of writer, director and filmographer Robert Downey Sr. "



    ],

    [
        "judul" => "Iron Man",
        "author" => "Raymond",
        "kategori" => "2",
        "isi" => "Genius inventor Tony Stark continued his father Howard Stark’s weaponry business after his parents’ untimely deaths and flew it to even greater heights of innovation. While in Afghanistan to demonstrate a new missile for the U.S. military, Stark’s convoy came under fire by a terrorist group known as the Ten Rings and he was severely wounded. Taken prisoner by the group, Stark awoke in their headquarters to learn that shrapnel near his heart had nearly cost him his life, but swift action by scientist and fellow prisoner Ho Yinsen—who had inserted a powerful electromagnet in Stark’s chest—would prolong it temporarily."

]
    ];

    return view('data',["title" => "Data","artikel"=> $artikel])  ;
});
