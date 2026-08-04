<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function add()
    {
        return 'Student Added';
    }
    function update()
    {
        return 'Student Updated';
    }

    function show()
    {
        return 'list of students';
    }
    function about($name)
    {
        return $name;
    }
    function delete()
    {
        return 'Student Deleted';
    }
}
