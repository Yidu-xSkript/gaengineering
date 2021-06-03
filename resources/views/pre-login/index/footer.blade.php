<!-- ======= Footer ======= -->
<?php
    $setting = App\Models\Setting::first();
?>
@include('partials.error2')
@include('partials.success2')
<footer id="footer" class="pb-4">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>GA Engineering</h3>
                    <p>Gezahegn Ayalew General Trading is a private company established in 2010 We specialize in
                        Providing Better Services for Supply And Installation Works of Electro-Mechanical and related
                        Equipment In Ethiopia...</p>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About us</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                        <li><a href="/news">News</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        <?= $setting->location; ?><br/>
                        <strong>Phone:</strong> {{$setting->phone_number}}<br>
                        <strong>Email:</strong> {{$setting->email}}<br>
                    </p>

                    <div class="social-links">
                        @if (!is_null($setting->twitter)) <a href="{{$setting->twitter}}" class="twitter"><i class="icofont-twitter"></i></a> @endif
                        @if (!is_null($setting->facebook)) <a href="{{$setting->facebook}}" class="facebook"><i class="icofont-facebook"></i></a> @endif
                        @if (!is_null($setting->instagram)) <a href="{{$setting->instagram}}" class="instagram"><i class="icofont-instagram"></i></a> @endif
                        @if (!is_null($setting->skype)) <a href="{{$setting->skype}}" class="google-plus"><i class="icofont-skype"></i></a> @endif
                        @if (!is_null($setting->linked_in)) <a href="{{$setting->linked_in}}" class="linkedin"><i class="icofont-linkedin"></i></a> @endif
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p> Subscribe to our newsletter to be notified of our new projects.</p>
                    <form action="/subscribe" method="post">
                        @csrf
                        <input type="email" name="email" required><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>
    <hr>
    <div class="text-center pt-2">
        <span class=" d-block text-center" style="font-size: 14px;">Copyright © <?= date('Y');?>
            <span style="color: #1E90FF; font-weight:700;">GA Engineering</span>. All rights reserved.</span>
      </span>
    </div>
</footer>

<!-- End Footer -->
