<section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

        <div class="section-title">
            <h2>About</h2>
            <p>Learn more about me</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{asset('assets/fe/assets/img/profile_adi_ppkd.jpeg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>UI/UX &amp; Graphic Designer</h3>
                <p class="fst-italic">

                </p>
                <div class="row">



                    <div class="col-lg-6">
                        <ul>
                            <li><a href=""><i
                                    class="bi bi-chevron-right"><strong>Birthday:</strong>{{ $profile->tgl_lahir }}</i></a>
                            </li>
                            <li><a href=""><i
                                    class="bi bi-chevron-right"><strong>Phone:</strong>{{ $profile->telpon }}</i></a></li>
                            <li><a href=""><i
                                    class="bi bi-chevron-right"><strong>City:</strong>{{ $profile->alamat }}</i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><a href=""><i
                                    class="bi bi-chevron-right"><strong>Age:</strong>{{ $profile->usia }}</i></a></li>
                            <li><a href=""><i
                                    class="bi bi-chevron-right"><strong>Degree:</strong>{{ $edlast->lulusan }}</i></a></li>
                            <li><a href=""><i
                                    class="bi bi-chevron-right"><strong>Email:</strong>{{ $profile->email }}</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End About Me -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

        <div class="section-title">
            <h2>Skills</h2>
        </div>

        <div class="row skills-content">

            <div class="col-lg-6">
                        <div>
                @foreach ($skills as $skill)

                <div class="progress">
                    <span class="skill">{{ $skill->skill }}<i class="val">{{$skill->persentase}}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->persentase }}" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                @endforeach
                        </div>

                {{-- <div class="progress">
                    <span class="skill">CSS <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">JavaScript <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill">PHP <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Photoshop <i class="val">55%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                            aria-valuemax="100"></div> --}}
                    </div>
                </div>

            </div>

        </div>

    </div><!-- End Skills -->
</section>
