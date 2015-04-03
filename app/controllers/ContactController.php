<?php

class ContactController extends BaseController {
	public function getContactUsForm() {
		// Get all data submitted in form.
		$data = Input::all();

		// Set up validation rules.
		$rules = array(
			'fname' => 'required|min:2',
			'lname' => 'required|min:2',
			'email' => 'required',
			'text'  => 'required|min:5'
		);

		// Validate collected data.
		$validator = Validator::make ($data, $rules);

		// If validation passes, run validation pass.
		if ($validator -> passes()) {
			Mail::send('emails.contact', $data, function($message) use ($data) {
				$message->from($data['email'], $data['fname'], $data['lname']);
				$message->to('ryan.stuhl@gmail.com', 'Ryan Stuhl')->subject('New contact from website');
			});
			return Redirect::route('/')
						->with('message', 'Your message has been sent. Thank you!');
		} else {
			return Redirect::route('/')
						->with('message', 'Your message has not been sent. Please check that you filled out the form correctly.');
		}
	}
}