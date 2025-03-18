<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Case2Controller extends Controller
{
    public function index()
    {
        return view('menu.case2');
    }

    public function checkCharacterMatch(Request $request)
    {
        $request->validate([
            'input1' => 'required|string',
            'input2' => 'required|string',
        ]);

        $input1 = strtoupper($request->input('input1'));
        $input2 = strtoupper($request->input('input2'));

        $lengthInput1 = strlen($input1);
        if ($lengthInput1 === 0) {
            return back()->with('percentage', 0);
        }

        
        $uniqueCharsInput2 = array_unique(str_split($input2));

        $matchCount = 0;
        $checkedChars = []; 

        for ($i = 0; $i < $lengthInput1; $i++) {
            $char = $input1[$i];

            
            if (!in_array($char, $checkedChars) && in_array($char, $uniqueCharsInput2)) {
                $matchCount++;
                $checkedChars[] = $char; 
            }
        }

        $percentage = ($matchCount / $lengthInput1) * 100;

        return back()->with('percentage', round($percentage, 2));
    }
}
