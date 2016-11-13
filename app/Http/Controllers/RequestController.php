<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Asset;
use App\RequestAsset;
use Validator;
use Flash;
use App\UserRegistration;

class RequestController extends Controller
{
    public function checkForNewRequest()
    {
        
    }
    public function deactivateRequest($id)
    {
        $request = RequestAsset::find($id);
        if ($request) {
            $request->status = RequestAsset::DEACTIVE;
            $request->save();
            Flash::error('RequestAsset Successfully Deactivated');
            return redirect()->back();
        } else {
            Flash::error('Whoops! Something Went Wrong.');
            return redirect()->back();
        }
    }
    public function activateRequest($id)
    {
        $request = RequestAsset::find($id);
        if ($request) {
            $request->status = RequestAsset::ACTIVE;
            $request->save();
            Flash::Success('Asset Successfully Activated');
            return redirect()->back();
        } else {
            Flash::error('Whoops! Something Went Wrong.');
            return redirect()->back();
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $userRoleId = $user->role_id;
        switch ($userRoleId) {
            case '1':
                $requests = RequestAsset::join('assets as asset', 'asset.id', '=', 'requests.asset_id')
                            ->join('user_registrations', 'user_registrations.user_id', '=', 'requests.requester_user_id')
                            // ->where('requester_user_id',$user->id)
                            ->select('requests.id','requests.date_to_be_allocated','requests.purpose','asset.name','user_registrations.first_name as requester','requests.status as status')
                            ->get();
                return view('pages.admin.request.index')->with('requests',$requests);
                break;
            case '2':
                return view('pages.asset-manager.request.index');
                break;
            case '3':
                return view('pages.admin.request.index');
                break;
            case '4':
                $requests = RequestAsset::join('assets as asset', 'asset.id', '=', 'requests.asset_id')
                            ->where('requester_user_id',$user->id)
                            ->select('requests.id','requests.date_to_be_allocated','requests.purpose','asset.name','requests.status as status')
                            ->get();
                return view('pages.user.request.index')->with('requests',$requests)->with('user',$user);
                break;
            default:
                # code...
                break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userRoleId = Auth::user()->role_id;
        $assets = Asset::lists('name','id')->toArray();
        switch ($userRoleId) {
            case '1':
                return view('pages.admin.request.create')->with('assets',$assets);
                break;
            case '2':
                return view('pages.asset-manager.request.create')->with('assets',$assets);
                break;
            case '3':
                return view('pages.dept-manager.request.create')->with('assets',$assets);
                break;
            case '4':
                return view('pages.user.request.create')->with('assets',$assets);
                break;
            default:
                # code...
                break;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $userId = Auth::user()->id;
        $requestData = array(
            'asset_id' => $input['asset_id'],
            'purpose' => $input['purpose'],
            'date_to_be_allocated' => $input['date_to_be_allocated'],
            'time_to_be_allocated' => $input['time_to_be_allocated'],
            'date_of_return' => $input['date_of_return'],
            'time_of_return' => $input['time_of_return']
        );
        // dd($requestData);
        $rule = [
            'asset_id' => 'required',
            'purpose' => 'required',
            'date_to_be_allocated' => 'required',
            'time_to_be_allocated' => 'required',
            'date_of_return' => 'required',
            'time_of_return' => 'required'
        ];

        $validator = validator::make($requestData, $rule);
        if ($validator->passes()) {

            //New Request object
            $request_data = new RequestAsset();
            $request_data->fill($input);
            $request_data->requester_user_id = $userId;
            $request_data->status = RequestAsset::PENDING;
            $request_data->save();
            Flash::success('User Successfully Added..');
            return redirect()->back();
        }else{
            Flash::error('Validation Failed');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $userRoleId = $user->role_id;
        switch ($userRoleId) {
            case '1':
                $request = RequestAsset::join('assets as asset', 'asset.id', '=', 'requests.asset_id')
                            ->join('user_registrations', 'user_registrations.user_id', '=', 'requests.requester_user_id')
                            ->where('requests.id',$id)
                            // ->where('requester_user_id',$user->id)
                            ->select('asset.name as asset_name', 'user_registrations.first_name as requester_name', 'requests.date_to_be_allocated', 'requests.time_to_be_allocated', 'requests.purpose', 'requests.date_of_return', 'requests.time_of_return')
                            // 'requests.id','requests.date_to_be_allocated','requests.purpose','asset.name','user_registrations.first_name as requester','requests.status as status')
                            ->first();
                return view('pages.admin.request.getRequest')->with('request',$request);
                break;
            case '2':
                return view('pages.asset-manager.request.index');
                break;
            case '3':
                return view('pages.admin.request.index');
                break;
            case '4':
                $requests = RequestAsset::join('assets as asset', 'asset.id', '=', 'requests.asset_id')
                            ->where('requester_user_id',$user->id)
                            ->select('requests.id','requests.date_to_be_allocated','requests.purpose','asset.name')
                            ->get();

                return view('pages.user.request.index')->with('requests',$requests)->with('user',$user);
                break;
            default:
                # code...
                break;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request = RequestAsset::find($id);
        if ($request) {
            $request->delete();
            Flash::success('Request Successfully Deleted');
            return redirect()->back();
        } else {
            Flash::error('Whoops! Something Went Wrong');
            return redirect()->back();
        }
    }
}
