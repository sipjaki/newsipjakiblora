<style>
    /* Hover putih & tulisan hitam untuk tombol edit */
    .btn-warning:hover {
        background-color: white !important;
        color: black !important;
        border-color: #ffc107 !important;
    }

    .btn-warning:hover i {
        color: black !important;
    }

.table-wrapper {
  overflow-x: auto;
  border-radius: 15px;
}

.zebra-table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #e5e7eb; /* Tailwind gray-200 */
}

.zebra-table th,
.zebra-table td {
  padding: 12px 16px;
  border: 1px solid #e5e7eb;
  text-align: left;
}

.zebra-table thead {
  background-color: #f9fafb; /* Tailwind gray-50 */
}

.view-icon {
  color: #374151; /* Tailwind gray-700 */
  cursor: pointer;
}

table.zebra-table {
            border-collapse: collapse;
            width: 100%;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            border-radius: 15px;
            overflow: hidden;
        }

        .zebra-table thead {
            background-color: #28a745;
            color: white;
        }

        .zebra-table th,
        .zebra-table td {
            padding: 6px 12px;
            text-align: left;
        }

        .zebra-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .zebra-table tbody tr:nth-child(even) {
            background-color: #dfdddd;
        }

        .zebra-table tbody tr:hover {
            background-color: #ffd100;
        }
</style>


<div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
    <!-- Kontennya -->
    <div class="col-sm-12">
        <h3 class="mb-0" style="font-family: 'Poppins', sans-serif; font-size: 18px;">
        Selamat datang!
        <span style="color: black; font-weight:800;">{{ Auth::user()->name }}</span>
        di Dashboard
        <span style="color: black; font-weight:800;">{{ Auth::user()->statusadmin->statusadmin }}</span>
        Sistem Informasi Pembina Jasa Konstruksi Kab Blora
        </h3>
    </div>


    </div>
    <!--end::Row-->
  </div>
