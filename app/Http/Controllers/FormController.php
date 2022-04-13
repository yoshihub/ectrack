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

        $messages = [
            'name.required' => '名前は入力して下さい',
            'title.required' => '件名は入力して下さい',
            'body.required' => '問い合わせ内容は入力して下さい',
            'name.string' => '文字で入力して下さい',
            'title.string' => '文字で入力して下さい',
            'body.string' => '文字で入力して下さい',
        ];

        $validate = [
            'name' => 'required|string',
            'title' => 'required|string',
            'body' => 'required|string',
        ];




        $input = $request->only($this->formItems);

        $validator = Validator::make($input, $validate, $messages);


        if ($validator->fails()) {
            return redirect()->action('FormController@show')
                ->withInput()->withErrors($validator);
        }


        $request->session()->put('form_input', $input);

        return redirect()->action('FormController@confirm');
    }

    public function confirm(Request $request)
    {
        $input = $request->session()->get('form_input');

        if (!$input) {
            return redirect()->action('FormController@show');
        }

        return view('form.confirm', ['input' => $input]);
    }

    public function send(Request $request)
    {
        $input = $request->session()->get('form_input');

        if (!$input) {
            return redirect()->action('FormController@show');
        }

        $request->session()->forget('form_input');

        return redirect()->action('FormController@complete');
    }

    public function complete()
    {
        return view('form.complete');
    }
}