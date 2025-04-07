<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Models\Event as Event;
class CalendarController extends Controller
{
    public function display()
    {
        return view('calendar.display');
    }
    public function json()
    {
        //$this->view->disable();
        $content = Event::all()->toJson();
        //$content=$json_encode($events);
        return response($content)->withHeaders([
            'Content-Type' => 'application/json',
            'charset' => 'UTF-8'
            ]);
    }
}
?>