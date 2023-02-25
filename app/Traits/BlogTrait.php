<?php

namespace App\Traits;

use App\Models\Blogs;
use App\Models\Blogscategory;
use DB;

trait BlogTrait
{
    public function getAllLatestArticles($num)
    {
		$this->blog = new Blogs;
        $blogs=$this->blog->where([['status',1],['is_deleted',0]])->where('aslug','!=','n-a')->orderBy('updated_at', 'DESC')->take($num)->get();
		if(!empty($blogs) && $blogs->count() > 0){
			foreach($blogs as $blog){
				$catname = array();
				if($blog->acat != '' ){
					$b_cat   = explode(',', $blog->acat);  
					$this->blogcategory = new Blogscategory;					
					$cats = $this->blogcategory->whereIn('cat_id', $b_cat) 
							->get(['cat_name']);
					if(!empty($cats)){
						
						foreach($cats as $cat ){
							array_push($catname,$cat->cat_name);
						}
						
						//$catname[]= $cats[0]->cat_name;
					}
				}
				$blog->cat_name = $catname;
				//$blog->adescr = substr_replace(preg_replace("/<img[^>]+\>/i", "  ", html_entity_decode($blog->adescr,ENT_QUOTES)),'...',150);
				$blog->adescr = substr(strip_tags(html_entity_decode($blog->adescr,ENT_QUOTES),ENT_QUOTES),0,150).'...';
				$blog->updated = date('d-m-Y',strtotime($blog->updated_at));
				if($blog->f_image != '' && !empty($blog->f_image)){
					$blog->thumb_image = $blog->f_image;
				}else{
					
					$blog->thumb_image = 'default-thumbnail.jpg';
				}
				
			}
			
			$blogs_section =  view('blogs.blog-section',['blogs'=> $blogs->toArray()])->render();
			return $blogs_section;
		}
    }
	public function getAllLatestArticlesByCat($num,$cid)
    {
		$this->blog = new Blogs;
        $blogs=$this->blog->where([['status',1],['is_deleted',0]])->where('aslug','!=','n-a')->where('c_id',$cid)->orderBy('a_id', 'DESC')->take($num)->get();
		if(!empty($blogs) && $blogs->count() > 0){
			foreach($blogs as $blog){
				$catname = array();
				if($blog->acat != '' ){
					$b_cat   = explode(',', $blog->acat);  
					$this->blogcategory = new Blogscategory;					
					$cats = $this->blogcategory->whereIn('cat_id', $b_cat) 
							->get(['cat_name']);
					if(!empty($cats)){
						
						foreach($cats as $cat ){
							array_push($catname,$cat->cat_name);
						}
						
						//$catname[]= $cats[0]->cat_name;
					}
				}
				$blog->cat_name = $catname;
				//$blog->adescr = substr_replace(preg_replace("/<img[^>]+\>/i", "  ", html_entity_decode($blog->adescr,ENT_QUOTES)),'...',150);
				$blog->adescr = substr(strip_tags(html_entity_decode($blog->adescr,ENT_QUOTES),ENT_QUOTES),0,150).'...';
				$blog->updated = date('d-m-Y',strtotime($blog->updated_at));
				if($blog->f_image != ''){
					$blog->thumb_image = $blog->f_image;
				}else{
					
					$blog->thumb_image = 'default-thumbnail.jpg';
				}
				
			}

			$blogs_section =  view('blogs.category-blog-section',['blogs'=> $blogs->toArray()])->render();
			return $blogs_section;
		}
    }
	
	public function getAllLatestArticlesByCat1($id,$catids)
    {
		DB::enableQuerylog();
		
		$this->blog = new Blogs;
		
        $blogs=$this->blog->where([['status',1],['is_deleted',0]])->where('aslug','!=','n-a')->whereIn('acat', $catids)->where('a_id','!=',$id)->orderBy('updated_at', 'DESC')->take(20)->get();
       
		if(!empty($blogs)){
			
			foreach($blogs as $blog){
				$catname = array();
				if($blog->acat != '' ){
					$b_cat   = explode(',', $blog->acat);  
					$this->blogcategory = new Blogscategory;					
					$cats = $this->blogcategory->whereIn('cat_id', $b_cat) 
							->get(['cat_name']);
					if(!empty($cats)){
						
						foreach($cats as $cat ){
							array_push($catname,$cat->cat_name);
						}
						
						//$catname[]= $cats[0]->cat_name;
					}
				}
				$blog->cat_name = $catname;
				//$blog->adescr = substr_replace(preg_replace("/<img[^>]+\>/i", "  ", html_entity_decode($blog->adescr,ENT_QUOTES)),'...',150);
				$blog->adescr = substr(strip_tags(html_entity_decode($blog->adescr,ENT_QUOTES),ENT_QUOTES),0,150).'...';
				$blog->updated = date('d-m-Y',strtotime($blog->updated_at));
				if($blog->f_image != ''){
					$blog->thumb_image = $blog->f_image;
				}else{
					
					$blog->thumb_image = 'default-thumbnail.jpg';
				}
				
			}
			
			//dd($bgdata);
			$blogs_section =  view('blogs.related-category-blog-section',['blogs'=> $blogs->toArray()])->render();
			return $blogs_section;
		}
    }
	
	
	
}