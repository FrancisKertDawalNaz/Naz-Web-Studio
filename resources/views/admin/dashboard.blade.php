@include('admin.partials.__header')
@include('admin.partials.__nav')

<main id="main" class="main dashboard">

    <div class="pagetitle">
        <h1>Dashboard Overview</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <hr>

    <section class="section dashboard">
        <div class="cp">

            <!-- Banner -->
            <div class="cp-banner">
                <div>
                    <h2>Juan Dela Cruz</h2>
                    <p>Full-stack web developer. Portfolio last updated October 15, 2026.</p>
                </div>
                <dl class="cp-banner__meta">
                    <div>
                        <dt>Availability</dt>
                        <dd>Open for projects</dd>
                    </div>
                    <div>
                        <dt>Active engagements</dt>
                        <dd>3</dd>
                    </div>
                </dl>
            </div>

            <!-- KPIs -->
            <div class="cp-kpis">
                <div class="cp-kpi">
                    <div class="cp-kpi__label">Total projects</div>
                    <div class="cp-kpi__value">12</div>
                    <div class="cp-kpi__delta">+2 this month</div>
                </div>
                <div class="cp-kpi">
                    <div class="cp-kpi__label">Clients served</div>
                    <div class="cp-kpi__value">9</div>
                    <div class="cp-kpi__delta cp-kpi__delta--flat">No change</div>
                </div>
                <div class="cp-kpi">
                    <div class="cp-kpi__label">Open inquiries</div>
                    <div class="cp-kpi__value">5</div>
                    <div class="cp-kpi__delta cp-kpi__delta--alert">2 awaiting reply</div>
                </div>
                <div class="cp-kpi">
                    <div class="cp-kpi__label">Portfolio visits</div>
                    <div class="cp-kpi__value">1,284</div>
                    <div class="cp-kpi__delta">+9% vs last week</div>
                </div>
            </div>

            <div class="cp-grid">

                <!-- Main column -->
                <div class="cp-col">

                    <section class="cp-panel" aria-labelledby="cp-projects-title">
                        <div class="cp-panel__head">
                            <h3 id="cp-projects-title">Project register</h3>
                            <a href="#">View all</a>
                        </div>
                        <div class="cp-table-wrap">
                            <table class="cp-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Project</th>
                                        <th scope="col">Client</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Updated</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Barangay Services Portal</strong><small>Laravel, MySQL</small>
                                        </td>
                                        <td>Local government unit</td>
                                        <td><span class="cp-tag cp-tag--live">Live</span></td>
                                        <td>Oct 12, 2026</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Cafe Ordering Website</strong><small>Laravel, Livewire</small>
                                        </td>
                                        <td>Retail business</td>
                                        <td><span class="cp-tag cp-tag--wip">In progress</span></td>
                                        <td>Oct 10, 2026</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Inventory Tracker</strong><small>PHP, jQuery</small></td>
                                        <td>Trading company</td>
                                        <td><span class="cp-tag cp-tag--live">Live</span></td>
                                        <td>Sep 28, 2026</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Photography Showcase</strong><small>HTML, CSS</small></td>
                                        <td>Freelance photographer</td>
                                        <td><span class="cp-tag cp-tag--hold">On hold</span></td>
                                        <td>Sep 02, 2026</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="cp-panel" aria-labelledby="cp-skills-title">
                        <div class="cp-panel__head">
                            <h3 id="cp-skills-title">Core competencies</h3>
                            <a href="#">Manage</a>
                        </div>
                        <div class="cp-panel__body">
                            <ul class="cp-skills">
                                <li>
                                    <span>Laravel</span><span>Advanced</span>
                                    <div class="cp-bar" role="img" aria-label="Laravel, 90 percent"><i
                                            style="--level:90%"></i></div>
                                </li>
                                <li>
                                    <span>HTML and CSS</span><span>Advanced</span>
                                    <div class="cp-bar" role="img" aria-label="HTML and CSS, 85 percent"><i
                                            style="--level:85%"></i></div>
                                </li>
                                <li>
                                    <span>MySQL</span><span>Proficient</span>
                                    <div class="cp-bar" role="img" aria-label="MySQL, 75 percent"><i
                                            style="--level:75%"></i></div>
                                </li>
                                <li>
                                    <span>JavaScript</span><span>Proficient</span>
                                    <div class="cp-bar" role="img" aria-label="JavaScript, 70 percent"><i
                                            style="--level:70%"></i></div>
                                </li>
                            </ul>
                        </div>
                    </section>

                </div>

                <!-- Side column -->
                <div class="cp-col">

                    <section class="cp-panel" aria-labelledby="cp-links-title">
                        <div class="cp-panel__head">
                            <h3 id="cp-links-title">Quick links</h3>
                        </div>
                        <div class="cp-panel__body">
                            <ul class="cp-links">
                                <li><a href="#">Add a project</a></li>
                                <li><a href="#">Add a skill</a></li>
                                <li><a href="#">Edit profile</a></li>
                                <li><a href="#">Upload resume</a></li>
                            </ul>
                        </div>
                    </section>

                    <section class="cp-panel" aria-labelledby="cp-log-title">
                        <div class="cp-panel__head">
                            <h3 id="cp-log-title">Activity log</h3>
                        </div>
                        <div class="cp-panel__body">
                            <ul class="cp-log">
                                <li><time>Today</time><span>New inquiry received from a client.</span></li>
                                <li><time>Oct 16</time><span>Barangay Services Portal marked as live.</span></li>
                                <li><time>Oct 14</time><span>Resume updated.</span></li>
                                <li><time>Oct 10</time><span>Skill "Livewire" added.</span></li>
                            </ul>
                        </div>
                    </section>

                </div>
            </div>

        </div>
    </section>

</main>

@include('admin.partials.__footer')