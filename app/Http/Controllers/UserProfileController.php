<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::with('profile')->get();
        return view('user.profile')
            ->with('users', $user);
    }

    /**
     * list listUser function used to display all users
     */
    public function listUser(){

      $user=User::with('profile')->where('role','!=','0')->get();
        return view('admin.users.view_users')
            ->with('users', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $userInfo = User::find(Auth::user()->id);
        return view('admin.profile.add_profile')
            ->with('userInfo', $userInfo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userProfile)
    {
        Validator::validate($request->all(), [
            'name' => ['required', 'min:1', 'max:100'],
            'address' => ['required', 'min:1', 'max:200'],
            'phone' => ['required', 'min:5', 'max:15'],

        ], [
            'name.required' => 'يجب تعبئت هذا الحقل',
            'name.max' => 'لايمكنك ادخال اقل من 100 حرف',
            'name.min' => 'يجب ان يكون الحقل المدخل اكثر من  واحد',
            'name.unique' =>'الاسم الدي ادخلتة غير متاحة',

            'address.required' => 'يجب تعبئت هذا الحقل',
            'address.max' => 'لايمكنك ادخال اقل من 200 حرف',
            'address.min' => 'يجب ان يكون الحقل المدخل اكثر من حرف واحد',


            'phone.required' => 'يجب تعبئت هذا الحقل',
            'phone.max' => 'لايمكنك ادخال اقل من 16 رقم',
            'phone.min' => 'يجب ان يكون الحقل المدخل اكثر من 5 ارقام',



        ]);
        $user = User::find($userProfile);
        $user->name = $request->name;
        $user->save();
        $userInfo  = new UserProfile();
        $userInfo->id = $userProfile;
        $userInfo->user_id = $userProfile;
        $userInfo->phone = $request->phone;
        $userInfo->address = $request->address;
        $userInfo->facebook = $request->facebook;
        $userInfo->twitter = $request->twitter;
        $userInfo->instagram = $request->instagram;
        $userInfo->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "defaultImage.png";
        if ($userInfo->save())
            return redirect()->route('profile')->with(['success' => 'تم تحديث البيانات بنجاح']);
        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $user = User::with('profile')->where('id', Auth::user()->id)->get();
        return view('admin.profile.profile')
            ->with('users', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit($userProfile)
    {
        $userInfo = User::with('profile')->find($userProfile);
        return view('admin.profile.edit_profile')
            ->with('userInfo', $userInfo);
        // return response($userInfo);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userProfile)
    {
        Validator::validate($request->all(), [
            'name' => ['required', 'min:1', 'max:100'],
            'address' => ['required', 'min:1', 'max:200'],
            'phone' => ['required', 'min:5', 'max:15'],

        ], [
            'name.required' => 'يجب تعبئت هذا الحقل',
            'name.max' => 'لايمكنك ادخال اقل من 100 حرف',
            'name.min' => 'يجب ان يكون الحقل المدخل اكثر من  واحد',

            'address.required' => ' يجب تعبة الحقل الخاص بالعنوان   ',
            'address.max' => 'لايمكنك ادخال اقل من 200 حرف',
            'address.min' => 'يجب ان يكون الحقل المدخل اكثر من حرف واحد',


            'phone.required' => ' يجب تعبة الحقل الخاص بارقم الهاتف   ',
            'phone.max' => 'لايمكنك ادخال اكثر من 15 رقم',
            'phone.min' => 'يجب ان يكون الحقل المدخل اكثر من 5 ارقام',



        ]);
        $user = User::find($userProfile);
        $user->name = $request->name;
        $user->save();
        $userInfo = UserProfile::find($userProfile);
        $userInfo->phone = $request->phone;
        $userInfo->address = $request->address;
        $userInfo->facebook = $request->facebook;
        $userInfo->twitter = $request->twitter;
        $userInfo->instagram = $request->instagram;
        if ($request->image !=null) {
            if ( realpath($userInfo->image) ) {
                unlink(realpath($userInfo->image));
            }
        }
        if ($request->hasFile('image')) {
            if (realpath($userInfo->image)) {
                unlink(realpath($userInfo->image));
            }
            $userInfo->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "defaultImage.png";
        }
        if ($userInfo->save())
            return redirect()->route('profile')->with(['success' => 'تم تحديث البيانات بنجاح']);
        // return response($userInfo);
        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //{
    }
    public function toggle($userId){
        $users = User::with("profile")->find($userId);//find($PoliceId);
        $users->is_active *= -1;
        if ($users->save())
            return back()->with(['success' => 'تم تحديث البيانات بنجاح']);

        return back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    public function editUser($userId){
        $user=User::find($userId);
        return view("admin.users.edit")->with("users",$user);
    }

    public function updateUser(Request $request , $userId){
        $users = User::find($userId);

        $users->role = $request->role;

        $users->is_active = $request->is_active;

        if ($users->save())
            return redirect()->route('list-user')->with(['success' => 'تم تحديث البيانات بنجاح']);

        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    public function uploadFile($file)
    {
        $destination = public_path() . "/images/users/";
        $fileName = time() . "_" . $file->getClientOriginalName();
        $file->move($destination, $fileName);
        return $fileName;
    }
}
