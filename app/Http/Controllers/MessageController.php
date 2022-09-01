<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageResource;
use App\Models\Message;
use DefStudio\Telegraph\Models\TelegraphBot;
use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index', 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MessageResource::collection(Message::query()->where('visible', true)->get());
    }
    /**
     * list
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return MessageResource::collection(Message::all());
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
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'subject' => ['nullable', 'string'],
            'content' => ['required', 'string'],
        ]);
        if ($validator->fails()) {
            return $this->sendResponse(null, 400);
        }
        $validator = $validator->validate();
        $model = new Message($validator);
        if ($model->save()) {
            foreach (TelegraphChat::all() as $tgChat) {
                $tgChat->message('
                Mensaje de ' . $model->name . '
                Email: ' . $model->email . '

                ' . $model->content . '
            ');
            }
            return new MessageResource($model);
        }
        return $this->sendResponse(null, 502);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Message::find($id);
        return $model
            ? new MessageResource($model)
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
        $model = Message::find($id);
        if (!$model) return $this->sendResponse(null, 400);

        $validator = Validator::make($request->all(), [
            'visible' => ['nullable', 'boolean'],
            'content' => ['nullable', 'string'],
        ]);
        if ($validator->fails()) {
            return $this->sendResponse(null, 400);
        }
        $validator = $validator->validate();

        return $model->update($validator)
            ? new MessageResource($model)
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
        return Message::find($id) && Message::find($id)->delete()
            ? $this->sendResponse()
            : $this->sendResponse(null, 502);
    }
}
