<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Card;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    //基础控制器

    public function __construct(){
        $this->middleware('auth');
    }
    //测试控制器
    public function index(){
        $card = new Card;
        $cards=$card->join('users','card.uid','=','users.id')
                    ->select('card.*','users.username')
                    ->paginate(5);
       return view('admin.card.list',compact('cards'));
    }
    public function create(){
        $users=Card::find(1)->user->get();
        return view('admin.card.create',compact('users'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|unique:card',
            'data' => 'required',
            'sernum'=>'required',
            'uid'=>'required'
        ]);

        $card = new Card;
        $card->code = $request->get('code');
        $card->data = $request->get('data');
        $card->sernum = $request->get('sernum');
        $card->uid= $request->get('uid');

        if ($card->save()) {
            return redirect('admin/card');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $card = Card::findOrFail($id);
        return $card;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=Card::find(1)->user->get();
        $cards = Card::findOrFail($id);
        return view('admin.card.edit',compact('cards','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $card = new Card;
        $result = $card->where('id',$request->get('id'))->update($request->except('id','_token','_method'));
        if ($result) {
            return redirect('admin/card');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Card::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }


}
