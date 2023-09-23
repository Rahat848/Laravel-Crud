<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      {{-- navbar added --}}
      @include('./layout/navbar')
      <h1 class="text-center bg-primary text-light">Welcome to Contact Page!</h1>
      <div class="card text-center">
        <div class="card-header">
            <h3>Md Rahat Hossain</h3>
        </div>
        <div class="card-body">
          <h5 class="card-title">Full Stack Web Developer</h5>
          <p class="card-text">Hey!!! I am a Full Stack Web Developer with a list of skills in HTML, CSS, Bootstrap, Tailwind, Mui, JavaScript, ES6, React, Redux, React Js, Next Js, Router, Firebase, Express Js, Node, MongoDB, JWT, Heroku, Git/Github, Netlify, etc. I enjoy being challenged and engaging with projects that require me to work outside my comfort and knowledge set, as continuing to learn new things and development techniques are important to me and the success of my work field. My Focus is to give my clients exactly what they need and guide them all through the procedure.💕.</p>
          <a href="home" class="btn btn-primary">Go To Home</a>
        </div>
        <div class="card-footer text-body-secondary">
         <h5>Phone: 99999</h5>
         <h5>Gmail: example@gmail.com</h5>
        </div>
      </div>

     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
