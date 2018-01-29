<div class="container-fluid bg-green-color">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="subscribe scrollme">
                    <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                        <h4 class="subscribe-title">Email Newsletters!</h4>
                        <form class="subscribe-form" method="post" action="/subscribe">
                            {{ csrf_field() }}
                            <input class="email input-standard-grey input-white" name="email" required="required" placeholder="Your Email Address" type="email">
                            <button class="subscr-btn" type="submit">subscribe
                                <span class="semicircle--right"></span>
                            </button>
                        </form>
                        <div class="sub-title">Sign up for new Seosignt content, updates, surveys &amp; offers.</div>

                    </div>

                    <div class="images-block">
                        <img src="{{asset('app/img/subscr-gear.png')}}" alt="gear" class="gear" style="opacity: 1; transform: rotateZ(360deg);">
                        <img src="{{asset('app/img/subscr1.png')}}" alt="mail" class="mail" style="opacity: 1; bottom: 0px;">
                        <img src="{{asset('app/img/subscr-mailopen.png')}}" alt="mail" class="mail-2" style="opacity: 1; right: 20px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
