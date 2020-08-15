
<div class="container-fluid bg-secondary text-light py-5 text-center" >
    <div class="row py-5">
        <div class="col-md-12">
            <h1 id="aboutvh"><u>See Our Products</u></h1>
            <button class="btn btn-outline-light mt-5">Our Products</button>
        </div>
    </div>
</div>


<div class="container-fluid bg-dark text-light py-5" >
    <div class="container pt-5">
        <div class="row pt-5">
            <div class="col-md-1 pt-5">
                <h3 id="font1" style="font-size: 40px">
                    TaniTech
                </h3>
            </div>
            <div class="col-md-3"></div>

            <div class="col-md-3">
                <h3>Address</h3>
                 @forelse ($footer as $item)
                        <p>{{ $item->address }}</p>
                @empty
                        <td colspan="9" class="text-center">Data Kosong</td>
                @endforelse
            </div>

            <div class="col-md-3">
                <h3>Menu Utama</h3>
                <p class="text-light">
                    <a href="">Home</a> <br>
                    <a href="">Product</a> <br>
                    <a href="">Client</a> <br>
                    <a href="">Cntact</a>
                </p>
            </div>
            <div class="col-md-2">
                <h3>Follow Us</h3>
                <p>
                    <a href="">Facebook</a> <br>
                    <a href="">Instagram</a> <br>
                </p>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark py-5 text-light text-center" id="foot">
    <div class="container">
        Copyright &copy; TaniTech 2020
    </div>
</footer>
