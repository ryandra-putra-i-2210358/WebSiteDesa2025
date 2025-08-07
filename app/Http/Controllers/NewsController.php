<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('back_site.news.index', compact('news'));
    }

    public function create()
    {
        return view('back_site.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'    => 'required|string|max:255',
            'content'  => 'required|string',
            'tanggal'  => 'required|date',
            'penulis'  => 'required|string|max:100',
            'image'    => 'nullable|image',
        ]);

        $data = $request->only(['title', 'content', 'tanggal', 'penulis']);
        $data['slug'] = Str::slug($request->title) . '-' . Str::random(6);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('global_image'), $imageName);
            $data['image'] = 'global_image/' . $imageName;
        }

        News::create($data);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('back_site.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('back_site.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $request->validate([
            'title'    => 'required|string|max:255',
            'penulis'  => 'required|string|max:100',
            'tanggal'  => 'required|date',
            'content'  => 'required|string',
            'image'    => 'nullable|image',
        ]);

        $news->title   = $request->title;
        $news->penulis = $request->penulis;
        $news->tanggal = $request->tanggal;
        $news->content = $request->content;

        // Jika ada gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($news->image && file_exists(public_path($news->image))) {
                unlink(public_path($news->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('global_image'), $imageName);
            $news->image = 'global_image/' . $imageName;
        }

        // ⛳️ INI HARUS ADA
        $news->save();

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diperbarui.');
    }


        

    public function destroy(News $news)
    {
        if ($news->image && file_exists(public_path($news->image))) {
            unlink(public_path($news->image));
        }

        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus.');
    }

    // Halaman publik (slug)
    // public function showDetail($slug)
    // {
    //     $news = News::where('slug', $slug)->firstOrFail();
    //     return view('front_site.news.detail', compact('news'));
    // }
}
