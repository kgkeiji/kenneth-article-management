<style>
    body {
        display: flex !important;
        flex-direction: column !important;
        min-height: 100vh !important;
    }

    .active {
        color: blue !important;
    }

    .nav-link,
    .btn {
        border-radius: 4px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.1);
    }

    @media (min-width: 992px) {
        .position-lg-absolute {
            position: absolute !important;
        }

        .translate-middle-x-lg {
            transform: translateX(-50%) !important;
        }
    }
</style>