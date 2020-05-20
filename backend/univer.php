<?php

    $groups   = ['914-13', '941-18', '942-18'];

    $students = [
        ['group' => '914-13', 'name' => 'Mengliyev Umid', 'phone' => '998904567898'],
        ['group' => '914-13', 'name' => 'Zaripov Usmon', 'phone' => '998904565952'],

        ['group' => '941-18', 'name' => 'Nozimov Shaxriyor', 'phone' => '998901263298'],
        ['group' => '941-18', 'name' => 'Azimov Umid', 'phone' => '998904563678'],
        ['group' => '941-18', 'name' => 'Akbarov Shoxrux', 'phone' => '9989045612398'],
    ];

    if ($_GET['group_list']) {
        echo json_encode($groups);
    }

    if ($_GET['group_name']) {
        $response = [];
        foreach ($students as $student) {
            if ($student['group'] == $_GET['group_name']) 
                $response[] = $student;
        }

        echo json_encode($response);
    }