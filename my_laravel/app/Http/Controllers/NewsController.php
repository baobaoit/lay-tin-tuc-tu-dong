<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;
use App\news_pages;
use SimpleXMLElement;
use Illuminate\Support\Facades\DB;
use Exception;

class NewsController extends Controller
{
    //Hot News
    public function index()
    {
        $newsContents = $this->getNewsByGenre('tin moi');
        return view('rss.rssnews',compact('newsContents'));
    }

    //Gioi Thieu
    public function gioiThieu()
    {

        return view('rss.gioithieu');
    }

    //Thoi Su
    public function thoiSu()
    {
        $newsContents = $this->getNewsByGenre('thoi su');
        return view('rss.thoisu',compact('newsContents'));
    }

    //Kinh Doanh
    public function kinhDoanh()
    {
        $newsContents = $this->getNewsByGenre('kinh doanh');
        return view('rss.kinhdoanh',compact('newsContents'));
    }

    //The thao
    public function theThao()
    {
        $newsContents = $this->getNewsByGenre('the thao');
        return view('rss.thethao',compact('newsContents'));
    }

    //The gioi
    public function theGioi()
    {
        $newsContents = $this->getNewsByGenre('the gioi');
        return view('rss.thegioi',compact('newsContents'));
    }

    //Phap luat
    public function phapLuat()
    {
        $newsContents = $this->getNewsByGenre('phap luat');
        return view('rss.phapluat',compact('newsContents'));
    }

    //get news by genre
    protected function getNewsByGenre($genre)
    {
       // $newsItems = DB::table('news_pages')->where('genre',$genre)->get();
        $newsItems =Genre::all()->where('name', $genre);
        $newsContents = array() ;
        foreach($newsItems as $item)
        {
            $content = $this->getRSS($item->rss_url,10);
            array_push($newsContents,$content);
        }
        return $newsContents;
    }
    //getRSS function
    protected function getRSS($url,$numLine)
    {
        $data = file_get_contents($url);
        $xml = new SimpleXMLElement($data);
        $content = array() ;
        $i = 1;
        foreach ($xml->channel->item as $topic) {
            if($i>$numLine) break;
            array_push($content, $topic);
            $i++;

        }
        return $content;
    }

    //Get content between tags
    public function getTextInsideTags($pattern,$string) {
        preg_match_all($pattern, $string, $matches);
        return $matches[1];

    }


    //Parse content
    public function getContent(Request $request)
    {
        if ($request->has('title') && $request->has('link'))
        {
            $title = $request->input('title');
            $link = $request->input('link');
            // $linkCompare = ltrim($link, "https://");
            $linkCompare = explode('/', $link);
            $source = @file_get_contents($link);
            $news = DB::table('news_pages')->where('name_page', $linkCompare[2])->first();
            //$pattern = $news->pre_pattern;//echo $pattern;
            /*$news = Genre::all();
            $newsItem = null;
            foreach ($news as $item)
            {
                if( $item->news_page->name_page == $linkCompare[2])
                {
                    $newsItem = $item->news_page;
                    break;
                }
            }*/
            $pattern = $news->pre_pattern;
            $html = $this->getTextInsideTags($pattern,$source);
            if(isset($html[0]))
            {
                $postContent = $html[0];
                return view('rss.content',compact('title'),compact('postContent'));
            }
            else
                return view('rss.error');

        }
    }
}
