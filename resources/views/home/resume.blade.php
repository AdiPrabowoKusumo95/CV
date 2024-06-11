<section id="resume" class="resume">
    <div class="container">

        <div class="section-title">
            <h2>Resume</h2>
            <p>Check My Resume</p>
        </div>

        <div class="row">

                <h3 class="resume-title">Education</h3>
                @foreach ($educations as $education )


                <div class="resume-item">
                    <h4>{{ $education->lulusan }} | {{ $education->jurusan }}</h4>
                    <h5>{{ $education->tahun_awal }} - {{ $education->tahun_akhir }}</h5>
                    <p><em>{{ $education->nama_sekolah }}</em></p>
                    <p>{{ $education->deskripsi }}</p>
                </div>
                @endforeach
            </div>
            <div class="col-lg-6">
                <h3 class="resume-title">Experience</h3>
                    @foreach ($experience as $experience )


                <div class="resume-item">
                    <h4>{{$experience->jabatan}}</h4>
                    <h5>{{$experience->tgl_mulai}} - {{ $experience->tgl_akhir }}</h5>
                    <p><em>{{$experience->nama_pt}}</em></p>
                    <p>
                    <ul>
                        <li><?= $experience->deskripsi ?></li>
                    </ul>
                    </p>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
