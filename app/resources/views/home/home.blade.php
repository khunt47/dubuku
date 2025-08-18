<h3 class="mt-5">&#x1F44B; Hello {{ Auth::user()->first_name.' '.Auth::user()->last_name }}</h3>
<br><br>
<div class="row">
    <!-- Card starts -->
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center">
        <div class="card text-center custom-card shadow-sm">
            <div class="card-body p-3">
                <a href="/projects">
                    <img src="/static/images/bank.png" class="card-image img-fluid mb-3">
                    <h5 class="card-title mb-0">Projects</h5>
                </a>
            </div>
        </div>
    </div>
    <!-- Card ends -->
</div>