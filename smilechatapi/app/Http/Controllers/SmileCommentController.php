<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SmileComment;

class SmileCommentController extends Controller
{
    public function index() {
        return SmileComment::all();
    }
    public function show(SmileComment $SmileComment) {
        return $SmileComment;
    }
}