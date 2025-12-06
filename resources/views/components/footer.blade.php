<footer id="footer" class="footer-texts-more-lighten">
    <div class="container">
        <!-- Contact Info Row -->
        <div class="row py-4 my-5">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-4 text-light mb-3">CONTACT</h5>
                <ul class="list list-unstyled">
                    <li class="pb-1">
                        Tantus Corporation
                    </li>
                    <li class="pb-1">
                        <span class="d-block font-weight-normal line-height-1 text-light">TOLL FREE</span>
                        <a href="tel:+18663087418">(866) 308-7418</a>
                    </li>
                    <li class="pb-1">
                        <span class="d-block font-weight-normal line-height-1 text-light">TEL</span>
                        <a href="tel:+16472589657">(647) 258-9657</a>
                    </li>
                    <li class="pb-1">
                        <span class="d-block font-weight-normal line-height-1 text-light">FAX</span>
                        (647) 258-9658
                    </li>
                    <li class="pb-1">
                        <span class="d-block font-weight-normal line-height-1 text-light">EMAIL</span>
                        <a href="mailto:sales@tantuscorp.com">sales@tantuscorp.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-4 text-light mb-3">PRODUCTS</h5>
                <ul class="list list-unstyled mb-0">
                    <li class="mb-0"><a href="{{ url('') }}">Product Overview</a></li>
                    <li class="mb-0"><a href="{{ url('/portables') }}">Portables</a></li>
                    <li class="mb-0"><a href="{{ url('/chillers') }}">Central Chillers</a></li>
                    <li class="mb-0"><a href="{{ url('/pumps-and-reservoirs') }}">Pumps &amp; Reservoirs</a></li>
                    <li class="mb-0"><a href="{{ url('/tower') }}">Towers</a></li>
                    <li class="mb-0"><a href="{{ url('/temperature-control-units') }}">Temperature Control Units</a></li>
                    <li class="mb-0"><a href="{{ url('/accessories') }}">Accessories</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-4 text-light mb-3">SOLUTIONS</h5>
                <ul class="list list-unstyled mb-0">
                    <li class="mb-0"><a href="{{ url('/cooling-load-analysis') }}">Cooling Load Analysis</a></li>
                    <li class="mb-0"><a href="{{ url('/troubleshooting') }}">Trouble Shooting</a></li>
                    <li class="mb-0"><a href="{{ url('/energy-audits') }}">Energy Audits</a></li>
                    <li class="mb-0"><a href="{{ url('/free-cooling') }}">Free Cooling</a></li>
                    <li class="mb-0"><a href="{{ url('/installation-and-startup') }}">Installation &amp; Start Up</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-4 text-light mb-3">OUR PARTNERSHIP</h5>
                <div class="d-flex align-items-top">
                    <img
                        src="{{ asset('thermalcare.jpg') }}"
                        alt="Thermal Care Logo"
                        style="height: 60px; background-color: #fff; padding: 6px; border-radius: 6px; box-shadow: 0 0 6px rgba(0,0,0,0.4);"
                        class="me-3"
                    />
                    <p class="mb-0 text-light">
                        We are the <strong>exclusive representative</strong> for <strong>Thermal Care</strong> — delivering high-performance industrial process cooling solutions.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Copyright -->
    <div class="container">
        <div class="footer-copyright footer-copyright-style-2 pt-4 pb-5">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">Tantus Corporation © <i id="footer-year"></i></p>
                    <script>
                        document.getElementById('footer-year').textContent = new Date().getFullYear();
                    </script>
                </div>
            </div>
        </div>
    </div>
</footer>
