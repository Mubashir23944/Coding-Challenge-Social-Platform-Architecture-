<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use App\Models\User;
use App\Models\Connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Matcher\Not;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $loggedInUser =  auth()->user()->id;

        return view('home', [ // Returning Home Blade with Default Data
            'suggestions' => User::getSuggestions(auth()->user()->id),
            'sentrequests' => ModelsRequest::sent()->get(),
            'recievedrequests' => ModelsRequest::received()->get(),
            'connections' => auth()->user()->getAllConnections(),
        ]);
    }

    // Post Send Connection Request
    public function sendRequest(Request $request)
    {
        ModelsRequest::createConnectionRequest($request->all()); //Request Modal Function For Creating New Connection Request
        return view('components.skeleton'); // Returning Loader View to Provide Feedback to User
    }

    // Get Suggestions Blade
    public function getSuggestions()
    {
        return view('components.suggestion', [ // Returning Suggestion Blade
            'suggestions' => User::getSuggestions(auth()->user()->id),
        ]);
    }

    // Get Requests Blade
    public function getRequests($mode)
    {
        return view('components.request', [ //Returning Request Blade
            'requests' => $mode == 'sent' ? ModelsRequest::sent()->paginate(10) : ModelsRequest::received()->paginate(10),
            'mode' => $mode,
        ]);
    }

    // Post Delete Sent Request
    public function deleteRequest(Request $request)
    {
        ModelsRequest::deleteConnectionRequest($request->all()); //Request Modal Function For Deleting Request
        return view('components.skeleton'); // Returning Loader View to Provide Feedback to User
    }

    // Post Accept Request
    public function acceptRequest(Request $request)
    {
        $payload = [ // Payload created due to change in database column name
            'connection_1' => $request->sender_id,
            'connection_2' => $request->receiver_id,
        ];
        ModelsRequest::deleteConnectionRequest($request->all()); //Request Modal Function For Deleting Request
        Connection::acceptConnectionRequest($payload); //Coonection Modal Function For Accepting Request
        return view('components.skeleton'); // Returning Loader View to Provide Feedback to User
    }

    // Get Connections Blade
    public function getConnections()
    {
        return view('components.connection', [
            'connections' => auth()->user()->getAllConnections(), //Returning Connections Blade
        ]);
    }

    // Remove Connection
    public function removeConnection(Connection $connection) //Connection Object as Param
    {
        $connection->delete(); // Connection removed
        return view('components.skeleton'); // Returning Loader View to Provide Feedback to User
    }
}
