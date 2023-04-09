<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Section;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog()
    {
        $sections = Section::where('parent_section_id','=',null)->get();
        return view('layout', ['Template' => 'catalog.catalog', 'sections' => $sections]);
    }
    public function section($sectionslug)
    {
        $section = Section::where('slug','=',$sectionslug)->first();
        if($section){
            return view('layout', ['Template' => 'catalog.section','section' => $section]);
        }else{
            abort(404);
        }
    }
    public function product($sectionslug,$productslug){
        $section = Section::where('slug','=',$sectionslug)->first();
        $product = Product::where('section_id','=',$section->id)->where('slug','=',$productslug)->first();
        if($product){
            return view('layout', ['Template' => 'catalog.product','section' => $section,'product'=>$product]);
        }else{
            abort(404);
        }
    }
}
