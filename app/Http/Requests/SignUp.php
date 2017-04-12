<?php

namespace App\Http\Requests;

use Illuminate\Http\JsonResponse;

use Illuminate\Foundation\Http\FormRequest;

class SignUp extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    public function response(array $errors)
    {
        if ($this->ajax() || $this->wantsJson()) {
            $response = array();
            $messages = array();
            foreach ($errors as $element) {
                foreach ($element as $element_error) {
                    $messages[] = $element_error;
                }
            }
            $response['error'] = $messages;
            $response['status'] = 'error';

            return new JsonResponse($response);
        }

        /*return $this->redirector->to($this->getRedirectUrl())
            ->withInput($this->except($this->dontFlash))
            ->withErrors($errors, $this->errorBag);*/
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $validation = array();

        switch (FormRequest::input('user_role')) {

            case 2:

                //Registed as a Teacher Validations
               
                $validation['email'] = 'required|email|max:255|unique:users';

                break;
            case 3:

                //Registed as a Student

                $validation['email'] = 'required|email|max:255|unique:users';
              
                break;
            
            default:
        }

        return $validation;
    }
}
