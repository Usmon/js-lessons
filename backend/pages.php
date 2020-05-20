<?php

    $page = $_GET['page'];

    if ($page == 'home') {
        include 'pages/home.html';
    }
    else if ($page == 'about') {
        include 'pages/about.html';
    }
    else if ($page == 'contact') {
        include 'pages/contact.html';
    }

    