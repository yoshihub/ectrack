<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;

use Illuminate\Support\Facades\Validator;


class FormController extends Controller
{
    private $formItems = ['name', 'title', 'body'];


    public function show()
    {

        return view('form.show');
    }

    public function post(Request $request)
    {

        $validate = [
            'name' => 'required|string|max:20',
            'title' => 'required|string|max:20',
            'body' => 'required|string|max:100',
        ];


        $validator = Validator::make($request->all(), $validate);


        if ($validator->fails()) {
            return redirect()->action('App\Http\Controllers\FormController@show')
                ->withInput()->withErrors($validator);
        }


        $request->session()->put('form_input', $input);

        return redirect()->action('App\Http\Controllers\FormController@confirm');
    }

    public function confirm(Request $request)
    {
        $input = $request->session()->get('form_input');

        if (!$input) {
            return redirect()->action('App\Http\Controllers\FormController@show');
        }

        return view('form.confirm', ['input' => $input]);
    }

    public function send(Request $request)
    {
        $input = $request->session()->get('form_input');

        if (!$input) {
            return redirect()->action('App\Http\Controllers\FormController@show');
        }

        $request->session()->forget('form_input');

        return redirect()->action('App\Http\Controllers\FormController@complete');
    }

    public function complete()
    {
        return view('form.complete');
    }
}
