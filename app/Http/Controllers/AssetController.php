<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;
use Flash;
use App\Asset;

class AssetController extends Controller
{

    public function deactivateAsset($id)
    {
        $asset = Asset::find($id);
        if ($asset) {
            $asset->status = Asset::DEACTIVE;
            $asset->save();
            Flash::error('Asset Successfully Deactivated');
            return redirect()->back();
        } else {
            Flash::error('Whoops! Something Went Wrong.');
            return redirect()->back();
        }
    }
    public function activateAsset($id)
    {
        $asset = Asset::find($id);
        if ($asset) {
            $asset->status = Asset::ACTIVE;
            $asset->save();
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
        $userRoleId = Auth::user()->role_id;
        $assets = Asset::get();
        switch ($userRoleId) {
            case '1':
                return view('pages.admin.asset.index')->with('assets',$assets);
                break;
            case '2':
                return view('pages.asset-manager.asset.index')->with('assets',$assets);
                break;
            case '3':
                return view('pages.admin.asset.index')->with('assets',$assets);
                break;
            case '4':
                return view('pages.admin.asset.index')->with('assets',$assets);
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
        $assets = Asset::get();
        switch ($userRoleId) {
            case '1':
                return view('pages.admin.asset.create')->with('assets',$assets);
                break;
            case '2':
                return view('pages.asset-manager.asset.create')->with('assets',$assets);
                break;
            case '3':
                return view('pages.admin.asset.create')->with('assets',$assets);
                break;
            case '4':
                return view('pages.admin.asset.create')->with('assets',$assets);
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

        $validator = validator::make($input, Asset::$rule);
        if ($validator->passes()) {
            $assetData = array(
                'name' => $input['name'],
                'description' => $input['description'],
                'part_no' => $input['part_no'],
                'vendor_name' => $input['vendor_name'],
                'quantity' => $input['quantity'],
                'type' => $input['type'],
                'supplier_name' => $input['supplier_name'],
                'bill_no' => $input['bill_no'],
                'amount' => $input['amount'],
                'date_of_purchase' => $input['date_of_purchase'],
                'warranty_period' => $input['warranty_period'],
                'customer_care_numbers' => $input['customer_care_numbers'],
                'customer_care_email' => $input['customer_care_email'],
                'vendor_website_support' => $input['vendor_website_support'],
                'date_of_end_of_warranty' => $input['date_of_end_of_warranty'],
                'status' => true,
            );

            $asset = new Asset();
            $asset->fill($assetData);
            $asset->save();
            Flash::success('Asset Successfully Added..');
            return redirect()->back();
        } else{
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
        //
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
        //
    }
}
