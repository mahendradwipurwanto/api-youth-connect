<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\AccountModel;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Auth\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    private $accountModel;

    public function __construct(AccountModel $accountModel)
    {
        $this->accountModel = $accountModel;
    }

    public function login(LoginRequest $request)
    {

        if (isset($request->validator) && $request->validator->fails()) {
            return response()->error($request->validator->errors(), 400);
        }

        // Check if the user exists using the email
        $user = $this->accountModel->getByEmail($request->input('email'));
        if (!$user) {
            return response()->error('User not found', 404);
        }

        // Proceed to authentication
        $credentials = $request->only('email', 'password');

        if (!$token = Auth::attempt($credentials)) {
            return response()->error('Unauthorized', 401);
        }

        // Generate JWT token and refresh token
        $accessToken = JWTAuth::fromUser($user);

        // Return the formatted response using the UserResource
        $data = ([
            'user' => new UserResource($user),
            'access_token' => $accessToken
        ]);

        return response()->success($data);
    }


    public function refresh(Request $request)
    {
        // Validate the presence of the refresh token in the request headers
        $refreshToken = JWTAuth::getToken();

        if (!$refreshToken) {
            return response()->error('Refresh token not found', 400);
        }

        // Attempt to refresh the access token
        try {
            $newAccessToken = JWTAuth::refresh($refreshToken);
        } catch (JWTException $e) {
            return response()->error('Invalid token', 401);
        }

        return response()->success(['access_token' => $newAccessToken], 200);
    }

    public function me()
    {
        return response()->success(new UserResource(Auth::user()), 200);
    }

    public function logout()
    {
        Auth::logout();
        return response()->success('Logged out successfully', 200);
    }
}
