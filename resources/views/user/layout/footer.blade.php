<footer id="footer" class="footer" style="background: #98dee1">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">{{ $company->name?? "Company" }}</span>
          </a>
          <div class="footer-contact pt-3">
            <p>{{ $company->address ?? "address will be hare" }}</p>
            
            <p class="mt-3"><strong>Phone:</strong> <span>{{ $company->phone ?? '+8801xxxxxxxxxxx' }}</span></p>
            <p><strong>Email:</strong> <span>{{ $company->email ?? "demo@gmail.com" }}</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="{{ $company->whatsapp ?? '#' }}"><i class="bi bi-whatsapp"></i></a>
            <a href="{{ $company->facebook ?? '#'}}"><i class="bi bi-facebook"></i></a>
            <a href="{{ $company->instagram ?? '#'}}"><i class="bi bi-instagram"></i></a>
            <a href="{{ $company->linkdin ?? '#'}}"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 footer-links">
          <h4>Home Section</h4>
          <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('home') }}#about">About us</a></li>
            <li><a href="{{ route('home') }}#service">Product</a></li>
            <li><a href="{{ route('home') }}#management">Management</a></li>
            <li><a href="{{ route('home') }}#gallery">Gallery</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-3 footer-links">
          <h4>Pages</h4>
          <ul>
            <li><a href="{{ route('delearlist') }}">Dealer List</a></li>
            <li><a href="{{ route('delearform') }}">Request Form</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Vision</h4>
          <div>
            {{ ($company) ? substr($company->footer_text,0,170) : "company footer" }}
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid d-flex justify-content-center mt-4" style="background:#1cadb3b8;color:#fff">
      <p class="pt-3">© <span>Copyright</span> <strong class="px-1 sitename">Link Up Technology</strong> <span>All Rights Reserved</span></p>
     
    </div>

  </footer>