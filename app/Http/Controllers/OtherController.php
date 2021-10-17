<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OtherController extends Controller
{
    public function loans(){
        return view('users.loans');
    }
    public function loans_process($loan_type){
        // dd($loan_type);
        $fconfig = array("personal_loan" => "Personal Loans", "car_loan" => "Car Loans", "house_loan" => "House Loans","student_loan" => "Student Loans", "salary_loan" => "Salary Loans", "business_loan" => "Business Loans");
        $loan_type = $fconfig[$loan_type];
        return view('users.loan_application_process', compact('loan_type'));
    }

    public function card(){
        return view('users.card');
    }

    public function card_process($card_type){
        // dd($loan_type);
        $fconfig = array("cheques" => "cheques", "credit_cards" => "credit cards", "virtual_cards" => "virtual cards");
        $card_type = $fconfig[$card_type];

        return view('users.card_application_process', compact('card_type'));
    }

    public function card_submit(Request $request){
        Alert::success('Request submitted successfully');
        return redirect()->back();
    }

    public function support(){
        return view('users.support');
    }

    public function support_save(Request $request){
        if($request->complaint == ""){
            Alert::error('Complaint field required');
            return redirect()->back(); 
        }
        Alert::success('Request submitted successfully');
        return redirect()->back();
    }

}
