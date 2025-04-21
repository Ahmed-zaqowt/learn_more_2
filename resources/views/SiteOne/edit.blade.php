<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container mt-5">
  <h2 class="mb-4">Contact Us</h2>
  <form enctype="multipart/form-data" method="post" action="{{ route('site1.update') }}">
    @csrf
    <input name="id" type="hidden" value="{{ $contact->id }}">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input name="name" type="text" value="{{ $contact->name }}" class="form-control" id="name" placeholder="Enter your name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input name="email" type="email" value="{{ $contact->email }}" class="form-control" id="email" placeholder="Enter your email">
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input name="phone" type="tel" value="{{ $contact->phone }}" class="form-control" id="phone" placeholder="Enter your phone number">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea name="msg" class="form-control"  id="message" rows="4" placeholder="Write your message">{{ $contact->msg }}</textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Upload Image</label>
      <input name="image" class="form-control"  type="file" id="image" accept="image/*">
    </div>
    <div class="mb-3">
      <label class="form-label">Image :</label>
      <img  src="{{ asset('uploads/' . $contact->image) }}" style="width: 150px;">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


</body>
</html>
