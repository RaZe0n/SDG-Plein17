<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FAQController extends Controller
{
    public function index()
    {
        $faqData = DB::table('faq')->simplePaginate(10);
        
        return view('admin.FAQ', ['faqData' => $faqData]);
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(FaqRequest $request)
    {
        $faq = $request->validated();

        FAQ::create($faq);

        return redirect()->route('admin.faq')->with('success', 'FAQ created successfully');
    }

    public function destroy($id)
    {
        DB::table('faq')->where('id', $id)->delete();

        return redirect()->route('admin.faq')->with('success', 'FAQ deleted successfully');
    }

    public function edit($id)
    {
        $faq = DB::table('faq')->where('id', $id)->first();

        return view('admin.faq.edit', ['faq' => $faq]);
    }

    public function update(FaqRequest $request, $id)
    {
        $faq = $request->validated();

        DB::table('faq')->where('id', $id)->update($faq);

        return redirect()->route('admin.faq')->with('success', 'FAQ updated successfully');
    }
}
