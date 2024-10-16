@include('assessment1.header', ['title' => 'Home'])

<style>
    .carousel-item {
        height: 500px;
    }

    .carousel-item:nth-child(2) {
        background-color: #99ccff;
        /* Light Blue */
    }

    .carousel-item:nth-child(3) {
        background-color: #99ff99;
        /* Light Green */
    }

    img {
        width: 100%;
        /* Scale the image to fill the width of the container */
        height: auto;
        /* Maintain the aspect ratio */
        object-fit: cover;
        /* Cover the container while maintaining aspect ratio */
    }
</style>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/mochi1.jpg') }}" class="d-block w-100" alt="Image 1">
            <div class="carousel-caption d-none d-md-block"
                style='color: black; text-align: left;background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(5px); padding: 20px; border-radius: 10px;'>
                <h2>Mochi</h2>
                <p>Mochi ini adalah yang paling klasik karena biasanya sering kita jumpai sebagai pendamping hidangan lainnya.</p>
            </div>
        </div>
        <div class="carousel-item active">
            <img src="{{ asset('images/mochi2.jpg') }}" class="d-block w-100" alt="Image 1">
            <div class="carousel-caption d-none d-md-block"
                style='color: black; text-align: left; background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(5px); padding: 20px; border-radius: 10px;'>
                <h2>Mochi Daifuku</h2>
                <p>Mochi ini memiliki Isian yang bervariasi, mulai dari anko yang manis, yang terbuat dari kacang
                    merah yang direbus dan dihaluskan, hingga isian modern seperti es krim, cokelat, atau buah-buahan
                    seperti stroberi dan mangga.</p>
            </div>
        </div>
        <div class="carousel-item active">
            <img src="{{ asset('images/mochi3.jpg') }}" class="d-block w-100" alt="Image 1">
            <div class="carousel-caption d-none d-md-block"
                style='color: black; text-align: left; background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(5px); padding: 20px; border-radius: 10px;'>
                <h2>Mochi Dango</h2>
                <p>Mochi ini sangat unik karena ditusuk dengan tusuk sate. Dango memiliki tekstur yang kenyal dan
                    lembut, mirip dengan mochi, tetapi biasanya memiliki ukuran yang lebih besar dan berbentuk bola.</p>
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
        <h2>SELAMAT DATANG DI MOCHIHUB</h2>
        <p>Temukan kelezatan mochi terbaik dan menyenangkan hanya disini! Mochi yang kami sajikan berkualitas terbaik,
            mulai dari varian klasik hingga kreasi modern. Tidak hanya itu, kami menghadirkan mochi dengan tekstur
            lembut dan rasa yang memikat. Rasakan kenikmatan dalam setiap gigitannya! Jelajahi pilihan kami dan temukan
            favorit baru Anda!</p>
    </section>
</div>

@include('assessment1.footer')