<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MemberController extends Controller {

  /**
   * The production url to the backend.
   *
   * @var string
   */
  public const PRODUCTION_BACKEND = 'https://honeypot-backend.nicastro.io/api/get-member';

  /**
   * The local url to the backend.
   *
   * @var string
   */
  public const LOCAL_BACKEND = 'appserver.honeypotbackend.internal/api/get-member';

  /**
   * Call Backend and return ok/not ok.
   *
   * @param  \Illuminate\Http\Request  $request
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function getMember(Request $request): JsonResponse {
    try {
      $backendUrl = getenv('LANDO_SERVICE_NAME') ? self::LOCAL_BACKEND : self::PRODUCTION_BACKEND;

      $username = $request->get('username');
      $password = $request->get('password');
      $data = $request->get('data');
      // With XDebug add: ?XDEBUG_SESSION_START=PHPSTORM
      $response = Http::post($backendUrl . '?XDEBUG_SESSION_START=PHPSTORM', [
        'username' => $username,
        'password' => $password,
        'data' => $data,
      ]);


      if ($response->status() !== 200) {
        throw new \Exception('Status code not 200');
      }

      $responseData = $response->json();
      if ($responseData['status'] == 'ok') {
        return response()->json(['status' => $responseData['status'], 'redirect' => $responseData['redirect']]);
      }

      return response()->json(['status' => 'error', 'message' => 'Username or Password incorrect.' . $response->body()]);
    }
    catch (\Error|\Exception $exception) {
      return response()->json(['status' => 'error', 'message' => 'Something went wrong.']);
    }

  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   *
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Member  $member
   *
   * @return \Illuminate\Http\Response
   */
  public function show(Member $member) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Member  $member
   *
   * @return \Illuminate\Http\Response
   */
  public function edit(Member $member) {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Member  $member
   *
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Member $member) {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Member  $member
   *
   * @return \Illuminate\Http\Response
   */
  public function destroy(Member $member) {
    //
  }

}
