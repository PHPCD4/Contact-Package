<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="contact-form col-lg-8 mx-lg-auto">
			<h3 class="text-center mb-3">Get In Touch</h3>

            @if (session()->has('Message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
	                <span class="alert-text">{{ session()->get('Message') }}</span>
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
            @endif
			<form action="{{ route('contact') }}" method="POST">
				@csrf
				<div class="form-row">
					<div class="col">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Your Name Please" required>
					</div>
					<div class="col">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Your Valid Email" required>
					</div>
				</div>
				<div class="form-group mt-3">
					<label for="message">Your message</label>
					<textarea class="form-control" name="message" id="message" placeholder="Your Query" rows="6" aria-required="true" required></textarea>
				</div>
				<div class="col-6 mr-auto ml-auto">
					<div class="">
						<button type="submit" class="btn btn-block btn-info py-2"><i class="fas fa-paper-plane"></i> Send Now</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
