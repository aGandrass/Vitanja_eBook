<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newlead;
use Newsletter;

class LeadController extends Controller
{
    public function store(Request $request)
    {
      $request = Newlead::create([
        'leadName' => request('formName'),
        'leadMail' => request('formMail'),
        'gdprConfirm' => request('formGDPR'),
      ]);

      Newsletter::subscribe(request('formMail'), ['FNAME' => request('formName')], 'subscribers');

      return redirect('/thankyou');
    }
}
