<section id="awards" class="awards">
    <div class="container">

        <div class="section-title">
            <h2>Awards</h2>
            <p>Check My Awards</p>
        </div>

        <div class="row">

                <h3 class="awards-title">Sertifikasi</h3>
                @foreach ($certifications as $c )


                <div class="awards-item">
                    <h4>Nama Sertifikasi : {{ $c->nama_sertifikasi }}</h4>
                    <h5> Diselenggarakan oleh : {{ $c->penyelenggara }}</h5>
                    <p>Pada Tahun : {{ $c->tahun }}</p>
                    {{-- <p>{{ $education->deskripsi }}</p> --}}
                </div>
                @endforeach
            </div>

        </div>

    </div>
</section>
