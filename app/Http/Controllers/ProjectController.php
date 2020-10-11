<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$portfolio = DB::table('projects')->get();
        //$portfolio = Project::orderBy('description', 'DESC')->get();
        
        // $portfolio = Project::latest('created_at')->paginate();
        // return view('portfolio', compact('portfolio'));

        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {

        $fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);

        //Project::create(request()->all());

        //Project::create( request()->only('title', 'url', 'description') );

        //pasar campos ya validados
        Project::create($fields);

        // Project::create([
        //     'title' => request('title'),
        //     'url' => request('url'),
        //     'description' =>request('description')
        // ]);

        return redirect()->route('projects.index');
    }
}