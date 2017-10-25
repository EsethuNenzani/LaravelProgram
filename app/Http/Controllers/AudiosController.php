<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audio;

class AudiosController extends Controller
{
     public function list()
     {
        $title='Audio List';
        if(isset($_POST['btnAll']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getAllAudio();   
        }
        if(isset($_POST['btnFirstHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween12AM_And_1AM();  
        }
        if(isset($_POST['btnSecondHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween1AM_And_2AM();   
        }
        if(isset($_POST['btnThirdHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween2AM_And_3AM();   
        }
        if(isset($_POST['btnFourthHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween3AM_And_4AM();   
        }
        if(isset($_POST['btnFirthHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween4AM_And_5AM();   
        }
        if(isset($_POST['btnSixthHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween5AM_And_6AM();   
        }
        if(isset($_POST['btnSeventhHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween6AM_And_7AM();   
        }
        if(isset($_POST['btnEightHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween7AM_And_8AM();   
        }
        if(isset($_POST['btnNinthHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween8AM_And_9AM();   
        }
        if(isset($_POST['btnTenthHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween9AM_And_10AM();   
        }
        if(isset($_POST['btnEleventhHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween10AM_And_11AM();   
        }
        if(isset($_POST['btnTwelveHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween11AM_And_12PM();   
        }

        if(isset($_POST['btnThirteenthHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween12PM_And_1PM();  
        }
        if(isset($_POST['btnFourteenHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween1PM_And_2PM();   
        }
        if(isset($_POST['btnFifteenHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween2PM_And_3PM();   
        }
        if(isset($_POST['btnSixteenHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween3PM_And_4PM();   
        }
        if(isset($_POST['btnSeventeenHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween4PM_And_5PM();   
        }
        if(isset($_POST['btnEighteenHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween5PM_And_6PM();   
        }
        if(isset($_POST['btnNineteenHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween6PM_And_7PM();   
        }
        if(isset($_POST['btnTwentyHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween7PM_And_8PM();   
        }
        if(isset($_POST['btnTwentyOneHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween8PM_And_9PM();   
        }
        if(isset($_POST['btnTwentyTwoHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween9PM_And_10PM();   
        }
        if(isset($_POST['btnTwentyThreeHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween10PM_And_11PM();   
        }
        if(isset($_POST['btnTwentyFourHr']))
        {
            $get_all_audio=new Audio();
            $get_all_audio->getBetween11PM_And_12AM();   
        }
        return view ('Audio.list')->with('title', $title);
        //else
        //{
        //return view ('Audio.list')->with('title', $title);
       // return view ('Audio.list')->with('title', $title);
        //}
        
     }

    public function documentation(){
        $title='Documentation';
        return view ('Audio.documentation')->with('title', $title);
    }
}
