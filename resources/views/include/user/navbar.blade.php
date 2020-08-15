<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark py-4 ">
    <a class="navbar-brand @yield('menuHome') pl-5" href="/" id="font1"><b>TaniTech</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end  px-5" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link @yield('menuHome')" href="/" id="font">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('menuProduct')" href="/product" id="font">Product</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @yield('menuClient')" href="/clients" id="font">Client</a>
          </li>
        <li class="nav-item">
          <a class="nav-link @yield('menuContact')" href="/contact-us" id="font">Contact us</a>
        </li>
      </ul>
    </div>
  </nav>
</div>