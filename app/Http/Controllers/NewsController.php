<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\News;



class NewsController extends Controller
{
    public function index()
    {
        return view('layouts/home', [
            "title" => "News",
            "News" => news::all(),
        ]);
    }



    public function show(News $new)
    {
        return view('layouts/detail', [
            "title" => "Breaking News",
            "news" => $new,
        ]);
    }



    public function newnews(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'max:5000',
        ]);



        News::create($validatedData);



        return redirect('/home');
    }



    public function destroy(News $new)
    {
        News::destroy($new->id);
        return redirect('/home');
    }



    public function edit(News $new)
    {
        return view('layouts/edit', [
            "title" => "Edit news",
            "news" => $new,
        ]);
    }



    public function update(Request $request, News $new)
    {
        $rules = [
            'title' => 'required|max:255',
            'content' => 'max:5000',
        ];



        $updatedData = $request->validate($rules);



        News::where('id', $new->id)
            ->update($updatedData);



        return redirect('/home');
    }
}
