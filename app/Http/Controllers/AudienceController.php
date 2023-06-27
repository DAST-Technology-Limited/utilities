<?php


namespace App\Http\Controllers;

use App\Models\Audience;
use Illuminate\Http\Request;

class AudienceController extends Controller
{
   
   
        public function index()
        {
            $audiences = Audience::all();
            return view('audiences.index', compact('audiences'));
        }
   

    public function create()
    {
        // Show the form to create a new audience entry
        return view('audiences.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'message' => 'required',
            'send_time' => 'required|date',
            'send_channel' => 'required',
        ]);
    
        $data['creator_name'] = auth()->user()->name;
        $audience = Audience::create($data);
    
        if (!$audience) {
            return redirect()->back()->withErrors(['message' => 'Failed to create audience.']);
        }
    
        return redirect()->back()->with('success', 'Audience created successfully.');
    }
    
}

