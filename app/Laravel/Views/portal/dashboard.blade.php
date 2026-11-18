@extends('portal._layouts.main')

@section('content')
    <div class="d-flex">

        <!-- Main content -->
        <main class="flex-grow-1 p-4 p-lg-5" style="min-width:0">

            <div class="d-flex flex-wrap justify-content-between align-items-start gap-3 mb-4">
                <div>
                    <h1 class="h3 fw-medium mb-1">Dashboard</h1>
                    <div class="small text-primary fw-medium">Wednesday · November 25, 2020 · 3:50:46 PM GMT-5</div>
                </div>
                <div class="bg-white shadow-sm rounded px-3 py-2 small">
                    <i class="bi bi-calendar3 text-primary me-2"></i>November 25, 2020 - November 25, 2020 <i
                        class="bi bi-caret-down-fill small"></i>
                </div>
            </div>

            <!-- Welcome card -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4 p-lg-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h2 class="h4 text-primary fw-medium">Welcome back, your dashboard is ready!</h2>
                            <p class="fs-6">Great job, your affiliate dashboard is ready to go! You can view sales,
                                generate links,
                                prepare coupons, and download affiliate reports using this dashboard.</p>
                            <a href="#" class="btn btn-primary px-3 py-2">Get Started <i
                                    class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                        <div class="col-lg-6 d-none d-lg-flex justify-content-center">
                            <div class="bg-body-tertiary rounded d-flex align-items-center justify-content-center text-primary w-75"
                                style="height:200px">
                                <i class="bi bi-bar-chart-line display-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stat cards -->
            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="card h-100 border-0 border-start border-4 border-primary shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small fw-medium text-primary">Earnings (monthly)</div>
                                <div class="fs-5 fw-bold">$4,390</div>
                                <div class="small text-success"><i class="bi bi-graph-up-arrow"></i> 12%</div>
                            </div>
                            <i class="bi bi-currency-dollar fs-1 text-body-tertiary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card h-100 border-0 border-start border-4 border-secondary shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small fw-medium text-secondary">Average sale price</div>
                                <div class="fs-5 fw-bold">$27.00</div>
                                <div class="small text-danger"><i class="bi bi-graph-down-arrow"></i> 3%</div>
                            </div>
                            <i class="bi bi-tag-fill fs-1 text-body-tertiary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card h-100 border-0 border-start border-4 border-success shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small fw-medium text-success">Clicks</div>
                                <div class="fs-5 fw-bold">11,291</div>
                                <div class="small text-success"><i class="bi bi-graph-up-arrow"></i> 12%</div>
                            </div>
                            <i class="bi bi-cursor-fill fs-1 text-body-tertiary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card h-100 border-0 border-start border-4 border-info shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small fw-medium text-info">Conversion rate</div>
                                <div class="fs-5 fw-bold">1.23%</div>
                                <div class="small text-danger"><i class="bi bi-graph-down-arrow"></i> 1%</div>
                            </div>
                            <i class="bi bi-percent fs-1 text-body-tertiary"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom row -->
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-pie-chart text-primary display-1"></i>
                            <h5 class="fw-medium mt-3">Report generation</h5>
                            <p class="text-body-secondary">Ready to get started? Let us know now! It's time to start
                                building that
                                dashboard you've been waiting to see!</p>
                            <a href="#" class="btn btn-primary btn-sm">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header bg-body-tertiary text-primary fw-medium py-3 px-4">Revenue Summary</div>
                        <div class="card-body">
                            <!-- Replace with Chart.js / ApexCharts if you want a real chart -->
                            <svg viewBox="0 0 640 260" class="w-100" role="img"
                                aria-label="Revenue summary line chart">
                                <g class="text-body-tertiary" stroke="currentColor">
                                    <line x1="70" y1="20" x2="630" y2="20" />
                                    <line x1="70" y1="70" x2="630" y2="70" />
                                    <line x1="70" y1="120" x2="630" y2="120" />
                                    <line x1="70" y1="170" x2="630" y2="170" />
                                    <line x1="70" y1="220" x2="630" y2="220" />
                                </g>
                                <g class="text-body-secondary" fill="currentColor" font-size="12" text-anchor="end">
                                    <text x="60" y="24">$40,000</text><text x="60" y="74">$30,000</text><text x="60"
                                        y="124">$20,000</text>
                                    <text x="60" y="174">$10,000</text><text x="60" y="224">$0</text>
                                </g>
                                <g class="text-primary">
                                    <path
                                        d="M80,220 C95,205 100,175 115,170 S135,200 150,195 S175,150 190,145 S210,175 225,170 S250,125 265,125 S285,160 300,160 S325,120 335,115 S365,125 380,140 S405,100 420,105 S445,120 455,120 S480,95 495,95 S520,100 540,85 S575,55 610,20 L610,220 L80,220Z"
                                        fill="currentColor" fill-opacity=".08" />
                                    <path
                                        d="M80,220 C95,205 100,175 115,170 S135,200 150,195 S175,150 190,145 S210,175 225,170 S250,125 265,125 S285,160 300,160 S325,120 335,115 S365,125 380,140 S405,100 420,105 S445,120 455,120 S480,95 495,95 S520,100 540,85 S575,55 610,20"
                                        fill="none" stroke="currentColor" stroke-width="3" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
@endsection

@section('page-styles')
    <style></style>
@endsection
