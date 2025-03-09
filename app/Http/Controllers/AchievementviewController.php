<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementviewController extends Controller
{
    public function index()
    {
        $achievements = Achievement::all(); // Fetch achievements from database
        return view('front.newPage.achievement', compact('achievements'))->with('success', 'Achievement updated sucessfully');
    }
}
