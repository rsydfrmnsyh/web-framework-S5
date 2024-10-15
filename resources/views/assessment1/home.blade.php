@include('assessment1.header',['title' => 'Home'])

<style>
    .carousel-item {
        height: 500px;
    }
    .carousel-item:nth-child(2) {
        background-color: #99ccff; /* Light Blue */
    }
    .carousel-item:nth-child(3) {
        background-color: #99ff99; /* Light Green */
    }
    img {
    width: 100%; /* Scale the image to fill the width of the container */
    height: auto; /* Maintain the aspect ratio */
    object-fit: cover; /* Cover the container while maintaining aspect ratio */
    }
</style>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/mochi1.jpg') }}" class="d-block w-100" alt="Image 1">
            <div class="carousel-caption d-none d-md-block" style='color: black; text-align: left;background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(5px); padding: 20px; border-radius: 10px;'>
                <h2>Mochi</h2>
                <p>Description for slide 1 goes here.</p>
            </div>
        </div>
        <div class="carousel-item active">
            <img src="{{ asset('images/mochi2.jpg') }}" class="d-block w-100" alt="Image 1">
            <div class="carousel-caption d-none d-md-block" style='color: black; text-align: left; background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(5px); padding: 20px; border-radius: 10px;'>
                <h2>Mochi Daifuku</h2>
                <p>Description for slide 1 goes here.</p>
            </div>
        </div>
        <div class="carousel-item active">
            <img src="{{ asset('images/mochi3.jpg') }}" class="d-block w-100" alt="Image 1">
            <div class="carousel-caption d-none d-md-block" style='color: black; text-align: left; background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(5px); padding: 20px; border-radius: 10px;'>
                <h2>Mochi Dango</h2>
                <p>Description for slide 1 goes here.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container mt-4">
    <section id="home" class="mb-4">
        <h2>contoh</h2>
        <p>masukin konten disini, kalo ga gapapa, hapus aja, kalo perlu lebih copy paste lg</p>
    </section>
</div>


@include('assessment1.footer')