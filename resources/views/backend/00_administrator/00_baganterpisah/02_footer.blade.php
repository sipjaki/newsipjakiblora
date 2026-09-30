<!--begin::Footer-->
<footer class="app-footer d-flex justify-content-center align-items-center">
    <!--begin::Copyright-->
    <strong class="footer-copyright">
        <img src="/assets/icon/logokabupatenblora.png" alt="Logo Blora" width="20">
        <img src="/assets/icon/pupr.png" alt="Logo PUPR" width="20">
        &copy; Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora
        Provinsi Jawa Tengah &nbsp; 2025 | Built and Deployed By
        <a href="https://wa.me/6281321455855" target="_blank" class="footer-link">
            CV. Angkasa Raya Teknik
        </a>.
    </strong>
    <!--end::Copyright-->
</footer>
<!--end::Footer-->

    </div>
    <!--end::App Wrapper-->

<!--begin::Script-->
<!--begin::Third Party Plugin(OverlayScrollbars)-->
<script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
    integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
    crossorigin="anonymous"
></script>
<!--end::Third Party Plugin(OverlayScrollbars)-->

<!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)-->

<!--begin::Required Plugin(Bootstrap 5)-->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"
></script>
<!--end::Required Plugin(Bootstrap 5)-->

<!--begin::Required Plugin(AdminLTE)-->
<script src="/assets/00_administrator/dist/js/adminlte.js"></script>
<!--end::Required Plugin(AdminLTE)-->

<!--begin::OverlayScrollbars Configure-->
<script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
    };

    document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            });
        }
    });
</script>
<!--end::OverlayScrollbars Configure-->

<!--begin::SortableJS-->
<script
    src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
    integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ="
    crossorigin="anonymous"
></script>
<script>
    const connectedSortables = document.querySelectorAll('.connectedSortable');
    connectedSortables.forEach((connectedSortable) => {
        new Sortable(connectedSortable, {
            group: 'shared',
            handle: '.card-header',
        });
    });

    const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
    cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = 'move';
    });
</script>
<!--end::SortableJS-->

<!--begin::ApexCharts-->
<script
    src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
    integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
    crossorigin="anonymous"
></script>
<script>
    /* NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
       IT'S ALL JUST JUNK FOR DEMO */

    /* ---------- Revenue Chart ---------- */
    const sales_chart_options = {
        series: [
            { name: 'Digital Goods', data: [28, 48, 40, 19, 86, 27, 90] },
            { name: 'Electronics',   data: [65, 59, 80, 81, 56, 55, 40] },
        ],
        chart: {
            height: 300,
            type: 'area',
            toolbar: { show: false },
        },
        legend: { show: false },
        colors: ['#0d6efd', '#20c997'],
        dataLabels: { enabled: false },
        stroke: { curve: 'smooth' },
        xaxis: {
            type: 'datetime',
            categories: [
                '2023-01-01', '2023-02-01', '2023-03-01', '2023-04-01',
                '2023-05-01', '2023-06-01', '2023-07-01',
            ],
        },
        tooltip: { x: { format: 'MMMM yyyy' } },
    };

    const sales_chart = new ApexCharts(
        document.querySelector('#revenue-chart'),
        sales_chart_options,
    );
    sales_chart.render();
</script>
<!--end::ApexCharts-->

<!--begin::jsVectorMap-->
<script
    src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
    integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y="
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
    integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY="
    crossorigin="anonymous"
></script>
<script>
    const visitorsData = {
        US: 398, SA: 400, CA: 1000, DE: 500, FR: 760,
        CN: 300, AU: 700, BR: 600, IN: 800, GB: 320, RU: 3000,
    };

    const map = new jsVectorMap({
        selector: '#world-map',
        map: 'world',
    });

    /* ---------- Sparklines ---------- */
    const sparklineConfig = (data) => ({
        series: [{ data }],
        chart: {
            type: 'area',
            height: 50,
            sparkline: { enabled: true },
        },
        stroke: { curve: 'straight' },
        fill: { opacity: 0.3 },
        yaxis: { min: 0 },
        colors: ['#DCE6EC'],
    });

    const sparkline1 = new ApexCharts(
        document.querySelector('#sparkline-1'),
        sparklineConfig([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021]),
    );
    sparkline1.render();

    const sparkline2 = new ApexCharts(
        document.querySelector('#sparkline-2'),
        sparklineConfig([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921]),
    );
    sparkline2.render();

    const sparkline3 = new ApexCharts(
        document.querySelector('#sparkline-3'),
        sparklineConfig([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21]),
    );
    sparkline3.render();
</script>
<!--end::jsVectorMap-->

<!--end::Script-->
</body>
<!--end::Body-->
</html>
