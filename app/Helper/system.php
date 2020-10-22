<?php


use App\Models\Settings;
use App\Models\News;
use App\Models\Category;
use App\Models\Mail;
use App\Models\Video;
use App\Models\Page;

function diff_for_humans($timestamp)
{
    \Carbon\Carbon::setLocale('ar');
    return (is_string($timestamp)) ? \Carbon\Carbon::createFromTimestampUTC(strtotime($timestamp))->diffForHumans() : $timestamp->diffForHumans();
}


function get_date_from_timestamp($timestamp)
{
    return format_timestamp_date($timestamp, 'Y-m-d');
}

function get_time_from_timestamp($timestamp)
{
    return format_timestamp_date($timestamp, 'H:i');
}

function format_timestamp_date($timestamp, $format)
{
    return (isset($timestamp) && isset($format)) ? \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestamp)->format($format) : '';
}


function format_12_to_24($input)
{
    return date("H:i", strtotime($input));
}

function format_24_to_12($input)
{
    return date("g:i a", strtotime($input));
}

function image_url($img, $size = '')
{
    return (!empty($size)) ? url('image/' . $size . '/' . $img) : url('image/' . $img);
}

function icon()
{

    if ($settings = Settings::all()->first()) {

        return $settings->icon;

    } else
        return 0;

}

function mail_count()
{

    return count(Mail::select('id')->where('read_id', 0)->get());
}

function news_count(){
    return count(News::all());
}
function mails_count(){
    return count(Mail::all());
}

function categories_count(){
    return count(Category::all());
}
function Videos_count(){
    return count(Video::all());
}




function categories(){

   return $categories= Category::all()->take(4);

}

function settings(){


        return $settings= Settings::all()->first();

}

function Pages(){

    return  Page::all();

}


function news($category, $count){
    return  News::OrderBy('created_at','desc')->WhereCategoryIn($category)->take($count);
}

function lastNews($i){
return News::OrderBy('created_at','desc')->take($i)->get();
}

function most_views(){

    return News::OrderBy('views','desc')->take(7)->get();

}



function videos($i){
    return Video::OrderBy('created_at','desc')->take($i)->get();
}

function for_you($i){
    return News::inRandomOrder()->take($i)->get();
}
