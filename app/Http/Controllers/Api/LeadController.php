<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $success = true;
        $validator = Validator::make(
            $data,
            [
                'name' => 'required|min:2|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|min:5'
            ],
            [
                'name.required' => 'il nome è un campo obbligatorio',
                'name.min' => 'il nome deve avere minimo :min caratteri',
                'name.max' => 'il nome deve avere minimo :max caratteri',
                'email.required' => 'l\'email è un campo obbligatorio',
                'email.email' => 'l\'email non è formattata correttamente',
                'email.max' => 'l\'email deve avere minimo :max caratteri',
                'message.required' => 'il nome è un campo obbligatorio',
                'message.min' => 'il messaggio deve avere minimo :min caratteri'
            ]
        );

        if ($validator->fails()) {
            $success = false;
            $errors = $validator->errors();
            return response()->json(compact('success', 'errors'));
        }

        $new_lead = new Lead();
        $new_lead->fill($data);
        $new_lead->save();

        Mail::to('info@example.com')->send(new NewContact($new_lead));


        return response()->json(compact('success'));
    }
}
