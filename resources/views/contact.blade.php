<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
</head>
<body>
    <form method="post" action={{route('contact.store')}}>
        {{csrf_field()}}
    <h1 class="title">Example Form</h1>

<div class="field">
           <div class="control">
                <label>First Name:</label>
                <input type="text" class="input" name="fname">
</div>
</div>

<div class="field">
                <div class="control">
                <label>Last Name:</label>
                <input type="text" class="input" name="lname">
</div>
</div>

<div class="field">
                <div class="radio">
                <label class="radio">
                    <input type="radio" name="gender" value="male">
                    Male
                </label>
                <label class="radio">
                    <input type="radio" name="gender" value="female">
                    Female
                </label>
</div>
</div>

<div class="field">
                <div class="checkbox">
                <label class="checkbox">
                    <input type="checkbox">
                    Studying at Ryerson
                </label>
</div>
</div>
    <div class="field">
                <div class="select is-rounded">
                    <select name="browser" id="1">
                    <option value="null">Select browser</option>
                        <option value="chrome">Google Chrome</option>
                        <option value="firefox">Mozilla Firefox
                        </option>
                        <option value="safari">Safari</option>
                    </select>
                    

                </div>
</div>

<div class="field">
  <label class="label">Message</label>
  <div class="control">
    <textarea class="textarea" placeholder="Enter a small message..."></textarea>
  </div>
</div>
          <div class="field">
              <button class="button is-link">Submit</button>
          </div>



</body>
</html>