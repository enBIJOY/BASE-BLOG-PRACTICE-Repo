@extends('frontend.layout.app')
@section('title','About Us Page')
@section('content')

<section>
    <div class="px-4 py-5 mt-5 text-start">
    <img class="d-block mx-auto mb-4" src="base/img/logo/logo.svg" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold text-center">About Company</h1>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="{{url('/')}}" class="btn btn-primary btn-lg px-4 gap-3">
            Home
        </a>
        <a href="{{route('letestNews')}}" class="btn btn-outline-secondary btn-lg px-4">
            News
        </a>
    </div>
</section>
    <div class="py-2"><hr class="my-2"></div>
<section class="about-agency pad-tb block-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 v-center">
                <div class="about-image">
                    <img src="https://dgtalspace.com/uploads/about/about-us.svg" alt="about us" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="common-heading text-l ">
                    <span>Know about us</span>
                    <h2>About The News</h2>
                    <p>At <strong>Dgtalspace</strong>, we are passionate about technology. Our clients come to us seeking customized, skillfully crafted business applications. Our longevity is due to the skill and efficiency of our team of senior software engineers, project managers, and devops staff.</p><p>We specialize in enterprise business applications that optimize business processes and handle large amounts of data and traffic. We only produce modern software with a focus on <u>quality, usability, and scalability</u>.</p><p>All of our engineers are onshore salaried staff. We do not believe in mitigating cost at the risk of quality. Instead, we manage project costs by implementing an efficient development process, providing our clients with complete project transparency, and building software right the first time using the latest standards and best practices.</p>
                </div> 
            </div>
            <div class="col-lg-12">
                <p><br></p>
            </div>
        </div>
    </div>
</section>



        <!-- <div class="my-5 container" id="mission">
            <h4>Mission</h4>
            <hr class="my-2">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam impedit sapiente asperiores nesciunt doloribus. Sit quis quod tenetur voluptatem, quasi nam qui totam distinctio molestias consequatur cupiditate id quam impedit hic eligendi mollitia vel amet optio maiores? Quod similique numquam dignissimos, fuga nisi, ut quidem eos obcaecati suscipit sunt mollitia qui beatae ea voluptatibus nesciunt odit debitis pariatur veniam doloremque reiciendis ab! Nostrum, possimus consequuntur eum voluptates soluta tempore cum, illum cumque et expedita voluptatem. Non saepe accusantium quis odit obcaecati adipisci ut dolores? Consequatur est illo tempora ratione, sed consequuntur cum aut deleniti debitis. Perspiciatis facere quod facilis, amet omnis unde tenetur vero quasi sit sequi nesciunt minus non eaque excepturi similique alias deleniti molestias officiis animi. Quisquam perferendis aperiam provident doloremque impedit laboriosam veniam dignissimos at error veritatis voluptates voluptatibus sint assumenda natus exercitationem quae reprehenderit neque, itaque corrupti facilis eum consectetur iusto! Magnam, enim. Numquam sequi laborum eum eveniet eius commodi? Velit rerum excepturi voluptates deleniti sequi dignissimos natus at saepe praesentium sed eius ratione asperiores placeat veritatis ullam autem, delectus aliquam dolores dicta aut. Animi praesentium repellat explicabo ullam? Iusto est similique consequuntur, molestias aliquam veritatis, repellendus, aspernatur odio eum nostrum perspiciatis assumenda enim soluta sit harum. Sed impedit consectetur ut voluptates. Aliquid nulla quaerat cum obcaecati mollitia? Consequatur earum, nostrum est temporibus impedit expedita laboriosam, nam commodi porro quidem in cumque fugiat beatae recusandae pariatur dicta velit mollitia? Ipsam amet facilis maiores in blanditiis nesciunt nam dignissimos tenetur? Eius eum totam, harum pariatur ex impedit obcaecati saepe quae nemo deleniti, accusamus qui debitis magnam hic nisi quibusdam culpa! Adipisci ratione explicabo, quisquam quibusdam, nam exercitationem eos, amet iusto modi labore consequuntur facilis suscipit accusamus deserunt totam perspiciatis aspernatur sed error assumenda sit! Odio accusantium repudiandae mollitia unde distinctio, esse fugiat aspernatur, maiores in est quam?</p>
            <p class="lead mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum quaerat vitae explicabo aspernatur pariatur culpa qui provident illo doloribus nemo saepe iusto adipisci neque dolor hic voluptatum debitis delectus tenetur quod eius nulla, repellat beatae. Dolor ipsam voluptatibus incidunt atque repellat iure odit ducimus, labore in quia eligendi deserunt libero animi quidem laboriosam neque nobis impedit qui soluta aspernatur saepe ab repudiandae? Quos est voluptas fugiat assumenda vero, quidem ea.</p>
        </div>
        <div class="py-2"><hr class="my-4"></div>   
        <div class="my-3 container" id="vission">
            <h4>vission</h4>
            <hr class="my-0">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam impedit sapiente asperiores nesciunt doloribus. Sit quis quod tenetur voluptatem, quasi nam qui totam distinctio molestias consequatur cupiditate id quam impedit hic eligendi mollitia vel amet optio maiores? Quod similique numquam dignissimos, fuga nisi, ut quidem eos obcaecati suscipit sunt mollitia qui beatae ea voluptatibus nesciunt odit debitis pariatur veniam doloremque reiciendis ab! Nostrum, possimus consequuntur eum voluptates soluta tempore cum, illum cumque et expedita voluptatem. Non saepe accusantium quis odit obcaecati adipisci ut dolores? Consequatur est illo tempora ratione, sed consequuntur cum aut deleniti debitis. Perspiciatis facere quod facilis, amet omnis unde tenetur vero quasi sit sequi nesciunt minus non eaque excepturi similique alias deleniti molestias officiis animi. Quisquam perferendis aperiam provident doloremque impedit laboriosam veniam dignissimos at error veritatis voluptates voluptatibus sint assumenda natus exercitationem quae reprehenderit neque, itaque corrupti facilis eum consectetur iusto! Magnam, enim. Numquam sequi laborum eum eveniet eius commodi? Velit rerum excepturi voluptates deleniti sequi dignissimos natus at saepe praesentium sed eius ratione asperiores placeat veritatis ullam autem, delectus aliquam dolores dicta aut. Animi praesentium repellat explicabo ullam? Iusto est similique consequuntur, molestias aliquam veritatis, repellendus, aspernatur odio eum nostrum perspiciatis assumenda enim soluta sit harum. Sed impedit consectetur ut voluptates. Aliquid nulla quaerat cum obcaecati mollitia? Consequatur earum, nostrum est temporibus impedit expedita laboriosam, nam commodi porro quidem in cumque fugiat beatae recusandae pariatur dicta velit mollitia? Ipsam amet facilis maiores in blanditiis nesciunt nam dignissimos tenetur? Eius eum totam, harum pariatur ex impedit obcaecati saepe quae nemo deleniti, accusamus qui debitis magnam hic nisi quibusdam culpa! Adipisci ratione explicabo, quisquam quibusdam, nam exercitationem eos, amet iusto modi labore consequuntur facilis suscipit accusamus deserunt totam perspiciatis aspernatur sed error assumenda sit! Odio accusantium repudiandae mollitia unde distinctio, esse fugiat aspernatur, maiores in est quam?</p>
            <p class="lead mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum quaerat vitae explicabo aspernatur pariatur culpa qui provident illo doloribus nemo saepe iusto adipisci neque dolor hic voluptatum debitis delectus tenetur quod eius nulla, repellat beatae. Dolor ipsam voluptatibus incidunt atque repellat iure odit ducimus, labore in quia eligendi deserunt libero animi quidem laboriosam neque nobis impedit qui soluta aspernatur saepe ab repudiandae? Quos est voluptas fugiat assumenda vero, quidem ea.</p> -->
        <!-- </div>
    </div>
    <div class="py-0"><hr class="my-0"></div>  
    <div class="b-example-divider bg-info"></div>
    <div class="text-center mt-5">
        <h1>Newsletter form</h1>
    </div>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero Newsletter form</h1>
                <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5"> -->
                <!-- <form class="ajax-form" data-action="{{ route('newsletter') }}">
                    @csrf
                    <input type="text" name="name" />
                    <input type="email" name="email" />
                    <button type="submit">Subscribe</button>
                    <div class="responseMessage"></div>
                </form> -->
                <!-- <form class="ajax-form" data-action="{{ route('newsletter') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                    </div> -->
                    <!-- <div class="form-floating mb-3">
                        <label >Full Name</label>
                        <input type="text" class="form-control" placeholder="Tareq bil">
                    </div>   
                    <div class="form-floating mb-3">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="name@example.com">
                    </div> -->
                        <!-- <button class="w-100 btn btn-lg btn-primary" type="submit">submit</button>
                        <hr class="my-4">
                        <small class="text-muted">By clicking submit, you agree to the terms of use.</small>
                    <div class="responseMessage"></div>
                </form>
            </div>
        </div>
    </div> -->

@endsection