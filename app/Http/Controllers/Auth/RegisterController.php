<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUserRequest;
use App\Http\Resources\Auth\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Auth\AccountModel;
use App\Models\Auth\AccessUser;
use Tymon\JWTAuth\Facades\JWTAuth;

class RegisterController extends Controller
{
    private $accountModel;

    public function __construct(AccountModel $accountModel)
    {
        $this->accountModel = $accountModel;
    }

    public function register(RegisterUserRequest $request)
    {
        // Create the user in access_auth table
        $user = new AccountModel([
            'program_id' => $request->header('Program_id'),
            'role_id' => 6,
            'referral_code' => $request->referral_code,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 1, // auto verification
            'device_id' => null, // Assuming device_id is not provided during registration
        ]);

        $user->save();

        // Create the user in access_user table
        $accessUser = new AccessUser([
            'user_id' => $user->user_id,
            'name' => $request->fullname,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'institusion' => $request->institusion,
            'instagram' => $request->instagram,
            'tiktok' => $request->tiktok,
        ]);

        $accessUser->save();

        // Assuming the 'is_participant', 'referral_code', 'partner_code', and 'is_google'
        // columns are also saved to the access_auth table, you can set them as needed
        $dataUser = $this->accountModel->getByEmail($request->email);

        // Generate JWT token and refresh token
        $accessToken = JWTAuth::fromUser($dataUser);

        // Return the formatted response using the UserResource
        $data = ([
            'user' => new UserResource($user),
            'access_token' => $accessToken
        ]);
        return response()->success($data, 201, 'User registered successfully');
    }
}
