<?php

//use instance MemberController
use App\Http\Controllers\MemberController;

Route::get('/',[MemberController::class, 'index'])->name('member.index');
Route::post('/getmemberdata',[MemberController::class, 'LoadMemberData'])->name('member.data');

