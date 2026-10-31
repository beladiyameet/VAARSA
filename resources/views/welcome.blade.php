<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VAARSA — Organic Living Redefined</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light text-dark">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase tracking-wider" href="#">
                🌿 VAARSA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#vaarsaNavbar" aria-controls="vaarsaNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="vaarsaNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#system-status">System Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Architecture</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="py-5 bg-white border-bottom shadow-sm">
        <div class="container py-4 text-center">
            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-semibold mb-3">
                Phase 2: Initial Application Setup Complete
            </span>
            <h1 class="display-4 fw-bold text-dark mt-2 mb-3">
                Welcome to <span class="text-success">VAARSA</span>
            </h1>
            <p class="lead text-muted col-lg-8 mx-auto mb-4">
                Single-Vendor Organic E-Commerce Platform engineered on Laravel 13, PostgreSQL, and Bootstrap 5 with Enterprise Modular Monolith Architecture.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#system-status" class="btn btn-success btn-lg px-4 shadow-sm">Verify Environment</a>
                <a href="http://vaarsa.test" class="btn btn-outline-secondary btn-lg px-4">Local Domain (vaarsa.test)</a>
            </div>
        </div>
    </header>

    <!-- System Status Section -->
    <main class="container my-5" id="system-status">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="fs-1 text-primary mb-2">⚡</div>
                        <h5 class="card-title fw-bold">Framework</h5>
                        <p class="card-text text-muted mb-2">Laravel Framework</p>
                        <span class="badge bg-primary px-3 py-2 rounded-pill">{{ app()->version() }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="fs-1 text-info mb-2">🐘</div>
                        <h5 class="card-title fw-bold">Runtime</h5>
                        <p class="card-text text-muted mb-2">PHP Engine</p>
                        <span class="badge bg-info text-dark px-3 py-2 rounded-pill">PHP {{ PHP_VERSION }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="fs-1 text-secondary mb-2">🐘</div>
                        <h5 class="card-title fw-bold">Database</h5>
                        <p class="card-text text-muted mb-2">Primary Store</p>
                        <span class="badge bg-secondary px-3 py-2 rounded-pill">PostgreSQL 18</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="fs-1 text-success mb-2">🎨</div>
                        <h5 class="card-title fw-bold">Frontend UI</h5>
                        <p class="card-text text-muted mb-2">Design System</p>
                        <span class="badge bg-success px-3 py-2 rounded-pill">Bootstrap 5 + Vite</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Architectural Highlights -->
        <div class="card border-0 shadow-sm mt-5" id="features">
            <div class="card-header bg-white py-3 border-bottom">
                <h5 class="mb-0 fw-bold text-dark">System Readiness Verification</h5>
            </div>
            <div class="card-body p-4">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded border">
                            <h6 class="fw-bold text-success mb-1">✔ Strict Single-Vendor Topology</h6>
                            <p class="text-muted small mb-0">Exactly two authenticated roles: Customer and Administrator. Zero seller marketplace clutter.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded border">
                            <h6 class="fw-bold text-success mb-1">✔ High-Performance Asset Pipeline</h6>
                            <p class="text-muted small mb-0">Vite 8 compiler with SCSS preprocessor for Bootstrap 5 and modular ES scripts.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded border">
                            <h6 class="fw-bold text-success mb-1">✔ Laravel Herd Local Domain</h6>
                            <p class="text-muted small mb-0">Automated Nginx reverse proxy serving directly at <code class="text-dark">http://vaarsa.test</code>.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded border">
                            <h6 class="fw-bold text-success mb-1">✔ Strict Data Integrity Architecture</h6>
                            <p class="text-muted small mb-0">Designed for PostgreSQL 18 with explicit row-level locking, idempotent webhooks, and audit logs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-top py-4 text-center text-muted small">
        <div class="container">
            <p class="mb-1">&copy; {{ date('Y') }} VAARSA — Organic Living Redefined. All rights reserved.</p>
            <p class="mb-0">Powered by Laravel 13 &bull; Modular Monolith Architecture</p>
        </div>
    </footer>
</body>
</html>
