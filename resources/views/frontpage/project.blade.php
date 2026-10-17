@php
$projects = [
[
'title' => 'Golf Tee Time Reservation System',
'desc' => 'Browser-based reservation system na may booking flow at schedule view.',
'image' => 'storage/img/projects/golf.jpg',
'tags' => ['Laravel', 'Blade', 'MySQL'],
'url' => '#',
'code' => '#',
],
[
'title' => 'Project Name 2',
'desc' => 'Maikling description kung ano ang ginawa mo at anong problema ang sinolve nito.',
'image' => 'storage/img/projects/project2.jpg',
'tags' => ['Laravel', 'JavaScript', 'Bootstrap'],
'url' => '#',
'code' => '#',
],
[
'title' => 'Project Name 3',
'desc' => 'Maikling description kung ano ang ginawa mo at anong problema ang sinolve nito.',
'image' => 'storage/img/projects/project3.jpg',
'tags' => ['PHP', 'Blade', 'MySQL'],
'url' => '#',
'code' => '#',
],
];
@endphp

<section id="projects" class="fk-projects">
    <div class="fk-projects__glow"></div>

    <div class="container position-relative py-5">
        <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-5 pt-4">
            <div data-aos="fade-right">
                <p class="fk-projects__eyebrow text-uppercase fw-semibold mb-2">My Work</p>
                <h2 class="fk-projects__title fw-bold text-white mb-2">
                    Featured <span class="fk-projects__accent">Projects</span>
                </h2>
                <p class="fk-projects__subtitle mb-0">
                    Ilan sa mga ginawa ko para sa personal projects at clients.
                </p>
            </div>
            <a href="#" class="btn fk-projects__all" data-aos="fade-left">View All Projects</a>
        </div>

        <div class="row g-4">
            @foreach ($projects as $project)
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <article class="fk-projects__card h-100">
                    <div class="fk-projects__thumb">
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" loading="lazy"
                            onerror="this.style.display='none'">
                        <div class="fk-projects__links">
                            <a href="{{ $project['url'] }}" aria-label="Live demo"><i
                                    class="bi bi-box-arrow-up-right"></i></a>
                            <a href="{{ $project['code'] }}" aria-label="Source code"><i class="bi bi-github"></i></a>
                        </div>
                    </div>

                    <div class="fk-projects__body">
                        <h3 class="fk-projects__name">{{ $project['title'] }}</h3>
                        <p class="fk-projects__desc">{{ $project['desc'] }}</p>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            @foreach ($project['tags'] as $tag)
                            <span class="fk-projects__tag">{{ $tag }}</span>
                            @endforeach
                        </div>

                        <a href="{{ $project['url'] }}" class="fk-projects__more">
                            View Project <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>