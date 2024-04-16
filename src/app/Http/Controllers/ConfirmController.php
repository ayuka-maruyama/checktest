<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmController extends Controller
{
        public function confirm(Request $request)
    {
        $first_name = $request->input('first-name');
        $last_name = $request->input('last-name');
        $full_name = $first_name . ' ' . $last_name;

        $gender = $request->input('gender');
        $genderText = '';
        if ($gender === '1' ) {
            $genderText = '男性';
        } elseif ($gender === '2' ) {
            $genderText = '女性';
        } elseif ($gender === '3' ) {
            $genderText = 'その他';
        }

        $left_tel = $request->input('left-tel');
        $middle_tel = $request->input('middle-tel');
        $right_tel = $request->input('right-tel');
        $full_tel = $left_tel . $middle_tel . $right_tel;
        
        $detail = $request->input('detail');

        $contact = $request->only(['email', 'address', 'building', 'content']);
        return view('confirm', compact('full_name', 'genderText', 'full_tel', 'contact', 'detail'));
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function correction()
    {
        return view('index');
    }

}
