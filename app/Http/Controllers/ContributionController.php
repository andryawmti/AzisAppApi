<?php

namespace App\Http\Controllers;

use App\Contribution;
use App\Destination;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crepo = new Contribution();
        $contributions = $crepo->getContributions();
        return view('contribution.index')->with(['contributions' => $contributions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $destination = Destination::find($id);
        return view('contribution.edit')->with(['destination' => $destination]);
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
        $destination = Destination::find($id);
        $destination->title = $request->input('title');
        $destination->latitude = $request->input('latitude');
        $destination->longitude = $request->input('longitude');
        $destination->description = $request->input('description');
        if ($request->hasFile('picture')) {
            $path = Storage::putFile('public/images/destination', $request->file('picture'));
            $url = Storage::url($path);
            $destination->picture = $url;
        }

        $error = "false";
        $message = "Contribution successfully updated";
        $title = "Updated!";
        try {
            $destination->save();
        } catch (\Exception $e) {
            $error = $e->getMessage();
            $title = "Error!";
        }
        return redirect()->route('contribution.edit', ['destination' => $destination->id])
            ->with(['error' => $error, 'title' => $title, 'message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contribution = Contribution::find($id);
        $destination = Destination::find($contribution->destination_id);
        $error = "false";
        $message = "Contribution successfully deleted";
        $title = "Deleted!";
        try {
            $destination->delete();
            $contribution->delete();
        } catch (\Exception $e) {
            $error = $e->getMessage();
            $title = "Error!";
        }
        return redirect()->route('contribution.index')
            ->with(['error' => $error, 'title' => $title, 'message' => $message]);
    }

    public function approve($id)
    {
        $contribution = Contribution::find($id);
        $contribution->status = "approved";
        $contribution->updated_at = date("Y-m-d H:i:s");
        $error = "false";
        $message = "Contribution successfully approved";
        $title = "Aproved!";
        try {
            $contribution->save();
        } catch (\Exception $e) {
            $error = $e->getMessage();
            $title = "Error!";
        }
        return redirect()->route('contribution.index')
            ->with(['error' => $error, 'title' => $title, 'message' => $message]);
    }

    public function disapprove($id)
    {
        $contribution = Contribution::find($id);
        $contribution->status = "disapproved";
        $contribution->updated_at = date("Y-m-d H:i:s");
        $error = "false";
        $message = "Contribution successfully Disapproved";
        $title = "Disapproved!";
        try {
            $contribution->save();
        } catch (\Exception $e) {
            $error = $e->getMessage();
            $title = "Error!";
        }
        return redirect()->route('contribution.index')
            ->with(['error' => $error, 'title' => $title, 'message' => $message]);
    }
}
