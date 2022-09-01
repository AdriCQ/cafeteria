<?php

namespace App\Http\Controllers;

use App\Http\Resources\OfferResource;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
  /**
   * Instantiate a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth:sanctum')->except(['index', 'show']);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return OfferResource::collection(Offer::all());
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'title' => ['required', 'string'],
      'description' => ['nullable', 'string'],
      'price' => ['required', 'numeric'],
      'active' => ['nullable', 'boolean'],
      'special' => ['nullable', 'boolean'],
      'image' => ['nullable', 'image'],
    ]);
    if ($validator->fails()) {
      return $this->sendResponse(null, 400);
    }
    $validator = $validator->validate();
    // TODO Upload image
    unset($validator['image']);
    $model = new Offer($validator);
    return $model->save()
      ? new OfferResource($model)
      : $this->sendResponse(null, 502);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $model = Offer::find($id);
    return $model
      ? new OfferResource($model)
      : $this->sendResponse(null, 400);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $model = Offer::find($id);
    if (!$model) return $this->sendResponse(null, 400);

    $validator = Validator::make($request->all(), [
      'title' => ['nullable', 'string'],
      'description' => ['nullable', 'string'],
      'price' => ['nullable', 'numeric'],
      'active' => ['nullable', 'boolean'],
      'special' => ['nullable', 'boolean'],
      'image' => ['nullable', 'image'],
    ]);
    if ($validator->fails()) {
      return $this->sendResponse(null, 400);
    }
    $validator = $validator->validate();

    // TODO Upload image
    unset($validator['image']);

    return $model->update($validator)
      ? new OfferResource($model)
      : $this->sendResponse(null, 502);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    return Offer::find($id) && Offer::find($id)->delete()
      ? $this->sendResponse()
      : $this->sendResponse(null, 502);
  }
}
