<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\ScholarshipPage;
use App\Models\AboutPage;
use App\Models\TestimonialsPage;
use App\Models\ContactPage;
use App\Models\BlogPage;
use Illuminate\Http\Request;


class FrontEndPagesController extends Controller
{
    protected $response = '';
    protected $public_key;
    protected $secret_key;
    protected $payment_url;
    protected $verify_url;
    protected $currency;
    protected $txn_prefix;

    public function __construct()
    {
        $this->public_key = env('FLW_PUBLIC_KEY');
        $this->secret_key = env('FLW_SECRET_KEY');
        $this->payment_url = env('FLW_PAYMENT_ENDPOINT');
        $this->verify_url = env('FLW_VERIFY_ENDPOINT');
        $this->currency = env('FLW_CURRENCY');
        $this->txn_prefix = env('FLW_TXN_PREFIX');
    }


    public function homePage()
    {
        $homePageContent = HomePage::first();
        return view('home.frontend.index', compact('homePageContent'));
    }

    public function scholarshipPage()
    {
        $scholarshipPageContent = ScholarshipPage::first();
        return view('home.frontend.scholarships', compact('scholarshipPageContent'));
    }

    public function aboutPage()
    {
        $aboutPageContent = AboutPage::first();
        return view('home.frontend.about', compact('aboutPageContent'));
    }

    public function testimonialsPage()
    {
        $testimonialsPageContent = TestimonialsPage::first();
        return view('home.frontend.testimonials', compact('testimonialsPageContent'));
    }
    public function faqPage()
    {
        $frontPageContent = homePage::first();
        return view('home.frontend.faq', compact('frontPageContent'));
    }
    public function testimonialPage()
    {
        $testimonialsPageContent = TestimonialsPage::first();
        return view('home.frontend.testimonial', compact('testimonialsPageContent'));
    }
    public function contactPage()
    {
        $contactPageContent = ContactPage::first();
        return view('home.frontend.contact', compact('contactPageContent'));
    }
    public function blogPage()
    {
        $blogPageContent = BlogPage::first();
        return view('home.frontend.blog', compact('blogPageContent'));
    }
    public function landingPage()
    {
        $homePageContent = HomePage::first();
        return view('home.frontend.landing', compact('homePageContent'));
    }
    public function forgotPage()
    {
        $homePageContent = HomePage::first();
        return view('home.frontend.forgot', compact('homePageContent'));
    }

    //testing payment
    public function payformPage()
    {
        $contactPageContent = ContactPage::first();
        return view('home.frontend.payform', compact('contactPageContent'));
    }

    public function payFluter(Request $request)
    {
        $data = array(
			'amount'=> $request->amount, //$package_amount,
			'customer_email' => $request->email,
            ///'redirect_url' => '',
		);
        $data['redirect_url'] =  '';

		$this->response = $this->create_payment($data);

		if(!empty($this->response) || $this->response != ''){
			$this->response = json_decode($this->response, 1);
			if(isset($this->response['status']) && $this->response['status'] == 'success'){
				return redirect($this->response['data']['link']);
			}else{
                //redirect back if an error occurs
				$errormessage = 'an error occurred';
                return view('home.frontend.payment_status', compact('errormessage'));
			}
		}
        
        return view('home.frontend.payform', compact('contactPageContent'));
        
    }

    public function paymentStatus() {
		$params = $this->input->get();
		if(empty($params)){
			$data['status'] = 'error';
			$data['message'] = "No parameters found.";
            return view('home.frontend.payment_status', compact('data'));
			
		}elseif(isset($params['txref']) && !empty($params['txref'])){
			$response = $this->verify_transaction($params['txref']);
			if(!empty($response)){
				$response = json_decode($response,1);
				if($response['status'] == 'success' && isset($response['data']['chargecode']) && ( $response['data']['chargecode'] == '00' || $response['data']['chargecode'] == '0') ){
					$transaction_id = $response['data']['txref'];

					//$data['payment_plan']    = $response['data']['paymentplan'];
					$data['customer_email']         = $response['data']['custemail'];
					$data['txn_id']         = $transaction_id;
					$data['amount']    = $response['data']['amount'];
					$data['currency_code']  = $response['data']['currency'];
					$data['status']         = $response['data']['status'];
					$data['message']        = $response['message'];
					$data['full_data']      = $response;
					
					/* 
						Perform Database Operations here 
						Add your custom code here for any other operation like 
						selling good / inserting / update transaction record in database / anything else
							Or 
						to make payment system more secure you can make use of Webhook for one extra layer of security.  
					*/
					 
					return view('home.frontend.payment_status', compact('data'));
					
				}elseif( (isset($params['cancelled']) && $params['cancelled'] == true)){
					$data['status'] = 'cancelled';
					$data['message'] = 'Payment Cancelled by you or some other reasons. Try again!';
					$data['full_data']      = "No data found";

					
                    return view('home.frontend.payment_status', compact('data'));
				}elseif( $response['status'] == 'error'){
					$data['status'] = 'error';
					$data['message'] = $response['message'];
					$data['full_data']      = $response;
					
					return view('home.frontend.payment_status', compact('data'));
				}
			}else{
				$data['status'] = 'error';
				$data['message'] = "No data returned from ";
				
				return view('home.frontend.payment_status', compact('data'));
			}
		}
	}



   public function create_payment($data){ 
        $data['PBFPubKey'] = $this->public_key;
        $data['currency'] = $this->currency;
        $data['txref'] = (!empty($this->txn_prefix))?$this->txn_prefix.'-'.time().''.mt_rand() : time().''.mt_rand();
        $response = $this->curl_post($this->payment_url, $data,TRUE);
        return $response;
    }

    public function verify_transaction($reference){
        $data = array(
			"SECKEY" => $this->secret_key, 
			"txref" => $reference
		);
		$response = $this->curl_post($this->verify_url, $data,TRUE);
        return $response;
    }

    function curl_post($url, $data,$json_encode_data = FALSE){
        
        $data = ($json_encode_data)?json_encode($data):$data;
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
    		CURLOPT_URL => $url,
    		CURLOPT_RETURNTRANSFER => true,
    		CURLOPT_CUSTOMREQUEST => "POST",
    		CURLOPT_POSTFIELDS => $data,
    		CURLOPT_HTTPHEADER => [
    			"content-type: application/json",
    			"cache-control: no-cache"
    		],
    	));
    	$response = curl_exec($curl);
    	 
    	if($err = curl_error($curl)){
    	    curl_close($curl);
    	    return "CURL Error : ".$err;
    	}else{
        	curl_close($curl);
        	return $response;
        }
    }

    /*
    put them in env file 

    FLW_PUBLIC_KEY=FLWPUBK_TEST-b1011d14b61265e3aa7337d9c61cc398-X
    FLW_SECRET_KEY=FLWSECK_TEST-ea281d220be672c53e1f92cb33bcd644-X
    FLW_SECRET_HASH='TEST_SECRET_HASH'
    FLW_ENCRYPTION_KEY=FLWSECK_TESTa73485e43372
    FLW_PAYMENT_ENDPOINT=https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/v2/hosted/pay
    FLW_VERIFY_ENDPOINT=https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/v2/verify
    FLW_CURRENCY=UGX
    FLW_TXN_PREFIX=KODO
    */

    
}
