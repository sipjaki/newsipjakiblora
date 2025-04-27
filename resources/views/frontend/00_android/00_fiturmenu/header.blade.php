
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/00_android/output.css" rel="stylesheet">
    <link href="/assets/00_android/output/output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="/assets/00_android/js/flickity.min.css" media="screen">
    <link rel="icon" href="/assets/icon/logokabupatenblora.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>{{$title}}</title>

</head>

<style>
    .fl-table {
        margin-top: 15px;
        width: 100%;
        border-collapse: collapse;
        border-radius: 10px;
        table-layout: fixed;
    }

    .fl-table th, .fl-table td {
        text-align: center;
        padding: 12px 10px;
        vertical-align: middle;
        white-space: normal;
        word-break: break-word;
    }

    /* Spesifik lebar kolom */
    .fl-table th:nth-child(1), .fl-table td:nth-child(1) { width: 50px; }   /* No */
    .fl-table th:nth-child(2), .fl-table td:nth-child(2) { width: 140px; }  /* Kode */
    .fl-table th:nth-child(3), .fl-table td:nth-child(3) { width: 350px; text-align: left; }  /* Pekerjaan */
    .fl-table th:nth-child(4), .fl-table td:nth-child(4) { width: 80px; }   /* Satuan */
    .fl-table th:nth-child(5), .fl-table td:nth-child(5) { width: 60px; }   /* Rp */
    .fl-table th:nth-child(6), .fl-table td:nth-child(6) { width: 150px; text-align: right; } /* Besaran */

    .fl-table thead {
        background-color: #374151;
        color: white;
    }

    .fl-table tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }

    .fl-table tbody tr:nth-child(even) {
        background-color: #e6e6e6;
    }

    .fl-table tbody tr:hover {
        background-color: #d0d0d0;
    }
</style>

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
