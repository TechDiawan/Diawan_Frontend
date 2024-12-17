<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index($type = null)
    {
        if ($type && !in_array($type, ['404', '403','400'])) {
            abort(404);
        }

        switch ($type) {
            case '404':
                $message = "Page not found.";
                $errorName = "Not Found";
                $errorCode = 404;
                $errorImage = "images/illustration/notfound.jpg";
                break;
            case '403':
                $message = "Access denied.";
                $errorName = "Forbidden";
                $errorCode = 403;
                $errorImage = "images/illustration/forbidden.jpg";
                break;
            case '400':
            default:
                $message = "Oops! Something went wrong. We're on it, please try again soon.";
                $errorName = "Unknown Error";
                $errorCode = 400;
                $errorImage = "images/illustration/error.jpg";
                break;
        }

        return view('notifications.positive_error', compact('message', 'type', 'errorName', 'errorCode', 'errorImage'));
    }
}
