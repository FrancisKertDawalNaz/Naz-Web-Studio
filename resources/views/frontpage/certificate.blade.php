@php
$certificates = [
[
'title' => 'Certificate Title 1',
'issuer' => 'Issuing Organization',
'date' => 'March 2025',
'image' => 'storage/img/certificates/cert1.jpg',
'url' => '#', // credential link, gawing null kung wala
],
[
'title' => 'Certificate Title 2',
'issuer' => 'Issuing Organization',
'date' => 'January 2025',
'image' => 'storage/img/certificates/cert2.jpg',
'url' => null,
],
[
'title' => 'Certificate Title 3',
'issuer' => 'Issuing Organization',
'date' => 'October 2024',
'image' => 'storage/img/certificates/cert3.jpg',
'url' => '#',
],
];
@endphp

<section id="certificates" class="fk-certificates">
    <div class="fk-certificates__glow"></div>

    <div class="container position-relative py-5">
        <div class="text-center mb-5 pt-4">
            <p class="fk-certificates__eyebrow text-uppercase fw-semibold mb-2">Achievements</p>
            <h2 class="fk-certificates__title fw-bold text-white mb-2">
                My <span class="fk-certificates__accent">Certificates</span>
            </h2>
            <p class="fk-certificates__subtitle mx-auto mb-0">
                Mga training at certifications na nagpalakas ng skills ko bilang developer.
            </p>
        </div>

        <div class="row g-4">
            @foreach ($certificates as $cert)
            <div class="col-md-6 col-lg-4">
                <article class="fk-certificates__card h-100">
                    <button type="button" class="fk-certificates__thumb" data-bs-toggle="modal"
                        data-bs-target="#fkCertModal" data-img="{{ asset($cert['image']) }}"
                        data-title="{{ $cert['title'] }}">
                        <img src="{{ asset($cert['image']) }}" alt="{{ $cert['title'] }}" loading="lazy"
                            onerror="this.style.display='none'">
                        <span class="fk-certificates__zoom"><i class="bi bi-zoom-in"></i></span>
                    </button>

                    <div class="fk-certificates__body">
                        <h3 class="fk-certificates__name">{{ $cert['title'] }}</h3>
                        <p class="fk-certificates__issuer mb-1">
                            <i class="bi bi-patch-check-fill me-1"></i>{{ $cert['issuer'] }}
                        </p>
                        <p class="fk-certificates__date mb-3">
                            <i class="bi bi-calendar3 me-1"></i>{{ $cert['date'] }}
                        </p>

                        @if ($cert['url'])
                        <a href="{{ $cert['url'] }}" target="_blank" rel="noopener" class="fk-certificates__more">
                            Show Credential <i class="bi bi-box-arrow-up-right ms-1"></i>
                        </a>
                        @endif
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>

    {{-- modal para sa full image --}}
    <div class="modal fade" id="fkCertModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content fk-certificates__modal">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-white" id="fkCertModalTitle"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <img id="fkCertModalImg" class="img-fluid rounded w-100" src="" alt="">
                </div>
            </div>
        </div>
    </div>
</section>