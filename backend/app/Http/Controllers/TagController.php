<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function addTag(Request $request){
        $newTag = new Tag();

        $newTag->nameTag = $request->nameTag;
        $newTag->save();
        
        return response()->json('Success');

    }

    public function getTags(){
        $tags = Tag::all();

        return response()->json($tags);
    }
    public function editTag(Tag $id){
        return response()->json($id);
    }

    public function deleteTag(Tag $id, Request $request){
        $id->delete();
        
        return response()->json('Success');
    }

    public function updateTag(Tag $id, Request $request){
        $id->nameTag = $request->nameTag;

        $id->save();

        return response()->json('Success');
    }

    public function singleTag(Tag $id){
        return response()->json($id);
    }
}
