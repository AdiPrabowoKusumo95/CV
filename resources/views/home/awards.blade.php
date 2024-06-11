<section id="awards" class="awards">
    <div class="container">

        <div class="section-title">
            <h2>Sertifikasi</h2>
            @foreach ($certifications as $certification)
            <div class="resume-section-content">
                <ul class="fa-ul mb-0">
                    <li style="color: grey">
                        <span class="fa-li"> <i class="fas fa-trophy text-warning"></i><strong>{{$certification->nama_sertifikasi}}</strong></span>
                    </li>
                    <i style="color: green">Diselenggarakan oleh : {{$certification->penyelenggara}} <br>
                    Pada Tahun : {{$certification->tahun}} </i>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>
