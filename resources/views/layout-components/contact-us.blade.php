<section class="contactus" id="contacts">
    <div class="container mx-auto">
        <div class="contactus-row flex flex-wrap  lg:mx-0">
            <div class="contactus_column px-3.5 w-full relative lg:px-0 lg:flex-[0_0_58.333333%] flex-[0_0_100%] ">
                <div class="contactus_form bg-red-226 p-5 lg:py-16 lg:px-12 lg:mb-[-50px] lg:ml-[-30px]">
                    <h4 class="text-xl lg:text-4xl font-bold text-white mb-7">Leave a request and we will find the best conditions for you.</h4>
                   <!-- <form id="myForm" class="myForm"  method="post"> -->
                   <form id="myForm" class="myForm" action="{{ route('send.email') }}" method="post">
                        @csrf
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                       <div class="form_row flex flex-wrap mx-[-15px]">
                            <div class="form_column flex-[0_0_100%] relative w-full px-3.5">
                                <div class="form-group mb-5 ">
                                    <input type="text" name="name" class="form-control" placeholder="Name*" required="">
                                    <div class="error text-yellow-400">{{$errors->first('name')}} </div> 
                                </div>
                            </div>
                            <input class="hidden" type="text" name="subject" placeholder="subject" value="Client nou!">
                            <div class="form_column flex-[0_0_100%] lg:flex-[0_0_50%] relative w-full px-3.5">
                                <div class="form-group mb-5 ">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone*" required="">
                                    <div class="error text-yellow-400"> {{$errors->first('phone')}}</div> 
                                </div>
                            </div>
                            <div class="form_column flex-[0_0_100%] lg:flex-[0_0_50%] relative w-full px-3.5">
                                <div class="form-group mb-5 ">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <div class="error text-yellow-400"> {{$errors->first('email')}}</div> 
                                </div>
                            </div>
                            <div class="form_column flex-[0_0_100%] relative w-full px-3.5">
                                <div class="form-group mb-5 ">
                                    <textarea class="form-control !h-auto" rows="4" name="message" placeholder="Leave an message" required=""></textarea>
                                    <div class="error text-yellow-400">{{$errors->first('message')}} </div> 
                                </div>
                            </div>
                            <div class="form_column flex-[0_0_100%] relative w-full px-3.5">
                                <div class="form-group mb-5 ">
                                    <input type="checkbox" class="checkbox"  name="agree" id="agreeterms" value="1"  >
                                        <!-- <span class="checkmark bg-white w-5 h-5 absolute top-0 left-0 border-1 border-solid border-gray-300"></span> -->
                                    <label class="custom-checkbox">
                                        <span class="text-white">I agree with the data processing policy</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form_column flex-[0_0_100%] relative w-full px-3.5">
                                <button type="submit" class="btn-submit ">Submit</button>
                            </div>
                       </div>
                   </form>
                </div>
            </div>
            <div class="contactus_column px-3.5 w-full relative lg:px-0 lg:flex-[0_0_41.666667%] flex-[0_0_100%] ">
                <div class="contactus_info" >
                    <h4 class="text-xl lg:text-4xl font-black text-black mb-7">We will be happy to answer your questions</h4>
                    <ul class="locations">
                        <li class="location-item">
                            <a href="#pills-0" class="location-link">Chisinau</a>
                        </li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab-panel">
                            <ul class="custom">
                                <li>
                                    <h5 class="title-contact-label">
                                        <span class="icon-contact  icon-pin-1"></span>
                                       Adsress
                                    </h5>
                                    <p class="decription-contact"> Independentei 20/4</p>
                                </li>
                                <hr class="my-4">
                                <ul class="custom">
                                <li>
                                    <h5 class="title-contact-label">
                                        <span class="icon-contact  icon-mail-1"></span>
                                        Email
                                    </h5>
                                    <a href="mailto:z61149036@gmail.com" class="decription-contact"> z61149036@gmail.com </a>
                                </li>
                                <hr class="my-4">
                                <ul class="custom">
                                <li>
                                    <h5 class="title-contact-label">
                                        <span class="icon-contact  icon-phone"></span>
                                        Phone
                                    </h5>
                                    <a href="tel:069000000" class="decription-contact">+373 069932625 </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>