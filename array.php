<?php

$artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk pemula",
        "penulis" =>"Digital Talent"
    ],
    [
        "judul" => "Belajar PHP dari nol",
        "penulis" =>"Digital Talent"
    ],
    [
        "judul" => "buat aplikasi web dengan PHP dari nol",
        "penulis" =>"Digital Talent"
    ]
    ];

    foreach($artikel as $post){
        echo "<h2>".$post["judul"]."</h2>";
        echo "<h2>".$post["penulis"]."</h2>";
        echo "<hr>";
    }