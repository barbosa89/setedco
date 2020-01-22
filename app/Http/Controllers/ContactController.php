<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Send a email to owner blog.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:80',
            'email' => 'required|email:rfc,strict,dns,spoof,filter',
            'phone' => 'required|string|max:10',
            'message' => 'required|string|max:255',
            'g-recaptcha-response' => 'recaptcha'
	    ]);

        if ($validator->fails()) {
            flash()->overlay('Verifica la información suministrada', 'Error');

            return redirect('/#contact');
        }

        Mail::to($request->email)
            ->send(new ContactMessage($request));

        if (count(Mail::failures()) > 0) {
            flash()->overlay('Error al enviar copia de comunicación', 'Error');

            return redirect('/#contact');
        } else {
            Mail::to('asimanca@seted.co')
                ->cc('jcamargo@seted.co')
                ->send(new ContactMessage($request));

            if (count(Mail::failures()) > 0) {
                flash()->overlay('El mensaje no fue enviado', 'Error');

                return redirect('/#contact');
            }

            flash()->overlay('El mensaje fue enviado', 'Error');

            return redirect('/#contact');
        }

        flash()->overlay('Un error ha ocurrido, intenta más tarde', 'Error');

        return redirect('/#contact');
    }
}
