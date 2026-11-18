@extends('portal._layouts.main')

@section('content')
    <div class="d-flex">

        <!-- Main content -->
        <main class="flex-grow-1 p-4 p-lg-5" style="min-width:0">

            <!-- Page Header -->
            <div class="d-flex flex-wrap justify-content-between align-items-start gap-3 mb-4">
                <div>
                    <h1 class="h3 fw-medium mb-1">Dashboard</h1>
                    <div class="small text-primary fw-medium">
                        Wednesday · November 18, 2026
                    </div>
                </div>

                <div class="bg-white shadow-sm rounded px-3 py-2 small">
                    <i class="bi bi-calendar3 text-primary me-2"></i>
                    November 12, 2026 - November 18, 2026
                    <i class="bi bi-caret-down-fill small ms-1"></i>
                </div>
            </div>

            <!-- Welcome Card -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4 p-lg-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h2 class="h4 text-primary fw-medium">
                                Welcome back, ready to share a new story?
                            </h2>

                            <p class="fs-6 text-body-secondary">
                                Keep your content organized and your readers engaged.
                                Create new articles, manage existing publications,
                                and track how your content performs, all in one place.
                            </p>

                            <a href="#" class="btn btn-primary px-3 py-2">
                                Create New Article
                                <i class="bi bi-plus-lg ms-1"></i>
                            </a>
                        </div>

                        <div class="col-lg-6 d-none d-lg-flex justify-content-center">
                            <div class="bg-body-tertiary rounded d-flex align-items-center justify-content-center text-primary w-75"
                                style="height:200px">
                                <i class="bi bi-journal-richtext display-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="row g-4 mb-4">

                <!-- Total Articles -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card h-100 border-0 border-start border-4 border-primary shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small fw-medium text-primary">Total Articles</div>
                                <div class="fs-5 fw-bold">48</div>
                                <div class="small text-success">
                                    <i class="bi bi-graph-up-arrow"></i> 6 new this month
                                </div>
                            </div>
                            <i class="bi bi-journal-text fs-1 text-body-tertiary"></i>
                        </div>
                    </div>
                </div>

                <!-- Published Articles -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card h-100 border-0 border-start border-4 border-success shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small fw-medium text-success">Published</div>
                                <div class="fs-5 fw-bold">32</div>
                                <div class="small text-success">
                                    <i class="bi bi-check-circle"></i> Live articles
                                </div>
                            </div>
                            <i class="bi bi-file-earmark-check fs-1 text-body-tertiary"></i>
                        </div>
                    </div>
                </div>

                <!-- Draft Articles -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card h-100 border-0 border-start border-4 border-warning shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small fw-medium text-warning">Drafts</div>
                                <div class="fs-5 fw-bold">8</div>
                                <div class="small text-body-secondary">
                                    Awaiting publication
                                </div>
                            </div>
                            <i class="bi bi-file-earmark-text fs-1 text-body-tertiary"></i>
                        </div>
                    </div>
                </div>

                <!-- Total Views -->
                <div class="col-sm-6 col-xl-3">
                    <div class="card h-100 border-0 border-start border-4 border-info shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small fw-medium text-info">Total Views</div>
                                <div class="fs-5 fw-bold">12,840</div>
                                <div class="small text-success">
                                    <i class="bi bi-graph-up-arrow"></i> 18% this week
                                </div>
                            </div>
                            <i class="bi bi-eye fs-1 text-body-tertiary"></i>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Row -->
            <div class="row g-4">

                <!-- Content Overview -->
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header bg-body-tertiary text-primary fw-medium py-3 px-4">
                            Content Overview
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center mb-4">
                                <i class="bi bi-collection text-primary display-1"></i>
                                <h5 class="fw-medium mt-3">Your Content at a Glance</h5>
                                <p class="text-body-secondary">
                                    Keep track of your articles and make sure
                                    your content is always up to date.
                                </p>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <span class="small text-body-secondary">Published Articles</span>
                                <span class="small fw-semibold">32 / 48</span>
                            </div>

                            <div class="progress mb-3" style="height: 8px;">
                                <div class="progress-bar bg-primary" style="width: 66.67%"></div>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <span class="small text-body-secondary">Draft Articles</span>
                                <span class="small fw-semibold">8 / 48</span>
                            </div>

                            <div class="progress mb-3" style="height: 8px;">
                                <div class="progress-bar bg-warning" style="width: 16.67%"></div>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <span class="small text-body-secondary">Archived Articles</span>
                                <span class="small fw-semibold">8 / 48</span>
                            </div>

                            <div class="progress mb-4" style="height: 8px;">
                                <div class="progress-bar bg-secondary" style="width: 16.67%"></div>
                            </div>

                            <a href="#" class="btn btn-primary btn-sm w-100">
                                Manage Articles
                                <i class="bi bi-arrow-right ms-1"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <!-- Article Performance Chart -->
                <div class="col-lg-8">
                    <div class="card h-100 border-0 shadow-sm">

                        <div
                            class="card-header bg-body-tertiary text-primary fw-medium py-3 px-4 d-flex justify-content-between align-items-center">
                            <span>Article Performance</span>
                            <span class="small text-body-secondary fw-normal">
                                Last 7 Days
                            </span>
                        </div>

                        <div class="card-body">

                            <div class="mb-3">
                                <div class="fs-4 fw-bold">12,840</div>
                                <div class="small text-body-secondary">
                                    Total article views
                                    <span class="text-success ms-1">
                                        <i class="bi bi-arrow-up"></i> 18%
                                    </span>
                                </div>
                            </div>

                            <!-- Sample Article Views Chart -->
                            <svg viewBox="0 0 640 260" class="w-100" role="img"
                                aria-label="Article views over the last seven days">

                                <!-- Grid Lines -->
                                <g class="text-body-tertiary" stroke="currentColor" stroke-opacity=".3">
                                    <line x1="70" y1="20" x2="630" y2="20" />
                                    <line x1="70" y1="70" x2="630" y2="70" />
                                    <line x1="70" y1="120" x2="630" y2="120" />
                                    <line x1="70" y1="170" x2="630" y2="170" />
                                    <line x1="70" y1="220" x2="630" y2="220" />
                                </g>

                                <!-- Y Axis Labels -->
                                <g class="text-body-secondary" fill="currentColor" font-size="12" text-anchor="end">
                                    <text x="60" y="24">4,000</text>
                                    <text x="60" y="74">3,000</text>
                                    <text x="60" y="124">2,000</text>
                                    <text x="60" y="174">1,000</text>
                                    <text x="60" y="224">0</text>
                                </g>

                                <!-- X Axis Labels -->
                                <g class="text-body-secondary" fill="currentColor" font-size="12" text-anchor="middle">
                                    <text x="80" y="245">Thu</text>
                                    <text x="170" y="245">Fri</text>
                                    <text x="260" y="245">Sat</text>
                                    <text x="350" y="245">Sun</text>
                                    <text x="440" y="245">Mon</text>
                                    <text x="530" y="245">Tue</text>
                                    <text x="610" y="245">Wed</text>
                                </g>

                                <!-- Chart Area -->
                                <g class="text-primary">
                                    <path
                                        d="M80,175 C110,165 140,155 170,160 S230,130 260,140 S320,115 350,120 S410,95 440,105 S500,65 530,80 S580,45 610,35 L610,220 L80,220Z"
                                        fill="currentColor" fill-opacity=".08" />

                                    <path
                                        d="M80,175 C110,165 140,155 170,160 S230,130 260,140 S320,115 350,120 S410,95 440,105 S500,65 530,80 S580,45 610,35"
                                        fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" />

                                    <!-- Data Points -->
                                    <g fill="currentColor">
                                        <circle cx="80" cy="175" r="4" />
                                        <circle cx="170" cy="160" r="4" />
                                        <circle cx="260" cy="140" r="4" />
                                        <circle cx="350" cy="120" r="4" />
                                        <circle cx="440" cy="105" r="4" />
                                        <circle cx="530" cy="80" r="4" />
                                        <circle cx="610" cy="35" r="4" />
                                    </g>
                                </g>
                            </svg>

                            <div class="small text-body-secondary text-center mt-2">
                                Sample data showing daily article views.
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </main>
    </div>
@endsection

@section('page-styles')
    <style>
        .card {
            transition: box-shadow .2s ease;
        }

        .card:hover {
            box-shadow: 0 .25rem 1rem rgba(0, 0, 0, .08) !important;
        }
    </style>
@endsection
