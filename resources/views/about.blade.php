@extends('master')

@section('site-content')


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>


  <!-- About Software Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="display-4 text-center mb-5">About Our Software</h2>

      <!-- Description Section -->
      <div class="row">
        <div class="col-lg-6">
          <h3>What is Our Software?</h3>
          <p>Our software is a powerful tool designed to streamline tasks, improve productivity, and enhance collaboration in your organization.</p>
          <p>With intuitive features and a user-friendly interface, our software helps teams work smarter and achieve better results.</p>
        </div>
        <div class="col-lg-6">
          <img src="https://nulivo.s3.us-east-2.amazonaws.com/media/users/pierre/products/1625/screenshots/Project-Task-Tracker-PowerPoint-Template-06.jpg?v=1/600*400" alt="Software" class="img-fluid">
        </div>
      </div>

      <!-- Features Section -->
      <div class="row mt-5">
        <div class="col-lg-6">
          <h3>Key Features</h3>
          <ul>
            <li>Task Management</li>
            <li>Document Sharing</li>
            <li>Team Collaboration</li>
            <li>Customizable Dashboard</li>
            <li>Real-time Updates</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <h3>Why Choose Our Software?</h3>
          <p>Our software stands out from the competition because of its simplicity, reliability, and powerful features.</p>
          <p>Whether you're a small business or a large enterprise, our software adapts to your needs and helps you achieve your goals.</p>
        </div>
      </div>

      <!-- Team Section -->
      <div class="row mt-5">
        <div class="col-lg-12">
          <h3>Meet Our Team</h3>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <img src="https://img.freepik.com/free-photo/medium-shot-smiley-man-sitting-desk_23-2149927603.jpg" class="card-img-top" alt="Team Member">
            <div class="card-body">
              <h5 class="card-title">John Doe</h5>
              <p class="card-text">Lead Developer</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <img src="https://media.istockphoto.com/id/1626847905/photo/a-happy-businessman-looking-at-camera-while-working-on-his-computer.webp?b=1&s=170667a&w=0&k=20&c=ngkRyEArmiLyrWFvRPR0O-0E8rQ-HKq6tL09QmYaa44=" class="card-img-top" alt="Team Member">
            <div class="card-body">
              <h5 class="card-title">Jane Smith</h5>
              <p class="card-text">UX/UI Designer</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <img src="https://media.istockphoto.com/id/1369199360/photo/portrait-of-a-handsome-young-businessman-working-in-office.jpg?s=612x612&w=0&k=20&c=ujyGdu8jKI2UB5515XZA33Tt4DBhDU19dKSTUTMZvrg=" class="card-img-top" alt="Team Member">
            <div class="card-body">
              <h5 class="card-title">Mike Johnson</h5>
              <p class="card-text">Marketing Manager</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


@endsection