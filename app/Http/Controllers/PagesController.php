<?php

namespace App\Http\Controllers;
use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $pages = Pages::orderby('id','desc')->paginate(15);
        
        return view('pages', ['pages'=> $pages]);
    }
    public function get($slug){

        
        $pages = Pages::whereSlug($slug)->first();
        
         return view('page', ['pages'=> $pages]);
  
    }
    
    public function create(){
        

        return view('pagecreate');
    }

    public function store(Request $request){
        $newPage =new Pages; 
       
        $newPage-> title = $request->title;
        $newPage-> description = $request->description;
        $newPage->save();
         return redirect('/pages')->with('msg','pagina cadastrada com sucesso ');
    
    
        }
        public function edit($id){
       
            $pages = Pages::find($id);
           
           
            return view('pagecreate',['pages'=>$pages]);
    
        }

        public function update(Request $request,$id)
        {
           
            $pageData = ['title' => $request->title, 'description' => $request->description];
          
            $pageupdate = Pages::where(['id'=>$id])->update($pageData);
            return redirect('dashboard/'.$id.'/pageedit')->with(['message' => 'Post updated successfully!', 'status' => 'success']);
          }

          
        
}
