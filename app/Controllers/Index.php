<?php

// Set the path
namespace App\Controllers;

class Index extends BaseController{
    public function index(){
        $data['title'] = "Welcome to my Blog";

        return view('include\header', $data)
            .view('index_view')
            .view('include\footer');
    }

    public function about(){
        $data['title'] = "About My blog";

        return view('include\header', $data)
            .view('about_view')
            .view('include\footer');
    }

    public function pia(){
        $data['title'] = "About Pia";

        return view('include\header', $data)
            .view('pia_view')
            .view('include\footer');
    }

    public function laine(){
        $data['title'] = "About Laine";

        return view('include\header', $data)
            .view('laine_view')
            .view('include\footer');
    }

    public function lance(){
        $data['title'] = "About Lance";

        return view('include\header', $data)
            .view('lance_view')
            .view('include\footer');
    }

    public function jm(){
        $data['title'] = "About Jm";

        return view('include\header', $data)
            .view('jm_view')
            .view('include\footer');
    }

    public function showData($name="Cute", $age=19){
        echo "Hello, $name.<br>";
        echo "You are $age years old.<br>";
    }
}

?>