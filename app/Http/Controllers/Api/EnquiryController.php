<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Laravue\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\ResourceResponse;

use App\Mail\ContactUsMail;
use App\Mail\GetQuoteMail;
use App\User;

use Config;
use Validator;
use Mail;

use App\Http\Models\Enquiry;
use App\Http\Models\PackageEnquiry;

class EnquiryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $enquiries = new Enquiry;
        $limit = $request->get('limit') !== null ? $request->get('limit') : '20';
        $enquiries = $enquiries->orderBy('id', 'desc')->paginate($limit);
        return response(['success' => true, 'data' => $enquiries], 200);
    }

    public function list(Request $request){
        $enquiries = Enquiry::with(['property'])
        ->orderBy('id', 'desc')
        ->get();
        
        return response(['success' => true, 'data' => $enquiries], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            array_merge(
                $this->getValidationRules(),
                [
                'name' => 'required',
                'email' => 'required',
                ]
            )
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 403);
        } else {
            $params = $request->all();

            $name = explode(' ', $params['name']);
            $params['first_name'] = $name[0];
            $params['last_name'] = isset($name[1])?$name[1]:'';

            if(isset($params['property_id'])){
                $params['type'] = 'property';
            }else{
                $params['type'] = 'contact';
            }

            $enquiry = Enquiry::create($params);
            $enquiry->save();

            $this->sendEmail($enquiry->id);

            return response(['success' => true, 'message' => 'Your enquiry has been saved.', 'data' => new ResourceResponse($enquiry)], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Enquiry $enquiry
     * @return EnquiryResource|\Illuminate\Http\JsonResponse
     */
    public function edit(Enquiry $enquiry)
    {
        if ($enquiry === null) {
            return response()->json(['success' => false, 'error' => 'Enquiry not found'], 404);
        }
        $property = Property::firstOrFail()->where('id', $id)->get();
        return response(['success' => true, 'data' => new ResourceResponse($enquiry)], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Enquiry    $enquiry
     * @return EnquiryResource|\Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        if ($enquiry === null) {
            return response()->json(['error' => 'Enquiry not found'], 404);
        }

        $validator = Validator::make($request->all(), $this->getValidationRules(false));
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 403);
        }
        else {
            $params = $request->all();

            $enquiry->name = $params['name'];
            // $enquiry->last_name = $params['last_name'];
            $enquiry->email = $params['email'];
            // $enquiry->phone = $params['phone'];
            $enquiry->content = $params['content'];
            $enquiry->subject = $params['subject'];
            $enquiry->status = $params['status'];
            $enquiry->save($request->all());
            
            return response()->json([
                'success' => true, 
                'data' => new ResourceResponse($enquiry)], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Enquiry $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiry $enquiry)
    {
        try {
            $enquiry->delete();
        } catch (\Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 403);
        }

        return response()->json(null, 204);
    }

    private function sendEmail($enquiry_id)
    {
        $enquiries = Enquiry::with(['property'])->where('id', '=', $enquiry_id)
        ->get()->toArray()[0];
        /** 
         * Store a receiver email address to a variable.
         */
        $receiverEmailAddress = "chavdamahesh@gmail.com";

        /**
         * Import the Mail class at the top of this page,
         * and call the to() method for passing the 
         * receiver email address.
         * 
         * Also, call the send() method to incloude the
         * HelloEmail class that contains the email template.
         */
        if(!empty($enquiries['property'])){
            $super_users = User::select(['firstname', 'lastname', 'email'])
            ->where('role', '=', 'super_user')
            ->get();

            $mailObject = new GetQuoteMail($enquiries);
            foreach($super_users as $key => $super_user){
                $name = $super_user->firstname.' '.$super_user->lastname;
                $this->_executeSend($super_user->email, $enquiry_id, $mailObject, $name);
            }
        }else{
            $name = '';
            $mailObject = new ContactUsMail($enquiries);
            $this->_executeSend($receiverEmailAddress, $enquiry_id, $mailObject, $name);
        }

        /**
         * Check if the email has been sent successfully, or not.
         * Return the appropriate message.
         */
        if (Mail::failures() != 0) {
            $data = ['message' => "Email has been sent successfully."];
            response(['success' => true, 'data' => $data], 200);
        }

        $data = ['error' => "Oops! error sending email."];
        response(['success' => true, 'data' => $data], 403);
    }

    private function _executeSend($receiverEmailAddress, $enquiry_id, $mailObject, $name){
        Mail::to($receiverEmailAddress, $name)->send($mailObject, [], 
            function ($message) use ($enquiry_id) {
            $message->getHeaders()
                ->addTextHeader('o:tracking', 'true')
                ->addTextHeader('o:tracking-clicks', 'true')
                ->addTextHeader('o:tracking-opens', 'true')
                ->addTextHeader('v:{"message_id": '.$enquiry_id.'}');
        });
    }

    /**
     * @param bool $isNew
     * @return array
     */
    private function getValidationRules($isNew = true)
    {
        return [
        ];
    }
}
