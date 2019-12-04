<?php
use App\Http\Requests\ItemRequest;
use App\Rules\FiveCharacters;
  /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $items = $request->validate([
          'name' => 'bail|required|max:255',
          'email'=> 'required',
          'subject'=> 'required',
          'message'=> 'required'
        ]);
        $items = $request->all();
        $items->save();
        return back();
    }

    public function store(Request $request)
    {
        $items = $request->validate([
            'name' => [new FiveCharacters],
        ]);
        $items->save();
        return back();
    }