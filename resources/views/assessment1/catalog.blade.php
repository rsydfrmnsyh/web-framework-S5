@include('assessment1.header',['title' => 'Catalog'])

<div class="container mt-5">
    <h1 class="text-center mb-4">Catalog</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card catalog-card mb-4" onclick="location.href=''">
                <img src="{{ asset('images/item1.jpg') }}" class="card-img-top" alt="Item 1">
                <div class="card-body">
                    <h5 class="card-title">Item 1</h5>
                    <p class="card-text">This is a short description of item 1. It highlights key features and benefits.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card catalog-card mb-4" onclick="location.href=''">
                <img src="{{ asset('images/item2.jpg') }}" class="card-img-top" alt="Item 2">
                <div class="card-body">
                    <h5 class="card-title">Item 2</h5>
                    <p class="card-text">This is a short description of item 2. It highlights key features and benefits.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- copy paste block ini dari div row sampe bawah kalo mau bikin block lg -->
</div>

@include('assessment1.footer')