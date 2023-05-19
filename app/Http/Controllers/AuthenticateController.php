<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $method_no = 0;

    public function index()
    {
       // echo "Hello From " . get_class_methods($this)[$this->method_no = 0];

        return view('userdashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Hello From  " . get_class_methods($this)[$this->method_no = 1];
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "Hello From " . get_class_methods($this)[$this->method_no = 2];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "Hello From " . get_class_methods($this)[$this->method_no = 3];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "Hello From " . get_class_methods($this)[$this->method_no = 4];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "Hello From " . get_class_methods($this)[$this->method_no = 5];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "Hello From " . get_class_methods($this)[$this->method_no = 6];
    }
}
