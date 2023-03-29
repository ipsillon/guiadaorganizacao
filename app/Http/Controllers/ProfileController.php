<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * @var Profile
     */
    private $profile;

    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function index()
    {
        $rows_per_page = config('app.pagination.rows_per_page');

        $filters = [
            'name' => request('name', ''),            
        ];

        $query = $this->profile->newQuery();

        if ($filters['name']) {
            $query->where(function ($subquery) use ($filters) {
                $subquery->where('name', 'like', '%' . $filters['nome'] . '%');                
            });
        }
        
        $query->orderBy('id', 'asc');

        $profile = $query->paginate($rows_per_page);        

        return view('profiles', compact('profile', 'filters'));        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profile = $this->profile->findOrFail($id);        
        

        return view('profile', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
