<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Project;
use App\Models\Type;
use App\Models\Stack;

class ProjectsController extends Controller
{

    public function list()
    {
        return view('projects.list', [
            'projects' => Project::all()
        ]);
    }

    public function addForm()
    {
        return view('projects.add',[
            'types'=> Type::all(),
        ]);
    }


    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'slug' => 'nullable|url',
            'url' => 'nullable|url',
            'subtitle'=> 'nullable|string',
            'content1' => 'nullable|string',
            'content2' => 'nullable|string',
            'content3' => 'nullable|string',
            'type_id' => 'nullable|integer',
            'stack1' => 'nullable|string',
            'stack2' => 'nullable|string',
            'stack3' => 'nullable|string',
            'stack4' => 'nullable|string',
            'stack5' => 'nullable|string',
            'stack6' => 'nullable|string',
            'stack7' => 'nullable|string',
            'stack8' => 'nullable|string',
            'stack9' => 'nullable|string',
            'stack10' => 'nullable|string',
        ]);

        $project = new Project();
        $project->title = $attributes['title'];
        $project->slug = $attributes['slug'];
        $project->url = $attributes['url'];
        $project->subtitle = $attributes['subtitle'];
        $project->content1 = $attributes['content1'];
        $project->content2 = $attributes['content2'];
        $project->content3 = $attributes['content3'];
        $project->type_id = $attributes['type_id'];

        $project->stack1 = $attributes['stack1'];
        $project->stack2 = $attributes['stack2'];
        $project->stack3 = $attributes['stack3'];
        $project->stack4 = $attributes['stack4'];
        $project->stack5 = $attributes['stack5'];
        $project->stack6 = $attributes['stack6'];
        $project->stack7 = $attributes['stack7'];
        $project->stack8 = $attributes['stack8'];
        $project->stack9 = $attributes['stack9'];
        $project->stack10 = $attributes['stack10'];

        $project->user_id = Auth::user()->id;
        $project->save();

        return redirect('/console/projects/list')
            ->with('message', 'Project has been added!');
    }

    public function editForm(Project $project)
    {
        return view('projects.edit', [
            'project' => $project,
            'types'=> Type::all(),
        ]);
    }

    public function edit(Project $project)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'slug' => 'nullable|url',
            'url' => 'nullable|url',
            'subtitle'=> 'nullable|string',
            'content1' => 'nullable|string',
            'content2' => 'nullable|string',
            'content3' => 'nullable|string',
            'type_id' => 'nullable|integer',
            'stack1' => 'nullable|string',
            'stack2' => 'nullable|string',
            'stack3' => 'nullable|string',
            'stack4' => 'nullable|string',
            'stack5' => 'nullable|string',
            'stack6' => 'nullable|string',
            'stack7' => 'nullable|string',
            'stack8' => 'nullable|string',
            'stack9' => 'nullable|string',
            'stack10' => 'nullable|string',
        ]);

        $project->title = $attributes['title'];
        $project->slug = $attributes['slug'];
        $project->url = $attributes['url'];
        $project->subtitle = $attributes['subtitle'];
        $project->content1 = $attributes['content1'];
        $project->content2 = $attributes['content2'];
        $project->content3 = $attributes['content3'];
        $project->type_id = $attributes['type_id'];

        $project->stack1 = $attributes['stack1'];
        $project->stack2 = $attributes['stack2'];
        $project->stack3 = $attributes['stack3'];
        $project->stack4 = $attributes['stack4'];
        $project->stack5 = $attributes['stack5'];
        $project->stack6 = $attributes['stack6'];
        $project->stack7 = $attributes['stack7'];
        $project->stack8 = $attributes['stack8'];
        $project->stack9 = $attributes['stack9'];
        $project->stack10 = $attributes['stack10'];

        $project->save();

        return redirect('/console/projects/list')
            ->with('message', 'Project has been edited!');
    }

    public function delete(Project $project)
    {

        if($project->image)
        {
            Storage::delete($project->image);
        }
        
        $project->delete();
        
        return redirect('/console/projects/list')
            ->with('message', 'Project has been deleted!');        
    }

    public function imageForm(Project $project)
    {
        return view('projects.image', [
            'project' => $project,
        ]);
    }

    public function image(Project $project)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        if($project->image)
        {
            Storage::delete($project->image);
        }
        
        $path = request()->file('image')->store('projects');

        $project->image = $path;
        $project->save();
        
        return redirect('/console/projects/list')
            ->with('message', 'Project image has been edited!');
    }
    
}
