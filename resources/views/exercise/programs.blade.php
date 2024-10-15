@include('header',['title' => 'Programs'])

<div class="container py-5">
    <h1 class="text-center mb-5">Program Showcase</h1>

    <div class="row g-4">
        <!-- Program A -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h2 class="card-title">Program A</h2>
                    <p class="card-text">This program focuses on web development. Learn HTML, CSS, and JavaScript.</p>
                    <a href="/program/a" class="btn btn-success">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Program B -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h2 class="card-title">Program B</h2>
                    <p class="card-text">This program dives into data science, covering Python, machine learning, and data visualization.</p>
                    <a href="/program/b" class="btn btn-success">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Program C -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h2 class="card-title">Program C</h2>
                    <p class="card-text">This program covers mobile app development, focusing on both Android and iOS platforms.</p>
                    <a href="/program/c" class="btn btn-success">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')